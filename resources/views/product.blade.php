@extends('layout/master')

@section('title', 'Product')

@section('container')
<div class="col-lg-8 container mt-3">
    <div class="mdk-drawer-layout__content page">
        <div class="container-fluid page__container">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center" style="font-size: 20px">FORM <small style="font-size: 18px">Tambah Product</small></h1>
                        <hr>
                        <form action="#" class="#" method="#">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Jenis Pigora</label>
                                    <input class="form-control" type="text" name="name" id="name" value="" autocomplete="false" autofocus>
                                    <small class="text-red"></small>
                                    <small class="text-muted">Pilih jenis pigora</small>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="size">Ukuran</label>
                                    <input class="form-control" type="text" name="size" id="size" value="" autocomplete="false">
                                    <small class="text-red"></small>
                                    <small class="text-muted">Pilih ukuran</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="depth">Kedalaman</label>
                                    <input class="form-control" type="text" name="gelar_depan" id="gelar_depan" value="" autocomplete="false">
                                    <small class="text-red"></small>
                                    <small class="text-muted">Pilih kedalaman</small>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="color">Warna</label>
                                    <input class="form-control" type="text" name="color" id="color" value="" autocomplete="false">
                                    <small class="text-red"></small>
                                    <small class="text-muted">Masukkan warna</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="lis">Lis</label>
                                    <input class="form-control" type="text" name="lis" id="lis" value="" autocomplete="false">
                                    <small class="text-red"></small>
                                    <small class="text-muted">Masukkan lis</small>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="price">Harga</label>
                                    <input class="form-control" type="text" name="price" id="price" value="" autocomplete="false">
                                    <small class="text-red"></small>
                                    <small class="text-muted">Masukkan harga</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="desc">Deskripsi</label>
                                    <textarea class="form-control" name="desc" id="desc" autocomplete="false" rows="4"></textarea>
                                    <small class="text-red"></small>
                                    <small class="text-muted">Masukkan deskripsi</small>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="qty">Jumlah</label>
                                    <input class="form-control" type="text" name="qty" id="qty" value="" autocomplete="false">
                                    <small class="text-red"></small>
                                    <small class="text-muted">Masukkan jumlah</small>
                                    <div class="form-group text-right">
                                        <a href="" class="btn btn-warning text-white"><i class="material-icons">backspace</i>&nbsp; Kembali</a>
                                        <button class="btn btn-primary" type="submit" name="submit" id="btnSubmit"><i class="material-icons">save</i>&nbsp; Simpan</button>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection