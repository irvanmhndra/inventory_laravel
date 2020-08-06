@extends('layout.master')

@section('title', 'Penjualan')

@section('container')
<div class="row">
    <div class="card">
        <div class="card-body">
            <h1 class="text-center" style="font-size: 20px">Edit Penjualan</h1>
            <hr>
            <form action="/purchases" method="post">
                @csrf
                @method('post')
                <div class="form-body">
                    <div class="col-lg-6">
                    <div class="form-group">
                            <label for="customer_id">Pelanggan</label>
                            <select class="form-control" type="" name="customer_id" id="customer_id" value="" placeholder="Pilih Pelanggan" required>
                                @foreach ($customers as $customer)
                                <option value="{{$customer->id}}">{{$customer->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="total">Total</label>
                            <input class="form-control" type="text" name="total" id="total" value="" placeholder="Contoh: 500000" required>
                        </div>
                        <div class="form-group">
                            <label for="packaging">Packaging</label>
                            <input class="form-control" type="text" name="packaging" id="packaging" value="" placeholder="Contoh: 25000" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="due_date">Tanggal Jatuh Tempo</label>
                            <input class="form-control" type="date" name="due_date" id="due_date" value="" placeholder="Masukkan Tanggal Jatuh Tempo" required>
                        </div>
                        <div class="form-group">
                            <label for="type">Jenis Pembayaran</label>
                            <select class="form-control" type="" name="type" id="type" value="" placeholder="Pilih Jenis Pembayaran" required>
                                <option value="Cash">Cash</option>
                                <option value="Kredit">Kredit</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">Status Pembayaran</label>
                            <select class="form-control" type="" name="status" id="status" value="" placeholder="Pilih Status Pembayaran" required>
                                <option value="Lunas">Lunas</option>
                                <option value="Belum Lunas">Belum Lunas</option>
                            </select>
                        </div>
                        <div class="form-group text-right mt-4">
                            <a href="/products" class="btn btn-warning text-white">
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