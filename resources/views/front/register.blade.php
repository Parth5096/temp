
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BigFair247</title>
    <link rel="icon" type="image/png" href="{{ asset('public/front/img/logo.png')}}" sizes="16x16">
    <!-- bootstrap 5  -->
    <link rel="stylesheet" href="{{ asset('public/front/css/bootstrap.min.css')}}">
    <!-- Icon Link  -->
    <link rel="stylesheet" href="{{ asset('public/front/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/front/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/front/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/front/css/animate.css')}}">
    <link href="{{ asset('public/admin/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">

    <!-- Plugin Link -->
    <link rel="stylesheet" href="{{ asset('public/front/css/slick.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('public/front/css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
    ::placeholder{
color:red;
}
    }

    ::-ms-input-placeholder { /* Edge 12-18 */
    color: red;
    }

    .card{
    padding: 20px;
    box-shadow:
        inset 0 -3em 3em rgb(0 200 0 / 30%),
        0 0 0 2px white,
        0.3em 0.3em 1em rgb(200 0 0 / 60%);
    }
    
    input[type=text]:focus {
  background-color: lightblue;
}

input[type="text"], textarea {

background-color : #d1d1d1; 

}

</style>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="header-bottom">
                <div class="header-bottom-area align-items-center">
                    <div class="logo"><a href="{{ route('home')}}"><img src="{{ asset('public/front/img/logo.png')}}" alt="logo"></a></div>
                    <ul class="menu">
                        <li>
                            <a href="{{ route('home')}}">Home</a>
                        </li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li>
                            <a href="#howitwork">How It Works</a>
                        </li>
                        <li>
                            <a href="#bigfair247">Big Fair 247</a>
                        </li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                        <li>
                            <a href="" class="btnn">
                                Get Demo ID
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </li>&nbsp;&nbsp;&nbsp;


                        <li>
                            <a href="{{route('register')}}" class="btnn1">
                                Register
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </li>
                        <button class="btn-close btn-close-white d-lg-none"></button>
                    </ul>

                    <div class="header-trigger-wrapper d-flex d-lg-none align-items-center">
                        <div class="header-trigger me-4">
                            <span></span>
                        </div>
                        <a href="sign-in.html" class="cmn--btn active btn--md d-none d-sm-block">Sign In</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="">
        


<!-- Banner Section Starts Here -->
<!-- <section class="banner-section bg_img overflow-hidden ">
    <video autoplay muted loop id="myVideo">
        <source src="{{ asset('public/front/img/111.mp4')}}" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="container">
        <div class="banner-wrapper align-items-center">
            <div class="banner-content">
                <h6 class="wel">WELCOME TO</h6>
                <h1 class="banner-content__title">Big<span class="text--base">Fair247</span><br>Asia's  Most Trusted Book</h1>
                <h3 class="fo">
                    "Being Honest & Fair<br>
                    Not Possible to Everyone"

                </h3>
                <p class="banner-content__subtitle">PLAY CASINO AND EARN CRYPTO IN ONLINE. THE ULTIMATE ONLINE CASINO PLATFORM.</p> 
                <div class="button-wrapper  ">
                    <a href="#" class=" btnn2 get">
                        <p class="blink-soft" style="
                                        font-family: auto;color: white
                                    ">
                            GET DEMO ID
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </p>


                    </a>
                </div>
            </div>

        </div>
    </div>
</section> -->
<div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center" >
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                
              </div><!-- End Logo -->

              <div class="card mb-3 btnn1" >

                <div class="card-body">

                  <form class="row g-3 needs-validation mt-4 mb-4" action="{{ route('register.post') }}" method="post" novalidate>
                   @csrf
                    <div class="col-12">
                        <input type="text"  placeholder="Name" name="name" class="form-control">
                    </div>

                    <div class="col-12">
                      <input type="text" placeholder="Email" name="email" class="form-control">
                    </div>

                    <div class="col-12">
                      <input type="text" placeholder="Number" name="phone" class="form-control">
                    </div>

                    <!-- <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div> -->
                    <div class="col-12 ">
                      <button class="btn btn-primary w-100 text-white" type="submit">Register</button>
                    </div>
                  </form>

                </div>
              </div>

              

            </div>
          </div>
        </div>

      </section>

    </div>
    </div>
    <!-- Footer Section Starts Here -->
    <footer class="footer-section bg_img" style="background-image: url('{{ asset("public/front/img/bg.jpg")}}');">
        <div class="footer-top">
            <div class="container">
                <div class="footer-wrapper d-flex flex-wrap align-items-center justify-content-md-between justify-content-center">
                    <div class="logo mb-3 mb-md-0"><a href="/"><img src="{{ asset('public/front/img/logo.png')}}" alt="logo"></a></div>

                    <ul class="footer-links d-flex flex-wrap justify-content-center">
                        <!-- <li><a href="#"><i class="lab la-facebook"></i></a></li>
                        <li><a href="#"><i class="lab la-instagram"></i></a></li>
                        <li><a href="#"><i class="lab la-twitter"></i></a></li>
                        <li><a href="#"><i class="lab la-telegram"></i></a></li> -->
                        <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/bigfair247/?igsh=MTBxOGlvemZvMGw4eA%3D%3D"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://wa.me/+447477904767"><i class="fa-brands fa-whatsapp"></i></a></li>
                        <li><a href="https://t.me/bigfair247"><i class="fa-brands fa-telegram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-wrapper d-flex flex-wrap justify-content-md-between justify-content-center align-items-center text-center">
                    <div class="">
                        <p style="font-size: 11px !important;">
                            18+ only. Underage gambling is an offence
                        </p>
                    </div>
                    <p class="copyright text-white">Copyrights &copy; 2023 All Rights Reserved by <a href="#0" class=" text--base ms-2">Big Fair 247</a></p>
                </div>
            </div>
        </div>
        <div class="shapes">
            <img src="{{ asset('public/front/img/shape.png')}}" alt="footer" class="shape1">
        </div>
    </footer>
    <!-- Footer Section Ends Here -->

    <ul class="social-media-container">

        <li class="social-media instagram">
            <!-- <i class="lab la-facebook fttt"></i> -->
            <i class="fa-brands fa-facebook fttt"></i>
            <a href="#" target="_blank">Facebbok</a>
        </li>
        <li class="social-media instagram">
            <!-- <i class="lab la-instagram"></i> -->
            <i class="fa-brands fa-instagram"></i>
            <a href="https://www.instagram.com/bigfair247/?igsh=MTBxOGlvemZvMGw4eA%3D%3D" target="_blank">Instagram</a>
        </li>
        <li class="social-media instagram">
            <!-- <i class="lab la-whatsapp"></i> -->
            <i class="fa-brands fa-whatsapp"></i>
            <a href="https://wa.me/+447477904767" target="_blank">Whatsapp</a>
        </li>
        <li class="social-media instagram">
            <!-- <i class="lab la-telegram"></i> -->
            <i class="fa-brands fa-telegram"></i>
            <a href="https://t.me/bigfair247" target="_blank">Telegram</a>
        </li>
    </ul>
    <!-- jQuery library -->
    <script src="{{ asset('public/front/js/jquery.js')}}"></script>
    <!-- bootstrap 5 js -->
    <script src="{{ asset('public/front/js/bootstrap.min.js')}}"></script>

    <!-- Pluglin Link -->
    <script src="{{ asset('public/front/js/slick.min.js')}}"></script>

    <!-- main js -->
    <script src="{{ asset('public/front/js/main.js')}}"></script>
    
</body>
</html>
