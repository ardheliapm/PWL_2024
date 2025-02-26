<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PageController extends Controller
{

    public function index()
    {
        return "Selamat Datang";
    }

    public function about(){
        $nama = "Ardhelia Putri Maharani";
        $nim = "2341760124";
        return "Nama : $nama NIM: $nim";
    }

    public function article($id){
        return "Halaman Artikel dengan ID : $id";
    }
}