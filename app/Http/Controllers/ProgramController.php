<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function view($title) {
        $str = "<h1>Anda Mengakses laman ";
        if($title === "karir") {
            $title = "Karir";
            $str .= $title . "</h1>";
        } else if($title === "magang") {
            $title = "Magang";
            $str .= $title . "</h1>";
        } else if($title === "kunjungan-industri") {
            $title = "Kunjungan Industri";
            $str .= $title . "</h1>";
        } else {
            $str = "<h1>Laman yang anda masukan tidak ditemukan</h1>";
        }
        echo $str;
    }
}
