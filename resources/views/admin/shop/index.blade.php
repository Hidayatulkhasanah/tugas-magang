@extends('admin.layouts.app')

@section('title', 'List Product')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ route('product-add') }}" class="btn btn-primary">Add Product</a>
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
        <tbody id="table-produk">
            @if (!empty($data) || !is_null($data))
                @foreach ($data as $db)
                    @foreach ($db as $hida)
                        <tr>
                            <td class="align-middle">
                                <img
                                    src="https://38f3-2001-448a-3043-876f-c848-7a33-d392-ebb7.ngrok-free.app/api/v1/{{ $hida['Photos'] }}"> 
                            <td class="align-middle">{{ $hida['Nama'] }}</td>
                            <td class="align-middle">{{ $hida['Deskripsi'] }}</td>
                            <td class="align-middle">{{ $hida['Size'] }}</td>
                            <td class="align-middle">{{ $hida['Harga'] }}</td>
                            <td class="align-middle">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('product-edit') }}"type="button" class="btn btn-warning">Edit</a>
                                    <button type="button" class="btn btn-delete btn-danger" onclick="handleDelete(JSON.stringify({{ $hida }}))">Delete</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            @endif

        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(() => {
            getData();
        });

        const handleDelete = (data) => {
            console.log(data)
            
        }

        const getData = () => {
            $.ajax({
                type: 'get',
                url : 'https://38f3-2001-448a-3043-876f-c848-7a33-d392-ebb7.ngrok-free.app/api/v1/product/',
                beforeSend: (request) => {
                    request.setRequestHeader('Access-Control-Allow-Origin', '*');
                },
                success: (response) => {
                    console.log(response)
                },
                error: (error) => {
                    console.error(error)
                }
            }) //                        
        }
        // $('.btn-delete').on('click', function(event) {
        //     swal.fire({
        //         title: "Apakah anda ingin menghapus data ini?",
        //         type: "warning",
        //         showCancelButton: true,
        //         confirmButtonText: "Yes",
        //         closeOnConfirm: true
        //     },
        //     function() {
        //         $.ajax({
        //         type: 'post',
        //         url : 'https://38f3-2001-448a-3043-876f-c848-7a33-d392-ebb7.ngrok-free.app/api/v1/product/',
        //         data: {},
        //         success: swal.fire({
        //             title: "Hapus data sukses!",
        //             type: "success",
        //             confirmButtonText: "Tutup",
        //             closeOnConfirm: true
        //         }),
        //         error: (error) => {
        //             swal.fire({
        //                 title: error,
        //                 type: "error",
        //                 confirmButtonText: "Tutup",
        //                 closeOnConfirm: true
        //             })
        //         }
        //     })
        //     });
        // });
    </script>
@endsection
