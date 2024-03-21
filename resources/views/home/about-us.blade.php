@extends('home.layouts.app')
@section('content')


<main>


    <!-- sec-about-banner start here -->
    <section class="sec-about-banner " style="  background: linear-gradient(
        360deg,
        rgb(10 41 46 / 60%) 0%,
        rgb(10 41 46 / 60%) 100%
      ),
      url({{asset(get_cms('banner_image','about','value'))}}) no-repeat;
      background-size: cover;
  background-position: center center;
  padding: 118px 0;
  position: relative;">
        <div class="container">
          gsfgas  <div class="row">
                <div class="col-12 col-ms-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="about-details">
                        <h2 class="heading-two">{{ get_cms('banner_tittle','about','value') }}</h2>
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">home</a>
                            </li>
                            <span> /</span>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- sec-about-banner end here -->
    <!-- sec-home-about-para start here -->
    <section class="sec-home-about-para">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="about-para">
                        <p> {!! get_cms('section_1_tittle_1','about','value') !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- sec-home-about-para  end here -->




</main>

         @endsection
