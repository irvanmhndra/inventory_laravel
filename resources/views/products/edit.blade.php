@extends('layout.master')

@section('title', 'Produk')

@section('container')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h1 class="text-center" style="font-size: 20px">Edit Produk</h1>
                <hr>
                <form action="/products" method="post">
                    @csrf
                    @method('post')
                    <div class="form-group row">
                        <div class="col-lg-6 col-12">
                            <label for="category">Kategori</label>
                            <select class="form-control" type="" name="category_id" id="category_id"
                                value="{{$product->category_id}}" placeholder="Pilih Kategori Produk" required>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-6 col-12">
                            <label for="size">Ukuran</label>
                            <select class="form-control" type="" name="size_id" id="size_id"
                                value="{{$product->size_id}}" placeholder="Pilih Ukuran Produk" required>
                                @foreach ($sizes as $size)
                                <option value="{{$size->id}}">{{$size->size}} ({{$size->desc}})</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6 col-12">
                            <label for="color">Warna</label>
                            <input class="form-control" type="text" name="color" id="color"
                                value="{{$product->color}}" placeholder="Contoh: Putih" required>
                        </div>
                        <div class="col-lg-6 col-12">
                            <label for="price">Harga</label>
                            <input class="form-control" type="text" name="price" id="price"
                                value="{{$product->price}}" placeholder="Contoh: 12500" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6 col-12">
                            <label for="depth">Kedalaman</label>
                            <input class="form-control" type="text" name="depth" id="depth"
                                value="{{$product->depth}}" placeholder="Contoh: 2 cm" required>
                        </div>
                        <div class="col-lg-6 col-12">
                            <label for="lin">Lin</label>
                            <input class="form-control" type="text" name="lin" id="lin" value="{{$product->lin}}"
                                placeholder="Contoh: 3 cm" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6 col-12">
                            <a href="/products" class="btn btn-warning text-white">
                                <i class="material-icons">Kembali</i>
                            </a>
                            <button class="btn btn-primary" type="submit" name="submit" id="btnSubmit">
                                <i class="material-icons">Simpan</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection