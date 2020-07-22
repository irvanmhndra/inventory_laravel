@extends('layout.master')

@section('title', 'Categories')

@section('container')
<div class="row">
    <div class="card">
        <div class="card-body">
            <h1 class="text-center" style="font-size: 20px">
                Kategori <small style="font-size: 18px">Produk</small>
            </h1>
            <hr>
            <button type="button" class="btn btn-info">
                <i class="fas fa-plus"></i>
            </button>
            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col" class="action-col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{$category->id}}</th>
                        <td>{{$category->name}}</td>
                        <td class="action-col">
                            <button type="button" class="btn btn-info">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button type="button" class="btn btn-info">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$categories->links()}}
        </div>
    </div>
</div>
@endsection