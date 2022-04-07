<!--header-->
<header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke px-0">
                <h1>
                    <a class="navbar-brand" href="{{url('home')}}">
                        <i class="fa fa-cutlery" aria-hidden="true"></i> Foodies
                    </a>
                </h1>
                <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="{{url('home')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="{{url('about')}}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ ($title === "Menu") ? 'active' : '' }}" href="{{url('menu')}}">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ ($title === "Contact") ? 'active' : '' }}" href="{{url('contact')}}">Contact Us</a>
                        </li>
                    </ul>
                </div>

                <!-- search button -->
                <div class="mt-md-1 mt-3 mb-lg-1 mb-3">
                        <a class="btn button-style" href="{{url('login')}}">Sign In</a>
                    </div>
                <!-- //search button -->

                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--//header-->