@extends('layout.template')
@section('title','Edit Anggota')

@section('content')
<h1>Edit Anggota ->{{$anggota->nama}}  </h1>
<div class="container">
   <div class="item">
   <a href="/index" class="btn btn-secondary">Kembali</a>
   </div> 

   <div class="row">
   <div class="col-3"></div>
<div class="col-6">
   <form action="/update/{{$anggota->id}}" method="POST" enctype="multipart/form-data">
   @csrf
  <div class="mb-3 pt-4">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" value="{{$anggota->nama}}" aria-describedby="emailHelp">
  </div>
  <div class="mb-3 pt-4">
    <label for="exampleInputEmail1" class="form-label">Alamat</label>
    <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" value="{{$anggota->alamat}}" aria-describedby="emailHelp">
  </div>
  <div class="mb-3 pt-4">
    <label for="exampleInputEmail1" class="form-label">Nomor Telp</label>
    <input type="number" name="telp" class="form-control" id="exampleInputEmail1" value="{{$anggota->telp}}" aria-describedby="emailHelp">
  </div>
  <div class="mb-3 pt-4">
    <label for="exampleInputEmail1" class="form-label">Upline</label>
    <select name="upline" class="form-select" aria-label="Default select example">
  <option selected>Tidak ada</option>
  @foreach($data as $b)
   <option value="{{$b->id}}">{{$b->nama}}</option>
    @endforeach
</select>
</div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
</div>

</div>
@endsection