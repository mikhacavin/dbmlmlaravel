@extends('layout.template')
@section('title','Detail Downline')

@section('content')
<h1>Detail Downline </h1>
<div class="container">
   <div class="item">
   <a href="/index" class="btn btn-secondary">Kembali</a>
   </div> 

   <div class="row pt-4">
   @foreach($anggota as $db)
      <div class="card" style="width: 18rem;">
          <div class="card-body">
        <h5 class="card-title">{{$db->nama}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{$db->telp}} </h6>
        <p class="card-text"> {{$db->alamat}} .</p>
      </div>
   </div>
   @endforeach
</div>


</div>
@endsection