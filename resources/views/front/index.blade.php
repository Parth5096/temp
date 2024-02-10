
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

    <!-- Plugin Link -->
    <link rel="stylesheet" href="{{ asset('public/front/css/slick.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('public/front/css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
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
                            <a href="{{ route('register')}}" class="btnn1">
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
<section class="banner-section bg_img overflow-hidden ">
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
                <!-- <p class="banner-content__subtitle">PLAY CASINO AND EARN CRYPTO IN ONLINE. THE ULTIMATE ONLINE CASINO PLATFORM.</p> -->
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
</section>

<section class="about-section padding-top padding-bottom overflow-hidden bk" id="about">

    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="textss">
                    <h2 class="mb-4">Whatsapp us on</h2>
                </div>
            </div>
            <div class="col-md-5">
                <div class="textss">
                    <a href="about.html" class="cmn--btn active grcolo"><i class="fa-brands fa-whatsapp what"></i><span class="tex">Whatsapp 1</span></a>
                    <a href="about.html" class="cmn--btn active grcolo"><i class="fa-brands fa-whatsapp what"></i><span class="tex">Whatsapp 2</span></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="aobut-thumb section-thumb">
                    <img src="{{ asset('public/front/img/about.png')}}" alt="about" class="vert-move" width="100%">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="section-header">
                        <h6 class="wel">We are The Big Fair 247</h6>
                        <h2 class="section-header__title">No #1 Sports Trading Platform</h2>
                        <p>We are an Indian sports-trading platform with a genuinely unique service experience. 24*7 Deposit & Withdrawal facility. Here you can connect to bookmakers of your choice and get a transparent view of the real odds.</p>

                        <!--  <p><span class="one">01.</span>  Endless possibilities</p>
                         <hr>
                         <p><span class="one">02.</span>  Impressive prizes</p> -->
                    </div>
                    <div class="textss">
                        <a href="#" class="cmn--btn active grcolo"><b>Get Your Demo ID Now</b></a>
                    </div>
                </div>
            </div>

        </div>



    </div>
    <div class="shapes">
        <img src="{{ asset('public/front/img/shape.png')}}" alt="about" class="shape shape1">
    </div>

</section>
<!-- About Section Ends Here -->

<section class="how-section padding-top padding-bottom  bk1" id="howitwork">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-header text-center">
                    <h2 class="section-header__title">How to Play Game</h2>

                </div>
            </div>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="how-item">
                    <div class="how-item__thumb">
                        <!-- <i class="las la-user-plus"></i> -->
                        <i class="fa-solid fa-user-plus"></i>
                        <div class="badge badge--lg badge--round radius-50">01</div>
                    </div>
                    <div class="how-item__content">
                        <h4 class="title">Message us on our WhatsApp Number</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="how-item active">
                    <div class="how-item__thumb">
                        <!-- <i class="las la-id-card"></i> -->
                        <i class="fa-solid fa-id-card"></i>
                        <div class="badge badge--lg badge--round radius-50">02</div>
                    </div>
                    <div class="how-item__content">
                        <h4 class="title">Customer Satisfy Guaranteed with all Information</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="how-item">
                    <div class="how-item__thumb">
                        <!-- <i class="las la-wallet"></i> -->
                        <i class="fa-solid fa-wallet"></i>
                        <div class="badge badge--lg badge--round radius-50">03</div>
                    </div>
                    <div class="how-item__content">
                        <h4 class="title">Start depositing & Withdrawal Instantly</h4>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="how-item">
                    <div class="how-item__thumb">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                        <div class="badge badge--lg badge--round radius-50">04</div>
                    </div>
                    <div class="how-item__content">
                        <h4 class="title">Earn from your skills</h4>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- About Section Starts Here -->
<section class="about-section padding-top padding-bottom overflow-hidden bgs">
    <div class="elementor-background-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="textss">
                    <div class="">
                        <h6 class="">POKER NIGHT</h6>
                        <h2 class="section-header__title">Have fun and win prizes in daily games!</h2>
                    </div>
                    <a href="#" class="cmn--btn active">Get Your Demo ID</a>
                </div>
            </div>
        </div>

    </div>
    <!-- <div class="shapes">
        <img src="assets/images/shape.png" alt="about" class="shape shape1">
    </div> -->
</section>
<!-- About Section Ends Here -->


<section class="game-section padding-top padding-bottom bg_img3 bk" id="bigfair247">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xl-12">
                <div class="section-header text-center">
                    <h2 class="section-header__title">Why Big Fair 247</h2>

                </div>
            </div>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-lg-4 col-xl-4 col-md-6 col-sm-6">
                <div class="game-item">
                    <div class="game-inner">
                        <div class="game-item__thumb">
                            <img src="{{ asset('public/front/img/mobile.png')}}" width="100px">
                        </div>
                        <div class="game-item__content">
                            <h4 class="title">ONLINE ID</h4>
                            <p class="invest-info">Get your online cricket & sports id with us and instantly start Playing. Message us to get your ID now.</p>

                        </div>
                    </div>
                    <div class="ball"></div>
                </div>
            </div>
            <div class="col-lg-4 col-xl-4 col-md-6 col-sm-6">
                <div class="game-item">
                    <div class="game-inner">
                        <div class="game-item__thumb">
                            <img src="{{ asset('public/front/img/chat.png')}}" width="105px">
                        </div>
                        <div class="game-item__content">
                            <h4 class="title">24 /7 SUPPORT</h4>
                            <p class="invest-info">We have a team of experts who available 24/7 to guide you through our whatsApp chats.</p>

                        </div>
                    </div>
                    <div class="ball"></div>
                </div>
            </div>
            <div class="col-lg-4 col-xl-4 col-md-6 col-sm-6">
                <div class="game-item">
                    <div class="game-inner">
                        <div class="game-item__thumb">
                            <img src="{{ asset('public/front/img/trust.png')}}" width="105px">
                        </div>
                        <div class="game-item__content">
                            <h4 class="title">100% TRUSTED SERVICE</h4>
                            <p class="invest-info">Transparency and accuracy is the most important for us and for our customer. We deal in the most transparent way.</p>

                        </div>
                    </div>
                    <div class="ball"></div>
                </div>
            </div>
            <div class="col-lg-4 col-xl-4 col-md-6 col-sm-6">
                <div class="game-item">
                    <div class="game-inner">
                        <div class="game-item__thumb">
                            <img src="{{ asset('public/front/img/money.png')}}" width="130px">
                        </div>
                        <div class="game-item__content">
                            <h4 class="title">INSTANT WITHDRAWAL & REFILL</h4>
                            <p class="invest-info">The Big Fair 247 provides instant service of id withdrawal & refilling with min to max amount.</p>

                        </div>
                    </div>
                    <div class="ball"></div>
                </div>
            </div>
            <div class="col-lg-4 col-xl-4 col-md-6 col-sm-6">
                <div class="game-item">
                    <div class="game-inner">
                        <div class="game-item__thumb">
                            <img src="{{ asset('public/front/img/bank.png')}}" width="107px">
                        </div>
                        <div class="game-item__content">
                            <h4 class="title">AVAILABLE PAYMENT METHODS</h4>
                            <p class="invest-info">Multiple methods are available for Paymetns. Customer can pay via Net Banking, Bank Transfer, Paytm, Google pay, IMPS, PhonePe etc</p>

                        </div>
                    </div>
                    <div class="ball"></div>
                </div>
            </div>
            <div class="col-lg-4 col-xl-4 col-md-6 col-sm-6">
                <div class="game-item">
                    <div class="game-inner">
                        <div class="game-item__thumb">
                            <img src="{{ asset('public/front/img/data.png')}}" width="100px">
                        </div>
                        <div class="game-item__content">
                            <h4 class="title">HIGH SECURITY</h4>
                            <p class="invest-info">Security is our Top priority and hence your data and imformation is safe and is not shared at any Point!</p>

                        </div>
                    </div>
                    <div class="ball"></div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Why Choose Us Section Starts Here -->
<section class="why-section padding-top padding-bottom overflow-hidden bk1">
    <div class="container">
        <div class="row justify-content-between gy-5">
            <div class="col-lg-5 col-xl-4">
                <div class="section-header mb-4">
                    <h6 class="wel">What We Have</h6>
                    <h2 class="section-header__title">We have these Successe's</h2>

                </div>

            </div>
            <div class="col-lg-7 col-xl-7">
                <div class="row gy-4 gy-md-5 gy-lg-4 gy-xl-5 "id="prg-counter">
                    <div class="col-lg-6 col-sm-6">
                        <div class="why-item">
                            <!-- <div class="why-item__thumb">
                                <i class="las la-shield-alt"></i>
                            </div> -->

                            <div class="why-item__content">
                                <h4 class="title">Trusted User's</h4>
                                <h1 class="col"> 100000+</h1>
                                <p>We Have completed 1 Lac+ Trusted User's by giving him bestest Service's.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="why-item">
                            <div class="why-item__content">
                                <h4 class="title">Game's</h4>
                                <h1 class="col">9548</h1>
                                <p>We Have 9k+ Virtual Cricket, Casino, Pokar, Football's, Ander-bahar, Teen Pati,Roller, Dragon Tiger, Aviator etc Game's.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="why-item">
                            <div class="why-item__content">
                                <h4 class="title">Year's</h4>
                                <h1 class="col">7+</h1>
                                <p>We Have 7+ Year's Experience in the Gaming World & we are try to giving the best Facilities for are User's.</p>
                            </div>
                        </div>
                    </div>
                    <!--  <div class="col-lg-6 col-sm-6">
                         <div class="why-item">
                             <div class="why-item__content">
                                 <h4 class="title">Success Series</h4>
                                 <h1 class="col">1000+</h1>
                                 <p>Natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                             </div>
                         </div>
                     </div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="shapes">
        <img src="{{ asset('public/front/img/shape.png')}}" alt="why" class="shape shape1">
    </div>
</section>
<!-- Why Choose Us Section Ends Here -->

<section class="game-section padding-top padding-bottom bg_img1 bk">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xl-12">
                <div class="text-center">
                    <!--  <h6 class="wel">RECENT NEWS</h6> -->
                    <h2 class="section-header__title">From our Sport's</h2>
                </div>
            </div>
        </div>
        <div class="row gy-4">

            <div class="col-lg-4 col-xl-4 col-md-6 col-sm-6">
                <div class="hoveritem">
                    <div class="game-item1">
                        <div class="game-inner text-center">

                            <h3>
                                Circket
                            </h3>
                        </div>
                    </div>
                    <div class="game-item__thumb ">
                        <img src="{{ asset('public/front/img/cir.jpg')}}" class="zoom" alt="game">
                    </div>
                    <!-- <div class="game-item1">
                        <div class="game-inner text-left">
                            <i class="las la-long-arrow-alt-right fott"></i>
                        </div>
                        </div> -->
                </div>
            </div>


            <div class="col-lg-4 col-xl-4 col-md-6 col-sm-6">
                <div class="hoveritem">
                    <div class="game-item1">
                        <div class="game-inner text-center">

                            <h3>
                                Casino
                            </h3>
                        </div>
                    </div>
                    <div class="game-item__thumb ">
                        <img src="{{ asset('public/front/img/cas.jpg')}}" class="zoom" alt="game">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-xl-4 col-md-6 col-sm-6">
                <div class="hoveritem">
                    <div class="game-item1 text-center">
                        <div class="game-inner text-center">

                            <h3 class="text-center">
                                Poker
                            </h3>
                        </div>
                    </div>
                    <div class="game-item__thumb ">
                        <img src="{{ asset('public/front/img/blg2.jpg')}}" class="zoom" alt="game">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="game-section padding-top padding-bottom bg_img1 bk1" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xl-12">
                <div class="text-center">
                    <!--   <h6 class="wel">RECENT NEWS</h6> -->
                    <h2 class="section-header__title">Contact Us</h2>
                    <h4><b>The Big Fair247 is The Biggest Platform For Providing Online Sports ID's.</b></h4>
                    <br>
                    <h4>Get Your Id Now. Contact Us On WhatsApp.</h4><br>
                    <p>For Any Queries, Emergencies, Feedbacks or Complaints. We Are Here To Help You 24/7 With Our Online Services.</p>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xl-12">
                <div class="text-center">
                    <!--   <h6 class="wel">RECENT NEWS</h6> -->
                    <h2 class="section-header__title">Whatsapp us on</h2><br>
                    <a href="#" class="cmn--btn active grcolo"><b>Whatsapp 1</b></a>
                    <a href="#" class="cmn--btn active grcolo"><b>Whatsapp 2</b></a>
                </div>
            </div>
        </div>

    </div>
</section>


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
