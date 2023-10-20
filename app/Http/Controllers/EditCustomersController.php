<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditCustomersController extends Controller
{
    public function index(){
        return view('edit-customer.edit_customers');
    }
}
