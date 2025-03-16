<?php

namespace App\Http\Controllers;
use App\Models\planets;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index()
    {
        $post = planets::first(); // o findOrFail(1) si buscas por id
        return view('layout.home', compact('post'));
    }

   
    //
}
