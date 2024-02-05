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
                <td class="align-middle"><img src="{{ asset('assets/images/blouse.png') }}" alt="baju 1" style="width: 100%;"></td>
                <td class="align-middle">Blouse Women Purple</td>
                <td class="align-middle">Baju ini sangat mewah, wajib beli #HidaApprove</td>
                <td class="align-middle">XL,L,M,S</td>
                <td class="align-middle">Rp175.000</td>
                <td class="align-middle">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('data') }}" type="button" class="btn btn-secondary">Detail</a>
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