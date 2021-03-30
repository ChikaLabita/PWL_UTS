@extends('barangs.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2" style="text-align: center">
                <h2>TOKO INNA SHABARA</h2>
            </div>
            <div class="float-left my-2">
            <form action="{{url('search')}}" method="GET">
                <input type="search" name="search" class="form-control" id="search" aria-describedby="search" placeholder="Search..."> <input type="submit" value="Search">
            </form>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('barang.create') }}"> Input Barang</a>
            </div>
        </div>
    </div>
 @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
 @endif
 <table class="table table-bordered">
    <tr>
        <th>Id Barang</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Kategori Barang</th>
        <th>Harga</th>
        <th>Qty</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($barangs as $Barang)
    <tr>
        <td>{{ $Barang->id_barang }}</td>
        <td>{{ $Barang->kode_barang }}</td>
        <td>{{ $Barang->nama_barang }}</td>
        <td>{{ $Barang->kategori_barang }}</td>
        <td>{{ $Barang->harga }}</td>
        <td>{{ $Barang->qty }} </td>
        <td>
            <form action="{{ route('barang.destroy', ['barang'=>$Barang->id_barang])}}" method="POST">
                <a class="btn btn-info" href="{{ route('barang.show', [$Barang->id_barang]) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('barang.edit', $Barang->id_barang) }}">Edit</a>
        @csrf
        @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
        </td>
    </tr>
 @endforeach
 <div>
</div>
</table>
<div class="float-left my-2">{{ $barangs-> links()}}</div>
@endsection