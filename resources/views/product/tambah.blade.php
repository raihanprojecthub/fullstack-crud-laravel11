@extends('layout')

@section('konten')
    

<div class="col-md-6 offset-md-3">
  <h4 class="text-center">Tambah Product</h4>
  <form action="{{ route('product.submit') }}" method="post">
    @csrf
    <label for="product_name">Product Name</label>
    <input type="text" name="product_name" id="product_name" class="form-control mb-3" placeholder="Product Name">
    
    <label for="price">Price</label>
    <input type="number" name="price" id="price" class="form-control mb-3" placeholder="Price">

    <div class="div d-flex gap-1">
      <button class="btn btn-primary">Submit</button>
      <a href="{{ route("product.home") }}" class="btn btn-danger">Cancel</a>
    </div>
  </form>
</div>

@endsection