@extends('layout.master')

@section('title', 'Pembayaran')

@section('container')
<div class="row">
    <div class="card">
        <div class="card-body">
            <h1 class="text-center" style="font-size: 20px">Pembayaran</h1>
            <hr>
            <form action="/sales" method="post">
                @csrf
                @method('post')
                <div class="form-body">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="due_date">Batas Waktu Pembayaran</label>
                            <input class="form-control" type="text" name="due_date" id="due_date" value="" placeholder="Masukkan Batas Waktu Pembayaran" required>
                        </div>
                        <div class="form-group">
                            <label for="type">Jenis Pembayaran</label>
                            <input class="form-control" type="text" name="type" id="type" value="" placeholder="Cash/Kredit" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="total">Total Pembayaran</label>
                            <input class="form-control" type="text" name="total" id="total" value="" placeholder="Masukkan Total Pembayaran" required>
                        </div>
                        <div class="form-group">
                            <label for="status">Status Pembayaran</label>
                            <input class="form-control" type="text" name="status" id="status" value="" placeholder="Lunas/Belum Lunas" required>
                        </div>
                        <div class="form-group text-right mt-4">
                            <a href="/sales" class="btn btn-warning text-white">
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