<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return
        [
            "NISN" => 3103119095,
            "Nama" => "Irfan Nur Kholik",
            "Gender" => "Male",
            "Phone" => 681391955800,
            "Kelas" => "XII RPL 3"
        ];
    }

}