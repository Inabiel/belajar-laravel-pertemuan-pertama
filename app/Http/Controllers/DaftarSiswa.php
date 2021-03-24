<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarSiswa extends Controller
{
    public function index() {
        return view('home');
    }

    public function prosesRegister(Request $request){
        $validated = $request->validate([
            'angka1' => 'required',
            'angka2' => 'required',
            'operator' => 'required',
        ]);
        $hasil = 0;

        switch($validated["operator"]){
            case "pertambahan":
                $hasil = $validated["angka1"]+$validated["angka2"];
                break;
            case "pengurangan":
                $hasil = $validated["angka1"]-$validated["angka2"];
                break;
            case "perkalian":
                $hasil = $validated["angka1"]*$validated["angka2"];
                break;
            case "pembagian":
                $hasil = $validated["angka1"]/$validated["angka2"];
                break;
        };
        $arr = array(
            "operator"=>$validated["operator"],
            "angka 1"=>$validated["angka1"],
            "angka 2"=>$validated["angka2"],
            "hasil"=>$hasil
        );
        return view('hasil')->with('arr',$arr);
    }
}
