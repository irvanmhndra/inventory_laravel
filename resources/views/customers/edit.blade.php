@extends('layout.master')

@section('title', 'Pelanggan')

@section('container')
<div class="row">
    <div class="card">
        <div class="card-body">
            <h1 class="text-center" style="font-size: 20px">Edit Pelanggan</h1>
            <hr>
            <form action="/customers/{{$customer->id}}" method="post">
                @csrf
                @method('put')
                <div class="form-body">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{$customer->name}}"
                                placeholder="Contoh: irvan Mahendra" required>
                        </div>
                        <div class="form-group">
                            <label for="phoneNumber">Nomor Telepon</label>
                            <input class="form-control" type="text" name="phoneNumber" id="phoneNumber" value="{{$customer->phoneNumber}}"
                                placeholder="Contoh: 0858XXXXXXXX" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="address">Alamat</label>
                            <input class="form-control" type="text" name="address" id="address" value="{{$customer->address}}"
                                placeholder="Contoh: Jalan Anggrek No. 7" required>
                        </div>
                        <div class="form-group text-right mt-4">
                            <a href="/customers" class="btn btn-warning text-white">
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