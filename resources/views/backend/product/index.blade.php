@extends('backend.main')

@section('contact')

<a href="/admin/product/create_form" class="btn btn-success float-right mb-3"><i class="fa fa-plus"></i> New</a>

<table id="dtBasicExample" class="mt-3 table table-striped table-bordered table-sm" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th class="th-sm">Name</th>
            <th class="th-sm">Price</th>
            <th class="th-sm">Description</th>
            <th class="th-sm">Image</th>
            <th class="th-sm"></th>
        </tr>
    </thead>
    <tbody>
        @foreach( $products as $product )
        <tr>
            <td class="h4">{{ $product->title }}</td>
            <td class="h4">{{ $product->price }}</td>
            <td>{{ $product->description }}</td>
            <td>
                <!-- <img width=150px height=150px id="myImg" src="{{ asset ( 'uploads/product/' . $product->image ) }}"> -->
                <a href="{{ asset ( 'uploads/product/' . $product->image ) }}"
                    class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter cat">
                    <img width=150px height=150px src="{{ asset ( 'uploads/product/' . $product->image ) }}">

                </a>
            </td>
            <td>
                <a href='product/update/{{ $product->id }}' class="h3"><i
                        class="text-success fa fa-pencil"></i></a>&nbsp
                <a href='product/detail/{{ $product->id }}' class="h3"><i class="text-warning fa fa-info"></i></a>&nbsp
                <a href='product/delete/{{ $product->id }}' class="h3"><i class="text-danger fa fa-trash"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Image</th>
            <th></th>
        </tr>
    </tfoot>
</table>

{{ $products->links() }}

@endsection