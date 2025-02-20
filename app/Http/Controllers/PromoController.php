<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;

class PromoController extends Controller
{
    // Menampilkan daftar promo
    public function index()
    {
        $promos = Promo::all();
        return view('admin.promos.index', compact('promos'));
    }

    // Menyimpan promo baru
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:promos|max:255',
            'discount_percentage' => 'required|numeric|min:0|max:100',
        ]);
    
        Promo::create($request->only(['code', 'discount_percentage']));
    
        return redirect()->route('promos.index')->with('success', 'Promo berhasil ditambahkan.');
    }
    
    // Menampilkan modal untuk mengedit promo
    public function edit(Promo $promo)
    {
        return response()->json(['success' => true, 'promo' => $promo]);
    }

    // Memperbarui data promo
    public function update(Request $request, Promo $promo)
    {
        $request->validate([
            'code' => 'required|max:255|unique:promos,code,' . $promo->id,
            'discount_percentage' => 'required|numeric|min:0|max:100',
        ]);

        $promo->update($request->only(['code', 'discount_percentage']));
    
        return redirect()->route('promos.index')->with('success', 'Promo berhasil diubah.');
    }

    // Menghapus promo
    public function destroy(Promo $promo)
    {
        $promo->delete();

        return redirect()->route('promos.index')->with('success', 'Promo berhasil dihapus.');
    }
}
