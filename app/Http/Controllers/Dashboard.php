<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function Index() {
        
        return view('index');
    }

    public function contact() {
        
        return view('contact');
    }

    public function mobil() {
        
        return view('mobil');
    }

    public function detail() {
        
        return view('detail');
    }

    public function pemesanan() {
        
        return view('pemesanan');
    }
}
