<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function index() {
        return view('user.riwayat.index');
    }
    
    public function kosong() {
        return view('user.riwayat.kosong');
    }
}
