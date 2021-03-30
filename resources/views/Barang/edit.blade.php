@extends('barang.layout')
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
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('barang.update', $barang->id_barang) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="Nama Barang">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" id="Nama Barang" aria-describedby="Nama Barang" value="{{$barang->nama_barang}}">
                    </div>
                    <div class="form-group">
                        <label for="Kategori">Kategori</label>
                        <select name="kategori_barang" id="Kategori" class="form-control">
                            <option value="Makanan" {{ ( $barang->kategori_barang == 'Makanan') ? 'selected' : '' }}>Makanan</option>
                            <option value="Minuman" {{ ( $barang->kategori_barang == 'Minuman') ? 'selected' : '' }}>Minuman</option>
                            <option value="Snack" {{ ( $barang->kategori_barang == 'Snack') ? 'selected' : '' }}>Snack</option>
                            <option value="Obat_Obatan" {{ ( $barang->kategori_barang == 'Obat-Obatan') ? 'selected' : '' }}>Obat_Obatan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Harga">Harga</label>
                        <input type="number" name="harga" class="form-control" id="Harga" aria-describedby="Harga" value="{{$barang->harga}}">
                    </div>
                    <div class="form-group">
                        <label for="Jumlah">Jumlah</label>
                        <input type="number" name="qty" class="form-control" id="Jumlah" aria-describedby="Jumlah" value="{{$barang->qty}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection