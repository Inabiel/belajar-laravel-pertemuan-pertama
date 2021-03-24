<?php

namespace App\Http\Controllers;


class PageController extends Controller
{
    public function index() {
        return view('page');
    }

    public function banyaksiswa(){
        return view('siswas');
    }
    public function banyaksiswas(){
        return view('siswas2', [
        "siswa"=>"Nabiel Izzullah Pansuri",
        "nim"=>"19.01.4419","nilai"=>75
        ]);
    }
}
