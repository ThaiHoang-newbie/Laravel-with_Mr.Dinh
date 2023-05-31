<?php

namespace App\Http\Controllers;

use App\Http\Requests\signupRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;




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



    public function Cal(Request $request)
    {
        $number1 = $request->number1;
        $number2 = $request->number2;
        $c = $number1 + $number2;
        $arr = [
            'a' => $number1,
            'b' => $number2,
            'c' => $c
        ];
        return view('Cal')->with('arr', $arr);
    }


    

    public function Covid_all()
    {
        $response = Http::get('https://api.covid19api.com/summary')->json();
        $countries = $response['Countries'];
        return view('Covid', ['countries' => $countries]);
    }

    public function Covid_arrange_confirm()
    {
        $response = Http::get('https://api.covid19api.com/summary')->json();
        
        $countries = collect($response['Countries'])->sortByDesc('TotalConfirmed');
        
        return view('Covid', ['countries' => $countries]);
    }

    public function Covid_arrange_death()
    {
        $response = Http::get('https://api.covid19api.com/summary')->json();
        
        $countries = collect($response['Countries'])->sortByDesc('TotalDeaths');
        
        return view('Covid', ['countries' => $countries]);
    }


    public function index(){
        return view('Form');
    }
    public function displayInfor(signupRequest $request)
    {
        $user= [
            'username' => $request -> input('username'),
            'email' =>  $request -> input('email'),
            'password' => $request -> input('password'),
            'password_confirmation' => $request -> input('password_confirmation')
        ];
        return view('Form')->with( 'user', $user);
    }
}
