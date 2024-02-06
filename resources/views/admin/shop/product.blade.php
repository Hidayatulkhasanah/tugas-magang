@extends('admin.layouts.app')

@section('contents')
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 mt-4">
                <div class="d-flex flex-wrap gap-4 mb-4">
                    <form method="POST">
                        @csrf
                        <form>
                            <fieldset>
                                <legend>Add Product</legend>
                                <div class="mb-3">
                                    <label for="TextInput" class="form-label">Nama Product</label>
                                    <input type="text" id="TextInput" class="form-control" placeholder="Masukkan Nama Product">
                                </div>
                                <div class="mb-3">
                                    <label for="TextInput" class="form-label">Deskripsi</label>
                                    <input type="text" id="TextInput" class="form-control" placeholder="Masukkan Deskripsi">
                                </div>
                                <div class="mb-3">
                                    <label for="Select" class="form-label">Ukuran</label>
                                    <select id="Select" class="form-select">
                                        <option>S</option>
                                        <option>M</option>
                                        <option>L</option>
                                        <option>XL</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="TextInput" class="form-label">Harga</label>
                                    <input type="text" id="TextInput" class="form-control" placeholder="Masukkan">
                                </div>
                                <button type="button" class="btn btn-primary" onclick="kembali()">Kembali</button>
                                <button type="submit" class="btn btn-success">Simpan</button>
                        </form>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
