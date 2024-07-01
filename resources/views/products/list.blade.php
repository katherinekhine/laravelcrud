@extends('layouts.app')
@section('content')
<div class="bg-dark py-2">
    <h3 class="text-white text-center">Simple Laravel CRUD</h3>
</div>
<div class="container">
    <div class="row justify-content-center mt-3">
        <div class="col-md-10 d-flex justify-content-end">
            <a href="{{ route('products.create') }}" class="btn btn-dark">Crete</a>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        @if (Session::has('success'))
        <div class="col-md-10 mt-3">
          <div class="alert alert-success">
            {{ Session::get('success') }}
          </div>
        </div>
        @endif
        <div class="col-md-10">
            <div class="card border-0 shadow-lg my-3">
                <div class="card-header bg-dark">
                    <h3 class="text-white">Products</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection