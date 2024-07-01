@extends('layouts.app')
@section('content')
<div class="container">
    <div class="bg-dark py-2">
        <h3 class="text-white text-center">Simple Laravel CRUD</h3>
    </div>
    <div class="roe d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card border-0 shadow-lg my-3">
                <div class="card-header bg-dark">
                    <h3 class="text-white">Create Product</h3>
                </div>
                <form action="{{ route ('products.store') }}" method="POST">
                 @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="" class="form-label h5">Name</label>
                            <input type="text" class="@error('name') is-invalid @enderror form-control form-control-lg" placeholder="Name" name="name">
                            @error('name')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label h5">Sku</label>
                            <input type="text" class="@error('sku') is-invalid @enderror form-control form-control-lg" placeholder="Sku" name="sku">
                             @error('sku')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label h5">Price</label>
                            <input type="text" class="@error('price') is-invalid @enderror form-control form-control-lg" placeholder="Price" name="price">
                             @error('price')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label h5">Description</label>
                        <textarea name="description" cols="30" rows="5" class="form-control" placeholder="Description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label h5">Image</label>
                            <input type="file" class="form-control form-control-lg" name="image">
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-lg btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection