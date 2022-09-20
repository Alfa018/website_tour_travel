<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;

class DashboardController extends Controller
{
    public function index()
    {
        $paket = DB::table('pakets as p')->count();
        $galeri = DB::table('galeris as g')->count();
        $user = DB::table('users as u')->count();
        $pesan = DB::table('pesans as b')->count();
        return view('admin.dashboard.das', compact('paket', 'galeri', 'user', 'pesan'));
    }

    public function create()
    {
        return view('admin.paket.create');
    }

    public function show()
    {
        $data = Paket::all();
        return view('admin.paket.index', compact('data'));
        // $data = Paket::all();
        // return $data;
    }

    // public function edit(){
    //     return view('admin.paket.edit');
    // }
}
