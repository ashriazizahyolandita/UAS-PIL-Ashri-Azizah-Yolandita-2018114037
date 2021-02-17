<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matakuliah;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matakuliah = Matakuliah::all();
        return view('matakuliah.index', compact('matakuliah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matakuliah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Matakuliah::create($request->all());
        return redirect('matakuliah')->with('msg','Matakuliah Berhasil di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $matakuliah = Matakuliah::all();
        return view('matakuliah.show', compact('matakuliah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matakuliah= Matakuliah::where('matakuliah', $matakuliah)->first();
        return view ('matakuliah.edit', ['matakuliah' => $matakuliah]);
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
            'nama_matakuliah' => 'required',
            'sks' => 'required',
             

        ]);

        $M = Matakuliah::find($id)->update([
            'id' => $request->id,
            'nama_matakuliah' => $request->nama_matakuliah,
            'sks'=> $request->sks,
    

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
        Matakuliah::find($id)->delete();
        return redirect ('/');
    }
}
