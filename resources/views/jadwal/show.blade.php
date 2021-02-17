@extends('layout.main')
@section('title', 'Absensi Mahasiswa')
@section('content')

<div class="card">
    <div class="card-body">
    <h3>Id :{{$maha['id']}}</h3>
        <h3>jadwal :{{$jadw['jadwal']}}</h3>
        <h3>Matakuliah :{{$jadw['matakuliah_id']}}</h3>
    </div>
</div>
@endsection