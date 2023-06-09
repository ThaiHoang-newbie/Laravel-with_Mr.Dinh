<?php

namespace App\Http\Controllers;

use App\Models\bill_detail;
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


    public function getADmin()
    {
        $spAdmin = Products::all();
        return view('Admin', compact('spAdmin'));
    }


    public function getIndexAdmin()
    {
        $product = Products::all();
        return view('Admin')->with(['products' => $product, 'sumSold' => count(bill_detail::all())]);
    }


    public function getAdminAdd()
    {
        return view('formAdd');
    }

    public function postAdminAdd(Request $request)
    {
        $product = new Products();

        if ($request->hasFile('inputImage')) {
            $file = $request->file('inputImage');
            $fileName = $file->getClientOriginalName();
            $file->move('source/image/product', $fileName);
            $product->image = $fileName;
        }

        $product->name = $request->inputName;
        $product->description = $request->inputDescription;
        $product->unit_price = $request->inputPrice;
        $product->promotion_price = $request->inputPromotionPrice;
        $product->unit = $request->inputUnit;
        $product->new = $request->inputNew;
        $product->id_type = $request->inputType;
        $product->save();
        return $this->getIndexAdmin();
    }

    public function postAdminDelete($id)
    {
        $product = Products::find($id);
        $product->delete();
        return $this->getIndexAdmin();
    }
    public function getAdminEdit($id)
    {
        $product = Products::find($id);
        return view('f_edit')->with('product', $product);
    }
    public function postAdminEdit(Request $request)
    {
        $id = $request->editId;
        $product = Products::find($id);

        if ($request->hasFile('editImage')) {
            $file = $request->file('editImage');
            $fileName = $file->getClientOriginalName();
            $file->move('source/image/product', $fileName);
            $product->image = $fileName;
        }

        $product->name = $request->editName;
        $product->description = $request->editDescription;
        $product->unit_price = $request->editPrice;
        $product->promotion_price = $request->editPromotionPrice;
        $product->unit = $request->editUnit;
        $product->new = $request->editNew;
        $product->id_type = $request->editType;
        $product->save();
        return $this->getIndexAdmin();
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









    public function getProduct()
    {
        $products = Products::limit(5)->get();
        return response()->json($products);
    }

    public function addProduct(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'unit_price' => 'required|numeric',
            'image' => 'required',
            'description' => 'required',
        ]);

        $product = new Products();
        $product->name = $validatedData['name'];
        $product->unit_price = $validatedData['unit_price'];
        $product->image = $validatedData['image'];
        $product->description = $validatedData['description'];


        
        try {
            $product->save();
            return response()->json(['message' => 'Product added successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to save product'], 500);
        }
    }
}
