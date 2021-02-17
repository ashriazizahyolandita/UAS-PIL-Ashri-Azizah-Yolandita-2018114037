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

<center><h1><font size="7" color="black" face="Cursive" >Data Mahasiswa</font></h1></center>
<a href="mahasiswa/create" class="btn btn-primary mb-1">
Tambah Data Mahasiswa</a> </br>

<table class="table table-bordered border-secondary">
<thead class="thead-dark">
<tr>
<tr bgcolor='#FA8072'  align='center'>
<th scope="col">No</th>
<th scope="col">id</th>
<th scope="col">Nama Mahasiswa</th>
<th scope="col">Alamat</th>
<th scope="col">No Tlp</th>
<th scope="col">Email</th>
<th></th>
</tr>
</thead>
<tbody>
@foreach ($mahasiswa as $maha)
<tr>
<tr bgcolor='#B0E0E6'  align='center'>
<td>{{ $loop->iteration }}</td>
<td>{{ $maha->id }}</td>
<td>{{ $maha->nama_mahasiswa }}</td>
<td>{{ $maha->alamat }}</td>
<td>{{ $maha->no_tlp }}</td>
<td>{{ $maha->email }}</td>
<td>

<button> <a href="/mahasiswa/{{$maha['alamat']}}/edit" class='button' style='width:auto;'>Edit</button>
<button> <a href="" class='button' style='width:auto;'>Hapus</button>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</body>
</html>
@endsection