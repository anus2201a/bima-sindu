@extends('home.layouts.app')
@section('content')

<main>

    <!-- sec-home-banner start here -->
    <section class="sec-home-banner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="banner-details">
                        <h6 class="heading-six">{{ get_cms('section_1_heading','home','value') }}</h6>
                        <h1 class="heading-one">{!! get_cms('section_1_tittle','home','value') !!}
                        </h1>
                        <p>{!! get_cms('section_1_desc','home','value') !!}</p>
                        <div class="banner-button">
                            <a href="" class="btn read-btn">read more <i class="fa-solid fa-circle-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sec-home-banner end here -->
    <!-- sec-home-button start here -->
    <section class="sec-home-button">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="button-detail">
                        <a href="" class="btn help-btn">Help a Click Away </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- sec-home-button end here -->
    <section class="sec-home-banner banner-inner">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="banner-inner">
                        <div class="card banner-card">
                            <h2>{{ get_cms('section_2_tittle','home','value') }}</h2>
                            <div class="bnr-crd-button">
                                <a href="" class="btn down-btn"><i class="fa-brands fa-android"></i> download app  </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</main>



@endsection
@section('css')
    <style>

    </style>
@endsection
