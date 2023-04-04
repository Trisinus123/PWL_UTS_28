@extends('barangs.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Barang
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your i
                    nput.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('barangs.update', $Barang->Kode_barang)}}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="Kode_barang">Kode_Barang</label>
                        <input type="text" name="Kode_barang" class="form-control" id="Kode_barang" value="{{$Barang->Kode_barang}}" aria-describedby="Kode_barang">
                    </div>
                    <div class="form-group">
                        <label for="Nama_barang">Nama_barang</label>
                        <input type="text" name="Nama_barang" class="form-control" id="Nama_barang" value="{{$Barang->Nama_barang}}" aria-describedby="Nama_barang">
                    </div>
                    <div class="form-group">
                        <label for="Kategori_barang">Kategori_barang</label>
                        <input type="Kategori_barang" name="Kategori_barang" class="form-control" id="Kategori_barang" value="{{$Barang->Kategori_barang}}" aria-describedby="Kategori_barang">
                    <div class="form-group">
                        <label for="Harga">Harga</label>
                        <input type="Harga" name="Harga" class="form-control" id="Harga" value="{{$Barang->Harga}}" aria-describedby="Harga">
                    </div>
                        <label for="Qty">Qty</label>
                        <input type="Qty" name="Qty" class="form-control" id="Qty" value="{{$Barang->Qty}}" aria-describedby="Qty">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection