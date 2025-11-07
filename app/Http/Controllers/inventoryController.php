<?php

namespace App\Http\Controllers;

use App\Models\inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class inventoryController extends Controller
{
    public function index()
    {
        $inventories = inventory::all();
        return view('inventory.index')->with('inventories', $inventories);
    }

    public function create()
    {
        return view('inventory.create');
    }

    public function store(Request $request)
    {
        // 1. Validasi data input
        $request->validate([
            'id' => 'required|unique:inventories,inventory_id',
            'name' => 'required|min:3|max:255',
            'amount' => 'required|numeric|min:1',
        ]);
        // 2. Simpan data ke database menggunakan Model
        inventory::create([
            'inventory_id' => $request->id,
            'inventory_name' => $request->name,
            'inventory_amount' => $request->amount,
        ]);
        // 3. Arahkan pengguna kembali ke halaman daftar produk
        return Redirect::route('inventory.index');
    }
}
