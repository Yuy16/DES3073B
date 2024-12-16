<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {   
        $data['name'] = 'Fitriah';
        $data['class'] = 'Meta';
        return view('home', $data);
    }
}
