<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    //

    public function index(){
        return view('inventory.inventory');
    }


    public function addNew(){
        return view('inventory.addInventory');
    }
}