@extends('barangs.layout')

@section('content')

<div class="container mt-5">
 <div class="row justify-content-center align-items-center">
   <div class="card" style="width: 24rem;">
      <div class="card-header">Edit Barang</div>
      <div class="card-body">
         @if ($errors->any())
         <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
               @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
         @endif
         <form method="post" action="{{route('barang.update', $Barang->id_barang)}}" id="myForm">
         @csrf
         @method('PUT')
            <div class="form-group">
               <label for="id_barang">Id Barang</label>
               <br>
               <input type="text" name="id_barang" class="form-control" id="id_barang" value="{{ $Barang->id_barang }}" aria describedby="id_barang" >
            </div>
            <div class="form-group">
               <label for="kode_barang">Kode Barang</label>
               <br>
               <input type="text" name="kode_barang" class="form-control" id="kode_barang" value="{{ $Barang->kode_barang }}" aria describedby="kode_barang" >
            </div>
            <div class="form-group">
               <label for="nama_barang">Nama Barang</label>
               <br>
               <input type="nama_barang" name="nama_barang" class="form-control" id="nama_barang" value="{{ $Barang->nama_barang }}" aria describedby="nama_barang" >
            </div>
            <div class="form-group">
               <label for="kategori_barang">Kategori Barang</label>
               <br>
               <input type="kategori_barang" name="kategori_barang" class="form-control" id="kategori_barang" value="{{ $Barang->kategori_barang }}" aria describedby="kategori_barang" >
            </div>
            <div class="form-group">
               <label for="harga">Harga</label>
               <br>
               <input type="harga" name="harga" class="form-control" id="harga" value="{{ $Barang->harga}}" aria describedby="harga" >
            </div>
            <div class="form-group">
               <label for="qty">Qty</label>
               <br>
               <input type="qty" name="qty" class="form-control" id="qty" value="{{ $Barang->qty }}"aria-describedby="qty" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
         </div>
      </div>
    </div>
</div>
@endsection