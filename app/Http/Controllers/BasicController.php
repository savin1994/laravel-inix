<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function index()
    {
        return view('home2');
    }

    public function about()
    {
        return view('about', [
            "name" => "Bank Jambi" ,
            "email" => "bankjambi.co.id" ,
            "image" => "logo.svg"
        ]);

    }
    public function service()
    {
        return view('service');
    }
}
