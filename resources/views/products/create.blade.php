@extends('layout.master')

@section('title', 'Products')

@section('container')
<div class="row">
    <div class="card">
        <div class="card-body">
            <h1 class="text-center" style="font-size: 20px">FORM <small style="font-size: 18px">Tambah Produk</small>
            </h1>
            <hr>
            <form action="/products" method="post">
                @csrf
                @method('post')
                <div class="form-body">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="category">Kategori</label>
                            <select class="form-control" type="" name="category_id" id="category_id" value="" placeholder="Pilih Kategori Barang" required>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="size">Ukuran</label>
                            <select class="form-control" type="" name="size_id" id="size_id" value="" placeholder="Pilih Ukuran" required>
                                @foreach ($sizes as $size)
                                <option value="{{$size->id}}">{{$size->size}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="stock">Jumlah Ketersediaan</label>
                            <input class="form-control" type="text" name="stock" id="stock" value="" placeholder="Masukkan Jumlah Ketersediaan" required>
                        </div>
                        <div class="form-group">
                            <label for="color">Warna</label>
                            <input class="form-control" type="text" name="color" id="color" value="" placeholder="Masukkan Warna Barang" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Harga</label>
                            <input class="form-control" type="text" name="price" id="price" value="" placeholder="Masukkan Harga Barang" required>
                        </div>
                        <div class="form-group">
                            <label for="depth">Kedalaman</label>
                            <input class="form-control" type="text" name="depth" id="depth" value="" placeholder="Masukkan Kedalaman Barang" required>
                        </div>
                        <div class="form-group">
                            <label for="lin">Lin</label>
                            <input class="form-control" type="text" name="lin" id="lin" value="" placeholder="Masukkan Lin Barang" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group text-right mt-4">
                            <a href="/products" class="btn btn-warning text-white">
                                <i class="material-icons">Kembali</i>
                            </a>
                            <button class="btn btn-primary" type="submit" name="submit" id="btnSubmit">
                                <i class="material-icons">Simpan</i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection