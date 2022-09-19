<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;

use function GuzzleHttp\Promise\all;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard.das');
    }

    public function create(){
        return view('admin.paket.create');
    }

    public function show(){
        $data = Paket::all();
        return view('admin.paket.index', compact('data'));
        // $data = Paket::all();
        // return $data;
    }

    // public function edit(){
    //     return view('admin.paket.edit');
    // }
}
