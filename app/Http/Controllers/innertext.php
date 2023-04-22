<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class innertext extends Controller
{
    public function hello()
    {
        echo "This is text of hello function in innertext at controller";
    }
    public function goodnight()
    {
        $title = "This is title";
        $abc = "This is abc";
        // return view('innertext')->with('title', $title);
        // return view('innertext')->with([
        //     'title' => $title,
        //     'abc'=> $abc
        // ]);

        $arr = [
            'title' => $title,
            'abc' => $abc
        ];
        // return view('innertext')->with('arr', $arr);
        return view('innertext', ['arr' => $arr]);
    }
}
