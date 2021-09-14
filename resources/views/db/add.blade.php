@extends('layout.template')
@section('title','Tambah Anggota')

@section('content')
<h1>Tambah Anggota </h1>
<div class="container">
   <div class="item">
   <a href="/index" class="btn btn-secondary">Kembali</a>
   </div> 

   <div class="row">
   <div class="col-3"></div>
<div class="col-6">
   <form action="/insert" method="POST" enctype="multipart/form-data">
   @csrf
   <div class="mb-3 pt-4">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3 pt-4">
    <label for="exampleInputEmail1" class="form-label">Alamat</label>
    <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3 pt-4">
    <label for="exampleInputEmail1" class="form-label">Nomor Telp</label>
    <input type="number" name="telp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3 pt-4">
                                    <label for="exampleInputEmail1">Upline</label>
                                    <select class="form-select" name="upline">
                                    <option selected value="null">Tidak ada</option>
                                        @foreach($data as $b)
                                        <option value="{{$b->id}}">{{$b->nama}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-primary" style="font-size: small;">Kosongkan Jika tidak ada Upline</span>
                            
</div>
  <button type="submit" class="btn btn-primary">Tambah</button>
</form>
</div>
</div>

</div>
@if(session('status'))
  <script>
    alert("{{ session('status') }}");
  </script>
@endif
@endsection