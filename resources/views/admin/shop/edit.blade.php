@extends('admin.layouts.app')

@section('contents')
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 mt-4">
                <div class="d-flex flex-wrap gap-4 mb-4">
                    @csrf
                    <form>
                        <fieldset>
                            <legend>Edit Product</legend>
                            <div class="mb-3">
                                <label for="TextInput" class="form-label">Nama Product</label>
                                <input type="text" id="TextInput" class="form-control" placeholder="Masukkan Nama Product">
                            </div>
                            <div class="mb-3">
                                <label for="TextInput" class="form-label">Deskripsi Product</label>
                                <input type="text" id="TextInput" class="form-control" placeholder="Masukkan Deskripsi Product">
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile04"
                                    aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                <button class="btn btn-outline-primary" type="button"
                                    id="inputGroupFileAddon04">Upload</button>
                            </div>
                            <label for="TextInput" class="form-label">Ukuran</label>
                            <select class="form-select" aria-label=" Ukuran">
                                <option selected>Pilih ukuran disini</option>
                                <option value="1">S</option>
                                <option value="2">M</option>
                                <option value="3">L</option>
                                <option value="4">XL</option>
                              </select>
                            <div class="mb-3">
                                <label for="TextInput" class="form-label">Harga</label>
                                <input type="text" id="TextInput" class="form-control" placeholder="Masukkan">
                            </div>


                            <div class="d-grid gap-2 d-md-block">
                                <button class="btn btn-danger" type="button">Kembali</button>
                               
                                <button class="btn btn-primary" type="button">Simpan</button>
                               
                            </div>
                    </form>
                    </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
