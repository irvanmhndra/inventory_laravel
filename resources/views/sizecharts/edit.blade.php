@extends('layout.master')

@section('title', 'Ukuran')

@section('container')
<div class="row">
    <div class="card">
        <div class="card-body">
            <h1 class="text-center" style="font-size: 20px">Edit Ukuran Produk</h1>
            <hr>
            <form action="/sizecharts/{{$sizechart->id}}" method="post">
                @csrf
                @method('put')
                <div class="form-body">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="name">Ukuran</label>
                            <input class="form-control" type="text" name="size" id="size" value="{{$sizechart->size}}"
                                placeholder="Masukkan Ukuran Produk" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Deskripsi</label>
                            <input class="form-control" type="text" name="desc" id="size" value="{{$sizechart->desc}}"
                                placeholder="Contoh: 13 x 20" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group text-right mt-4">
                            <a href="/sizecharts" class="btn btn-warning text-white">
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