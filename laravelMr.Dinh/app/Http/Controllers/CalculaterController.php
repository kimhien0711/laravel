<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class CalculaterController extends Controller{
    public function hello(){
        $hello = 'Xin chào PNV!';
        $title = 'Đây là tiêu đề';
        $description = 'Đây là dòng mô tả';
        return view('vd')-> with(['hello'=>$hello, 'title'=>$title, 'description'=>$description]);
    }
}