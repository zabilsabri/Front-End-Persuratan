<?php

namespace App\Http\Controllers\Lurah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('lurah.dashboard.index');
    }
}
