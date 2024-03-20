
@extends('home.layouts.app')
@section('content')


<main>

    <!-- sec-about-banner start here -->
    <section class="sec-about-banner survivors-bg">
        <div class="container">
            <div class="row">
                <div class="col-12 col-ms-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="about-details surviors ">
                        <span>UNCATEGORIZED</span>
                        <h2 class="heading-two">Astrocytes in the Traumatic Brain Injury: the <br> Good and the Bad</h2>
                        <div class="surviors-info">
                            <h4>January 4, 2024</h4>
                            <h4><i class="fa-solid fa-comment-dots"></i>No Comments</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sec-about-banner end here -->
    <!-- sec-servivor start here -->

    <section class="sec-servivor">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-12 col-lg-8 col-xl-8 col-xl-8 col-xxl-8">
                    <div class="servivor-details">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book.</p>
                        <div class="servivor-social">
                            <ul class="social">
                                <div class="box">
                                    <li> <a href="void:;"><i class="fa-brands fa-facebook"></i>facebook</a>
                                    </li>
                                </div>
                                <div class="box">
                                    <li> <a href="void:;"><i class="fa-brands fa-twitter"></i>twitter</a>
                                    </li>
                                </div>
                                <div class="box">
                                    <li> <a href="void:;"><i class="fa-brands fa-linkedin"></i>linkedin</a>
                                    </li>
                                </div>
                                <div class="box">
                                    <li> <a href="void:;"><i class="fa-brands fa-whatsapp"></i>whatsapp</a>
                                    </li>
                                </div>
                            </ul>
                        </div>
                        <div class="g-box">
                            <div class="g-box-img">
                                <img src="{{ asset('home/assets/images/g-logo.png') }}" alt="img" class="img-fluid">
                            </div>
                            <div class="g-box-details">
                                <h4 class="heading-four"> theadmin</h4>
                            </div>
                        </div>
                        <div class="g-inner-box">
                            <h4 class="heading-four">Leave a Reply</h4>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <div class="contact-form">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label for="exampleInputComment">Comment <span>*</span></label>
                                                <textarea name="Comment" placeholder=""></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label for="exampleInputName">Name <span>*</span></label>
                                                <input type="text" name="name" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail">Email <span>*</span></label>
                                                <input type="Email" name="Email" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label for="exampleInputwebsite">website</label>
                                                <input type="website" name="website" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Save my name, email, and website in this browser for the next time I
                                                    comment.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <button type="submit" class="send-messages-btn">Post Comment</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
                        <div class="card news-card info">
                            <div class="news-info">
                                <h4 class="heading-four">Latest Post</h4>
                                <div class="line"></div>
                                <div class="inner-info">
                                    <div class="inner-info-para">
                                        <a href="supporting-young-cancer-survivors.php">
                                            <p>Astrocytes in the Traumatic Brain Injury: the Good and the Bad</p>
                                        </a>
                                    </div>
                                    <div class="info-details-img">
                                        <img src="{{ asset('home/assets/images/head-short.webp') }}" alt="">
                                    </div>
                                </div>
                                <h6>January 4, 2024</h6>
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
