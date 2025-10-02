<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Post;    

class Mycontroller extends Controller
{
    public function hello()
    {
        $nama = "Andra";
        $umur = "16";

        return view('hello', compact('nama','umur'));
    }

    public function greeting()

    $data = [
        ['nama' => 'andra', 'kelas' => 'XI RPL 3'],
        ['nama' => 'olivenca', 'kelas' => 'XI RPL 3'],
        ['nama' => 'putra', 'kelas' => 'XI RPL 3'],
    ];
}