@extends('barangs.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>SISTEM INFORMASI BARANG MENGGUNAKAN CRUD</h2>
            </div>
            <div class="float-left my-2">
            <form action="{{ route('barangs.index') }}" method="GET" class="d-flex">
                <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang" value="{{request('Nama_barang')}}" required>
                <button type="submit" class="btn btn-dark">Search</button>
            </form>
            <div class="float-right my-2">
            <a class="btn btn-success" href="{{route('barangs.create')}}">Input Barang</a>
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
            <th>Kode_Barang</th>
            <th>Nama_Barang</th>
            <th>Kategori_barang</th>
            <th>Harga</th>
            <th>Qty</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($barangs as $Barang)
    <tr>
        <td>{{ $Barang->Kode_barang }}</td>
        <td>{{ $Barang->Nama_barang }}</td>
        <td>{{ $Barang->Kategori_barang }}</td>
        <td>{{ $Barang->Harga }}</td>
        <td>{{ $Barang->Qty }}</td>
        <td>
            <form action="{{ route('barangs.destroy',$Barang->Kode_barang) }}" method="POST">
                <a class="btn btn-info" href="{{ route('barangs.show',$Barang->Kode_barang) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('barangs.edit',$Barang->Kode_barang) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<div class="mx-auto pb-18 w-4/5">
{{ $barangs->links() }}
@endsection
