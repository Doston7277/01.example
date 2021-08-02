@extends ('frontend.main')


@section('contact')


<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
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
            <td>{{ $product->title }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->description }}</td>
            <td>
                <a href="{{ asset ( 'uploads/product/' . $product->image ) }}"
                    class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter cat">
                    <img width=150px height=150px id="myImg" src="{{ asset ( 'uploads/product/' . $product->image ) }}">

                </a>
                <!-- <img width=150px height=150px id="myImg" src="{{ asset ( 'uploads/product/' . $product->image ) }}"> -->
            </td>
            <td>
                <a href="product/detail/{{ $product->id }}" class="h3 text-decoration-none">&nbsp <i
                        class="text-warning fa fa-info"></i> </a>
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th class="th-sm">Name</th>
            <th class="th-sm">Price</th>
            <th class="th-sm">Description</th>
            <th class="th-sm">Image</th>
            <th class="th-sm"></th>
        </tr>
    </tfoot>
</table>

{{ $products->links() }}

@endsection