@extends('layout/navbar')

@section('title', "CRUD - TMDB")

@section('header')
    
@endsection

@section('main')
    <h1>CRUD Untuk Menambah dan Menhapus Kategori</h1>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">
    Tambah Kategori
    </button>

    <!-- Modal -->
    <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kategori</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <table class="table table-success table-striped mt-4">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>deskripsi</th>
                        <th>Dibuat/Dihapus</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        @if(!$category->status)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->description}}</td>
                            <td>{{$category->updated_at}}</td>
                            <td><a href="/crud/toggle/{{$category->id}}" class="btn btn-sm btn-danger">Add</a></td>
                        </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

    <table class="table table-success table-striped mt-4">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>deskripsi</th>
                <th>Dibuat/Dihapus</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                @if($category->status)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->description}}</td>
                    <td>{{$category->updated_at}}</td>
                    <td><a href="/crud/toggle/{{$category->id}}" class="btn btn-sm btn-danger">Delete</a></td>
                </tr>
                @endif
            @endforeach
        </tbody>
    </table>
@endsection