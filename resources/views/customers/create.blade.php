@extends('layout.master')

@section('title', 'Pelanggan')

@section('container')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h1 class="text-center" style="font-size: 20px">Tambah Pelanggan</h1>
                <hr>
                <form action="/customers" method="post">
                    @csrf
                    @method('post')
                    <div class="form-group row">
                        <div class="col-lg-6 col-12">
                            <label for="name">Nama</label>
                            <input class="form-control" type="text" name="name" id="name" value="" placeholder="Contoh: Irvan Mahendra" required>
                        </div>
                        <div class="col-lg-6 col-12">
                            <label for="phoneNumber">Nomor Telepon</label>
                            <input class="form-control" type="text" name="phoneNumber" id="phoneNumber" value="" placeholder="Contoh: 0858XXXXXXXX" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6 col-12">
                            <label for="address">Alamat</label>
                            <input class="form-control" type="text" name="address" id="address" value="" placeholder="Contoh: Jalan Anggrek No.7" required>
                        </div>
                        <div class="col-lg-6 col-12 mt-5">
                            <a href="/customers" class="btn btn-warning text-white">
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