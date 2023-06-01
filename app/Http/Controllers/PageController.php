<?php

namespace App\Http\Controllers;

use App\Models\slide;
use App\Models\products;
use App\Models\type_products;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex()
    {
        // Slide
        $slide = Slide::all();

        // All pro
        $product = Products::all();

        //New pro
        $new_product = Products::where('new', 1)->get();

        // Type pro
        $type = type_products::all();


        return view('trangchu', compact('slide', 'new_product', 'type', 'product'));
    }

    public function getID(Request $request)
    {
        $sanpham = Products::where('id', $request->id)->first();
        return view('ProDetail', compact('sanpham'));
    }


    // View Product type
    public function getTypeProducts($type)
    {
        // All type products
        $type_pro = type_products::all();


        // A type products
        $typeID = type_products::where('id', $type)->first();


        // Get all products in that type product
        $product = Products::where('id_type', $type)->get();


        // Else
        $product_else = Products::where('id_type', '<>', $type)->get();

        return view('Product_type', compact('type_pro', 'typeID', 'product', 'product_else'));
    }
}
