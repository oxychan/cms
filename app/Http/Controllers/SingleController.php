<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SingleController extends Controller
{
    public function index()
    {
        return view('single', ["title" => "Single"]);
    }

    public function slug($slug) 
    {
        $data = Product::find($slug);
        return view('single', [
            'title' => 'Single',
            'data' => $data
        ]);
    }
}
