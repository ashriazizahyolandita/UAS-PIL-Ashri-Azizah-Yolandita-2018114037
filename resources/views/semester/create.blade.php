@extends('layout.main')
@section('title', 'Absensi Mahasiswa')
@section('content')

<div class="container">
<div class="jumbotron">
<center><h2><font size="6" color=#FA8072 face="Cursive">Tambah Data</font></h2></center
<form action="/Semester" method="POST">

@csrf

<div class="form-group">
<label for="id">Id</label>
<input type="text" class="form-control" id="Id"
                    name="Id" placeholder="Id"
                    value="{{ old('Id') }}">
</div>

<div class="form-group">
<label for="Semester">Semester</label>
<input type="text" class="form-control" id="Semester"
                    name="Semester" placeholder="Semester"
                    value="{{ old('Semester') }}">
</div>

<button type="submit" class="btn btn-danger">Simpan</button>
</form>
</div>
</div>
@endsection