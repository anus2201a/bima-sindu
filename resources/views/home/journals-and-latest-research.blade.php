@extends('home.layouts.app')
@section('content')


<main>


    <!-- sec-about-banner start here -->
    <section class="sec-about-banner" style="  background: linear-gradient(
        360deg,
        rgb(10 41 46 / 60%) 0%,
        rgb(10 41 46 / 60%) 100%
      ),
      url({{asset(get_cms('banner_image','journals_and_latest_research','value'))}}) no-repeat;
      background-size: cover;
  background-position: center center;
  padding: 118px 0;
  position: relative;">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-ms-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="about-details">
                        <h2 class="heading-two">{{ get_cms('banner_tittle','journals_and_latest_research','value') }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- sec-about-banner end here -->

    <!-- sec-servivor start here -->

    <section class="sec-servivor">
        <div class="container">
            <div class="row justify-content-between ">
                <div class="col-12 col-sm-12 col-12 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="journals-card">
                        <div class="journal-img">
                            <img src="{{ asset($data->image ?? '') }}" alt="img" class="img-fluid">
                        </div>
                        <div class="journal-info">
                            <h6>{{ ($data->tittle) }}</h6>
                            <span>{{date('d-M-Y', strtotime($data->created_at ?? ''))}}</span>
                            <p>{{ ($data->description ?? '') }}</p>
                            <a href="supporting-young-cancer-survivors.php">read more<i class="fa-solid fa-chevrons-right"></i></a>
                        </div>
                    </div>
                    <div class="news-letter">
                        <div class="card news-card">
                            <div class="news-info">
                                <h4 class="heading-four">Newsletter</h4>
                                <div class="line"></div>
                                <p>Sign up our newsletter to get update information, news and free insight.</p>
                                <div class="form-group">
                                    <input type="Email" name="Email" placeholder="Email Address" required>
                                </div>
                                <div class="news-button">
                                    <button class="btn sign-btn">sign up</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-sm-12 col-12 col-lg-8 col-xl-4 col-xl-4 col-xxl-4">
                    <div class="search-area">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button type="search" class="btn search-btn"><i
                                class="fa-light fa-magnifying-glass"></i></button>
                    </div>
                    <div class="news-letter">
                        <div class="card news-card info">
                            <div class="news-info">
                                <h4 class="heading-four">Latest Post</h4>
                                <div class="line"></div>
                                <div class="inner-info">
                                    <div class="inner-info-para">
                                        <a href="supporting-young-cancer-survivors.php">
                                            <p>{{ $data->tittle ?? '' }}</p>
                                        </a>
                                    </div>
                                    <div class="info-details-img">
                                        <img src="{{ asset($data->image ?? '') }}" alt="">
                                    </div>
                                </div>
                                <h6>{{date('d-M-Y', strtotime($data->created_at ?? ''))}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- sec-servivor end here -->


</main>
         @endsection
