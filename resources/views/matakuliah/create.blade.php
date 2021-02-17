@extends('layout.main')
@section('title', 'Absensi Mahasiswa')
@section('content')

<div class="container">
<div class="jumbotron">
<center><h2><font size="6" color=#FA8072 face="Cursive">Tambah Data Matakuliah</font></h2></center
<form action="/Matakuliah" method="POST">

@csrf

<div class="form-group">
<label for="id">Id</label>
<input type="text" class="form-control" id="Id"
                    name="Id" placeholder="Id"
                    value="{{ old('Id') }}">
</div>

<div class="form-group">
<label for="matakuliah">Matakuliah</label>
<select class="form-control" id="matakuliah"
                    name="matakuliah">
<option value="Pemograman Internet Lanjut">Pemograman Internet Lanjut</option>
<option value="E-Government">E-Government</option>
<option value="RPL">RPL</option>
<option value="Audit SI">Audit SI</option>
<option value="Fotografi">Fotografi</option>
<option value="Manajemen Keamanan SI">Manajemen Keamanan SI</option>
<option value="Sinematografi">Sinematografi</option>
<option value="Jaringan Komputer">Jaringan Komputer</option>
</select>
</div>

<div class="form-group">
<label for="sks">SKS</label>
<input type="text" class="form-control" id="sks"
                    name="sks" placeholder="sks"
                    value="{{ old('sks') }}">
</div>
</br>
<button type="submit" class="btn btn-danger">Simpan</button>
</form>
</div>
</div>
@endsection