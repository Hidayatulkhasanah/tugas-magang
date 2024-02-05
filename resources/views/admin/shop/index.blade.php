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
                <th>Title</th>
                <th>Categories</th>
                <th>Size</th>
                <th>image</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="align-middle">Blouse Women Purple</td>
                <td class="align-middle">Shirt</td>
                <td class="align-middle">XL,L,M,S</td>
                <td class="align-middle"><img src="{{ asset('assets/images/blouse.png') }}" alt="baju 1" style="width: 100%;"></td>
                <td class="align-middle">Rp175.000</td>
                <td class="align-middle">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="" type="button" class="btn btn-secondary">Detail</a>
                        <a href="" type="button" class="btn btn-warning">Edit</a>
                        <form action="" method="POST" type="button" class="btn btn-danger p-0">
                            <button class="btn btn-danger m-0">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
@endsection