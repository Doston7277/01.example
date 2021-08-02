@extends ('backend.main')

@section('contact')

    <div class="row">
        <div class="col-md-8">
            <img  width=100% src="{{ asset('uploads/product/' . $product->image ) }}">
        </div>
        <div class="col-md-4">
            <h1>Name: {{ $product->title }}</h1>
            <h3>Price: {{ $product->price }} so'm</h3>
            <p>{{ $product->description }}</p>
        </div>
    </div>

@endsection