<?php

namespace App\Http\Controllers;

use App\Galeri;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $data = Galeri::all();
        return view('gallery', compact('data'));
    }

    public function create(){
        return view('admin.galeri.create');
    }

    public function store(Request $request){
        $request->file('image')->move(public_path('file/'),$request->file('image')->getClientOriginalName());
        $imge = $request->file('image')->getClientOriginalName();
        
        $galeri = Galeri::create([
            'title' => $request->title,
            'img' =>  $imge,
        ]);
        $galeri->save();
        $data = Galeri::all();
        
        return view('admin.galeri.index', compact('data'));
    }

    public function show(){
        $data = Galeri::all();
        return view('admin.galeri.index', compact('data'));
    }
    
}
