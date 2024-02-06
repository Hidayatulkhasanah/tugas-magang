<div class="container">
    <div class="row align-items-center">
        <div class="col-md-12 mt-4">
            <div class="d-flex flex-wrap gap-4 mb-4">
                <form method="POST" action="{{ route('item.product') }}">
                    @csrf
                    <label for="name">Nama:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="description">Deskripsi:</label>
                    <textarea id="description" name="description" required></textarea>

                    <label for="ukuran">Ukuran:</label>
                    <input type="text" id="ukuran" name="ukuran" required>

                    <label for="harga">Harga:</label>
                    <input type="text" id="harga" name="harga" required>

                    <button type="submit">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- read --}}
@foreach ($items as $item)
    <p>{{ $item->name }} - {{ $item->description }} - {{ $item->ukuran }} - {{ $item->harga }}</p>
@endforeach


{{-- update --}}
<form method="POST" action="{{ route('items.update', $item->id) }}">
    @csrf
    @method('PUT')
    <label for="name">Nama:</label>
    <input type="text" id="name" name="name" value="{{ $item->name }}" required>

    <label for="description">Deskripsi:</label>
    <textarea id="description" name="description" required>{{ $item->description }}</textarea>

    <label for="description">Ukuran:</label>
    <textarea id="ukuran" name="ukuran" required>{{ $item->ukuran }}</textarea>

    <label for="description">Harga:</label>
    <textarea id="harga" name="harga" required>{{ $item->harga }}</textarea>

    <button type="submit">Update</button>
</form>


{{-- delete --}}
<form method="POST" action="{{ route('items.destroy', $item->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Hapus</button>
</form>

