@extends('layout.template')
@section('title','Detail Anggota')

@section('content')
<h1>Detail Anggota </h1>
<div class="container">
   <div class="item">
   <a href="/index" class="btn btn-secondary">Kembali</a>
   </div> 

   <div class="row pt-4">
      <div class="card" style="width: 18rem;">
     <div class="card-body">
       <h5 class="card-title">{{$anggota->nama}}</h5>
       <h6 class="card-subtitle mb-2 text-muted">{{$anggota->telp}} </h6>
       <p class="card-text"> {{$anggota->alamat}} .</p>
       <p>Upline :{{$anggota->upline}}  <a href="/detail/{{{$anggota->upline}}}" class="btn btn-sm btn-success">Cek Upline</a></p>
     
     </div>
   </div>

   <h3>Cek Downline {{$anggota->nama}} <a href="/downline/{{$anggota->id}}" class="btn btn-sm btn-success">Go</a></h3>
</div>


</div>
@endsection