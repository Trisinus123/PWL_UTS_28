@extends('barangs.layout')

@section('content')
<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Barang
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
                <form method="post" action="{{ route('barangs.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="Kode_barang">Kode_barang</label>
                        <input type="text" name="Kode_barang" class="form-control" id="Kode_barang" aria-describedby="Kode_barang">
                    </div>
                    <div class="form-group">
                        <label for="Nama_barang">Nama_barang</label>
                        <input type="Nama_barang" name="Nama_barang" class="form-control" id="Nama_barang" aria-describedby="Nama_barang">
                    </div>
                    <div class="form-group">
                        <label for="">Kategori_barang</label>
                        <input type="Kategori_barang" name="Kategori_barang" class="form-control" id="Kategori_barang" aria-describedby="password">
                    </div>
                    <div class="form-group">
                        <label for="Harga">Harga</label>
                        <input type="Harga" name="Harga" class="form-control" id="Harga" aria-describedby="Harga">
                    </div>
                    <div class="form-group">
                        <label for="Qty">Qty</label>
                        <input type="Qty" name="Qty" class="form-control" id="Qty" aria-describedby="Qty">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection