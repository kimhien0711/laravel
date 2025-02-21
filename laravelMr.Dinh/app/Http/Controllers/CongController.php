<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class CongController extends Controller{
    public function sum(){
        return view('tong');
    }
    public function tinhtong(Request $request){
        $tong = $request->soA +$request->soB;
        return view ('tong', compact('tong'));
    }
}