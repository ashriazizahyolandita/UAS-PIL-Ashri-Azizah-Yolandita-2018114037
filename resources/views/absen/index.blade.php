@extends('layout.main')
@section('title', 'Absensi Mahasiswa')
@section('content')

<div class="container">
<div class="jumbotron">
@if(session('msg'))
<div class="alert alert-success alert-dismissible fade show mt-2"
                role="alert">
{{session('msg')}}
<button type="button" class="close" data-dismiss="alert"
                aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif

<center><h1><font size="7" color="black" face="Cursive" >Data Absen Mahasiswa</font></h1></center>
<a href="absen/create" class="btn btn-primary mb-1">
Silahkan Isi Data Absensi</a> </br>


<table class="table table-bordered border-secondary">
<thead class="thead-dark">
<tr>
<tr bgcolor='#FA8072'  align='center'>
<th scope="col">No</th>
<th scope="col">Id</th>
<th scope="col">Waktu Absen</th>
<th scope="col">Nama Mahasiswa</th>
<th scope="col">Matakuliah</th>
<th scope="col">Keterangan</th>
<th></th>


</tr>
</thead>
<tbody>
@foreach ($absen as $abs)
<tr>
<tr bgcolor='#B0E0E6'  align='center'>
<td>{{ $loop->iteration }}</td>
<td>{{ $abs->id }}</td>
<td>{{ $abs->waktu_absen }}</td>
<td>{{ $abs->mahasiswa_id }}</td>
<td>{{ $abs->matakuliah_id }}</td>
<td>{{ $abs->keterangan }}</td>
<td>

<button> <a href="/absen/{{$abs['keterangan']}}/edit" class='button' style='width:auto;'>Edit</button>
<button> <a href="" class='button' style='width:auto;'>Hapus</button>

</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
@endsection
