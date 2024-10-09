@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">
        About Happy Pets and our online store
    </h1>
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('images/about-us.jpg') }}" alt="About Us" class="img-fluid">

        </div>
        <div class="col-md-6">
            <p class="lead text-center">
                Providing supplies for happy pets!
            </p>
            <p>
                Welcome to Happy Pets! Here we are looking to provide pet supplies of the highest quality for your beloved pets.
            </p>
            <p>
                Happy Pets was first founded in 2010, with our first store existing in Belgrade and since then we have opened ten more stores across Serbia. We will provide only the best quality supplies for a wide variety of pets, and we guarantee that our products are the best that you can get for their price. We also often provide various discounts!
            </p>
            <p>
                The products we provide are pet food, acessories, pet toys, grooming supplies and many more! We also make sure to constantly update our most popular products' stock.
            </p>
            <p>
                We provide very fast shipping, as fast as 1-2 days. Our support team is constantly online so feel free to contact us regarding any questions you may have about choosing the right supplies for your pets.             </p>
            <p>
                We will be happy if you choose us, and your pets will surely be happy too!            </p>
        </div>
    </div>
</div>
@endsection