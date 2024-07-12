@extends('layouts.app')
@section('content')
<div class="bg-dark py-2">
    <h3 class="text-white text-center">Simple Laravel CRUD</h3>
</div>
<div class="container">
    <div class="row justify-content-center mt-3">
        <div class="col-md-10 d-flex justify-content-end">
            <a href="{{ route('products.index') }}" class="btn btn-dark">Back</a>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card border-0 shadow-lg my-3">
                <div class="card-header bg-dark">
                    <h3 class="text-white">Edit Product</h3>
                </div>
                <form enctype="multipart/form-data" action="{{ route ('products.store') }}" method="POST">
                 @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="" class="form-label h5">Name</label>
                            <input value="{{ old('name', $product->name) }}" type="text" class="@error('name') is-invalid @enderror form-control form-control-lg" placeholder="Name" name="name">
                            @error('name')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label h5">Sku</label>
                            <input value="{{ old('sku', $product->sku) }}" type="text" class="@error('sku') is-invalid @enderror form-control form-control-lg" placeholder="Sku" name="sku">
                             @error('sku')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label h5">Price</label>
                            <input value="{{ old('price', $product->price) }}" type="text" class="@error('price') is-invalid @enderror form-control form-control-lg" placeholder="Price" name="price">
                             @error('price')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label h5">Description</label>
                        <textarea name="description" cols="30" rows="5" class="form-control" placeholder="Description">{{ old('description', $product->description) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label h5">Image</label>
                            <input type="file" class="form-control form-control-lg" name="image">
                            @if ($product->image != '')
                                       <img class="w-50 my-2" src="{{asset('uploads/products/'.$product->image)}}" alt=""> 
                            @endif
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-lg btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection