@extends('backend.main')

@section('contact')

<center class="mb-5">
    <h2>Create</h2>
</center>

<form action="/admin/product/create" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label>Product name</label>
        <input name="title" type="text" class="form-control" placeholder="Enter title">
    </div>
    <div class="form-group">
        <label>Product price</label>

        <input name="price" type="text" class="form-control" placeholder="Enter price">
    </div>
    <div class="form-group">
        <label>Product description</label>

        <textarea name="description" type="text" class="form-control" placeholder="Enter description"></textarea>
    </div>
    <div class="form-group">
        <label>Product image</label>

        <input name="image" type="file" class="form-control-file">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-danger" href="/admin/product">Cancel</a>
</form>

@endsection