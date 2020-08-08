@extends('layout.master')

@section('title', 'Diskon')

@section('container')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h1 class="text-center" style="font-size: 20px">Tambah Diskon Produk</h1>
                <hr>
                <form action="/discounts" method="post">
                    @csrf
                    @method('post')
                    <div class="form-group row">
                        <div class="col-lg-6 col-12">
                            <label for="name">Nama Diskon</label>
                            <input class="form-control" type="text" name="name" id="name" value=""
                                placeholder="Contoh: 3 Lusin" required>
                        </div>
                        <div class="col-lg-6 col-12">
                            <label for="amount">Besaran Diskon (%)</label>
                            <input class="form-control" type="text" name="amount" id="amount" value=""
                                placeholder="Contoh: 30" required>
                        </div>
                        <div class="col-lg-6 col-12">
                            <a href="/discounts" class="btn btn-warning text-white">
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