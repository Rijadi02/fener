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
                      <li class="nav-item nav-item-has-children">
                        <a href="#" class="nav-link-item drop-trigger">Home <i class="fas fa-angle-down"></i>
                        </a>
                        <ul class="sub-menu" id="submenu-1">
                          <li class="sub-menu--item">
                            <a href="home-marketing.html">Marketing</a>
                          </li>
                          <li class="sub-menu--item">
                            <a href="home-project-management.html">Project Management</a>
                          </li>
                          <li class="sub-menu--item">
                            <a href="home-it-services.html">IT Services</a>
                          </li>
                          <li class="sub-menu--item">
                            <a href="home-services.html">Services</a>
                          </li>
                          <li class="sub-menu--item">
                            <a href="home-agency.html">Agency</a>
                          </li>
                          <li class="sub-menu--item">
                            <a href="home-digital-agency.html">Digital Agency</a>
                          </li>
                          <li class="sub-menu--item">
                            <a href="home-app.html">App Presenting</a>
                          </li>
                          <li class="sub-menu--item">
                            <a href="home-startup.html">Startup</a>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-item nav-item-has-children">
                        <a href="#" class="nav-link-item drop-trigger">Pages <i class="fas fa-angle-down"></i>
                        </a>
                        <ul class="sub-menu" id="submenu-2">
                          <li class="sub-menu--item">
                            <a href="about-us.html">About Us</a>
                          </li>
                          <li class="sub-menu--item nav-item-has-children">
                            <a href="#" data-menu-get="h3" class="drop-trigger">Blog<i class="fas fa-angle-right"></i>
                            </a>
                            <ul class="sub-menu" id="submenu-3">
                              <li class="sub-menu--item">
                                <a href="blogs.html">Blog</a>
                              </li>
                              <li class="sub-menu--item">
                                <a href="blog-details.html">Blog Details</a>
                              </li>
                              <li class="sub-menu--item">
                                <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                              </li>
                              <li class="sub-menu--item">
                                <a href="/blog-right-sidebar.html">Blog Right Sidebar </a>
                              </li>
                            </ul>
                          </li>
                          <li class="sub-menu--item nav-item-has-children">
                            <a href="#" data-menu-get="h3" class="drop-trigger">Careers<i class="fas fa-angle-right"></i>
                            </a>
                            <ul class="sub-menu" id="submenu-4">
                              <li class="sub-menu--item">
                                <a href="career.html">Careers</a>
                              </li>
                              <li class="sub-menu--item">
                                <a href="career-details.html">Carreer Details</a>
                              </li>
                            </ul>
                          </li>
                          <li class="sub-menu--item nav-item-has-children">
                            <a href="#" data-menu-get="h3" class="drop-trigger">Pricing<i class="fas fa-angle-right"></i>
                            </a>
                            <ul class="sub-menu" id="submenu-5">
                              <li class="sub-menu--item">
                                <a href="pricing-1.html">Pricing-01</a>
                              </li>
                              <li class="sub-menu--item">
                                <a href="pricing-2.html">Pricing-02</a>
                              </li>
                            </ul>
                          </li>
                          <li class="sub-menu--item nav-item-has-children">
                            <a href="#" data-menu-get="h3" class="drop-trigger">Account<i class="fas fa-angle-right"></i>
                            </a>
                            <ul class="sub-menu" id="submenu-7">
                              <li class="sub-menu--item">
                                <a href="sign-in.html">Sign In</a>
                              </li>
                              <li class="sub-menu--item">
                                <a href="sign-up.html">Sign Up</a>
                              </li>
                              <li class="sub-menu--item">
                                <a href="reset-password.html">Reset Password</a>
                              </li>
                            </ul>
                          </li>
                          <li class="sub-menu--item nav-item-has-children">
                            <a href="#" data-menu-get="h3" class="drop-trigger">Utility<i class="fas fa-angle-right"></i>
                            </a>
                            <ul class="sub-menu" id="submenu-8">
                              <li class="sub-menu--item">
                                <a href="faq.html">FAQ</a>
                              </li>
                              <li class="sub-menu--item">
                                <a href="terms-page.html">Terms & Conditions</a>
                              </li>
                              <li class="sub-menu--item">
                                <a href="404.html">404 Error</a>
                              </li>
                              <li class="sub-menu--item">
                                <a href="coming-soon.html">Coming Soon</a>
                              </li>
                              <li class="sub-menu--item">
                                <a href="testimonial-1.html">Testimonial One</a>
                              </li>
                              <li class="sub-menu--item">
                                <a href="testimonial-2.html">Testimonial Two</a>
                              </li>
                            </ul>
                          </li>
                          <li class="sub-menu--item nav-item-has-children">
                            <a href="#" data-menu-get="h3" class="drop-trigger">Contact<i class="fas fa-angle-right"></i>
                            </a>
                            <ul class="sub-menu" id="submenu-9">
                              <li class="sub-menu--item">
                                <a href="contact-1.html">Contact One</a>
                              </li>
                              <li class="sub-menu--item">
                                <a href="contact-2.html">Contact Two</a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-item nav-item-has-children has-megamenu">
                        <a href="#" class="nav-link-item drop-trigger">Portfolios <i class="fas fa-angle-down"></i>
                        </a>
                        <div class="sub-menu megamenu  megadropdown-center  d-lg-flex" id="submenu-100">
                          <ul class="col-lg-12 row-lg list-unstyled py-lg-2">
                            <li class="col-lg-3">
                              <div class="single-dropdown-block">
                                <h3>Gallery Style</h3>
                                <a href="portfolio-grid-2-container.html" class="mega-drop-menu-item sub-menu--item">Two Column Grid</a>
                                <a href="portfolio-grid-3-container.html" class="mega-drop-menu-item sub-menu--item">Three Column Grid</a>
                                <a href="portfolio-grid-4-container.html" class="mega-drop-menu-item sub-menu--item">Four Column Grid</a>
                                <a href="portfolio-grid-2-container-fluid.html" class="mega-drop-menu-item sub-menu--item">Two Column Wide</a>
                                <a href="portfolio-grid-3-container-fluid.html" class="mega-drop-menu-item sub-menu--item">Three Column Wide</a>
                                <a href="portfolio-grid-4-container-fluid.html" class="mega-drop-menu-item sub-menu--item">Four Column Wide</a>
                              </div>
                            </li>
                            <li class="col-lg-3">
                              <div class="single-dropdown-block">
                                <h3>Gallery (No Gap)</h3>
                                <a href="portfolio-grid-2-no-gap.html" class="mega-drop-menu-item sub-menu--item">Two Column Grid</a>
                                <a href="portfolio-grid-3-no-gap.html" class="mega-drop-menu-item sub-menu--item">Three Column Grid</a>
                                <a href="portfolio-grid-4-no-gap.html" class="mega-drop-menu-item sub-menu--item">Four Column Grid</a>
                                <a href="portfolio-grid-2-no-gap-full.html" class="mega-drop-menu-item sub-menu--item">Two Column Wide</a>
                                <a href="portfolio-grid-3-no-gap-full.html" class="mega-drop-menu-item sub-menu--item">Three Column Wide</a>
                                <a href="portfolio-grid-4-no-gap-full.html" class="mega-drop-menu-item sub-menu--item">Four Column Wide</a>
                              </div>
                            </li>
                            <li class="col-lg-3">
                              <div class="single-dropdown-block">
                                <h3>Masonry Style</h3>
                                <a href="portfolio-masonary-2-no-gap.html" class="mega-drop-menu-item sub-menu--item">Two Column Masonary</a>
                                <a href="portfolio-masonary-3-no-gap.html" class="mega-drop-menu-item sub-menu--item">Three Column Masonary</a>
                                <a href="portfolio-masonary-4-no-gap.html" class="mega-drop-menu-item sub-menu--item">Four Column Masonary</a>
                                <a href="portfolio-masonary-2-no-gap-full.html" class="mega-drop-menu-item sub-menu--item">Two Column Wide</a>
                                <a href="portfolio-masonary-3-no-gap-full.html" class="mega-drop-menu-item sub-menu--item">Three Column Wide</a>
                                <a href="portfolio-masonary-4-no-gap-full.html" class="mega-drop-menu-item sub-menu--item">Four Column Wide</a>
                              </div>
                            </li>
                            <li class="col-lg-3">
                              <div class="single-dropdown-block">
                                <h3>Portfolio Details</h3>
                                <a href="portfolio-details-1.html" class="mega-drop-menu-item sub-menu--item">Portfolio Details 1</a>
                                <a href="portfolio-details-2.html" class="mega-drop-menu-item sub-menu--item">Portfolio Details 2</a>
                                <a href="portfolio-details-3.html" class="mega-drop-menu-item sub-menu--item">Portfolio Details 3</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li class="nav-item nav-item-has-children">
                        <a href="#" class="nav-link-item drop-trigger">Blogs <i class="fas fa-angle-down"></i>
                        </a>
                        <ul class="sub-menu" id="submenu-10">
                          <li class="sub-menu--item">
                            <a href="/blogs.html">Blog Reguler</a>
                          </li>
                          <li class="sub-menu--item">
                            <a href="/blog-left-sidebar.html">Blog Left Sidebar</a>
                          </li>
                          <li class="sub-menu--item">
                            <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-item nav-item-has-children">
                        <a href="#" class="nav-link-item drop-trigger">Contact <i class="fas fa-angle-down"></i>
                        </a>
                        <ul class="sub-menu" id="submenu-11">
                          <li class="sub-menu--item">
                            <a href="/contact-1.html">Contact One</a>
                          </li>
                          <li class="sub-menu--item">
                            <a href="/contact-2.html">Contact Two</a>
                          </li>
                        </ul>
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

