<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Products extends Controller
{
    public function sum()
    {
        $a = 12;
        return compact('title', 'a');
    }
}
