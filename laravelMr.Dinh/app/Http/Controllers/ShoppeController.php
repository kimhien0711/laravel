<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppeController extends Controller
{
    public function getIndex(){
        return view('shoppe.content');
    }
}
