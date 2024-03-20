@extends('home.layouts.app')
@section('content')
    <!-- sec-about-banner start here -->
    <section class="sec-about-banner donate-bg"
        style="background: linear-gradient(
    360deg,
    rgba(10, 41, 46, 0.5) 0%,
    rgba(10, 41, 46, 0.5) 100%
  ),
  url({{ asset(get_cms('banner_image', 'contact_us', 'value')) }}) no-repeat;
background-size: cover;
padding: 180px 0 240px;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-ms-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="about-details">
                        <h2>{{ get_cms('banner_tittle', 'contact_us', 'value') }}</h2>
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">home</a>
                            </li>
                            <span> /</span>
                            <li class="nav-item">
                                <a class="nav-link" href="contact-us.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sec-about-banner end here -->


    <!-- Contact Form Section Start Here -->
    <section class="cont-form-sec-main">
        <div class="container">
            <div class="row">

                <div class="col-12 coll-sm-12 col-md-12 col-lg-12 col-xl-12">

                    @if (session()->has('success'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong> {{ session()->get('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="frm-cont-div">
                        <h2>Send us a message</h2>
                        <form action="{{ route('inquiry.contact') }}" method="POST">
                            @csrf
                            <div class="conta-inp-inner">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="cont-input">
                                            <label>First Name</label>
                                            <input type="text" name="name" value="{{ old('name') }}" class="text-dark" placeholder="Name" >
                                            @if($errors->has('name'))
                                            <div class="text-danger">{{ $errors->first('name') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="cont-input">
                                            <label>Email Address</label>
                                            <input type="text" name="email" value="{{ old('email') }}" class="text-dark" placeholder="Email Address" >
                                            @if($errors->has('email'))
                                            <div class="text-danger">{{ $errors->first('email') }}</div>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <div class="cont-input">
                                            <label>Subject</label>
                                            <input type="text" name="subject" value="{{ old('subject') }}" class="text-dark" placeholder="Subject" >
                                            @if($errors->has('subject'))
                                            <div class="text-danger">{{ $errors->first('subject') }}</div>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <div class="cont-input">
                                            <label>Comments / Questions</label>
                                            <textarea name="message" value="{{ old('message') }}" class="text-dark" placeholder="Your Message">{{ old('message') }}</textarea>
                                            @if($errors->has('message'))
                                            <div class="text-danger">{{ $errors->first('message') }}</div>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <div class="">
                                            <button type="submit"><i class="fa-regular fa-envelope"></i> Send
                                                Message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form Section End Here -->
@endsection
