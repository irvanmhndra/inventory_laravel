@extends('layout.master')

@section('title', 'Ukuran')

@section('container')
<div class="row">
    <div class="card">
        <div class="card-body">
            <h1 class="text-center" style="font-size: 20px">
                Ukuran <small style="font-size: 18px">Produk</small>
            </h1>
            <hr>
            <a href="{{ url('sizecharts/create') }}" class="btn btn-info">
                <i class="fas fa-plus"></i>
            </a>
            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Ukuran</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col" class="action-col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sizecharts as $sizechart)
                    <tr>
                        <th scope="row">{{$sizechart->id}}</th>
                        <td>{{$sizechart->size}}</td>
                        <td>{{$sizechart->desc}}</td>
                        <td class="action-col">
                            <a href="/sizecharts/{{$sizechart->id}}/edit" class="btn btn-info">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="/sizecharts/{{$sizechart->id}}/delete" class="btn btn-danger">
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
                                            <a href="/sizecharts/{{$sizechart->id}}/delete" class="btn btn-danger" data-dismiss="modal">Ya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$sizecharts->links()}}
        </div>
    </div>
</div>
@endsection