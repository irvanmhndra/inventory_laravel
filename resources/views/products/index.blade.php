@extends('layout.master')

@section('title', 'Produk')

@section('container')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h1 class="text-center" style="font-size: 20px">Daftar Produk</h1>
                <hr>
                <a href="{{ url('products/create') }}" class="btn btn-info">
                    <i class="fas fa-plus"></i>
                </a>
                <div class="table-responsive">
                    <table class="table table-striped mt-3">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Ukuran</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Harga Dasar</th>
                                <th scope="col">Detail</th>
                                <th scope="col" class="action-col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <th scope="row">{{$product->id}}</th>
                                <td>{{$product->category->name}}</td>
                                <td>{{$product->size->size}}</td>
                                <td>{{$product->stock ? $product->stock : 0}}</td>
                                <td>{{$product->price}}</td>
                                <td>
                                    <ul>
                                        <li>Warna: {{$product->color}}</li>
                                        <li>Kedalaman: {{$product->depth}}</li>
                                        <li>Lin: {{$product->lin}}</li>
                                    </ul>
                                </td>
                                <td class="action-col">
                                    <a href="/products/{{$product->id}}/edit" class="btn btn-info">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="/products/{{$product->id}}/delete" class="btn btn-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                    <!-- Modal -->
                                    <div id="confirmModal" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- konten modal-->
                                            <div class="modal-content">
                                                <!-- heading modal -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Konfirmasi Hapus</h4>
                                                </div>
                                                <!-- body modal -->
                                                <div class="modal-body">
                                                    <p>Yakin ingin menghapus data ini?</p>
                                                </div>
                                                <!-- footer modal -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Tidak</button>
                                                    <a href="/products/{{$product->id}}/delete" class="btn btn-danger"
                                                        data-dismiss="modal">Ya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$products->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection