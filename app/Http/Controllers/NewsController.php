<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
        echo "<h1>Anda mengakses laman utama dari News</h1>";
    }

    public function view($param) {
        $str = "<h1>Anda mengakses berita dengan judul ";
        if($param === "educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19") {
            $str .= "Educa Studio Berbagi Untuk Warga Sekitar Terdampak Covid-19</h1>";
        } else {
            $str = "<h1>Berita dengan judul tersebut tidak ditemukan</h1>";
        }

        echo $str;
    }
}
