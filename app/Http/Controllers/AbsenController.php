<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Absen;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absen = Absen::all();
        return view('absen.index', compact('absen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('absen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Absen::create($request->all());
        return redirect('absen')->with('msg','Data Absen Mahasiswa Berhasil di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $absen = Absen::all();
        return view('absen.show', compact('absen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $absen= Absen::where('absen', $absen)->first();
        return view ('absen.edit', ['absen' => $absen]);
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
        $request->validate([
            'id' => 'required',
            'waktu_absen' => 'required|unique:table_anggota|max:255',
             'matakuliah_id' => 'required',
             'keterangan' => 'required',

        ]);

        $A = Absen::find($id)->update([
            'id' => $request->id,
            'waktu_absen' => $request->waktu_absen,
            'matakuliah_id'=> $request->matakuliah_id,
            'keterangan' =>$request->keterangan,

        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Absen::find($id)->delete();
        return redirect ('/');
    }
}
