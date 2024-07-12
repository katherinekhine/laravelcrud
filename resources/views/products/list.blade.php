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
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th></th>
                            <th>Name</th>
                            <th>SKU</th>
                            <th>Price</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        @if ($products->isNotEmpty())
                          @foreach ($products as $product)
                              <tr>
                                <td>{{$product->id}}</td>
                                <td>
                                    @if ($product->image != '')
                                       <img width="55" src="{{asset('uploads/products/'.$product->image)}}" alt=""> 
                                    @endif
                                </td>
                                <td>{{ $product->name}}</td>
                                <td>{{$product->sku}}</td>
                                <td>$ {{$product->price}}</td>
                                <td>{{\Carbon\Carbon::parse($product->created_at)->format('d M, Y')}}</td>
                                <td>
                                    <a href="#" class="btn btn-dark">Edit</a>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                </td>
                              </tr>
                          @endforeach  
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection