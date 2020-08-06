@extends('layout.master')

@section('title', 'Ukuran')

@section('container')
<div class="row">
    <div class="card">
        <div class="card-body">
            <h1 class="text-center" style="font-size: 20px">Tambah Ukuran Produk</h1>
            <hr>
            <form action="/sizecharts" method="post">
                @csrf
                @method('post')
                <div class="form-body">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="name">Ukuran</label>
                            <input class="form-control" type="text" name="size" id="size" value=""
                                placeholder="Contoh: 10R" required>
                        </div>
                    </div>
                    <div class="col-lg-4">
                    <label for="name">Deskripsi (cm)</label>
                            <input class="form-control" type="text" name="desc" id="desc" value=""
                                placeholder="Contoh: 25 x 30" required>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group text-right mt-4">
                            <a href="/categories" class="btn btn-warning text-white">
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