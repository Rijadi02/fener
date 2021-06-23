<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Page Title </title>
    <link rel="shortcut icon" href="{{asset('front/image/png/favicon.png')}}" type="image/x-icon">
    {{-- {{asset('assets/demo/chart-area-demo.js')}} --}}
    <!-- Bootstrap , fonts & icons  -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('front/fonts/icon-font/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/fonts/typography-font/typo.css')}}">
    <link rel="stylesheet" href="{{asset('front/fonts/fontawesome-5/css/all.css')}}">

    <!-- Plugin'stylesheets  -->
    <link rel="stylesheet" href="{{asset('front/plugins/aos/aos.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/plugins/fancybox/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/plugins/nice-select/nice-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/plugins/slick/slick.min.css')}}">


    <!-- Vendor stylesheets  -->
    <link rel="stylesheet" href="{{asset('front/plugins/theme-mode-switcher/switcher-panel.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/main.css')}}">

    <!-- Custom stylesheet -->
  </head>
  <body data-theme-mode-panel-active data-theme="light">
    <div class="site-wrapper overflow-hidden">
        {{-- Preloader --}}
        <div id="loading">
            <img src="{{asset('front/image/preloader.gif')}}" alt="">
        </div>


        {{-- Header Start --}}
        <header class="site-header site-header--menu-left dynamic-sticky-bg px-3 site-header--absolute site-header--sticky">
            <div class="container-fluid">
              <nav class="navbar site-navbar">
                <!-- Brand Logo-->
                <div class="brand-logo">
                  <a href="/home-marketing.html">
                    <!-- light version logo (logo must be black)-->
                    <img src="{{asset('front/image/png/logo-dark.png')}}" alt="" class="light-version-logo">
                    <!-- Dark version logo (logo must be White)-->
                    <img src="{{asset('image/png/logo-white.png')}}" alt="" class="dark-version-logo">
                  </a>
                </div>
                <div class="menu-block-wrapper  ms-lg-7">
                  <div class="menu-overlay"></div>
                  <nav class="menu-block" id="append-menu-header">
                    <div class="mobile-menu-head">
                      <div class="go-back">
                        <i class="fa fa-angle-left"></i>
                      </div>
                      <div class="current-menu-title"></div>
                      <div class="mobile-menu-close">&times;</div>
                    </div>
                    <ul class="site-menu-main">
                      <li class="nav-item sub-menu--item nav-item-has-children">
                        <a href="#" class="nav-link-item ">Shtepia</a>
                      </li>
                      <li class="nav-item sub-menu--item nav-item-has-children">
                        <a href="#" class="nav-link-item ">Kurset</a>
                      </li>
                      <li class="nav-item sub-menu--item nav-item-has-children">
                        <a href="#" class="nav-link-item ">Blogu</a>
                      </li>
                      <li class="nav-item sub-menu--item nav-item-has-children">
                        <a href="#" class="nav-link-item ">Galeria</a>
                      </li>
                      <li class="nav-item sub-menu--item nav-item-has-children">
                        <a href="#" class="nav-link-item ">Librat</a>
                      </li>
                      <li class="nav-item sub-menu--item nav-item-has-children">
                        <a href="#" class="nav-link-item ">Rreth Nesh</a>
                      </li>
                      <li class="nav-item sub-menu--item nav-item-has-children">
                        <a href="#" class="nav-link-item ">Kontakti</a>
                      </li>

                    </ul>
                  </nav>
                </div>
                <div class="header-btns  ms-auto ms-lg-0 d-none d-sm-flex align-items-center">
                  <a class="btn-link heading-default-color-2 me-4" href="#">
                    Login
                  </a>
                  <a class="btn btn-header-btns btn-link-water btn--medium-2 h-45 text-shark rounded-5 ms-1" href="#">
                    Get Started
                  </a>
                </div>
                <!-- mobile menu trigger -->
                <div class="mobile-menu-trigger">
                  <span></span>
                </div>
                <!--/.Mobile Menu Hamburger Ends-->
              </nav>
            </div>
          </header>
        {{-- Header End --}}


        @yield('content')


    </div>

    <!-- Plugin's Scripts -->
    <script src="{{asset('front/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('front/plugins/jquery/jquery-migrate.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('front/plugins/fancybox/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('front/plugins/nice-select/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('front/plugins/aos/aos.min.js')}}"></script>
    <script src="{{asset('front/plugins/counter-up/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('front/lugins/counter-up/waypoints.min.js')}}"></script>
    <script src="{{asset('front/plugins/slick/slick.min.js')}}"></script>
    <script src="{{asset('front/plugins/skill-bar/skill.bars.jquery.js')}}"></script>
    <script src="{{asset('front/plugins/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('front/plugins/theme-mode-switcher/gr-theme-mode-switcher.js')}}"></script>

    <!-- Activation Script -->
    <script src="{{asset('front/js/menu.js')}}"></script>
    <script src="{{asset('front/js/custom.js')}}"></script>
  </body>
</html>

