<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return "NIM : 2041720002<br>Nama : Akhmad Ramadani<br>Kelas : TI-2B";
    }

    public function articles($id){
        return "Ini adalah halaman artikel dengan id = " . $id;
    }
}
