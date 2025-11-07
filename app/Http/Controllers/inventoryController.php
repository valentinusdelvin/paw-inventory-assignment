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

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|unique:inventories,inventory_id',
            'name' => 'required|min:3|max:255',
        ]);

        inventory::create([
            'inventory_id' => $request->id,
            'inventory_name' => $request->name,
        ]);

        return Redirect::route('inventory.index');
    }

    public function delete($id)
    {
        inventory::where('inventory_id', $id)->delete();
        return Redirect::route('inventory.index');
    }
}
