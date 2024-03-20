@extends('home.layouts.app')
@section('content')


<main>


    <!-- sec-about-banner start here -->
    <section class="sec-about-banner story-bg" style="background: linear-gradient(
      360deg,
      rgb(10 41 46 / 55%) 0%,
      rgb(10 41 46 / 55%) 100%
    ),
      url({{asset(get_cms('banner_image','our_story','value'))}}) no-repeat;
    url(../images/Story.webp) no-repeat;
  background-size: cover;
  padding: 180px 0 560px;
  background-position: center;">>
        <div class="container">
            <div class="row">
                <div class="col-12 col-ms-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="about-details story">
                        <h2>Our Story</h2>
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">home</a>
                            </li>
                            <span> /</span>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('our-story') }}">Our Story</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- sec-about-banner end here -->
    <!-- sec-story start here -->
    <section class="sec-story">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5">
                    <div class="story-info">
                        <h6 class="heading-six">{{ get_cms('section_1_heading','our_story','value') }}</h6>
                        <h4 class="heading-four">{{ get_cms('section_main_tittle','our_story','value') }}</h4>
                        <p>{{ get_cms('section_1_desc_1','our_story','value') }}
                        </p>

                        <p>{{ get_cms('section_1_desc_2','our_story','value') }}</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="story-img">
                        <img src="{{ asset(get_cms('section_1_image','our_story','value')) }}" alt="img" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- sec-story  end here -->

</main>


@endsection
