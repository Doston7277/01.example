@extends('backend.main')

@section('contact')

<center class="mb-5">
    <h2>Update</h2>
</center>

<form action="/admin/product/update" method="POST" enctype="multipart/form-data">
    @csrf

    <input hidden name="id" type="text" class="form-control" value="{{ $product->id }}">

    <div class="form-group">
        <input name="title" type="text" class="form-control" value="{{ $product->title }}">
    </div>
    <div class="form-group">
        <input name="price" type="text" class="form-control" value="{{ $product->price }}">
    </div>
    <div class="form-group">
        <textarea name="description" type="text" class="form-control">{{ $product->description }}</textarea>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-2">
                <a href="{{ asset ( 'uploads/product/' . $product->image ) }}"
                    class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter cat">
                    <img width=150px src="{{ asset ( 'uploads/product/' . $product->image ) }}">

                </a>
            </div>
            <div class="col-md-9 ml-5 mt-5">
                <input name="image" type="file" class="form-control-file"
                    value="{{ asset ( 'uploads/product/' . $product->image ) }}">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-danger" href="/admin/product">Cancel</a>
</form>
@endsection