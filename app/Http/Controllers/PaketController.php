<?php

namespace App\Http\Controllers;

use App\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pesan;

class PaketController extends Controller
{
    public function index()
    {
        $data = Paket::all();
        return view('paket', compact('data'));
    }

    public function store(Request $request)
    {

        $request->file('file_img')->move(public_path('file/'), $request->file('file_img')->getClientOriginalName());
        $imge = $request->file('file_img')->getClientOriginalName();


        $paket = Paket::create([
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'price' => $request->price,
            'deskripsi' => $request->description,
            'img' =>  $imge,
        ]);
        $paket->save();
        $data = Paket::all();

        return view('admin.paket.index', compact('data'));
    }

    public function show($id)
    {
        $data = Paket::find($id);

        $user_id = Auth::user();
        if ($user_id != null) {
            $user_id = Auth::user()->id;
        } else {
            $user_id = Auth::user();
        }
        $data_pesan = Pesan::where('id_user', $user_id)->latest()->first();
        // dd($data_pesan);
        return view('detail', compact(['data', 'data_pesan']));
    }

    public function edit($id)
    {
        // dd($id);
        $paket = Paket::find($id);
        return view('admin.paket.edit', compact('paket'));
    }

    public function update(Request $request, $id)
    {
        $request->file('file_img')->move(public_path('file/'), $request->file('file_img')->getClientOriginalName());
        $imge = $request->file('file_img')->getClientOriginalName();

        $paket = Paket::find($id);

        $paket->title = $request->title;
        $paket->excerpt = $request->excerpt;
        $paket->price = $request->price;
        $paket->img = $imge;
        $paket->deskripsi = $request->description;
        $paket->save();
        return redirect()->route('paket-index');
    }
}
