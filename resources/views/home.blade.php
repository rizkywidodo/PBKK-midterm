<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="{{url('assets/css/style-starter.css')}}">
</head>

<body>

@if(Session::has('user'))
@include('layouts.header')
@else
@include('layouts.headerguest')
@endif

    <!-- banner section -->
    <section id="home" class="w3l-banner py-5">
        <div class="container pt-5 pb-md-4">
            <div class="row align-items-center">
                <div class="col-md-6 pt-md-0 pt-4">
                    <h3 class="mb-sm-4 mb-3 title">Eat Fresh <br>Eat Healthy</h3>
                    <p>We only serve fresh, locally served ingredients with sustainable practices. Start your Fresh and Healthy Journey Now!</p>
                    <div class="mt-md-5 mt-4 mb-lg-0 mb-4">
                        <a class="btn button-style" href="{{url('menu')}}">View Our Menu</a>
                    </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-4">
                    <img class="img-fluid" src="{{url('assets/images/bannerimg.png')}}" alt=" ">
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->
    <!-- about section -->
    <div class="w3l-content-photo-5">
        <div class="content pb-5 pt-md-5 pt-4">
            <div class="container py-lg-4 py-md-3">
                <div class="row">
                    <div class="col-lg-6 content-photo">
                        <a href="#image"><img src="{{url('assets/images/about.png')}}" class="img-responsive"
                                alt="content-photo"></a>
                    </div>
                    <div class="col-lg-6 content-left mb-md-0 mb-3">
                        <h3>Welcome To Our <span>Foodies</span></h3>
                        <p>Our goal is to create a vegan and meat  fast-food experience that offers kindness and cleanliness in creating savory soul food! We hope people take away feelings of communion and belonging, as well as support in their journeys with food. No matter the dietary restriction or perception of life, we welcome everyone we meet at Pure Soul to experience what we call kind comfort food.
</p>
                        <p>We offer dine-in (indoor & patio seating), takeout, third-party delivery. All food and beverages prepared by Foodies are packaged in 100% compostable to-go containers, along with compostable utensils and napkins. We compost all food scraps and appropriate packaging & waste through Compost Now. We have compost bins on-site for customer use--we kindly ask our customers to consider helping us reduce our contribution to landfills.</p>
                        <a class="btn button-style" href="{{url('about')}}">Read More </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //about section -->
    <!-- team with grids section -->
    <section class="w3l-content-11-main">
        <div class="content-design-11 pt-md-4 pt-1 pb-5">
            <div class="container pb-md-4 pb-3">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <h3 class="title-main-2 text-center p-lg-4">Hello. Our structure has been present for
                            over 20 years. We make the
                            best !</h3>
                    </div>
                    <div class="col-lg-7 mt-lg-0 mt-sm-5 mt-4">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="position-relative">
                                    <img src="{{url('assets/images/team1.jpg')}}" class="img-responsive" alt="content-photo">
                                    <div class="text-position">
                                        <h4><a>Jimic Nasium</a></h4>
                                        <p>Best Chef</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-sm-0 mt-4">
                                <div class="position-relative">
                                    <img src="{{url('assets/images/team2.jpg')}}" class="img-responsive" alt="content-photo">
                                    <div class="text-position">
                                        <h4><a>Henry Tri Handayani</a></h4>
                                        <p>Food Expert</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-sec-11 mt-5 pt-lg-4">
                    <div class="row">
                        <div class="col-md-6 columns">
                            <div class="icon-eff">
                                <span class="fa fa-cutlery" aria-hidden="true"></span>
                            </div>
                            <div class="right-side">
                                <p>We only serve fresh, locally served ingredients with sustainable practices. Start your Fresh and Healthy Journey Now!</p>
                                
                            </div>
                        </div>
                        <div class="col-md-6 columns mt-md-0 mt-4">
                            <div class="icon-eff">
                                <span class="fa fa-coffee" aria-hidden="true"></span>
                            </div>
                            <div class="right-side">
                                <p>We only serve fresh, locally served ingredients with sustainable practices. Start your Fresh and Healthy Journey Now!</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row mt-md-5 mt-4">
                        <div class="col-md-6 columns">
                            <div class="icon-eff">
                                <span class="fa fa-beer" aria-hidden="true"></span>
                            </div>
                            <div class="right-side">
                                <p>We only serve fresh, locally served ingredients with sustainable practices. Start your Fresh and Healthy Journey Now!</p>
                                
                            </div>
                        </div>
                        <div class="col-md-6 columns  mt-md-0 mt-4">
                            <div class="icon-eff">
                                <span class="fa fa-apple" aria-hidden="true"></span>
                            </div>
                            <div class="right-side">
                                <p> We only serve fresh, locally served ingredients with sustainable practices. Start your Fresh and Healthy Journey Now!</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //team with grids section -->
    <!-- video section -->
    <section class="video-section" id="work">
        <div class="midd-w3 py-5">
            <div class="container py-md-4 py-3">
                <div class="row">
                    <div class="col-lg-5 about-right-faq align-self">
                        <h3 class="title-big">You can watch our cooking video process!</h3>
                        <p class="mt-3">Watch the makings of one of our menus on our youtube channel, and check out our latest video HERE.</p>
                        <a class="btn button-style mt-lg-5 mt-4 popup-with-zoom-anim play-view"
                            href="#small-dialog">Play Video
                        </a>
                    </div>
                    <div class="col-lg-7 left-wthree-img text-righ mt-lg-0 mt-5">
                        <div class="position-relative">
                            <img src="{{url('assets/images/video.jpg')}}" alt="" class="img-fluid radius-image-full">
                            <a href="#small-dialog"
                                class="popup-with-zoom-anim play-view text-center position-absolute">
                                <span class="video-play-icon">
                                    <span class="fa fa-play"></span>
                                </span>
                            </a>
                            <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                            <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                                <iframe src="https://www.youtube.com/embed/UmTqq_o6FSI" frameborder="0"
                                    allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //video section -->
    <!-- call section -->
    <section class="w3l-call-to-action-6">
        <div class="call-vv-action py-5">
            <div class="container py-md-4 py-3">
                <div class="grid">
                    <div class="float-lt">
                        <h3 class="title-big">Contact us now!</h3>
                        <p>For Online queries, please call us today</p>
                    </div>
                    <div class="float-rt text-right">
                        <ul class="buttons">
                            <li class="phone"><span class="fa fa-volume-control-phone mr-1" aria-hidden="true"></span>
                                <a class="call-style-w3" href="tel:+628123123123">+628123123123</a>
                            </li>
                            <li class="green">Or</li>
                            <li><a href="{{url('contact')}}" class="btn button-style">Get in touch</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //call section -->
    <!-- 3 grids -->
    <section class="w3l-features-4">
        <div class="features4-block text-center py-5">
            <div class="container py-md-5 py-3">
                <div class="row features4-grids">
                    <div class="col-lg-4 col-md-6">
                        <div class="features4-grid">
                            <div class="feature-images">
                                <span class="fa fa-motorcycle" aria-hidden="true"></span>
                            </div>
                            <h5><a>Fast Delivery</a></h5>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                        <div class="features4-grid">
                            <div class="feature-images">
                                <span class="fa fa-shopping-basket" aria-hidden="true"></span>
                            </div>
                            <h5><a>Fresh Ingredients</a></h5>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                        <div class="features4-grid">
                            <div class="feature-images">
                                <span class="fa fa-laptop" aria-hidden="true"></span>
                            </div>
                            <h5><a>Online Suport 24/7</a></h5>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 3 grids -->
    <!-- promocode section -->
    <section class="w3l-promocode">
        <div class="promo-block pt-md-0 pt-4">
            <div class="container">
                <div class="row aap-4-section">
                    <div class="col-lg-6 app4-right-image">
                        <img src="{{url('assets/images/img3.png')}}" class="img-responsive" alt="App Device" />
                    </div>
                    <div class="col-lg-6 app4-left-text pl-lg-0 mb-lg-0 mb-sm-2 mb-4">
                        <h6>For 30% Discount</h6>
                        <h4>Get Our Promocode Now</h4>
                        <p class="mb-4"> </p>
                        <div class="app-4-connection">
                            <div class="newsletter">
                                <label>Never Miss a Deal From Foodies</label>
                                <form action="#" methos="GET" class="d-flex wrap-align">
                                    <input type="email" placeholder="Enter your email id" required="required" />
                                    <button type="submit">Get Promocode</button>
                                </form>
                            </div>
                            <p class="mobile-text-app mt-4 pt-2">(Or) To Get Our Mobile Apps</p>
                            <div class="app-4-icon">
                                <ul>
                                    <li><a href="#url" title="Apple" class="app-icon apple-vv"><span class="fa fa-apple"
                                                aria-hidden="true"></span></a></li>
                                    <li><a href="#url" title="Google play" class="app-icon play-vv"><span
                                                class="fa fa-play" aria-hidden="true"></span></a></li>
                                    <li><a href="#url" title="Microsoft" class="app-icon windows-vv"><span
                                                class="fa fa-windows" aria-hidden="true"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //promocode section -->

    @include('layouts.footer')

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-level-up" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="{{url('assets/js/jquery-3.3.1.min.js')}}"></script>
    <!-- //common jquery plugin -->

    <!-- theme switch js (light and dark)-->
    <script src="{{url('assets/js/theme-change.js')}}"></script>
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function () {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function (i, char) {
                        setTimeout(function () {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function () {
            // Now to start autoTyping just call the autoType function with the 
            // class of outer div
            // The second paramter is the speed between each letter is typed.   
            autoType(".type-js", 200);
        });
    </script>
    <!-- //theme switch js (light and dark)-->

    <!-- magnific popup -->
    <script src="{{url('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>
    <!-- //magnific popup -->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->
</body>

</html>