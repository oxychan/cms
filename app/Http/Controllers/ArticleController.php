<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index($id)
    {
        echo "<h1>Halaman artikel dengan id " . $id . "</h1>";
    }
}