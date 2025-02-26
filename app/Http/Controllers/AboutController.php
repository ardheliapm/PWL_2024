<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $nama = "Ardhelia Putri Maharani";
        $nim = "2341760124";
        return "Nama : $nama NIM: $nim";
    }

}

