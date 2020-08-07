@extends('layout.master')

@section('title', 'Pembelian')

@section('container')
<div class="row">
    <div class="card">
        <div class="card-body">
            <h1 class="text-center" style="font-size: 20px">Re-stock Produk</h1>
            <hr>
            <a href="{{ url('purchases/create') }}" class="btn btn-info">
                <i class="fas fa-plus"></i>
            </a>
            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga Satuan</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Total</th>
                        <th scope="col">Tanggal Dibuat</th>
                        <th scope="col">Tanggal Diedit</th>
                        <th scope="col" class="action-col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($purchases as $purchase)
                    <tr>
                        <th scope="row">{{$purchase->id}}</th>
                        <td>{{$purchase->product->category->name}}</td>
                        <td>{{$purchase->price}}</td>
                        <td>{{$purchase->quantity}}</td>
                        <td>{{$purchase->price * $purchase->quantity}}</td>
                        <td>{{$purchase->created_at}}</td>
                        <td>{{$purchase->updated_at}}</td>
                        <td class="action-col">
                            <a href="/purchases/{{$purchase->id}}/edit" class="btn btn-info">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="/purchases/{{$purchase->id}}/delete" class="btn btn-danger">
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
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                                            <a href="/purchases/{{$purchase->id}}/delete" class="btn btn-danger" data-dismiss="modal">Ya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$purchases->links()}}
        </div>
    </div>
</div>
@endsection