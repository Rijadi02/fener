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


        <div class="footer-area footer-inner-1 position-relative bg-default-3">
            <div class="container">
              <footer class="footer-top">
                <div class="row">
                  <div class="col-lg-3 col-md-7 col-xs-9">
                    <div class="footer-widgets footer-widgets--l7">
                      <!-- Brand Logo-->
                      <div class="brand-logo mt-1">
                        <a href="#">
                          <!-- light version logo (logo must be black)-->
                          <img src="{{asset('front/image/png/logo-dark.png')}}" alt="" class="light-version-logo">
                          <!-- Dark version logo (logo must be White)-->
                          <img src="{{asset('front/image/png/logo-white.png')}}" alt="" class="dark-version-logo">
                        </a>
                      </div>
                      <p class="footer-widgets__text mt-5">
                        We’re the digital agency to create<br class="d-none d-xl-block"> your digital presence for better<br class="d-none d-xl-block"> conversion and sales.</p>
                      <ul class="footer-social-share footer-social-share--rounded mt-4">
                        <li>
                          <a href="#">
                            <i class="fab fa-facebook-square"></i>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fab fa-twitter"></i>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fab fa-instagram"></i>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fab fa-linkedin"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-9">
                    <div class="row">
                      <div class="col-md-4 col-xs-6">
                        <div class="footer-widgets footer-widgets--l7">
                          <h4 class="footer-widgets__title">Contact Details</h4>
                          <ul class="footer-widgets__list footer-widgets--address">
                            <li>
                              <i class="fa fa-map-marker-alt text-electric-violet-2"></i>
                              <span>Address: <br class="d-block">
                                                  4401 Waldeck Street,<br class="d-block">
                                                  Grapevine Nashville, Tx 76051</span>
                            </li>
                            <li>
                              <i class="fa fa-phone-alt text-electric-violet-2"></i>
                              <div class="list-content">
                                <span class="d-block gr-text-hover-decoration-none"> Phone: </span>
                                <a href="#">+99 (0) 101 0000 888</a>
                              </div>
                            </li>
                            <li>
                              <i class="fa fa-envelope text-electric-violet-2"></i>
                              <a class="heading-default-color gr-text-hover-underline text-break" href="mailto:info@medcartel.com">
                                <span class="d-block gr-text-hover-decoration-none"> Phone:
                                                  </span>info@medcartel.com</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-4 col-xs-6">
                        <div class="footer-widgets footer-widgets--l7 mb-10 mb-md-0">
                          <h4 class="footer-widgets__title">Company</h4>
                          <ul class="footer-widgets__list">
                            <li>
                              <a href="#">About
                                us</a>
                            </li>
                            <li>
                              <a href="#">Privacy
                                Policy</a>
                            </li>
                            <li>
                              <a href="#">Terms &
                                Conditions</a>
                            </li>
                            <li>
                              <a href="#">Rider</a>
                            </li>
                            <li>
                              <a href="#">Contact</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-4 col-xs-9">
                        <div class="footer-widgets footer-widgets--l7">
                          <h4 class="footer-widgets__title">Newsletter</h4>
                          <p class="footer-widgets__text mb-4 mt-0">Get the latest trends updates right at your inbox.</p>
                          <!-- Newsletter -->
                          <div class="newsletter newsletter--l7">
                            <form action="/.">
                              <input type="text" placeholder="Enter Your Email">
                              <button class="btn btn-primary shadow--primary-4" type="submit">Subscribe</button>
                            </form>
                          </div>
                          <!--/ .Newsletter -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </footer>
              <div class="copyright text-center border-top border-default-color-3">
                <p class="mb-0">© 2021 Fastland By FinestDevs. All Rights Reserved</p>
              </div>
            </div>
          </div>
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

