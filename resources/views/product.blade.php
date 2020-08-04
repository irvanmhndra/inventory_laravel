@extends('layout.master')

@section('title', 'Product')

@section('container')
<div class="card">
    <div class="card-body">
        <h1 class="text-center" style="font-size: 20px">FORM <small style="font-size: 18px">Tambah Product</small>
        </h1>
        <hr>
        <form action="#" class="#" method="#">
            <div class="form-body">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="name">Jenis Pigora</label>
                        <input class="form-control" type="text" name="name" id="name" value="" autocomplete="false"
                            autofocus>
                        <small class="text-red"></small>
                        <small class="text-muted">Pilih jenis pigora</small>
                    </div>
                    <div class="form-group  ">
                        <label for="size">Ukuran</label>
                        <input class="form-control" type="text" name="size" id="size" value="" autocomplete="false">
                        <small class="text-red"></small>
                        <small class="text-muted">Pilih ukuran</small>
                    </div>
                    <div class="form-group ">
                        <label for="depth">Kedalaman</label>
                        <input class="form-control" type="text" name="gelar_depan" id="gelar_depan" value=""
                            autocomplete="false">
                        <small class="text-red"></small>
                        <small class="text-muted">Pilih kedalaman</small>
                    </div>
                    <div class="form-group ">
                        <label for="color">Warna</label>
                        <input class="form-control" type="text" name="color" id="color" value="" autocomplete="false">
                        <small class="text-red"></small>
                        <small class="text-muted">Masukkan warna</small>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group ">
                        <label for="lis">Lis</label>
                        <input class="form-control" type="text" name="lis" id="lis" value="" autocomplete="false">
                        <small class="text-red"></small>
                        <small class="text-muted">Masukkan lis</small>
                    </div>
                    <div class="form-group ">
                        <label for="price">Harga</label>
                        <input class="form-control" type="text" name="price" id="price" value="" autocomplete="false">
                        <small class="text-red"></small>
                        <small class="text-muted">Masukkan harga</small>
                    </div>
                    <div class="form-group ">
                        <label for="desc">Deskripsi</label>
                        <textarea class="form-control" name="desc" id="desc" autocomplete="false" rows="4"></textarea>
                        <small class="text-red"></small>
                        <small class="text-muted">Masukkan deskripsi</small>
                    </div>
                    <div class="form-group text-right">
                        <a href="" class="btn btn-warning text-white">
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
@endsection