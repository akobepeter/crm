<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleManagerController extends Controller
{
    //
    public function index() {
        return view('role-manager.role-manager');
    } 
}
