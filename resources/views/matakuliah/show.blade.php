@extends('layout.main')
@section('title', 'Absensi Mahasiswa')
@section('content')

<div class="card">
    <div class="card-body">
    <h3>Id :{{$mata['id']}}</h3>
        <h3>Matakuliah :{{$mata['mata']}}</h3>
      
        <h3>Matakuliah :{{$mata['sks']}}</h3>
    </div>
</div>
@endsection