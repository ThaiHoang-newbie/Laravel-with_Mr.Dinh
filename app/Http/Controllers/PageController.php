<?php

namespace App\Http\Controllers;

use App\Models\slide;
use App\Models\products;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex()
    {
        $slide = Slide::all();
        $new_product = Products::where('new', 1)-> get();
        return view('Page', compact('slide', 'new_product'));
    }
    
    public function getID(Request $request)
    {
        $sanpham = Products::where('id', $request->id)->first();
        return view('ProDetail', compact('sanpham'));
    }
}

