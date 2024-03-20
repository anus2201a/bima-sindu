
@extends('home.layouts.app')
@section('content')


<main>

    <!-- Blog Crd Section Start Here -->
    <section class="blg-main-sec" >
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="blg-cont-head">
                        <h1>Navigating the Frontiers: Advancements in Psychiatry</h1>
                    </div>
                </div>
            </div>
            <div class="blg-sec-crd">
                <div class="row">
                    @foreach ($data as $blog)
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="blg-sec-crd-div">
                            <img src="{{ asset($blog->image) }}" alt="img" class="img-fluid">
                            <div class="recent-detail">
                                <h6 class="heading-six"> <a href="supporting-young-cancer-survivors.php">{{$blog->tittle}}</a></h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum
                                    has been the industry’s standard dummy text ever since the 1500s,</p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    {{-- <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="blg-sec-crd-div">
                            <img src="{{ asset('home/assets/images/head.webp') }}" alt="img" class="img-fluid">
                            <div class="recent-detail">
                                <h6 class="heading-six"> <a href="supporting-young-cancer-survivors.php">Astrocytes in
                                        the Traumatic Brain Injury: the Good
                                        and
                                        the Bad</a></h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum
                                    has been the industry’s standard dummy text ever since the 1500s,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="blg-sec-crd-div">
                            <img src="{{ asset('home/assets/images/head.webp') }}" alt="img" class="img-fluid">
                            <div class="recent-detail">
                                <h6 class="heading-six"> <a href="supporting-young-cancer-survivors.php">Astrocytes in
                                        the Traumatic Brain Injury: the Good
                                        and
                                        the Bad</a></h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum
                                    has been the industry’s standard dummy text ever since the 1500s,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="blg-sec-crd-div">
                            <img src="{{ asset('home/assets/images/head.webp') }}" alt="img" class="img-fluid">
                            <div class="recent-detail">
                                <h6 class="heading-six"> <a href="supporting-young-cancer-survivors.php">Astrocytes in
                                        the Traumatic Brain Injury: the Good
                                        and
                                        the Bad</a></h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum
                                    has been the industry’s standard dummy text ever since the 1500s,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="blg-sec-crd-div">
                            <img src="{{ asset('home/assets/images/head.webp') }}" alt="img" class="img-fluid">
                            <div class="recent-detail">
                                <h6 class="heading-six"> <a href="supporting-young-cancer-survivors.php">Astrocytes in
                                        the Traumatic Brain Injury: the Good
                                        and
                                        the Bad</a></h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum
                                    has been the industry’s standard dummy text ever since the 1500s,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="blg-sec-crd-div">
                            <img src="{{ asset('home/assets/images/head.webp') }}" alt="img" class="img-fluid">
                            <div class="recent-detail">
                                <h6 class="heading-six"> <a href="supporting-young-cancer-survivors.php">Astrocytes in
                                        the Traumatic Brain Injury: the Good
                                        and
                                        the Bad</a></h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum
                                    has been the industry’s standard dummy text ever since the 1500s,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="blg-sec-crd-div">
                            <img src="{{ asset('home/assets/images/head.webp') }}" alt="img" class="img-fluid">
                            <div class="recent-detail">
                                <h6 class="heading-six"> <a href="supporting-young-cancer-survivors.php">Astrocytes in
                                        the Traumatic Brain Injury: the Good
                                        and
                                        the Bad</a></h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum
                                    has been the industry’s standard dummy text ever since the 1500s,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="blg-sec-crd-div">
                            <img src="{{ asset('home/assets/images/head.webp') }}" alt="img" class="img-fluid">
                            <div class="recent-detail">
                                <h6 class="heading-six"> <a href="supporting-young-cancer-survivors.php">Astrocytes in
                                        the Traumatic Brain Injury: the Good
                                        and
                                        the Bad</a></h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum
                                    has been the industry’s standard dummy text ever since the 1500s,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="blg-sec-crd-div">
                            <img src="{{ asset('home/assets/images/head.webp') }}" alt="img" class="img-fluid">
                            <div class="recent-detail">
                                <h6 class="heading-six"> <a href="supporting-young-cancer-survivors.php">Astrocytes in
                                        the Traumatic Brain Injury: the Good
                                        and
                                        the Bad</a></h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum
                                    has been the industry’s standard dummy text ever since the 1500s,</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Crd Section End Here -->


</main>


         @endsection
