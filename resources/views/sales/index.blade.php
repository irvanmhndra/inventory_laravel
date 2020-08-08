@extends('layout.master')

@section('title', 'Penjualan')

@section('container')
<div class="row">
    <div class="card">
        <div class="card-body">
            <h1 class="text-center" style="font-size: 20px">Penjualan</h1>
            <hr>
            <a href="{{ url('sales/create') }}" class="btn btn-info">
                <i class="fas fa-plus"></i>
            </a>
            <div class="table-responsive-lg">
                <table class="table table-striped mt-3">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Pelanggan</th>
                            <th scope="col">Total</th>
                            <th scope="col">Tanggal Jatuh Tempo</th>
                            <th scope="col">Jenis</th>
                            <th scope="col">Status</th>
                            <th scope="col" class="action-col"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sales as $sale)
                        <tr>
                            <th scope="row">{{$sale->id}}</th>
                            <td>{{$sale->customer->name}}</td>
                            <td>{{$sale->total}}</td>
                            <td>{{$sale->due_date}}</td>
                            <td>{{$sale->type}}</td>
                            <td>{{$sale->status}}</td>
                            <td class="action-col">
                                <a href="/sales/{{$sale->id}}/edit" class="btn btn-info">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="/sale s/{{$sale->id}}/delete" class="btn btn-danger">
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
                                                <a href="/sales/{{$sale->id}}/delete" class="btn btn-danger" data-dismiss="modal">Ya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{$sales->links()}}
        </div>
    </div>
</div>
@endsection