<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from quomodosoft.com/html/bankcohtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Feb 2024 17:21:35 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bancko Dark + Light Finance Dashboard HTML Template</title>

    <!-- fave-icon  -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/icon/fave-icon.png') }}" type="image/png">

    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@300;400;500;600;700;900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/responsive.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    rel="stylesheet">


</head>

<body style="background-image: url({{ asset('admin/assets/images/logo/img.jpg')}}); background-position: center; background-repeat:no-repeat; width: auto; height: ;">

    <div class="sign-up-top">

        <div class="sign-up-main">
            <div class="sign-up-logo">
                <img src="{{ asset('admin/assets/images/logo/Logo.svg') }}" alt="logo">
            </div> <br><br>
            <div class="sign-up-text col-lg-6 m-auto">
                @if (session()->has('error_msg'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ session()->get('error_msg') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif

                <h2>Sign in to Bankco.</h2>
                <p>Send, spend and save smarter</p>
            </div>
            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <div class="sign-up-from col-lg-6 m-auto">
                    <div class="sign-up-from-item">

                        <div class="sign-up-from-inner">
                            <input type="email" name="email" class="form-control" id="exampleFormControlInput"
                                placeholder="Username or email">
                                @if($errors->has('email'))
                                <div class="text-danger">{{ $errors->first('email') }}</div>
                            @endif
                        </div>


                        <div class="sign-up-from-inner">
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="Password">
                                @if($errors->has('password'))
                                <div class="text-danger">{{ $errors->first('password') }}</div>
                            @endif

                                <div class="icon">
                                    <i class="bi bi-eye-slash h5" id="togglePassword"></i>
                                </div>
                        </div>

                        <div class="sign-up-from-inner">

                            <div class="sign-up-from-df">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Remember me

                                    </label>
                                </div>

                                <div class="main-btn">
                                    <button type="button" class="modal-sign-up-from-btn bg-transparent"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal-3" data-bs-dismiss="modal">
                                        Forgot Password?
                                    </button>
                                    <!-- Modal -->
                                    {{-- <div class="modal fade" id="exampleModal-3" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-six">
                                        <div class="modal-content">
                                            <div class="modal-header">

                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">


                                                <div class="modal-sign-up-logo">
                                                    <img src=" {{ asset('admin/assets/images/logo/Logo.svg') }}" alt="logo">
                                                </div>
                                                <div class="modal-sign-up-text">
                                                    <h2>Send Money</h2>
                                                    <p>Please enter user information that you want to send money and
                                                        enter an amount</p>
                                                </div>


                                                <div class="modal-sign-up-from">
                                                    <input type="email" class="form-control"
                                                        id="exampleFormControlInput2" placeholder="Email">
                                                </div>

                                                <div class="modal-sign-up-from-btn-two">
                                                    <a href="#">Return to login</a>
                                                </div>


                                            </div>

                                            <button type="button" class="btn-one-modal btn-one-modal-mt  "
                                                data-bs-toggle="modal" data-bs-target="#exampleModal-4"
                                                data-bs-dismiss="modal">
                                                Continue
                                            </button>



                                        </div>
                                    </div>
                                </div> --}}


                                </div>
                            </div>
                        </div>
                        <div class="sign-up-btn">
                                <button class="btn-one" type="submit">Sign In</button>

                            <p>Don’t have an account? <a href="sign-up.html">Sign Up</a></p>

                        </div>


                        <div class="sign-up-btn-btm">
                            <a href="#">Terms & Condition </a>
                            <a href="#">Privacy Policy </a>
                            <a href="#">Help </a>
                            <a href="#">English </a>
                        </div>

                        <div class="sign-up-btn-btm-text">
                            <p>@ 2023 Bankco. All Right Reserved. </p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        {{-- <div class="sign-up-main-two">

            <div class="sign-up-main-two-item">
                <div class="sign-up-img">
                    <img src="{{ asset('admin/assets/images/sign-up.svg') }}" alt="img">
                </div>

                <div class="sign-up-main-two-item-text">
                    <h2>Speady, Easy and Fast</h2>
                    <p>BankCo. help you set saving goals, earn cash back offers, Go to disclaimer for more details and
                        get paychecks up to two days early. Get a $20 bonus when you receive qualifying direct deposits
                    </p>
                </div>
            </div>


        </div> --}}

    </div>

    <script>
        window.addEventListener("DOMContentLoaded", function () {
          const togglePassword = document.querySelector("#togglePassword");

          togglePassword.addEventListener("click", function (e) {
            // toggle the type attribute
            const type =
              password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            // toggle the eye / eye slash icon
            this.classList.toggle("bi-eye");
          });
        });


        </script>




    <script src="{{ asset('admin/assets/js/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/slick.min.js') }}"></script>
    <script src=" {{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>
</body>


<!-- Mirrored from quomodosoft.com/html/bankcohtml/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Feb 2024 17:22:00 GMT -->

</html>
