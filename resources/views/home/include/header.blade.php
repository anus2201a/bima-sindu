

    <!-- header css start here -->
    <header>
        <div class="mobile-menu">
            <div class="circle" id="navbar"><i class="fa fa-bars" aria-hidden="true"></i></div>
            <div class="nveMenu text-left">
                <div class="mobile-cross close-btn-nav" id="navbar"><i class="fas fa-times" aria-hidden="true"></i>
                </div>
                <div class="mobile-menu-img">
                    <a href="{{ route('home') }}"><img src="{{asset('home/assets/images/logo.png')}}" class="img-fluid"></a>
                </div>
                <ul class="navlinks p-0 mt-4 mobile-dropdown">
                    <div class="main-dropdown-arrow">
                        <li><a href="{{ route('home') }}">home</a></li>
                        <li class="">
                            <div class="dropdown">
                                <a class="dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false"
                                    onclick="location.href='javascript:;'"> about us</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item button" href="{{ route('our-story') }}">our story </a>
                                    </li>
                                    <hr class="navi-drop-hr">
                                    <li><a class="dropdown-item button" href="{{ route('our-mission') }}">our mission
                                        </a></li>
                                    <hr class="navi-drop-hr">
                                    <li><a class="button" href="{{ route('privacy-policy') }}">privacy policy</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('survivors-profile') }}">Survivors Profile </a>
                        </li>
                        <li>
                            <a href="void:;"> Research And Education </a>
                        </li>
                        <li><a href="void:;">contact Mental Health Expert</a></li>

                        <li>
                            <a href="{{ route('contact-us') }}">contact us</a>
                        </li>
                    </div>
                </ul>
            </div>
            <div class="overlay"></div>
        </div>
    </header>
    <!-- top haeder start here -->
    <header>
        <div class="top-header">
            <div class="container">
                <div class="row ">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="top-nav">
                            <div class="top-nav-icon">
                                <div class="top-para">
                                    <a href="mailto:{{ get_cms('email_address','config','value') }};"><i
                                            class="fa-duotone fa-envelope"></i>{{ get_cms('email_address','config','value') }}</a>
                                </div>
                                <div class="top-para">
                                    <a href="telto:{{ get_cms('contact_number','config','value') }};"><i
                                            class="fa-sharp fa-solid fa-phone-volume"></i>{{ get_cms('contact_number','config','value') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="main-nav">
                            <div class="nav-socail-icon">
                                <ul>
                                    <li>
                                        <a href="{{ route('faq') }}">FAQ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- top haeder end here -->
    <header class="main-header-bg header d-none d-md-block">
        <div class="container">
            <div class="main-header">
                <div class="">
                    <a href="{{ route('home') }}"><img class="img-fluid main-logo" src="{{asset(get_cms('logo','logo-favicon','value'))}}" alt="logo"></a>
                </div>
                <div class="">
                    <div class="main-navigation">
                        <ul class="nav navbar-nar mx-auto">
                            <li>
                                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                            <li class="dropdown">
                                <a href="{{ route('about-us') }}" class="dropdown-toggle">about us <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <div class="main-dropdown-arrow">
                                        <li><a class="button" href="{{ route('our-story') }}">our story</a></li>
                                        <hr class="navi-drop-hr">
                                        <li><a class="button" href="{{ route('our-mission') }}">our mission</a></li>
                                        <hr class="navi-drop-hr">
                                        <li><a class="button" href="{{ route('privacy-policy') }}">privacy policy</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('survivors-profile') }}">Survivors Profile </a>
                            </li>
                            <li class="dropdown">
                                <a href="{{ route('contact-mental-health-expert') }}" class="dropdown-toggle">Mental Health
                                    Resources<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <div class="main-dropdown-arrow">
                                        <li><a class="button" href="{{ route('contact-mental-health-expert') }}">contact Mental
                                                Health Expert</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="{{ route('journals-and-latest-research') }}" class="dropdown-toggle">Research And
                                    Education<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <div class="main-dropdown-arrow">
                                        <li><a class="button" href="{{ route('pushing-boundaries-the-latest-research-in-psychiatry') }}">Pushing Boundaries: The Latest Research in
                                                Psychiatry</a></li>
                                        <li><a class="button" href="{{ route('top-journal-articles') }}">Top Journal Articles</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>

                            <li>
                                <a href="{{ route('contact-us') }}">contact us</a>
                            </li>
                            <li class="nav-btn">
                                <button><a href="{{ route('donation') }}">Donate Now</a></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header css end here -->
