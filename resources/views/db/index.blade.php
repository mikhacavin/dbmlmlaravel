@extends('layout.template')
@section('title','Database')

@section('content')
<h1>Database </h1>
<div class="container">
   <div class="item float-end mb-3">
    <a href="/add" class="btn btn-success">Tambah Anggota</a>
   </div> 
<table class="table table-hover mt-5" id="myTable">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">ID</th>
      <th scope="col">NAMA</th>
      <th scope="col">ALAMAT</th>
      <th scope="col">NO.TELP</th>
      <th scope="col">UPLINE</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
  <?php $no = 1; ?>
  @foreach($data as $db)
    <tr>
      <th scope="row"><?= $no++ ?></th>
      <td>{{$db->id}}</td>
      <td>{{$db->nama}}</td>
      <td>{{$db->alamat}}</td>
      <td>{{$db->telp}}</td>
      <td>{{$db->upline}}</td>
      <td>
          <a href="/detail/{{$db->id}}"class="btn btn-sm btn-success">Detail</a>
          <a href="/edit/{{$db->id}}" class="btn btn-sm btn-warning">edit</a>
          <a href="/delete/{{$db->id}}" class="btn btn-sm btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>





@endsection