<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "<h1>Educastudio</h1>";
        echo "<h1>cs@educastudio.com</h1>";
        echo "<h1>(+62) 298 6031005</h1>";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "<h1>Anda memanggil fungsi create pada controller contact</h1>";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    public function store($name, $email, $msg)
    {
        echo "<h1>Nama : " . $name . "</h1>";
        echo "<h1>Email : " . $email . "</h1>";
        echo "<h1>Pesan : " . $msg . "</h1>";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // echo "<h1>Anda memanggil function show dengan parameter id = " . $id . "</h1>"; 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // echo "<h1>Anda memanggil function edit dengan parameter id = " . $id . "</h1>"; 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // echo "<h1>Anda memanggil function update dengan parameter request = " . $request . " dan id = " . $id . "</h1>"; 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // echo "<h1>Anda memanggil function destroy dengan parameter id = " . $id . "</h1>"; 
    }
}
