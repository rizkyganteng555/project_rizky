<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function introduce() {
        $data = [
            "nama" =>"rizky m",
            "alamat" =>"bandung",
            "agama" =>"islam",
            "jK" =>"L",
            "hobi" => [
                "belajar", "mengaji",
            ]
            ];
            return view('latihan.perkenalan', compact('data'));
    }
     public function animals() {
        $animal = [
                "Lion", "Crocodile", "Rabbit", "Eagle",

            ];
            return view('latihan.animal', ['hewan' => $animal]);
    }
}
