@extends('layouts.app')
@section('content')
<div class="container">
    <div class="bg-dark py-2">
        <h3 class="text-white text-center">Simple Laravel CRUD</h3>
    </div>
    <div class="roe d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card border-0 shadow-lg my-3">
                <div class="card-header">
                    <h3>Create Product</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control form-control-lg" placeholder="Name" name="name">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection