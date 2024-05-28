<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        
        return view('admin.dashboard');
    }

    public function homepageInfo()
    {
        
        return view('admin.homepage');
    }

    public function updateHomepageInfo(Request $request)
    {
        
    }

    public function wisataInfo()
    {
        
        return view('admin.wisata');
    }

    public function updateWisataInfo(Request $request)
    {
        
    }

    public function pemesananInfo()
    {
        
        return view('admin.pemesanan');
    }

    public function updatePemesananInfo(Request $request)
    {
        
    }

    public function laporanPemesanan()
    {
        
        return view('admin.laporan');
    }
}
