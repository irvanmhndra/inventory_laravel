@extends('layout.master')

@section('title', 'Addons')

@section('container')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h1 class="text-center" style="font-size: 20px">Tambah Addon</h1>
                <hr>
                <form action="/addons" method="post">
                    @csrf
                    @method('post')
                    <div class="form-group row">
                        <div class="col-lg-6 col-12">
                            <label for="name">Nama Addon</label>
                            <input class="form-control" type="text" name="name" id="name" value=""
                                placeholder="Contoh: Packaging Kayu" required>
                        </div>
                        <div class="col-lg-6 col-12">
                            <label for="amount">Besaran Addon</label>
                            <input class="form-control" type="text" name="amount" id="amount" value=""
                                placeholder="Contoh: 25000" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6 col-12">
                            <a href="/addons" class="btn btn-warning text-white">
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