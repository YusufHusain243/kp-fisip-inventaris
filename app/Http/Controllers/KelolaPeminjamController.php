<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelolaPeminjamController extends Controller
{
    public function lihatDaftarPeminjam(){
        return view('KelolaPeminjam.peminjam',[
            "title" => "Kelola Peminjam"
        ]);
    }
}