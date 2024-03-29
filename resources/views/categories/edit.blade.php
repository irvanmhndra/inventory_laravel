@extends('layout.master')

@section('title', 'Kategori')

@section('container')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h1 class="text-center" style="font-size: 20px">Edit Kategori Produk</h1>
                <hr>
                <form action="/categories/{{$category->id}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group row">
                        <div class="col-lg-6 col-12">
                            <label for="name">Nama Kategori</label>
                            <input class="form-control" type="text" name="name" id="name"
                                value="{{$category->name}}" placeholder="Contoh: FIber" required>
                        </div>
                        <div class="col-lg-6 col-12 mt-5">
                            <a href="/categories" class="btn btn-warning text-white">
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