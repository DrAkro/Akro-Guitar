<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $items = Item::orderBy('id', 'desc')
                ->where('type', 'like', "%$search%")
                ->get();
        return view('items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemRequest $request)
    {
      $photo = $request->file('photo');
$path = $photo->store('items', 'public');

// Tambahkan path file ke dalam data yang akan disimpan ke database
Item::create([
    'name' => $request->name, 
    'description' => $request->description,
    'type' => $request->type,
    'price' => $request->price,
    'stock' => $request->stock,
    'photo' => $path, 
]);

// Redirect dengan pesan sukses
return redirect()->route('items.index')->with('success', 'Item created successfully.');

        
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        // Memeriksa apakah ada foto baru yang diunggah
        if ($request->hasFile('photo')) {
            // Hapus foto lama jika ada
            if ($item->foto && file_exists(public_path('storage/' . $item->photo))) {
                unlink(public_path('storage/' . $item->photo));
            }
    
            // Simpan foto baru
            $path = $request->file('photo')->store('img', 'public');
            $item->photo = $path; // Simpan path foto baru ke database
        }
    
        // Update item lainnya
        $item->update($request->except('photo'));
    
        return redirect()->route('items.index')->with('success', 'Item updated successfully.');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        try{
            $item->delete();
            return redirect()->route('items.index')->with('success', 'Item deleted successfully.');
        }catch(Exception $e){
            return redirect()->route('items.index')->with('error', 'Failed to delete item. It may be referenced by other records.');
        }
    }
}