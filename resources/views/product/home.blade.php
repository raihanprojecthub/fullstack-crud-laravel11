@extends('layout')

@section('konten')

<table class="table table-striped">
  <tr>
    <th scope="col">#</th>
    <th scope="col">Product Name</th>
    <th scope="col">Price</th>
    <th width="200">Action</th>
  </tr>
  @foreach ($product as $no=>$data)
    <tr scope="row">
      <td>{{ $no+1 }}</td>
      <td>{{ $data->product_name }}</td>
      <td>{{ $data->price }}</td>
      <td class="d-flex gap-1">
        <a href="{{ route('product.edit', $data->id) }}" class="btn btn-sm btn-info text-white">Update</a>
        <form action="{{ route('product.delete', $data->id) }}" method="post">
          @csrf
          <button class="btn btn-sm btn-danger">Hapus</button>
        </form>
      </td>
    </tr>
  @endforeach
</table>
<a href="{{ route("product.tambah") }}" class="btn btn-primary">+ Add Product</a>

@endsection
