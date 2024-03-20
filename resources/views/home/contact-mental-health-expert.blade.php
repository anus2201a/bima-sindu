@extends('home.layouts.app')
@section('content')
    <main>


        <!-- sec-about-banner start here -->
        <section class="sec-about-banner mental-bg "
            style="
      background: linear-gradient(
          360deg,
          rgb(10 41 46 / 60%) 0%,
          rgb(10 41 46 / 60%) 100%
    ),
    url({{ asset(get_cms('banner_image', 'contact-mental-health-expert', 'value')) }}) no-repeat;
  background-size: cover;
  padding: 350px 0;">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-ms-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="about-details mental">
                            {{-- <h2>Contact Mental Health Expert</h2> --}}
                            <h2>{{ get_cms('banner_tittle', 'contact-mental-health-expert', 'value') }}</h2>

                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">home</a>
                                </li>
                                <span> /</span>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact-mental-health-expert.php">contact mental health
                                        expert</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- sec-about-banner end here -->
        <!-- sec-mental-bg start here -->
        <section class="sec-mental-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-ms-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="mental-details">
                            <h4 class="heading-four">RESOURCE FOR MENTAL HEALTH CARE</h4>
                            <div class="mb-3">
                                <form action="{{ route('search.hospital') }}" method="GET">
                                    <input type="search" class="form-control" id="search-input"
                                        placeholder="Search Hospital By Zip Code" name="hospital_search"
                                        aria-label="Search">
                            </div>
                            <button type="submit" class="btn search-btn">Search now</button>

                            </form>

                            <div class="recent-img">
                                <h4 class="heading-four">Recent Post</h4>
                                <img src="{{ asset($data->image ?? '') }}" alt="img" class="img-fluid">
                                <div class="recent-detail">
                                    <h6 class="heading-six"><a
                                            href="supporting-young-cancer-survivors.php">{{ $data->tittle ?? '' }}</a>
                                    </h6>
                                    <p>{{ $data->description ?? '' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-ms-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="mental-box">
                            <div class="mentail-box-inner">
                                <h4 class="heading-four">RESOURCE FOR YOUTH</h4>
                                <form action="{{ route('search.hospital') }}" method="GET">
                                    <div class="mb-3">
                                        <input type="search" class="form-control " id="search-input"
                                            placeholder="Search Hospital By Zip Code" name="hospital_search"v
                                            aria-label="Search">

                                        <input type="hidden" class="form-control " id="search-input"
                                            placeholder="Search Hospital By Zip Code" name="tag" value="for_youth"
                                            aria-label="Search">
                                    </div>

                                    <button type="submit" class="btn search-btn">Search now</button>
                                </form>
                            </div>
                            <br>
                            <div class="mentail-box-inner">
                                <h4 class="heading-four">RESOURCE FOR PARENT'S FRIENDS AND FAMILY</h4>
                                <form action="{{ route('search.hospital') }}" method="GET">
                                    <div class="mb-3">
                                        <input type="search" class="form-control " id="search-input"
                                            placeholder="Search Hospital By Zip Code" name="hospital_search"
                                            aria-label="Search">

                                        <input type="hidden" class="form-control " id="search-input"
                                            placeholder="Search Hospital By Zip Code" name="tag"
                                            value="parent_and_family" aria-label="Search">
                                    </div>
                                    <button type="submit" class="btn search-btn">Search now</button>
                                </form>

                            </div>
                            <br>
                            <div class="mentail-box-inner">
                                <h4 class="heading-four"> RESOURCE FOR SCHOOL</h4>
                                <form action="{{ route('search.hospital') }}" method="GET">
                                    <div class="mb-3">
                                        <input type="search" class="form-control " id="search-input"
                                            placeholder="Search Hospital By Zip Code" name="hospital_search"
                                            aria-label="Search">

                                        <input type="hidden" class="form-control " id="search-input"
                                            placeholder="Search Hospital By Zip Code" name="tag" value="for_school"
                                            aria-label="Search">
                                    </div>
                                    <button type="submit" class="btn search-btn">Search now</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- sec-mental-bg start here -->




    </main>
@endsection
