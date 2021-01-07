@extends('layouts.app')
@section('content')
 <!-- Breadcrumb Start -->
 <div class="breadcrumb-wrap">
    <div class="container">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Contact</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Contact Start -->
<div class="contact">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="contact-form">
                    <form action="{{route('contact.now')}}" method="GET">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                @error('name')
                                    <span style="color: rgb(226, 11, 11)">{{$message}}</span>
                                @enderror
                                <input type="text" class="form-control" placeholder="Your Name" name="name" value="{{old('name')}}" />
                            </div>
                            <div class="form-group col-md-6">
                                @error('email')
                                    <span style="color: rgb(226, 11, 11)">{{$message}}</span>
                                @enderror
                                <input type="email" class="form-control" placeholder="Your Email" name="email" value="{{old('email')}}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            @error('subject')
                                <span style="color: rgb(241, 11, 11)">{{$message}}</span>
                            @enderror
                            <input type="text" class="form-control" placeholder="Subject" name="subject" value="{{old('subject')}}"/>
                        </div>
                        <div class="form-group">
                            @error('message')
                                <span style="color: rgb(226, 11, 11)">{{$message}}</span>
                            @enderror
                            <textarea class="form-control" rows="5" placeholder="Message" name="message">{{old('message')}}</textarea>
                        </div>
                        <div><button class="btn" type="submit">Send Message</button></div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-info">
                    <h3>Get in Touch</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In condimentum quam ac mi viverra dictum. In efficitur ipsum diam, at dignissim lorem tempor in. Vivamus tempor hendrerit finibus.
                    </p>
                    <h4><i class="fa fa-map-marker"></i>123 News Street, NY, USA</h4>
                    <h4><i class="fa fa-envelope"></i>info@example.com</h4>
                    <h4><i class="fa fa-phone"></i>+123-456-7890</h4>
                    <div class="social">
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection
