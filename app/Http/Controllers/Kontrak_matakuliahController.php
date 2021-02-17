<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kontrak_matakuliah;

class Kontrak_matakuliahController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontrak_matakuliah = Kontrak_matakuliah::all();
        return view('kontrak_matakuliah.index', compact('kontrak_matakuliah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kontrak_matakuliah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Jadwal::create($request->all());
        return redirect('kontrak_matakuliah')->with('msg','Data Berhasil di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $kontrak_matakuliah = Kontrak_matakuliah::all();
        return view('kontrak_matakuliah.show', compact('kontrak_matakuliah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $kontrak_matakuliah= Kontrak_matakuliah::where('kontrak_matakuliah', $alamat)->first();
        return view ('kontrak_matakuliah.edit', ['kontrak_matakuliah' => $kontrak_matakuliah]);
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
            'mahasiwa_id' => 'required',
            'semester_id' => 'required',

        ]);

        $M = Jadwal::find($id)->update([
            'mahasiwa_id' => $request->mahasiwa_id,
            'semester_id' => $request->semester_id,

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
        Kontrak_matakuliah::find($id)->delete();
        return redirect ('/');
    }
}