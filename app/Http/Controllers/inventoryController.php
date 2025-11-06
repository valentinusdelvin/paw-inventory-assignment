<?php

namespace App\Http\Controllers;

use App\Models\inventory;
use Illuminate\Http\Request;

class inventoryController extends Controller
{
    public function index()
    {
        $inventories = inventory::all();
        return view('inventory.index')->with('inventories', $inventories);
    }
}
