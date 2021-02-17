@extends('layout.main')
@section('title', 'Absensi Mahasiswa')
@section('content')


<div class="container">
<div class="jumbotron">
<center><h2><font size="6" color=#FA8072 face="Cursive"> Silahkan Mengisi Absen</font></h2></center
<hr class="my-3">
<form action="/absen" method="POST">

@csrf


<div class="form-group">
<label for="nama">Id</label>
<input type="text" class="form-control" id="nama"
                    name="id" placeholder="id"
                    value="">
</div>

<div class="form-group">
<label for="waktu_absen">Waktu Absen</label>
<input type="time" class="form-control" id="waktu_absen"
                    name="id" placeholder="id"
                    value="">
<div class="form-group">
<label for="nama_mahasiswa">Nama Mahasiswa</label>
<input type="text" class="form-control" id="nama_mahasiswa"
                    name="nama_mahasiswa" placeholder="nama_mahasiswa"
                    value="">

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
<label for="keterangan">Keterangan</label>
<select class="form-control" id="keterangan"
                    name="keterangan">
<option value="Hadir">Hadir</option>
<option value="Tidak Hadir">Tidak Hadir</option>

</select>
</div>
</br>
<button type="submit" class="btn btn-danger">Kirim</button>
</form>
</div>
</div>

@endsection