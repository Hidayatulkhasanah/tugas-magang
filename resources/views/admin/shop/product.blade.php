@extends('admin.layouts.app')

@section('contents')
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 mt-4">
                <div class="d-flex flex-wrap gap-4 mb-4">
                    @csrf
                    <form id="form-add">
                        <fieldset>
                            <legend>Add Product</legend>
                            <div class="mb-3">
                                <label for="TextInput" class="form-label">Nama Product</label>
                                <input type="text" name="nama" id="TextInput" class="form-control" placeholder="Masukkan Nama Product">
                            </div>
                            <div class="mb-3">
                                <label for="TextInput" class="form-label">Deskripsi Product</label>
                                <textarea rows='3' name="deskripsi" id="TextInput" class="form-control" placeholder="Masukkan Deskripsi Product" ></textarea>
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" name="photo" class="form-control" id="inputGroupFile04 photo"
                                    aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                {{-- <button class="btn btn-outline-primary" type="button"
                                    id="inputGroupFileAddon04">Upload</button> --}}
                            </div>
                            <label for="TextInput" class="form-label">Ukuran</label>
                            <div class="input-group mb-3">
                                <select name="ukuran" class="form-select" aria-label="Ukuran">
                                    <option selected>Pilih ukuran disini</option>
                                    <option value="s">S</option>
                                    <option value="m">M</option>
                                    <option value="l">L</option>
                                    <option value="xl">XL</option>
                                  </select>
                            </div>
                            <div class="mb-3">
                                <label for="TextInput" class="form-label">Harga</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        Rp.
                                    </span>
                                    <input type="number" name="harga" id="TextInput" class="form-control" placeholder="Masukkan">
                                </div>
                            </div>


                            <div class="d-grid gap-2 d-md-block">
                                <button class="btn btn-danger" type="button">Kembali</button>
                               
                                <button class="btn btn-primary" id="btn-submit" type="button">Simpan</button>
                               
                            </div>
                    </form>
                    </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $('#btn-submit').on('click', function(event) {
            event.preventDefault();

            let payload = {
                nama: $("[name='nama']").val(), 
                deskripsi: $("[name='deskripsi']").val(),
                photo: new Blob([$("[name='photo']").prop('files')[0]], { type: 'image/png' }),
                ukuran: $("[name='ukuran']").val(),
                harga: Number($("[name='harga']").val())
            }

            // console.log(JSON.stringify($("[name='ukuran']")))
            $.ajax({
                type: 'post',
                url : 'https://38f3-2001-448a-3043-876f-c848-7a33-d392-ebb7.ngrok-free.app/api/v1/product/',
                beforeSend: (request) => {
                    request.setRequestHeader('Access-Control-Allow-Origin', '*');
                },
                data: JSON.stringify(payload),
                success: swal.fire({
                    title: "Tambah data sukses!",
                    type: "success",
                    confirmButtonText: "Tutup",
                    closeOnConfirm: true
                }),
                error: (error) => {
                    swal.fire({
                        title: error,
                        type: "error",
                        confirmButtonText: "Tutup",
                        closeOnConfirm: true
                    })
                }
            })
        });
    </script>
@endsection
