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
                                    <input type="text" id="TextInput" class="form-control"
                                        placeholder="input">
                                </div>
                                <div class="mb-3">
                                    <label for="Select" class="form-label"></label>
                                    <select id="Select" class="form-select">
                                        <option>select</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                                        <label class="form-check-label" for="disabledFieldsetCheck">
                                            Can't check this
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </fieldset>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection
