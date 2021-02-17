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
<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<center><h1><font size="7" color="black" face="Cursive" >Kontrak Matakuliah</font></h1></center>

<a href="kontrak_matakuliah/create" class="btn btn-primary mb-1">
Tambah Data Kontrak Matakuliah</a>

<table class="table table-bordered border-secondary">
<thead class="thead">
<tr>
<tr bgcolor='#FA8072'  align='center'>
<th scope="col">No</th>
<th scope="col">Nama Mahasiswa</th>
<th scope="col">Semester</th>
</th>


</tr>
</thead>
<tbody>
@foreach ($kontrak_matakuliah as $km)
<tr>
<tr bgcolor='#B0E0E6'  align='center'>
<td>{{ $loop->iteration }}</td>
<td>{{ $km->mahasiswa_id }}</td>
<td>{{ $km->semester_id}}</td>

</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
@endsection