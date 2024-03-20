@extends('home.layouts.app')
@section('content')



<main>
    <!-- sec-about-banner start here -->
    <section class="sec-about-banner donate-bg" style="background: linear-gradient(
        360deg,
        rgba(10, 41, 46, 0.5) 0%,
        rgba(10, 41, 46, 0.5) 100%
      ),
      url({{asset(get_cms('banner_image','donation','value'))}}) no-repeat;
    background-size: cover;
    padding: 180px 0 240px;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-ms-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="about-details">
                        <h2>{{ get_cms('banner_tittle','donation','value') }}</h2>
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">home</a>
                            </li>
                            <span> /</span>
                            <li class="nav-item">
                                <a class="nav-link" href="donate.php">Donate</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sec-about-banner end here -->


    <!-- Step Form Section Start Here -->

    <form id="signUpForm" action="#!">
        <div class="step">
            <div class="form-group">
                <div class="form-header mb-4">
                    <h4>{{ get_cms('section_1_card_tittle','donation','value') }}</h4>
                    <hr>
                    <p>{{ get_cms('section_1_card_desc','donation','value') }}
                    </p>
                </div>
                <img src="{{ asset(get_cms('section_1_card_image','donation','value')) }}" alt="image" />
                <div class="form-footer d-flex">
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Donate Now <i
                            class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
        <div class="step">
            <div class="chse-ant">
                <p>Choose Amount</p>
            </div>
            <div class="chs-discli">
                <p>How much would you like to donate? As a contributor to Biman Sadhu Cancer Treatment we make sure your
                    donation goes directly to supporting our cause.</p>
            </div>
            <div class="amt-div-inp">
                <label>$</label>
                <input type="number" name="number" required />
            </div>
            <div class="amt-dv-bx">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                        <div class="amt-bx">
                            <p><span>$</span>10</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                        <div class="amt-bx">
                            <p><span>$</span>10</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                        <div class="amt-bx">
                            <p><span>$</span>10</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                        <div class="amt-bx">
                            <p><span>$</span>10</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                        <div class="amt-bx">
                            <p><span>$</span>10</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                        <div class="amt-bx">
                            <p class="cut-amt">Custom Amount</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-footer d-flex">
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Continue <i
                        class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div>
        <div class="step">
            <div class="chse-ant">
                <p>Add Your Information</p>
            </div>
            <div class="chs-discli">
                <h4>Who's giving today?</h4>
                <p><i>We’ll never share this information with anyone.</i></p>
            </div>
            <div class="lst-inp-div">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="lst-inner-input">
                            <input type="text" placeholder="First Name *" required />
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="lst-inner-input">
                            <input type="text" placeholder="Last Name *" required />
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="lst-inner-input">
                            <input type="email" placeholder="Email Address *" required />
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion tab-lst-div" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> <input
                                type="radio" />Donate with Test Donation</button>

                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <img src="{{ asset('home/assets/images/gear.svg')}}" alt="images" />
                            <h6>Test GiveWP with the Test Donation Gateway</h6>
                            <p><strong>How it works:</strong> There are no fields for this gateway and you will not be
                                charged. This payment option is only for you to test the donation experience.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><input
                                type="radio" />Donate with Offline Donation</button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="pypl-tb-div">
                                <p>To make an offline donation toward this cause, follow these steps:</p>
                                <ol>
                                    <li>Write a check payable to "Better Mental Health For Life Foundation"</li>
                                    <li>On the memo line of the check, indicate that the donation is for "Better Mental
                                        Health For Life Foundation"</li>
                                    <li>Mail your check to:</li>
                                </ol>
                                <p><i>Better Mental Health For Life Foundation <br> 111 Not A Real St. <br> Anytown, CA
                                        12345</i></p>
                                <p>Your tax-deductible donation is greatly appreciated!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><input
                                type="radio" />Donate with PayPal</button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <img src="{{ asset('home/assets/images/paypal.svg')}}" alt="images" />
                            <h6>Test GiveWP with the Test Donation Gateway</h6>
                            <p><strong>How it works:</strong> There are no fields for this gateway and you will not be
                                charged. This payment option is only for you to test the donation experience.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><input
                                type="radio" />Donate with Credit Card</button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <a href="void:;">
                                <img src="{{ asset('home/assets/images/paypal.svg')}}" alt="images" />
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="lst-pra">
                <p>Here's what you're about to donate:</p>
            </div>
            <div class="summry-lst-dv">
                <div class="lst-div-sum">
                    <p><b>Donation Summary</b></p>
                    <a href="void">Edit Donation</a>
                </div>
                <div class="lst-div-sum">
                    <p>Donation Summary</p>
                    <p>$100</p>
                </div>
                <div class="lst-div-sum">
                    <p>Donation Summary</p>
                    <p>$100</p>
                </div>
                <div class="lst-div-sum">
                    <p><b>Donation Summary</b></p>
                    <p><b>$100</b></p>
                </div>
            </div>

        </div>
    </form>
    <!-- Step Form Section End Here -->
</main>

@endsection
