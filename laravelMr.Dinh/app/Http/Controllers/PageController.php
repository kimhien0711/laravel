<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
class PageController extends Controller
{
    // public function getIndex(){
    //     return view('master');
    // }

    public function getIndex()
    {
        $slide = Slide::all();
        return view('pages.trangchu', compact('slide'));
    }
}
