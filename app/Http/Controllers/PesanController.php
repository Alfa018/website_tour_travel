<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesan;
use App\Paket;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $request->id;
        $user_id = Auth::user()->id;
        return view('pesan', compact(['data', 'user_id']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexpesanupload(Request $request)
    {
        $request->file('file_img')->move(public_path('upload-bukti-pembayaran/'), $request->file('file_img')->getClientOriginalName());
        $imge = $request->file('file_img')->getClientOriginalName();

        $pesan =  Pesan::where("id", $request->name)->update([
            'img' =>  $imge,
        ]);
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $pesan = Pesan::create([
            "name" => $request->name,
            "departure" => $request->departure,
            "passenger" => $request->passenger,
            "id_paket" => $request->id_paket,
            "id_user" => $request->id_user,
        ]);
        $pesan->save();
        $data = Pesan::select('id')->latest()->first();

        return view('pesan-bukti', compact('data'));
    }

    public function admin(Request $request)
    {
        $data = DB::table('pesans')
            ->select('pesans.*', 'pakets.title')
            ->join('pakets', 'pakets.id', '=', 'pesans.id_paket')
            ->get();
        return view('admin.pesan.index', compact('data'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pesanbukti()
    {
        $user_id = Auth::user()->id;
        $data = Pesan::where('id_user', $user_id)->select('id')->latest()->first();
        // dd($data->id);
        return view('pesan-bukti', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
