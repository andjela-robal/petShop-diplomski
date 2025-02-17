@extends('layouts.app')

@section('content')
<div class="container mx-auto px-1 py-6"> 
    <h1>Products</h1>
    <div class="row">
        @if(count($products) > 0)
        @foreach($products as $product)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card d-flex flex-column" style="height: 100%;">
                <img src="/storage/cover_images/{{ $product->cover_image }}" class="card-img-top p-2" alt="{{ $product->name }}">
                <div class="card-body d-flex flex-column" style="flex-grow: 1;">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">Category: {{ $product->category->name }}</p>
                    <p class="card-text">Price: {{ $product->price }} RSD</p>
                    <div class="mt-auto">
                        <a href="{{ route('products.show', $product->slug) }}" style="text-decoration: underline; color: #17a2b8; font-size: 1.2em;">See more</a>
                        @if(Auth::check())
                        <form action="{{ route('cart.add') }}" method="post" style="float: right;">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="quantity" value="1">
                            <button type="submit" class="btn btn-success">Add to Cart</button>
                        </form>
                        @else
                        <a href="{{ route('login') }}" class="btn btn-success" style="float: right;">Add to Cart</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{$products->links()}}
        @else
        <p>No products found</p>
        @endif
    </div>
</div>
@endsection