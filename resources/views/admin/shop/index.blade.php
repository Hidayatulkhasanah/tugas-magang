@extends('admin.layouts.app')

@section('title', 'List Product')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <a href="" class="btn btn-primary">Add Product</a>
    </div>
    <br>
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Ukuran</th>
                <th>Harga</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $db)
            @foreach ($db as $hida)
            <tr>
                <td class="align-middle"><img src="https://38f3-2001-448a-3043-876f-c848-7a33-d392-ebb7.ngrok-free.app/api/v1/{{ $hida['Photos'] }}"
                <td class="align-middle">{{ $hida['Nama'] }}</td>
                <td class="align-middle">{{ $hida['Deskripsi'] }}</td>
                <td class="align-middle">{{ $hida['Size'] }}</td>
                <td class="align-middle">Rp. {{ $hida['Harga'] }}</td>
                <td class="align-middle">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="" type="button" class="btn btn-secondary">Detail</a>
                        <a href=""type="button" class="btn btn-warning">Edit</a>
                        <a href=""type="button" class="btn btn-danger">Delete</a>
                    </div>
                </td>
            </tr>
            @endforeach
            @endforeach
        </tbody>
    </table>
@endsection