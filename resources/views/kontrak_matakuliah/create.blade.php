@extends('layout.main')
@section('title', 'Absensi Mahasiswa')
@section('content')

<div class="container">
<div class="jumbotron">
<center><h2><font size="6" color=#FA8072 face="Cursive">Tambah Data Jadwal Mahasiswa</font></h2></center
<hr class="my-4">
<form action="/jadwal" method="POST">

@csrf

<div class="form-group">
<label for="mahasiswa_id">ID Mahasiswa</label>
<input type="text" class="form-control" id="Imahasiswa_idd"
                    name="mahasiswa_id" placeholder="mahasiswa_id"
                    value="{{ old('mahasiswa_id') }}">
</div>

<div class="form-group">
<label for="semester_id">ID Semester</label>
<input type="text" class="form-control" id="semester_id"
                    name="semester_id" placeholder="semester_id"
                    value="{{ old('Jadwal') }}">
</div>

<button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
</div>
@endsection 