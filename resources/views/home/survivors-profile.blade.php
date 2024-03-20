@extends('home.layouts.app')
@section('content')



<main>


    <!-- sec-about-banner start here -->
    <section class="sec-about-banner profile-bg" style="  background: linear-gradient(
        360deg,
        rgba(10, 41, 46, 0.5) 0%,
        rgba(10, 41, 46, 0.5) 100%
      ),
      url({{asset(get_cms('banner_image','survivors_profile','value'))}}) no-repeat;
    background-size: cover;
    padding: 350px 0;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-ms-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="about-details">
                        <h2>{{ get_cms('banner_tittle','survivors_profile','value') }}</h2>
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">home</a>
                            </li>
                            <span> /</span>
                            <li class="nav-item">
                                <a class="nav-link" href="survivors-profile.php">Survivors Profile</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- sec-about-banner end here -->


    <!-- Form Section Start Here -->
    <section class="form-slide-main">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <div class="form-div">
                        <form action="" method="GET">
                            <div class="form-group">
                                <label for="name">First Name</label>
                                <input type="text" name="name" placeholder="Name" required="">
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="age">Age</label>
                                        <input type="number" name="age" placeholder="age" required="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <input type="text" name="gender" placeholder="gender" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div id="wysiwyg">
                                    <div class="btns">
                                        <div class="category">
                                            <select data-cmd="formatBlock">
                                                <option value="p">Paragraph</option>
                                                <option value="h1">Title 1</option>
                                                <option value="h2">Title 2</option>
                                                <option value="h3">Title 3</option>
                                            </select>
                                            <select data-cmd="fontSize">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                            </select>
                                            <select data-cmd="fontName">
                                                <option value="Arial">Arial</option>
                                                <option value="Roboto">Roboto</option>
                                                <option value="serif">Serif</option>
                                                <option value="sans-serif">Sans-serif</option>
                                            </select>
                                        </div>
                                        <div class="category">
                                            <button data-cmd="bold">
                                                <i class="fas fa-bold"></i>
                                            </button>
                                            <button data-cmd="italic">
                                                <i class="fas fa-italic"></i>
                                            </button>
                                            <button data-cmd="underline">
                                                <i class="fas fa-underline"></i>
                                            </button>
                                        </div>

                                        <div class="category">
                                            <input data-cmd="forecolor" type="color" value="#000000">
                                            <input data-cmd="backcolor" type="color" value="#FFFFFF">
                                        </div>

                                        <div class="category">
                                            <button data-cmd="justifyLeft">
                                                <i class="fas fa-align-left"></i>
                                            </button>
                                            <button data-cmd="justifyCenter">
                                                <i class="fas fa-align-center"></i>
                                            </button>
                                            <button data-cmd="justifyRight">
                                                <i class="fas fa-align-right"></i>
                                            </button>
                                            <button data-cmd="justifyFull">
                                                <i class="fas fa-align-justify"></i>
                                            </button>
                                        </div>

                                        <div class="category">
                                            <button data-cmd="indent">
                                                <i class="fas fa-indent"></i>
                                            </button>
                                            <button data-cmd="outdent">
                                                <i class="fas fa-outdent"></i>
                                            </button>
                                        </div>

                                        <div class="category">
                                            <button data-cmd="insertUnorderedList">
                                                <i class="fas fa-list-ul"></i>
                                            </button>
                                            <button data-cmd="insertOrderedList">
                                                <i class="fas fa-list-ol"></i>
                                            </button>
                                        </div>

                                        <div class="category">
                                            <button data-cmd="createlink" class="prompt">
                                                <i class="fas fa-link"></i>
                                            </button>
                                            <button data-cmd="insertimage" class="prompt">
                                                <i class="fas fa-image"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div id="editor" contentEditable>
                                        <!-- <h1>Type anything you want!</h1>
		<p>Here is a paragraph.</p> -->
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="file">Profile Image</label>
                                <input type="file" name="file" placeholder="No file chosen" required="">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="submit-btn">Create my
                                    Profile
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">
                    <div class="slide-surv">
                        <div class="slide-servbing owl-carousel owl-theme" id="slide-serv-owl">
                            <div class="item">
                                <div class="slider-serving">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                            <div class="slide-auth-img">
                                                <img src="{{ asset('home/assets/images/mike.jpeg') }}" alt="image" />
                                            </div>
                                            <div class="slide-auth-detail">
                                                <ul>
                                                    <li>mike</li>
                                                    <li>28</li>
                                                    <li>male</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                            <div class="slide-auth-det">
                                                <h4>My Story</h4>
                                                <p>Once upon a time, there lived a vibrant individual named Alex who was
                                                    known
                                                    for their boundless energy and adventurous spirit. Alex loved
                                                    exploring
                                                    the
                                                    outdoors, hiking through lush forests, and embarking on thrilling
                                                    adventures. However, one day, Alex’s life took an unexpected turn
                                                    when
                                                    they
                                                    began experiencing excruciating pain in their lower back and legs.
                                                    At
                                                    first,
                                                    Alex brushed off the discomfort, attributing it to overexertion from
                                                    their
                                                    outdoor activities. But as days turned into weeks, the pain only
                                                    intensified, making it difficult for Alex to even perform simple
                                                    tasks
                                                    like
                                                    walking or sitting for extended periods. Concerned, Alex sought
                                                    medical
                                                    attention and was diagnosed with sciatica—a condition characterized
                                                    by
                                                    pain
                                                    radiating along the sciatic nerve, which runs from the lower back
                                                    down
                                                    the
                                                    back of each leg. The diagnosis came as a shock to Alex, who had
                                                    never
                                                    experienced such debilitating pain before. Suddenly, their
                                                    once-active
                                                    lifestyle was put on hold as they grappled with the challenges of
                                                    managing
                                                    sciatica. Simple activities that were once taken for granted now
                                                    became
                                                    arduous tasks, and Alex found themselves struggling to cope with the
                                                    physical and emotional toll of their condition. Despite the pain,
                                                    Alex
                                                    refused to let sciatica define them. With unwavering determination,
                                                    they
                                                    embarked on a journey of healing and self-discovery. They diligently
                                                    followed their healthcare provider’s recommendations, which included
                                                    physical therapy, medication, and lifestyle modifications aimed at
                                                    alleviating the symptoms of sciatica. As Alex navigated through the
                                                    ups
                                                    and
                                                    downs of their journey, they discovered a newfound strength within
                                                    themselves—a resilience that allowed them to persevere in the face
                                                    of
                                                    adversity. They sought solace in the support of their loved ones,
                                                    who
                                                    stood
                                                    by their side through every step of their recovery process. Slowly
                                                    but
                                                    surely, Alex began to experience gradual improvement in their
                                                    condition.
                                                    The
                                                    pain became more manageable, and with each passing day, they
                                                    regained a
                                                    sense of normalcy in their life. They started to reintegrate
                                                    activities
                                                    they
                                                    once enjoyed, albeit with a newfound appreciation for the gift of
                                                    mobility
                                                    and health. Through their experience with sciatica, Alex learned
                                                    valuable
                                                    lessons about resilience, perseverance, and the importance of
                                                    self-care.
                                                    They discovered the power of patience and resilience in overcoming
                                                    life’s
                                                    challenges, emerging from their ordeal stronger and more resilient
                                                    than
                                                    ever
                                                    before. Though the journey through sciatica was fraught with
                                                    challenges,
                                                    it
                                                    ultimately became a transformative experience for Alex—a testament
                                                    to
                                                    the
                                                    indomitable human spirit and the triumph of hope over adversity. And
                                                    as
                                                    they
                                                    continued to embrace life’s adventures with renewed vigor, Alex
                                                    cherished
                                                    each moment, knowing that they had overcome one of life’s greatest
                                                    trials
                                                    and emerged victorious on the other side.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="slider-serving">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                            <div class="slide-auth-img">
                                                <img src="{{ asset('home/assets/images/mike.jpeg') }}" alt="image" />
                                            </div>
                                            <div class="slide-auth-detail">
                                                <ul>
                                                    <li>mike</li>
                                                    <li>28</li>
                                                    <li>male</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                            <div class="slide-auth-det">
                                                <h4>My Story</h4>
                                                <p>Once upon a time, there lived a vibrant individual named Alex who was
                                                    known
                                                    for their boundless energy and adventurous spirit. Alex loved
                                                    exploring
                                                    the
                                                    outdoors, hiking through lush forests, and embarking on thrilling
                                                    adventures. However, one day, Alex’s life took an unexpected turn
                                                    when
                                                    they
                                                    began experiencing excruciating pain in their lower back and legs.
                                                    At
                                                    first,
                                                    Alex brushed off the discomfort, attributing it to overexertion from
                                                    their
                                                    outdoor activities. But as days turned into weeks, the pain only
                                                    intensified, making it difficult for Alex to even perform simple
                                                    tasks
                                                    like
                                                    walking or sitting for extended periods. Concerned, Alex sought
                                                    medical
                                                    attention and was diagnosed with sciatica—a condition characterized
                                                    by
                                                    pain
                                                    radiating along the sciatic nerve, which runs from the lower back
                                                    down
                                                    the
                                                    back of each leg. The diagnosis came as a shock to Alex, who had
                                                    never
                                                    experienced such debilitating pain before. Suddenly, their
                                                    once-active
                                                    lifestyle was put on hold as they grappled with the challenges of
                                                    managing
                                                    sciatica. Simple activities that were once taken for granted now
                                                    became
                                                    arduous tasks, and Alex found themselves struggling to cope with the
                                                    physical and emotional toll of their condition. Despite the pain,
                                                    Alex
                                                    refused to let sciatica define them. With unwavering determination,
                                                    they
                                                    embarked on a journey of healing and self-discovery. They diligently
                                                    followed their healthcare provider’s recommendations, which included
                                                    physical therapy, medication, and lifestyle modifications aimed at
                                                    alleviating the symptoms of sciatica. As Alex navigated through the
                                                    ups
                                                    and
                                                    downs of their journey, they discovered a newfound strength within
                                                    themselves—a resilience that allowed them to persevere in the face
                                                    of
                                                    adversity. They sought solace in the support of their loved ones,
                                                    who
                                                    stood
                                                    by their side through every step of their recovery process. Slowly
                                                    but
                                                    surely, Alex began to experience gradual improvement in their
                                                    condition.
                                                    The
                                                    pain became more manageable, and with each passing day, they
                                                    regained a
                                                    sense of normalcy in their life. They started to reintegrate
                                                    activities
                                                    they
                                                    once enjoyed, albeit with a newfound appreciation for the gift of
                                                    mobility
                                                    and health. Through their experience with sciatica, Alex learned
                                                    valuable
                                                    lessons about resilience, perseverance, and the importance of
                                                    self-care.
                                                    They discovered the power of patience and resilience in overcoming
                                                    life’s
                                                    challenges, emerging from their ordeal stronger and more resilient
                                                    than
                                                    ever
                                                    before. Though the journey through sciatica was fraught with
                                                    challenges,
                                                    it
                                                    ultimately became a transformative experience for Alex—a testament
                                                    to
                                                    the
                                                    indomitable human spirit and the triumph of hope over adversity. And
                                                    as
                                                    they
                                                    continued to embrace life’s adventures with renewed vigor, Alex
                                                    cherished
                                                    each moment, knowing that they had overcome one of life’s greatest
                                                    trials
                                                    and emerged victorious on the other side.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="slider-serving">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                            <div class="slide-auth-img">
                                                <img src="{{ asset('home/assets/images/mike.jpeg') }}" alt="image" />
                                            </div>
                                            <div class="slide-auth-detail">
                                                <ul>
                                                    <li>mike</li>
                                                    <li>28</li>
                                                    <li>male</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                            <div class="slide-auth-det">
                                                <h4>My Story</h4>
                                                <p>Once upon a time, there lived a vibrant individual named Alex who was
                                                    known
                                                    for their boundless energy and adventurous spirit. Alex loved
                                                    exploring
                                                    the
                                                    outdoors, hiking through lush forests, and embarking on thrilling
                                                    adventures. However, one day, Alex’s life took an unexpected turn
                                                    when
                                                    they
                                                    began experiencing excruciating pain in their lower back and legs.
                                                    At
                                                    first,
                                                    Alex brushed off the discomfort, attributing it to overexertion from
                                                    their
                                                    outdoor activities. But as days turned into weeks, the pain only
                                                    intensified, making it difficult for Alex to even perform simple
                                                    tasks
                                                    like
                                                    walking or sitting for extended periods. Concerned, Alex sought
                                                    medical
                                                    attention and was diagnosed with sciatica—a condition characterized
                                                    by
                                                    pain
                                                    radiating along the sciatic nerve, which runs from the lower back
                                                    down
                                                    the
                                                    back of each leg. The diagnosis came as a shock to Alex, who had
                                                    never
                                                    experienced such debilitating pain before. Suddenly, their
                                                    once-active
                                                    lifestyle was put on hold as they grappled with the challenges of
                                                    managing
                                                    sciatica. Simple activities that were once taken for granted now
                                                    became
                                                    arduous tasks, and Alex found themselves struggling to cope with the
                                                    physical and emotional toll of their condition. Despite the pain,
                                                    Alex
                                                    refused to let sciatica define them. With unwavering determination,
                                                    they
                                                    embarked on a journey of healing and self-discovery. They diligently
                                                    followed their healthcare provider’s recommendations, which included
                                                    physical therapy, medication, and lifestyle modifications aimed at
                                                    alleviating the symptoms of sciatica. As Alex navigated through the
                                                    ups
                                                    and
                                                    downs of their journey, they discovered a newfound strength within
                                                    themselves—a resilience that allowed them to persevere in the face
                                                    of
                                                    adversity. They sought solace in the support of their loved ones,
                                                    who
                                                    stood
                                                    by their side through every step of their recovery process. Slowly
                                                    but
                                                    surely, Alex began to experience gradual improvement in their
                                                    condition.
                                                    The
                                                    pain became more manageable, and with each passing day, they
                                                    regained a
                                                    sense of normalcy in their life. They started to reintegrate
                                                    activities
                                                    they
                                                    once enjoyed, albeit with a newfound appreciation for the gift of
                                                    mobility
                                                    and health. Through their experience with sciatica, Alex learned
                                                    valuable
                                                    lessons about resilience, perseverance, and the importance of
                                                    self-care.
                                                    They discovered the power of patience and resilience in overcoming
                                                    life’s
                                                    challenges, emerging from their ordeal stronger and more resilient
                                                    than
                                                    ever
                                                    before. Though the journey through sciatica was fraught with
                                                    challenges,
                                                    it
                                                    ultimately became a transformative experience for Alex—a testament
                                                    to
                                                    the
                                                    indomitable human spirit and the triumph of hope over adversity. And
                                                    as
                                                    they
                                                    continued to embrace life’s adventures with renewed vigor, Alex
                                                    cherished
                                                    each moment, knowing that they had overcome one of life’s greatest
                                                    trials
                                                    and emerged victorious on the other side.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="slider-serving">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                            <div class="slide-auth-img">
                                                <img src="{{ asset('home/assets/images/mike.jpeg') }}" alt="image" />
                                            </div>
                                            <div class="slide-auth-detail">
                                                <ul>
                                                    <li>mike</li>
                                                    <li>28</li>
                                                    <li>male</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                            <div class="slide-auth-det">
                                                <h4>My Story</h4>
                                                <p>Once upon a time, there lived a vibrant individual named Alex who was
                                                    known
                                                    for their boundless energy and adventurous spirit. Alex loved
                                                    exploring
                                                    the
                                                    outdoors, hiking through lush forests, and embarking on thrilling
                                                    adventures. However, one day, Alex’s life took an unexpected turn
                                                    when
                                                    they
                                                    began experiencing excruciating pain in their lower back and legs.
                                                    At
                                                    first,
                                                    Alex brushed off the discomfort, attributing it to overexertion from
                                                    their
                                                    outdoor activities. But as days turned into weeks, the pain only
                                                    intensified, making it difficult for Alex to even perform simple
                                                    tasks
                                                    like
                                                    walking or sitting for extended periods. Concerned, Alex sought
                                                    medical
                                                    attention and was diagnosed with sciatica—a condition characterized
                                                    by
                                                    pain
                                                    radiating along the sciatic nerve, which runs from the lower back
                                                    down
                                                    the
                                                    back of each leg. The diagnosis came as a shock to Alex, who had
                                                    never
                                                    experienced such debilitating pain before. Suddenly, their
                                                    once-active
                                                    lifestyle was put on hold as they grappled with the challenges of
                                                    managing
                                                    sciatica. Simple activities that were once taken for granted now
                                                    became
                                                    arduous tasks, and Alex found themselves struggling to cope with the
                                                    physical and emotional toll of their condition. Despite the pain,
                                                    Alex
                                                    refused to let sciatica define them. With unwavering determination,
                                                    they
                                                    embarked on a journey of healing and self-discovery. They diligently
                                                    followed their healthcare provider’s recommendations, which included
                                                    physical therapy, medication, and lifestyle modifications aimed at
                                                    alleviating the symptoms of sciatica. As Alex navigated through the
                                                    ups
                                                    and
                                                    downs of their journey, they discovered a newfound strength within
                                                    themselves—a resilience that allowed them to persevere in the face
                                                    of
                                                    adversity. They sought solace in the support of their loved ones,
                                                    who
                                                    stood
                                                    by their side through every step of their recovery process. Slowly
                                                    but
                                                    surely, Alex began to experience gradual improvement in their
                                                    condition.
                                                    The
                                                    pain became more manageable, and with each passing day, they
                                                    regained a
                                                    sense of normalcy in their life. They started to reintegrate
                                                    activities
                                                    they
                                                    once enjoyed, albeit with a newfound appreciation for the gift of
                                                    mobility
                                                    and health. Through their experience with sciatica, Alex learned
                                                    valuable
                                                    lessons about resilience, perseverance, and the importance of
                                                    self-care.
                                                    They discovered the power of patience and resilience in overcoming
                                                    life’s
                                                    challenges, emerging from their ordeal stronger and more resilient
                                                    than
                                                    ever
                                                    before. Though the journey through sciatica was fraught with
                                                    challenges,
                                                    it
                                                    ultimately became a transformative experience for Alex—a testament
                                                    to
                                                    the
                                                    indomitable human spirit and the triumph of hope over adversity. And
                                                    as
                                                    they
                                                    continued to embrace life’s adventures with renewed vigor, Alex
                                                    cherished
                                                    each moment, knowing that they had overcome one of life’s greatest
                                                    trials
                                                    and emerged victorious on the other side.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Form Section End Here -->


</main>


         @endsection
