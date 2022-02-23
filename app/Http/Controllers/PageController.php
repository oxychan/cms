<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index() {
        echo "<h1>Selamat Datang</h1>";
    }

    public function about() {
        echo "<h1>Nama : Taufik Anwar</h1>";
        echo "<h1>NIM : 2041720010 </h1>";
    }

    public function articles($id) {
        echo "<h1>Halaman artikel dengan id " . $id . "</h1>";
    }
}
