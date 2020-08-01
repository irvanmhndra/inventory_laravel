@extends('layout.master')

@section('title', 'Discounts')

@section('container')
<div class="row">
    <div class="card">
        <div class="card-body">
            <h1 class="text-center" style="font-size: 20px">FORM <small style="font-size: 18px">Edit Diskon
                    Produk</small>
            </h1>
            <hr>
            <form action="/discounts/{{$discount->id}}" method="post">
                @csrf
                @method('put')
                <div class="form-body">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="name">Nama Diskon</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{$discount->name}}"
                                placeholder="Masukkan Nama/Pengenal Diskon" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Jumlah Diskon (%)</label>
                            <input class="form-control" type="text" name="amount" id="amount" value="{{$discount->amount}}"
                                placeholder="Masukkan Jumlah Diskon dalam Presentase" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group text-right mt-4">
                            <a href="/discounts" class="btn btn-warning text-white">
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