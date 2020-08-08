@extends('layout.master')

@section('title', 'Pembelian')

@section('container')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h1 class="text-center" style="font-size: 20px">Re-stock Produk</h1>
                <hr>
                <form action="/purchases/{{$purchase->id}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-body">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="product_id">Produk</label>
                                <select class="form-control" type="" name="product_id" id="product_id"
                                    value="{{$purchase->product_id}}" placeholder="Pilih Produk yang akan dibeli"
                                    required>
                                    @foreach ($products as $product)
                                    <option value="{{$product->id}}">
                                        <b>{{$product->category->name}} {{$product->size->size}}</b>
                                        (Warna: {{$product->color}}, Kedalaman: {{$product->depth}}, Lin:
                                        {{$product->lin}})</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="price">Harga Satuan</label>
                                <input class="form-control" type="text" name="price" id="price"
                                    value="{{$purchase->price}}" placeholder="Contoh: 12500" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="quantity">Jumlah</label>
                                <input class="form-control" type="text" name="quantity" id="quantity"
                                    value="{{$purchase->quantity}}" placeholder="Contoh: 50" required>
                            </div>
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
</div>
@endsection