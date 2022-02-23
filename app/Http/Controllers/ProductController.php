<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function view($title) {
        $str = "<h1>Anda Mengakses laman ";
        if($title === "marbel-edu-games") {
            $title = "Marbel Edu Games";
            $str .= $title . "</h1>";
        } else if($title === "marbel-and-friends-kids-games") {
            $title = "Marbel And Friends Kids Games";
            $str .= $title . "</h1>";
        } else if($title === "riri-story-books") {
            $title = "Riri Story Books";
            $str .= $title . "</h1>";
        } else if($title === "kolak-kids-songs") {
            $title = "Kolak Kids Songs";
            $str .= $title . "</h1>";
        } else {
            $str = "<h1>Laman yang anda masukan tidak ditemukan</h1>";
        }
        echo $str;
    }
}
