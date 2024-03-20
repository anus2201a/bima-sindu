@extends('home.layouts.app')
@section('content')



<!-- sec-about-banner start here -->
<section class="sec-about-banner donate-bg">
    <div class="container">
        <div class="row">
            <div class="col-12 col-ms-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="about-details">
                    <h2>FAQ</h2>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">home</a>
                        </li>
                        <span> /</span>
                        <li class="nav-item">
                            <a class="nav-link" href="faq.php">FAQ's</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- sec-about-banner end here -->


<!-- Faq Section Start Here -->
<section class="faq-sec-main">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="faq-img-div">
                    <img src="{{ asset('home/assets/images/faq-image.webp') }}" alt="image" />
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="faq-content-main">
                    <div class="faq-cont-head">
                        <h6>COMMON QUESTIONS</h6>
                        <h2>Have a Questions? Find its answer in our FAQ.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                            ullamcorper mattis, pulvinar dapibus leo.</p>
                    </div>

                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How Group Therapy Works?</button>

                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Euismod nisl nibh convallis massa leo montes turpis auctor nec quis magnis ridiculus
                                    iaculis pharetra ultricies litora hac vel conubia natoque metus tortor posuere
                                    congue fringilla sed mi at malesuada
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What
                                    If I Don't Find The Right Therapist?</button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="pypl-tb-div">
                                        Adipiscing at luctus aliquam senectus elit tristique imperdiet interdum potenti
                                        id nullam mauris nisi molestie hendrerit nascetur primis montes ultrices
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">When Will I Get Better?</button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Molestie enim eros fermentum hac blandit pede consectetuer ut vitae quis mus mi
                                    imperdiet auctor laoreet
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">What Is Your Approach?</button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Fusce placerat vivamus ipsum magnis amet suscipit quisque natoque velit imperdiet
                                    facilisis semper hendrerit ligula nascetur tempus nam
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive">What Is Your Approach?</button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Fusce placerat vivamus ipsum magnis amet suscipit quisque natoque velit imperdiet
                                    facilisis semper hendrerit ligula nascetur tempus nam
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">What
                                    Is Your Approach?</button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Fusce placerat vivamus ipsum magnis amet suscipit quisque natoque velit imperdiet
                                    facilisis semper hendrerit ligula nascetur tempus nam
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Faq Section End Here -->




@endsection
