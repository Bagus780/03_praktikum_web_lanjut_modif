<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view(('profile'))
        ->with('nama', 'Mochamad Aditya bagus')
        ->with('jurusan', 'Teknik Informatika')
        ->with('nim', '2041720093')
        ->with('kelas', 'TI - 2H')
        ->with('absen', '18');
    }
}
