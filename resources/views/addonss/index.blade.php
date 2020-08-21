@extends('layout.master')

@section('title', 'Addons')

@section('container')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h1 class="text-center" style="font-size: 20px">Daftar Addons</h1>
                <hr>
                <a href="{{ url('addons/create') }}" class="btn btn-info">
                    <i class="fas fa-plus"></i>
                </a>
                <div class="table-responsive">
                    <table class="table table-striped mt-3">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Besaran</th>
                                <th scope="col" class="action-col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($addons as $addon)
                            <tr>
                                <th scope="row">{{$addon->id}}</th>
                                <td>{{$addon->name}}</td>
                                <td>{{$addon->amount}} %</td>
                                <td class="action-col">
                                    <a href="/addons/{{$addon->id}}/edit" class="btn btn-info">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="/addons/{{$addon->id}}/delete" class="btn btn-danger">
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
                                                    <a href="/addons/{{$addon->id}}/delete" class="btn btn-danger"
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
                    {{$addons->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection