<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calculate extends Controller
{
    public function Calculate($number1, $number2){
        $c = $number1 + $number2;
        return view('Cal')->with('c', $c);
    }
    
}
