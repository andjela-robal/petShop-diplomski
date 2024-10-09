@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h1>Contact Us</h1>
            <p>If you have any questions or need assistance, feel free to reach out to us! We will get back to you as soon as possible!</p>
            <h5><i class="fas fa-map-marker-alt"></i> Our Address:</h5>
            <p>Street Name 10<br> 11100 Belgrade</p>
            <h5><i class="fas fa-envelope"></i> Email:</h5>
            <p>happypets-info@gmail.com</p>
            <h5><i class="fas fa-phone"></i> Phone:</h5>
            <p>(060) 123-5678<br>(063) 234-8901</p>
        </div>
        <div class="col-md-6 text-center">
            <img src="{{ asset('images/contact-us.jpg') }}" alt="Contact Us" class="img-fluid" style="margin-top: 20px;">
        </div>
    </div>
</div>
@endsection