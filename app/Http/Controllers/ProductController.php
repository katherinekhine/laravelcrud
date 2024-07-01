<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // This method will show products page
    public function index()
    {
    }

    // This method will show create products page
    public function create()
    {
        return view('products.create');
    }

    // This method will store product in db
    public function store()
    {
    }

    // This method will show edit products page
    public function edit()
    {
    }

    // This method will update products
    public function update()
    {
    }

    // This method will delete product
    public function destroy()
    {
    }
}
