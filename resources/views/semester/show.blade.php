@extends('layout.main')
@section('title', 'Absensi Mahasiswa')
@section('content')

<div class="card">
    <div class="card-body">
    <h3>Id :{{$seme['id']}}</h3>
        <h3>Semester :{{$seme['seme']}}</h3>
      
        <h3>Semester :{{$msemeata['semester']}}</h3>
    </div>
</div>
@endsection