@extends('layout.master')

@section('title', 'Diskon')

@section('container')
<div class="row">
    <div class="card">
        <div class="card-body">
            <h1 class="text-center" style="font-size: 20px">Edit Diskon Produk</h1>
            <hr>
            <form action="/discounts/{{$discount->id}}" method="post">
                @csrf
                @method('put')
                <div class="form-body">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="name">Nama Diskon</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{$discount->name}}"
                                placeholder="Contoh: 3 Lusin" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="amount">Besaran Diskon (%)</label>
                            <input class="form-control" type="text" name="amount" id="amount" value="{{$discount->amount}}"
                                placeholder="Contoh: 30" required>
                        </div>
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