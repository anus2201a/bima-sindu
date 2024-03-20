@extends('home.layouts.app')
@section('content')
    <main>
        <!-- Banner Section Start Here -->
        <section class="ment-healt-baner">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="banner-cont-head-ment">
                            <!-- <h1>Mental Health</h1>
                    <p>Resources for youth</p> -->
                            <img src="{{ asset('home/assets/images/mental-health-resource-hub-banner.jpg') }}" alt="image"
                                class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Section End  Here -->
        <!-- Digital Mental Section start Here -->
        <section class="digital-men-sec-main">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="digit-ment-img-div">
                            <img src="{{ asset('home/assets/images/digital-mental-health.jpeg') }}" alt="image"
                                class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="digital-cont-div">
                            <h2>Digital mental health support for youth, young adults, and families.</h2>
                            <p>A groundbreaking new program providing free, safe, and confidential mental health support for
                                young people and families across the state with two easy-to-use mobile apps:</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Digital Mental Section End Here -->
        <!-- Com Crd Section Start Here -->
        <section class="company-ment-card-main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-12 col-sm-12 col-lg-6 col-xl-6">
                        <div class="crd-men-div">
                            <img src="{{ asset('home/assets/images/brightlifekid.png') }}" alt="image"
                                class="img-fluid" />
                            <h3>Get support with the tough stuff & help your child thrive.</h3>
                            <p>Behavioral health coaching for parents, caregivers, and children 0–12.</p>
                            <div class="crd-men-btn">
                                <a href="https://www.hellobrightline.com/brightlifekids/?utm_medium=referral&utm_source=calhopewebsite"
                                    target="_blank">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12 col-lg-6 col-xl-6">
                        <div class="crd-men-div">
                            <img src="{{ asset('home/assets/images/soluna.png') }}" alt="image" class="img-fluid" />
                            <h3>Your space to explore your mental health journey.</h3>
                            <p>Confidential support for 13- to 25-year-olds in California.</p>
                            <div class="crd-men-btn soluna-btn">
                                <a href="https://solunaapp.com/" target="_blank">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Com Crd Section End Here -->
        <!-- third card column section start Here -->
        <section class="schol-resouces-main-sec">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="school-resouces-crd-dv">
                            <img src="{{ asset('home/assets/images/back-to-school.png') }}" alt="images"
                                class="img-fluid" />
                            <h3>Back-to-School Resources</h3>
                            <p> Resources to support you, your family or friends.</p>
                            <div class="schl-res-btn-main">
                                <a href="void:;">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="school-resouces-crd-dv">
                            <img src="{{ asset('home/assets/images/button-988.png') }}" alt="images" class="img-fluid" />
                            <h3>988 Suicide & Crisis Lifeline</h3>
                            <p><strong>Call or Text 988</strong> <br> Operating Hours: 24/7</p>
                            <div class="schl-res-btn-main">
                                <a href="void:;">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="school-resouces-crd-dv">
                            <img src="{{ asset('home/assets/images/calhope.png') }}" alt="images" class="img-fluid" />
                            <h3>CalHOPE</h3>
                            <p><strong>Call or Chat: <a href="tel:+1-833-317-4673">833-317-4673</a></strong> <br> Operating
                                Hours: 24/7</p>
                            <div class="schl-res-btn-main">
                                <a href="void:;">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- third card column section End Here -->
        <!-- Mental health Resouces Card Section Start Here -->
        <section class="ment-heal-resources-main">
            <div class="container-fluid">
                <div class="row">
                    @if (count($search_hospital) > 0)
                        @if ($search_hospital[0]->type == 'for_youth')
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="healh-head-dv">
                                    <h2>Mental Health Resources for Youth</h2>
                                </div>
                                <div class="mental-health-para-dv">
                                    <h3>We all need help sometimes. You are not alone.</h3>
                                    <p>It’s okay to not feel okay. We all feel sad, anxious, upset or angry sometimes. If
                                        you, your
                                        family or friends need someone to talk to, contact any of the following
                                        organizations:</p>
                                </div>
                            </div>
                        @elseif($search_hospital[0]->type == 'parent_and_family')
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="healh-head-dv">
                                    <h2>Mental Health Resources for Parents, Family and Friends</h2>
                                </div>
                                <div class="mental-health-para-dv">
                                    <h3>Worried about your child’s mental health? Learn how to help.</h3>
                                    <p>Is your child or someone you love going through a tough time emotionally? Check out
                                        the following resources to better understand the warning signs, and offer the
                                        support they need.</p>
                                </div>
                            </div>
                        @elseif($search_hospital[0]->type == 'for_school')
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="healh-head-dv">
                                    <h2>Mental Health Resources for Schools & Teachers</h2>
                                </div>
                                <div class="mental-health-para-dv">
                                    <h3>Find tools to help you recognize and support the mental health of your students.
                                    </h3>
                                    <p>A student’s ability to learn is affected by their mental and emotional well-being.
                                        These resources are designed to help schools and teachers support young people
                                        struggling with mental health issues. </p>
                                </div>
                            </div>
                        @else
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="healh-head-dv">
                                    <h2>Mental Health Resources for National</h2>
                                </div>
                                <!--<div class="mental-health-para-dv">-->
                                <!--    <h3>Find tools to help you recognize and support the mental health of your students.</h3>-->
                                <!--    <p>A student’s ability to learn is affected by their mental and emotional well-being. These resources are designed to help schools and teachers support young people struggling with mental health issues. </p>-->
                                <!--</div>-->
                            </div>
                        @endif
                    @else
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="healh-head-dv">
                                <h2 style="text-align:center">No record found..!</h2>
                            </div>
                        </div>
                    @endif
                    @foreach ($search_hospital as $data)
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                            <div class="mental-health-res-card-dv">
                                <h3>{{ $data->name ?? '' }}</h3>
                                <p><i>Operating Hours: {{ $data->timing ?? '' }}</i></p>
                                <p>{{ $data->description ?? '' }}</p>
                                @if ($data->phone_no != null)
                                    <p>Call or text <strong>{{ $data->phone_no ?? '' }}.</strong></p>
                                @endif
                                <!--<div class="ment-heal-res-btn-main">-->
                                <!--    <a href="void:;">Learn More</a>-->
                                <!--</div>-->
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Mental health Resouces Card Section End Here -->
    </main>
@endsection
