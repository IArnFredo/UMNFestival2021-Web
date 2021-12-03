<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;
use Illuminate\Support\Facades\Storage;

class Ufest extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        DB::table('open')->insert([
          'Nama' => $request->nama,
          'NIM' => $request->nim,
          'Angkatan' => $request->angkatan,
          'Jurusan' => $request->jurusan,
          'Email' => $request->email,
          'NomorTelp' => $request->phonenumber,
          'IdLine' => $request->idline,
          'Instagram' => $request->instagram,
          'AlamatLengkap' => $request->alamat,
        ]);

        $nama = $request->nama;
        $nim = $request->nim;

        $request->session()->put('nama', $nama);
        $request->session()->put('nim', $nim);
        $request->session()->put('log', 'on');

        $fest = Storage::putFile('Ufest/'.$request->nama, $request->file('umnfestival'));
        $ucare = Storage::putFile('UCare/'.$request->nama,$request->file('ucare_2021'));

        return redirect('/U-Care/Form/Selesai');
    }

    public function final(Request $request)
    {
      $name = $request->session()->get('nama');
      $num = $request->session()->get('nim');

      return view('final')
          ->with('name', $name)
          ->with('num', $num);
      if ($request->session()->has('log')) {

      }
      // }else {
      //   return redirect('/U-Care');
      // }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
