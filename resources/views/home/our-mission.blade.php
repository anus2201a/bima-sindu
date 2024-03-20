
@extends('home.layouts.app')
@section('content')


<main>


    <!-- sec-about-banner start here -->
    <section class="sec-about-banner mission" style="  background: linear-gradient(
        360deg,
        rgb(10 41 46 / 60%) 0%,
        rgb(10 41 46 / 60%) 100%
      ),
      url({{asset(get_cms('banner_image','our_mission','value'))}}) no-repeat;
    background-size: cover;
    background-position: center;
    padding: 250px 0;
    position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-ms-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="about-details">
                        <h2 class="heading-two">{{ get_cms('banner_tittle','our_mission','value') }}</h2>
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">home</a>
                            </li>
                            <span> /</span>
                            <li class="nav-item">
                                <a class="nav-link" href="our-mission.php">Our Mission</a>
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
            <div class="row justify-content-start align-items-start">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="story-img">
                        <img src="{{asset(get_cms('section_1_image','our_mission','value'))}}" alt="img" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5">
                    <div class="story-info mission">
                        <h6 class="heading-six">{{ get_cms('section_1_heading','our_mission','value') }}</h6>
                        <h4 class="heading-four">{{ get_cms('section_1_tittle','our_mission','value') }}</h4>
                        <p>{{ get_cms('section_1_desc','our_mission','value') }}</p>
                        <h4 class="heading-four">{{ get_cms('section_1_tittle_1','our_mission','value') }}</h4>
                        <p>{{ get_cms('section_1_desc_1','our_mission','value') }}
                        </p>
                        <h4 class="heading-four">{{ get_cms('section_1_tittle_2','our_mission','value') }}</h4>
                        <p>{{ get_cms('section_1_desc_2','our_mission','value') }} </p>
                        <h4 class="heading-four">{{ get_cms('section_1_tittle_3','our_mission','value') }}</h4>
                        <p>{{ get_cms('section_1_desc_3','our_mission','value') }} </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- sec-story  end here -->

    <section class="sec-story">
        <div class="container">
            <div class="row justify-content-start align-items-start">
                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5">
                    <div class="story-info mission">
                        <h6 class="heading-six">{{ get_cms('section_1_heading','our_mission','value') }}</h6>
                        <h4 class="heading-four">{{ get_cms('section_2_tittle','our_mission','value') }}</h4>
                        <p>{{ get_cms('section_2_desc','our_mission','value') }}</p>
                        <h4 class="heading-four">{{ get_cms('section_2_tittle_1','our_mission','value') }}</h4>
                        <p>{{ get_cms('section_2_desc_1','our_mission','value') }}
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="story-img">
                        <img src="{{ asset(get_cms('section_2_image','our_mission','value'))}}" alt="img" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>









</main>
   @endsection
