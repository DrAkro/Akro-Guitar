<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Item;
use App\Models\customer;
use App\Models\Promo;
use Illuminate\Support\Facades\Storage;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $user = auth()->user(); 
    
        // Cek apakah user yang sedang login adalah admin
        if ($user->hasRole('admin')) {
            // Jika admin, tampilkan semua transaksi dengan filter nama customer
            $transactions = Transaction::whereHas('customers', function ($q) use ($search) {
                $q->where('name', 'like', "%$search%");
            })
            ->orderByRaw("CASE WHEN status = 'pending' THEN 1 ELSE 2 END")
            ->orderBy('id', 'desc')
            ->get();
        } else {
            // Jika bukan admin, hanya tampilkan transaksi milik user yang sedang login
            $transactions = Transaction::whereHas('customers', function ($q) use ($search) {
                $q->where('name', 'like', "%$search%");
            })
            ->where('user_id', $user->id) // Filter hanya untuk transaksi milik user yang sedang login
            ->orderByRaw("CASE WHEN status = 'pending' THEN 1 ELSE 2 END")
            ->orderBy('id', 'desc')
            ->get();
        }
    
        $items = Item::all();
        $customers = User::role('customers')->get();
    
        return view('transactions.index', compact('transactions', 'customers', 'items'));
    }
    



    public function store(StoreTransactionRequest $request)
    {
        $path = $request->file('proof')->store('proofs', 'public');
        $total = 0;
    
        // Cek stok semua item sebelum transaksi dibuat
        foreach ($request->items as $index => $item_id) {
            $item = Item::find($item_id);
            $quantity = $request->quantities[$index] ?? 1;
    
            if (!$item || $item->stock < $quantity) {
                return redirect()->route('transactions.index')->with('error', "Transaksi gagal! Stok tidak mencukupi untuk item '{$item->name}'.");
            }
        }
    
        // Buat transaksi jika stok mencukupi
        $transaction = Transaction::create([
            'proof' => $path,
            'user_id' => $request->user_id,
            'description' => $request->description,
            'transaction_date' => $request->transaction_date,
            'status' => $request->status ?? 'pending',
            'total' => 0, // Akan diperbarui setelah item diproses
        ]);
    
        // Proses setiap item
        foreach ($request->items as $index => $item_id) {
            $item = Item::find($item_id);
            $quantity = $request->quantities[$index] ?? 1;
    
            $item->decrement('stock', $quantity);
            $transaction->items()->attach($item_id, ['quantity' => $quantity]);
            $total += $item->price * $quantity;
        }
    
        // Update total transaksi
        $transaction->update(['total' => $total]);
    
        return redirect()->route('transactions.index')->with('success', 'Transaction created successfully.');
    }
    
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        if ($request->has('promo_code')) {
            $promo = Promo::where('code', $request->promo_code)->where('active', true)->first();
            
            if ($promo) {
                $discount = ($promo->discount_percentage / 100) * $transaction->total;
                $transaction->total -= $discount;
                
                $transaction->promo_code = $request->promo_code;
                $transaction->discount = $discount;
                
                $transaction->update();
                return redirect()->route('transactions.index')->with('success', 'Promo code applied successfully.');
            } else {
                return redirect()->route('transactions.index')->with('error', 'Kode promo tidak valid atau sudah tidak aktif.');
            }
        }
        
        return redirect()->route('transactions.index')->with('error', 'No promo code provided.');
    }
    
    public function applyPromo(Request $request)
{
    $transaction = Transaction::findOrFail($request->transaction_id);

    if ($request->has('promo_code')) {
        $promo = Promo::where('code', $request->promo_code)->where('active', true)->first();

        if ($promo) {
            $discount = ($promo->discount_percentage / 100) * $transaction->total;
            $transaction->total -= $discount;
            $transaction->promo_code = $request->promo_code;
            $transaction->discount = $discount;
            $transaction->save();

            return redirect()->route('transactions.index')->with('success', 'Promo code applied successfully.');
        } else {
            return redirect()->route('transactions.index')->with('error', 'Kode promo tidak valid atau sudah tidak aktif.');
        }
    }

    return redirect()->route('transactions.index')->with('error', 'No promo code provided.');
}




    public function destroy(Transaction $transaction){
        try{
            $transaction->items()->detach();
            if($transaction->proof) {
                Storage::disk('public')->delete($transaction->proof);
            }
            $transaction->delete();
            return redirect()->route('transactions.index')->with('success', 'Transaction deleted successfully.');
        }catch(\Exception $e){
            return redirect()->route('transactions.index')->with('error', 'Failed to delete transaction. Please try again.');
        }
    }
}
