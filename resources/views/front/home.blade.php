<x-front-master>

    @section('content')
    <div class="welcome-area welcome-area--l1 position-relative bg-default">
        <div class="container">
          <div class="row">
            <!-- Welcome content Area -->
            <div class="col-xl-6 col-lg-7 col-md-8 col-xs-11 order-2 order-lg-1" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
              <div class="welcome-content welcome-content--l1">
                <h1 class="welcome-content__title">
                  Stop waiting. Grow your<br>
                  <span class="text-highlight highlight-text d-inline-block"></span>
                </h1>
                <p class="welcome-content__descriptions">Create custom landing pages
                  with Fastland<br class="d-none d-xs-block"> that converts more visitors than any website.</p>
                <!-- Newsletter -->
                <div class="newsletter-form">
                  <form action="/.">
                    <div class="d-flex align-items-center justify-content-center flex-column flex-xs-row">
                      <input class="form-control " type="email" placeholder="Enter your email" required>
                      <button class=" btn-purple-heart btn btn--lg" type="submit">Start For Free</button>
                    </div>
                  </form>
                </div>
                <!--/ .Newsletter -->
                <p class="welcome-content__terms-text">By clicking the button, you are agreeing with our <a class="btn btn-link" href="/terms-page.html">Terms & Conditions.</a>
                </p>
              </div>
            </div>
            <!--/ .Welcome Content Area -->
            <!--Welcome Image Area -->
            <div class="col-xl-6 col-lg-5 col-md-10 order-1 order-lg-2 position-static">
              <div class="welcome-image-group-wrapper">
                <div class="welcome-image welcome-image--group-01">
                  <img src="{{asset('front/image/home-1/l1-hero-img-ipad.png')}}" alt="" class="welcome-image__single welcome-image--group-01__main">
                  <div class="welcome-image__single welcome-image--group-01__img-1">
                    <img class="w-100" src="{{asset('front/image/home-1/l1-hero-img-1.png')}}" alt="">
                  </div>
                  <div class="welcome-image__single welcome-image--group-01__img-2">
                    <img class="w-100" src="{{asset('front/image/home-1/l1-hero-img-2.png')}}" alt="">
                  </div>
                  <div class="welcome-image__single welcome-image--group-01__img-3">
                    <img class="w-100" src="{{asset('front/image/home-1/l1-hero-img-3.png')}}" alt="">
                  </div>
                  <div class="welcome-image__single welcome-image--group-01__img-4">
                    <img class="w-100" src="{{asset('front/image/home-1/hero-dots.png')}}" alt="">
                  </div>
                  <div class="welcome-image__single welcome-image--group-01__img-5">
                    <img class="w-100" src="{{asset('front/image/home-1/l1-hero-shape-1.png')}}" alt="">
                  </div>
                  <div class="welcome-image__single welcome-image--group-01__img-6">
                    <img class="w-100" src="{{asset('front/image/home-1/l1-hero-shape-2.png')}}" alt="">
                  </div>
                  <div class="welcome-image__single welcome-image--group-01__img-7">
                    <img class="w-100" src="{{asset('front/image/home-1/l1-hero-shape-3.png')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <!--/ .Welcome Image Area -->
          </div>
        </div>
      </div>


      <div class="portfolio-area portfolio-area--l7 bg-default overflow-hidden">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-xl-7 col-lg-5 col-md-8 col-xs-9">
              <!-- Section Title -->
              <div class="section-title section-title--l7 text-center text-lg-start">
                <h6 class="section-title__sub-heading text-readical-red" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">Portfolio</h6>
                <h2 class="section-title__heading" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">Works we are proud of</h2>
              </div>
              <!--/ .Section Title -->
            </div>
            <div class="col-xl-5 col-lg-7 col-md-8">
              {{-- <div class="portfolio-menu text-center text-lg-end mb-5 mb-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
                <button class="button is-checked" data-filter="*">All Work</button>
                <button class="button" data-filter=".customer-support">Design</button>
                <button class="button" data-filter=".marketing">Development</button>
                <button class="button" data-filter=".design">Marketing</button>
                <button class="button" data-filter=".development">SEO</button>
              </div> --}}
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-12 col-xs-10">
              <div class="grid grid--l6 position-relative">
                <div class="grid-item grid--l6__single customer-support marketing">
                  <a href="/portfolio-details-3.html" class="portfolio__single">
                    <img class="w-100" src="{{asset('front/image/home-6/portfolio-img-1.png')}}" alt="">
                    <div class="portfolio__hover bg-readical-red dark-mode-texts d-xs-flex align-items-center justify-content-between">
                      <div class="hover-content">
                        <h3 class="portfolio__hover__heading">Agency Brand guide & Development</h3>
                        <p class="portfolio__hover__text">UX and UI, Design, Development</p>
                      </div>
                      <div class="hover-right">
                        <div class="portfolio__hover__link text-white">
                          <i class="fas fa-external-link-square-alt"></i>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="grid-item grid--l6__single marketing design">
                  <a href="/portfolio-details-3.html" class="portfolio__single">
                    <img class="w-100" src="{{asset('front/image/home-6/portfolio-img-2.png')}}" alt="">
                    <div class="portfolio__hover bg-readical-red dark-mode-texts d-xs-flex align-items-center justify-content-between">
                      <div class="hover-content">
                        <h3 class="portfolio__hover__heading">Agency Brand guide & Development</h3>
                        <p class="portfolio__hover__text">UX and UI, Design, Development</p>
                      </div>
                      <div class="hover-right">
                        <div class="portfolio__hover__link text-white">
                          <i class="fas fa-external-link-square-alt"></i>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="grid-item grid--l6__single customer-support development">
                  <a href="/portfolio-details-3.html" class="portfolio__single">
                    <img class="w-100" src="{{asset('front/image/png/portfolio-img-1.png')}}" alt="">
                    <div class="portfolio__hover bg-readical-red dark-mode-texts d-xs-flex align-items-center justify-content-between">
                      <div class="hover-content">
                        <h3 class="portfolio__hover__heading">Agency Brand guide & Development</h3>
                        <p class="portfolio__hover__text">UX and UI, Design, Development</p>
                      </div>
                      <div class="hover-right">
                        <div class="portfolio__hover__link text-white">
                          <i class="fas fa-external-link-square-alt"></i>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="service-area service-area--l1 border-top border-default-color-2 bg-default">
        <div class="service-shape service-shape--l1">
          <img class="w-100" src="{{asset('front/image/home-1/services-shape-l1.png')}}" alt="">
        </div>
        <div class="container">
          <!-- Section Title -->
          <div class="row align-items-end justify-content-center">
            <div class="col-lg-7 col-md-12 col-xs-10">
              <div class="section-title text-center text-md-start" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
                <h2 class="section-title__heading">Your business needs a<br class="d-none d-xs-block d-lg-none d-xl-block"> better shape today.</h2>
              </div>
            </div>
            <div class="col-lg-5 col-md-12 col-xs-10">
              <div class="section-title  text-center text-md-start" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">
                <p class="section-title__description">Create custom landing pages with <br class="d-none d-xs-block"> Fastland that converts more
                          visitors<br class="d-none d-sm-block"> than any website. Easy & Fast.</p>
              </div>
            </div>
          </div>
          <!--/ .Section Title -->
          <div class="service-items">
            <div class="row justify-content-center justify-content-md-start">
              <!-- Single Service -->
              <div class="col-lg-4 col-xs-6 col-10">
                <div class="widget widget--service text-center text-md-start" data-aos="zoom-in" data-aos-duration="300" data-aos-once="true">
                  <div class="widget__icon widget__icon--golden-tainoi mx-auto mx-md-0">
                    <img src="{{asset('front/image/svg/athletics.svg')}}" alt="">
                  </div>
                  <div class="widget__body">
                    <h5 class="widget__heading">Manage Smartly</h5>
                    <p class="widget__description">Stay on top of your task lists and stay<br class="d-none d-md-block"> in touch
              with what's happening</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-xs-6 col-10">
                <div class="widget widget--service text-center text-md-start" data-aos="zoom-in" data-aos-duration="300" data-aos-once="true">
                  <div class="widget__icon widget__icon--ice-cold mx-auto mx-md-0">
                    <img src="{{asset('front/image/svg/archery-target.svg')}}" alt="">
                  </div>
                  <div class="widget__body">
                    <h5 class="widget__heading">Communicate Fast</h5>
                    <p class="widget__description">Stay on top of your task lists and stay<br class="d-none d-md-block"> in touch
              with what's happening</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-xs-6 col-10">
                <div class="widget widget--service text-center text-md-start" data-aos="zoom-in" data-aos-duration="300" data-aos-once="true">
                  <div class="widget__icon widget__icon--anakiwaap mx-auto mx-md-0">
                    <img src="{{asset('front/image/svg/money-coins.svg')}}" alt="">
                  </div>
                  <div class="widget__body">
                    <h5 class="widget__heading">Influence Easily</h5>
                    <p class="widget__description">Stay on top of your task lists and stay<br class="d-none d-md-block"> in touch
              with what's happening</p>
                  </div>
                </div>
              </div>
              <!--/ .Single Service -->
            </div>
          </div>
        </div>
      </div>

      <div class="feature-section feature-section--l1 bg-blue-ribbon dark-mode-texts">
        <!-- Section Shape -->
        <div class="feature-section--l1__shape-group">
          <img class="w-100" src="{{asset('front/image/home-1/l1-half-circle-shape.png')}}" alt="">
          <div class="img-1">
            <img class="w-100" src="{{asset('front/image/home-1/l1-full-circle-shape.png')}}" alt="">
          </div>
        </div>
        <!--/ .Section Shape -->
        <div class="container">
          <!-- Section Title -->
          <div class="row">
            <div class="col-xl-8 col-lg-10">
              <div class="section-title" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
                <h2 class="section-title__heading mb-5">Best features available <br class="d-none d-xs-block"> for your
                          social marketing.</h2>
                <p class="section-title__description mt-8">Create custom landing pages with Fastland
                  that converts<br class="d-none d-xs-block"> more visitors than any website. Easy & Fast.</p>
              </div>
            </div>
          </div>
          <!--/ .Section Title -->
          <div class="feature-area-tab">
            <div class="row justify-content-center justify-content-md-start">
              <div class="col-lg-3 col-md-12 col-xs-6 col-8">
                <div class="nav nav-tab--feature row ms-0 me-0" id="v-pills-tab" role="tablist" aria-orientation="vertical" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">
                  <a class="widget widget--feature nav-item col-lg-12 col-md-4 col-xs-6 col-8 me-md-3 me-lg-0 active" data-bs-toggle="pill" id="v-pills-home-tab" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                    <i class="fa fa-chart-pie"></i>
                    <span class="widget-text">Analytics</span></a>
                  <a class="widget widget--feature nav-item col-lg-12 col-md-4 col-xs-6 col-8 me-md-3 me-lg-0" data-bs-toggle="pill" id="v-pills-profile-tab" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="">
                    <i class="far fa-flag"></i>
                    <span class="widget-text"> Advertisement</span></a>
                  <a class="widget widget--feature nav-item col-lg-12 col-md-4 col-xs-6 col-8 me-md-3 me-lg-0" data-bs-toggle="pill" id="v-pills-messages-tab" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="">
                    <i class="fas fa-chart-line"></i>
                    <span class="widget-text"> Sales Report</span></a>
                </div>
              </div>
              <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12">
                <div class="tab-content tab-content--feature" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="row align-items-center">
                      <div class="col-md-6 col-sm-8 col-xs-9" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">
                        <div class="features-content__item">
                          <h2 class="features-content__item__count">01.</h2>
                          <h5 class="features-content__item__heading">Real data access</h5>
                          <p class="features-content__item__content">Create custom landing pages with<br
                                                  class="d-none d-md-block"> Fastland that converts more visitors<br
                                                  class="d-none d-md-block"> than any website.</p>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-8 col-xs-9" data-aos="fade-left" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
                        <div class="features-content__item">
                          <h2 class="features-content__item__count">02.</h2>
                          <h5 class="features-content__item__heading">Daily email reports</h5>
                          <p class="features-content__item__content">Create custom landing pages with<br
                                                  class="d-none d-md-block"> Fastland that converts more visitors<br
                                                  class="d-none d-md-block"> than any website.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="row">
                      <div class="col-md-6 col-sm-8 col-xs-9" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">
                        <div class="features-content__item">
                          <h2 class="features-content__item__count">03.</h2>
                          <h5 class="features-content__item__heading">Real data access</h5>
                          <p class="features-content__item__content">Create custom landing pages with<br
                                                  class="d-none d-md-block"> Fastland that converts more visitors<br
                                                  class="d-none d-md-block"> than any website.</p>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-8 col-xs-9" data-aos="fade-left" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
                        <div class="features-content__item">
                          <h2 class="features-content__item__count">04.</h2>
                          <h5 class="features-content__item__heading">Daily email reports</h5>
                          <p class="features-content__item__content">Create custom landing pages with<br
                                                  class="d-none d-md-block"> Fastland that converts more visitors<br
                                                  class="d-none d-md-block"> than any website.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <div class="row">
                      <div class="col-md-6 col-sm-8 col-xs-9" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">
                        <div class="features-content__item">
                          <h2 class="features-content__item__count">05.</h2>
                          <h5 class="features-content__item__heading">Real data access</h5>
                          <p class="features-content__item__content">Create custom landing pages with<br
                                                  class="d-none d-md-block"> Fastland that converts more visitors<br
                                                  class="d-none d-md-block"> than any website.</p>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-8 col-xs-9" data-aos="fade-left" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
                        <div class="features-content__item">
                          <h2 class="features-content__item__count">06.</h2>
                          <h5 class="features-content__item__heading">Daily email reports</h5>
                          <p class="features-content__item__content">Create custom landing pages with<br
                                                  class="d-none d-md-block"> Fastland that converts more visitors<br
                                                  class="d-none d-md-block"> than any website.</p>
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

      <div class="content-section content-section--l1-1 bg-default">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-xl-5 col-lg-6 col-xs-7">
              <!-- Content Image Wrap -->
              <div class="content-image-group content-image-group--l1_1">
                <!-- Content Image -->
                <img class="w-100" src="{{asset('front/image/home-1/l1-contentOne-img-woman.png')}}" alt="" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
                <!-- Content Image -->
                <div class="content-image-group__image content-image-group__image-1" data-aos="fade-bottom" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
                  <img class="w-100" src="{{asset('front/image/home-1/purple-dots.png')}}" alt="">
                </div>
                <!-- Content Image -->
                <div class="content-image-group__image content-image-group__image-2" data-aos="fade-left" data-aos-duration="500" data-aos-delay="400" data-aos-once="true">
                  <img class="w-100" src="{{asset('front/image/home-1/l1-contentOne-shape-1.png')}}" alt="">
                </div>
                <!-- Content Image -->
                <div class="content-image-group__image content-image-group__image-3" data-aos="fade-left" data-aos-duration="500" data-aos-delay="500" data-aos-once="true">
                  <img class="w-100" src="{{asset('front/image/home-1/l1-contentOne-shape-2.png')}}" alt="">
                </div>
                <!-- Content Image -->
                <div class="content-image-group__image content-image-group__image-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true">
                  <!-- Card Section -->
                  <div class="card card--content bg-primary dark-mode-texts">
                    <div class="card-head d-flex align-items-end">
                      <h2 class="card-head__count text-white">68%</h2>
                      <span class="card-head__icon">
                                      <i class="fa fa-arrow-up"></i>
                                  </span>
                    </div>
                    <div class="card-body p-0">
                      <p class="card-body__description">Extra growth for your company.</p>
                    </div>
                  </div>
                  <!--/ .Card Section -->
                </div>
              </div>
              <!--/ .Content Image Wrap -->
            </div>
            <!-- Content Widgets -->
            <div class="col-xxl-4 col-xl-4 offset-xl-1 col-lg-6 col-md-8 col-xs-9">
              <div class="content-texts content-texts--l1-1" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">
                <h2 class="content__heading">Get instant <br> growth result <br> for business.</h2>
                <p class="content__description">Create custom landing pages
                  with Fastland that converts more visitors than any website. Easy, Reliable & Fast. The best medicines & biggest brands within 30 minutes at your home.</p>
              </div>
            </div>
            <!--/ .Content Widgets -->
          </div>
        </div>
      </div>

      <div class="blog-area blog-area--reguler bg-default-6">
        <div class="container">
          <div class="row justify-content-center">

            <div class="col-xl-4 col-lg-9 col-md-7 col-xs-10">
              <div class="blogs-post blogs-post--small">
                <img class="w-100" src="{{asset('front/image/png/blog-post-4.png')}}" alt="">
                <div class="hover-content">
                  <div class="hover-content__top d-flex align-items-center dark-mode-texts">
                    <a href="/blog-details.html" class="hover-content__badge badge bg-primary">Gadgets</a>
                    <a href="/blog-details.html" class="hover-content__date">01 June, 2020</a>
                  </div>
                  <a href="/blog-details.html" class="hover-content__title">We can blend colors multiple ways, the most
                    common</a>
                  <ul class="hover-content__post-meta list-unstyled">
                    <li>
                      <a href="/blog-details.html">
                        <i class="fa fa-user"></i>George Lee</a>
                      <a href="/blog-details.html">
                        <i class="fa fa-heart"></i>21K</a>
                      <a href="/blog-details.html">
                        <i class="fa fa-comments"></i>305</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-9 col-md-7 col-xs-10">
              <div class="blogs-post blogs-post--small">
                <img class="w-100" src="{{asset('front/image/png/blog-post-4.png')}}" alt="">
                <div class="hover-content">
                  <div class="hover-content__top d-flex align-items-center dark-mode-texts">
                    <a href="/blog-details.html" class="hover-content__badge badge bg-primary">Gadgets</a>
                    <a href="/blog-details.html" class="hover-content__date">01 June, 2020</a>
                  </div>
                  <a href="/blog-details.html" class="hover-content__title">We can blend colors multiple ways, the most
                    common</a>
                  <ul class="hover-content__post-meta list-unstyled">
                    <li>
                      <a href="/blog-details.html">
                        <i class="fa fa-user"></i>George Lee</a>
                      <a href="/blog-details.html">
                        <i class="fa fa-heart"></i>21K</a>
                      <a href="/blog-details.html">
                        <i class="fa fa-comments"></i>305</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-9 col-md-7 col-xs-10">
              <div class="blogs-post blogs-post--small">
                <img class="w-100" src="{{asset('front/image/png/blog-post-5.png')}}" alt="">
                <div class="hover-content">
                  <div class="hover-content__top d-flex align-items-center dark-mode-texts">
                    <a href="/blog-details.html" class="hover-content__badge badge bg-primary">Gadgets</a>
                    <a href="/blog-details.html" class="hover-content__date">01 June, 2020</a>
                  </div>
                  <a href="/blog-details.html" class="hover-content__title">We can blend colors multiple ways, the most
                    common</a>
                  <ul class="hover-content__post-meta list-unstyled">
                    <li>
                      <a href="/blog-details.html">
                        <i class="fa fa-user"></i>George Lee</a>
                      <a href="/blog-details.html">
                        <i class="fa fa-heart"></i>21K</a>
                      <a href="/blog-details.html">
                        <i class="fa fa-comments"></i>305</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>


          </div>

        </div>
      </div>


      {{-- this doesnt work --}}
      {{-- <div class="testimonial-section testimonial-section--l8 bg-default-5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-8 col-xl-9 col-xxl-7">
              <div class="section-title section-title--l8 text-center text-lg-start">
                <h6 class="section-title__sub-heading text-bittersweet" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">Testimonial</h6>
                <h2 class="section-title__heading mb-0" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">Don’t Just Take Our Words For It</h2>
              </div>
            </div>
            <div class="col-xxl-5 col-xl-3 col-lg-4 text-center text-lg-end ">
              <div class="testimonial-btn mb-6 mb-lg-0"></div>
            </div>
          </div>
          <div class="row justify-content-center testimonial-slider--l8" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true">
            <div class="col-lg-4 col-md-12">
              <div class="card card-testimonial--l4">
                <div class="card-body ">
                  <div class="card-body__top d-flex align-items-center justify-content-between">
                    <div class="d-flex flex-wrap align-items-center">
                      <div class="card-image">
                        <img src="{{asset('front/image/home-4/user-img-1.png')}}" alt="">
                      </div>
                      <div class="card-body__user mr-3">
                        <h3 class="card-title">Charles Patterson</h3>
                        <p class="card-text--ext">One year with us</p>
                      </div>
                    </div>
                    <div class="card-icon">
                      <i class="fa fa-quote-left"></i>
                    </div>
                  </div>
                  <p class="card-description">consetetur sadipscing elltr, sed dlam nonumy elrmod tempor invidunt ut labore et dolore magna allquyam erat, sed dlam voluptua.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12">
              <div class="card card-testimonial--l4">
                <div class="card-body ">
                  <div class="card-body__top d-flex align-items-center justify-content-between">
                    <div class="d-flex flex-wrap align-items-center">
                      <div class="card-image">
                        <img src="{{asset('image/home-3/user-circle-1.png')}}" alt="">
                      </div>
                      <div class="card-body__user mr-3">
                        <h3 class="card-title">John Doe</h3>
                        <p class="card-text--ext">One year with us</p>
                      </div>
                    </div>
                    <div class="card-icon">
                      <i class="fa fa-quote-left"></i>
                    </div>
                  </div>
                  <p class="card-description">consetetur sadipscing elltr, sed dlam nonumy elrmod tempor invidunt ut labore et dolore magna allquyam erat, sed dlam voluptua.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12">
              <div class="card card-testimonial--l4">
                <div class="card-body ">
                  <div class="card-body__top d-flex align-items-center justify-content-between">
                    <div class="d-flex flex-wrap align-items-center">
                      <div class="card-image">
                        <img src="{{asset('image/home-3/user-circle-2.png')}}" alt="">
                      </div>
                      <div class="card-body__user mr-3">
                        <h3 class="card-title">Tiana Dokidis</h3>
                        <p class="card-text--ext">One year with us</p>
                      </div>
                    </div>
                    <div class="card-icon">
                      <i class="fa fa-quote-left"></i>
                    </div>
                  </div>
                  <p class="card-description">consetetur sadipscing elltr, sed dlam nonumy elrmod tempor invidunt ut labore et dolore magna allquyam erat, sed dlam voluptua.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12">
              <div class="card card-testimonial--l4">
                <div class="card-body ">
                  <div class="card-body__top d-flex align-items-center justify-content-between">
                    <div class="d-flex flex-wrap align-items-center">
                      <div class="card-image">
                        <img src="{{asset('front/image/home-3/user-circle-3.png')}}" alt="">
                      </div>
                      <div class="card-body__user mr-3">
                        <h3 class="card-title">Tiana Dokidis</h3>
                        <p class="card-text--ext">One year with us</p>
                      </div>
                    </div>
                    <div class="card-icon">
                      <i class="fa fa-quote-left"></i>
                    </div>
                  </div>
                  <p class="card-description">consetetur sadipscing elltr, sed dlam nonumy elrmod tempor invidunt ut labore et dolore magna allquyam erat, sed dlam voluptua.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12">
              <div class="card card-testimonial--l4">
                <div class="card-body ">
                  <div class="card-body__top d-flex align-items-center justify-content-between">
                    <div class="d-flex flex-wrap align-items-center">
                      <div class="card-image">
                        <img src="{{asset('front/image/home-3/user-circle-1.png')}}" alt="">
                      </div>
                      <div class="card-body__user mr-3">
                        <h3 class="card-title">Talan Bergson</h3>
                        <p class="card-text--ext">CEO, Greener</p>
                      </div>
                    </div>
                    <div class="card-icon">
                      <i class="fa fa-quote-left"></i>
                    </div>
                  </div>
                  <p class="card-description">consetetur sadipscing elltr, sed dlam nonumy elrmod tempor invidunt ut labore et dolore magna allquyam erat, sed dlam voluptua.</p>
                </div>
              </div>b
            </div>
          </div>
        </div>
      </div> --}}


      {{-- <div class="counter-section bg-default">
        <div class="container">
          <div class="counter-widgets-wrapper border-top border-default-color-2">
            <div class="row justify-content-center">
              <div class="col-6 col-lg-3 col-md-4 col-xs-6" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">
                <div class="widget widget--counter">
                  <h3 class="text-blue-ribbon widget--counter__title"><span class="counter">15</span>M</h3>
                  <p class="widget--counter__text">New visitors<br class="d-none d-xs-block"> every month.</p>
                </div>
              </div>
              <div class="col-6 col-lg-3 col-md-4 col-xs-6" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200" data-aos-once="true">
                <div class="widget widget--counter">
                  <h3 class="text-primary widget--counter__title"><span class="counter">49</span>%</h3>
                  <p class="widget--counter__text">Extra conversion<br class="d-none d-xs-block"> on any niche.</p>
                </div>
              </div>
              <div class="col-6 col-lg-3 col-md-4 col-xs-6" data-aos="fade-up" data-aos-delay="400" data-aos-duration="500" data-aos-once="true">
                <div class="widget widget--counter">
                  <h3 class="text-green-2 widget--counter__title">$<span class="counter">2</span>M</h3>
                  <p class="widget--counter__text">Extra saved by<br class="d-none d-xs-block"> customers.</p>
                </div>
              </div>
              <div class="col-6 col-lg-3 col-md-4 col-xs-6" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true">
                <div class="widget widget--counter">
                  <h3 class="text-tree-poppy widget--counter__title"><span class="counter">93</span>%</h3>
                  <p class="widget--counter__text">Success rate on<br class="d-none d-xs-block"> last 05 years.</P>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> --}}

      <div class="cta-section cta-section--l1 bg-purple-heart dark-mode-texts">
        <div class="footer__shape-1">
          <img class="w-100" src="{{asset('front/image/home-1/footer-shape.png')}}" alt="">
        </div>
        <div class="container">
          <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="300" data-aos-once="true">
            <div class="col-lg-7 col-md-8">
              <div class="section-title text-center">
                <h2 class="section-title__heading">It’s easy to get <br class="d-none d-xs-block"> started.
                  Start now.</h2>
                <!-- Newsletter -->
                <div class="newsletter-form  mx-auto newsletter--l1-2">
                  <form action="/.">
                    <div class="d-flex align-items-center justify-content-center flex-column flex-xs-row">
                      <input class="form-control " type="email" placeholder="Enter your email" required>
                      <button class=" btn btn--lg btn-primary text-white h-70" type="submit">Start For Free</button>
                    </div>
                  </form>
                </div>
                <!--/ .Newsletter -->
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="footer-area--l1  bg-purple-heart dark-mode-texts">
        <div class="container">
          <div class="footer-area footer-area--l1">
            <div class="row ">
              <div class="col-lg-4 col-md-5 col-xs-7">
                <div class="footer-widgets">
                  <!-- Brand Logo-->
                  <div class="brand-logo mt-1 mb-8">
                    <a href="#">
                      <!-- light version logo (logo must be black)-->
                      <img src="{{asset('front/image/png/logo-dark.png')}}" alt="" class="light-version-logo">
                      <!-- Dark version logo (logo must be White)-->
                      <img src="{{asset('front/image/png/logo-white.png')}}" alt="" class="dark-version-logo">
                    </a>
                  </div>
                  <p class="footer-widgets__text">The best
                    medicines & biggest<br class="d-none d-xs-block"> brands within 30 minutes at your<br
                      class="d-none d-xs-block"> home. Experience the power of<br class="d-none d-xs-block"> MedCartel
                    today.</p>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="row">
                  <div class="col-md-4 col-xs-6">
                    <div class="footer-widgets">
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
                  <div class="col-md-4 col-xs-6">
                    <div class="footer-widgets">
                      <h4 class="footer-widgets__title">More Links</h4>
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
                  <div class="col-md-4 col-xs-7">
                    <div class="footer-widgets footer-widgets--1">
                      <h4 class="footer-widgets__title">Contact Details</h4>
                      <ul class="footer-widgets__list footer-widgets--address">
                        <li>
                          <i class="fa fa-map-marker-alt"></i>
                          <span>Amsterdam <br class="d-block">
                            Netherlands</span>
                        </li>
                        <li>
                          <i class="fa fa-phone-alt"></i>
                          <div class="list-content">
                            <a href="#">+31 62 19
                              22 705</a>
                            <span> 7 Days - 8am
                              - 10pm </span>
                          </div>
                        </li>
                        <li>
                          <i class="fa fa-envelope"></i>
                          <a href="mailto:info@medcartel.com">info@medcartel.com</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-copyright footer-copyright--l1">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-7">
                <div class="copyright text-center text-md-start">
                  <p class="copyright__text">© 2021 UX Theme, All Rights Reserved</p>
                </div>
              </div>
              <div class="col-md-5">
                <div class="footer-social-share dot-right footer-social-share--1">
                  <ul class="list-unstyled d-flex align-items-center justify-content-center justify-content-md-end">
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
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>

    <script src="{{asset('front/plugins/type-js/typed.min.js')}}"></script>
    <script>
      var typed = new Typed('.highlight-text', {
        strings: ["business.", "agency."],
        typeSpeed: 80,
        backSpeed: 80,
        cursorChar: '',
        shuffle: true,
        smartBackspace: false,
        loop: true
      });
    </script>


    @endsection


</x-front-master>

