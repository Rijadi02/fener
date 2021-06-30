<x-front-master>

    @section('content')
    <div class="welcome-area welcome-area--l1 position-relative bg-default">
        <div class="container">
          <div class="row">
            <!-- Welcome content Area -->
            <div class="col-xl-6 col-lg-7 col-md-8 col-xs-11 order-2 order-lg-1" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
              <div class="welcome-content welcome-content--l1">
                <h1 class="welcome-content__title">
                  Thyej barrjeren mes teje dhe kuranit<br>
                  {{-- <span class="text-highlight highlight-text d-inline-block"></span> --}}
                </h1>
                <p class="welcome-content__descriptions">Meso arabishten dhe leximin e kuranit
                </p>
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
            <div class="col-xl-6 d-none d-lg-block col-lg-5 pb-5 col-md-10 order-1 order-lg-2 position-static">
                <div class="welcome-image-group-wrapper">

                    <object  class="w-100 pb-5" data="{{asset('front/image/svg/hero.svg')}}"></object>


                </div>
              </div>
            </div>
            <!--/ .Welcome Image Area -->
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

      <div class="feature-section feature-section--l1 bg-default-6">
        <div class="feature-section--l1__shape-group">
            <div class="img-1">
                <img class="w-75" src="{{asset('front/image/home-1/l1-full-circle-shape.png')}}" alt="">
            </div>
            <img class="w-75" style="float: right" src="{{asset('front/image/home-1/l1-half-circle-shape.png')}}" alt="">
          </div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title section-title--l3 text-center mb-5">
              <h6 class="section-title__sub-heading" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">Our Process</h6>
              <h2 class="section-title__heading mb-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">Digital system for your company</h2>
            </div>
          </div>
        </div>
        <div class="widgets widgets-content--l3 mt-5" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-xs-6 single-widget">
              <div class="widget widget--content-l3">
                <div class="widget--content-l3__circle">
                  <h2 class="widget--content-l3__circle-content bg-electric-violet-2 shadow--electric-violet-2 dark-mode-texts">
                    <i class="fa fa-chart-pie"></i></h2>
                </div>
                <h4 class="widget--content-l3__title">Nahu</h4>
                <p class="widget--content-l3__text">Part of what Adobe does is <br class="d-xs-none"> advise customers about how <br
            class="d-xs-none"> to transform, to be more</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-6 single-widget">
              <div class="widget widget--content-l3">
                <div class="widget--content-l3__circle">
                  <h2 class="widget--content-l3__circle-content bg-flamingo shadow--flamingo dark-mode-texts">
                    <i class="fa fa-shapes"></i></h2>
                </div>
                <h4 class="widget--content-l3__title">Sarf</h4>
                <p class="widget--content-l3__text">Part of what Adobe does is <br class="d-xs-none"> advise customers about how <br
            class="d-xs-none"> to transform, to be more</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-6 single-widget">
              <div class="widget widget--content-l3">
                <div class="widget--content-l3__circle">
                  <h2 class="widget--content-l3__circle-content bg-egg-blue shadow--egg-blue dark-mode-texts">
                    <i class="fa fa-search"></i></h2>
                </div>
                <h4 class="widget--content-l3__title">Beleghah</h4>
                <p class="widget--content-l3__text">Part of what Adobe does is <br class="d-xs-none"> advise customers about how <br
            class="d-xs-none"> to transform, to be more</p>
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
                <img class="w-100" src="{{asset('front/image/svg/gramar.svg')}}" alt="">
              </div>
              <!--/ .Content Image Wrap -->
            </div>
            <!-- Content Widgets -->
            <div class="col-xxl-5 offset-xxl-1 col-lg-6 col-md-8 col-xs-10" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">
                <div class="about-us-right mt-4 mt-lg-0">
                  <div class="section-title section-title--l5">
                    <h6 class="section-title__sub-heading text-primary">Watch video</h6>
                    <h2 class="section-title__heading mb-4">Consultation Trade<br class="d-none d-xs-block d-lg-none  d-xl-block"> Easier Than Ever
                    </h2>
                    <p class="section-title__description">Scale up and down easily as your business demands. And make use of
                      business-grade consultation. Book flexibly by the day, week or longer and customise the layout to reflect
                      your brand.</p>
                  </div>
                  <div class="content-btn-group mt-4">
                    <a class="btn btn--lg-3 btn-primary me-3 text-white shadow--primary-2 rounded-50 me-3 popup-btn mb-3" href="https://www.youtube.com/watch?v=LWZ7iytIA6k">Shiko Kurset</a>
                    <a class="btn btn--lg-3 btn-electric-violet-2 shadow--electric-violet-2-2 rounded-50 me-3 text-white mb-3" href="#">Krijo Llogari</a>
                  </div>
                </div>
              </div>
            <!--/ .Content Widgets -->
          </div>


        </div>


      </div>



      <div class="portfolio-area border-top portfolio-area--l9 bg-default">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-8">
              <!-- Section Title -->
              <div class="section-title section-title--l9 text-center">
                <h6 class="section-title__sub-heading text-electric-violet-2" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">Kurset</h6>
                <h2 class="section-title__heading" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">The Works We Are Proud Of</h2>
              </div>
              <!--/ .Section Title -->
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-lg-6 col-md-10" data-aos="fade-right" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
              <div class="portfolio-img mb-5 mb-lg-0">
                <div class="portfolio-img__single">
                  <img class="w-100" style="aspect-ratio: 1.05333333333; object-fit: cover" src="{{asset('front/image/png/blog-post-3.png')}}" alt="">
                  <div class="portfolio-img__single__shape">
                    <img class="w-100" src="{{asset('front/image/home-8/portfolio-shape.png')}}" alt="">
                    <div class="shape-content">
                      <h1>01</h1>
                    </div>
                  </div>
                </div>
                <div class="portfolio-img__single">
                  <img class="w-100" style="aspect-ratio: 1.05333333333; object-fit: cover" src="{{asset('front/image/png/blog-post-4.png')}}" alt="">
                  <div class="portfolio-img__single__shape">
                    <img class="w-100" src="{{asset('front/image/home-8/portfolio-shape.png')}}" alt="">
                    <div class="shape-content">
                      <h1>02</h1>
                    </div>
                  </div>
                </div>
                <div class="portfolio-img__single">
                  <img class="w-100" style="aspect-ratio: 1.05333333333; object-fit: cover" src="{{asset('front/image/png/blog-post-5.png')}}" alt="">
                  <div class="portfolio-img__single__shape">
                    <img class="w-100" src="{{asset('front/image/home-8/portfolio-shape.png')}}" alt="">
                    <div class="shape-content">
                      <h1>03</h1>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-xl-5 offset-xl-1 col-lg-6 col-md-10" data-aos="fade-left" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
              <div class="portfolio-content">
                <div class="portfolio-content__single">
                  <h6 class="portfolio-content__sub-heading">
                    <span class="text-electric-violet-2">Project 01</span>/ 03
                  </h6>
                  <h2 class="portfolio-content__heading">Principle Of<br class="d-none d-xs-block"> Product Design</h2>
                  <span class="portfolio-content__heading-small">By Mehmet Armande</span>
                  <p class="portfolio-content__text">We are idea generators,goal seekers, challenge-thirsty professionals creators of unique interner projects. we deliver unconventional solutions, combining the most advanced web technologies, modern design and bold communication. For us, each project is a meaningful adventure, in which we become partners with our clients, on the road to perfection </p>
                  <a href="#" class="btn btn-electric-violet-2 btn--lg-2 rounded-50">Launch project</a>
                </div>
                <div class="portfolio-content__single">
                  <h6 class="portfolio-content__sub-heading">
                    <span class="text-electric-violet-2">Project 02</span>/ 03
                  </h6>
                  <h2 class="portfolio-content__heading">Principle Of<br class="d-none d-xs-block"> Product Design</h2>
                  <span class="portfolio-content__heading-small">By Mehmet Armande</span>
                  <p class="portfolio-content__text">We are idea generators,goal seekers, challenge-thirsty professionals creators of unique interner projects. we deliver unconventional solutions, combining the most advanced web technologies, modern design and bold communication. For us, each project is a meaningful adventure, in which we become partners with our clients, on the road to perfection </p>
                  <a href="#" class="btn btn-electric-violet-2 btn--lg-2 rounded-50">Launch project</a>
                </div>
                <div class="portfolio-content__single">
                  <h6 class="portfolio-content__sub-heading">
                    <span class="text-electric-violet-2">Project 03</span>/ 03
                  </h6>
                  <h2 class="portfolio-content__heading">Principle Of<br class="d-none d-xs-block"> Product Design</h2>
                  <span class="portfolio-content__heading-small">By Mehmet Armande</span>
                  <p class="portfolio-content__text" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">We are idea generators,goal seekers, challenge-thirsty professionals creators of unique interner projects. we deliver unconventional solutions, combining the most advanced web technologies, modern design and bold communication. For us, each project is a meaningful adventure, in which we become partners with our clients, on the road to perfection </p>
                  <a href="#" class="btn btn-electric-violet-2 btn--lg-2 rounded-50">Launch project</a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="blog-area blog-area--reguler  bg-default-6">
        <div class="container">
            <div class="pb-5 row justify-content-center">
                <div class="col-xl-10 ">
                  <div class="section-title--2 text-center">
                    <h2 class="section-title--2__heading aos-init aos-animate" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">Software Integrations</h2>
                    <p class="section-title--2__description aos-init aos-animate" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">Create custom landing pages with Fastland that converts <br class="d-none d-sm-block"> more
                              visitors than any website.</p>
                    <div class="section-title--2__button">
                      <a class="btn-link--2 with--line border--primary aos-init aos-animate" href="" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400" data-aos-once="true">Explore All
                        Apps</a>
                    </div>
                  </div>
                </div>
              </div>


          <div class="row justify-content-center ">

            <div class="col-xl-4 col-lg-9 col-md-7 col-xs-10">
              <div class="blogs-post blogs-post--small">
                <img class="w-100" style="aspect-ratio: 0.9; object-fit:cover " src="{{asset('front/image/png/blog-post-4.png')}}" alt="">
                <div class="hover-content">
                  <div class="hover-content__top d-flex align-items-center dark-mode-texts">
                    <a href="/blog-details.html" class="hover-content__badge badge bg-primary">Gadgets</a>
                    <a href="/blog-details.html" class="hover-content__date">01 June, 2020</a>
                  </div>
                  <a href="/blog-details.html" class="hover-content__title">We can blend colors multiple ways, the most
                    common</a>                   <ul class="hover-content__post-meta list-unstyled">
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
                <img class="w-100" style="aspect-ratio: 0.9; object-fit:cover " src="{{asset('front/image/png/blog-post-3.png')}}" alt="">
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

      <div class="testimonial-section testimonial-section--l3 bg-default-3">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-lg-8 col-xl-9 col-xxl-7">
              <div class="section-title section-title--l3 text-center">
                <h6 class="section-title__sub-heading" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">Testimonial</h6>
                <h2 class="section-title__heading mb-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">We Care About Our Customers Experience Too</h2>
              </div>
            </div>
          </div>
          <div class="row justify-content-center testimonial-mobile-slider--l3" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400" data-aos-once="true">
            <div class="col-lg-4 col-md-12">
              <div class="card card-testimonial--l3">
                <div class="card-image">
                  <img src="{{asset('front/image/home-3/user-circle-1.png')}}" alt="">
                </div>
                <div class="card-body ">
                  <p class="card-description">There are many variations passages of Lorem lpsum available, but the majority have suffered alteration in some form, by injected or randomised.</p>
                  <div class="d-flex flex-wrap justify-content-between align-items-center card-user-block">
                    <div class="card-body__user mr-3">
                      <h3 class="card-title">John Doe</h3>
                      <p class="card-text--ext">Product Designer</p>
                    </div>
                    <ul class="review-star reviw-star--size-2 list-unstyled mb-0">
                      <li class="review-star__single">
                        <i class="fa fa-star"></i>
                      </li>
                      <li class="review-star__single">
                        <i class="fa fa-star"></i>
                      </li>
                      <li class="review-star__single">
                        <i class="fa fa-star"></i>
                      </li>
                      <li class="review-star__single">
                        <i class="fa fa-star"></i>
                      </li>
                      <li class="review-star__single">
                        <i class="fa fa-star"></i>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12">
              <div class="card card-testimonial--l3">
                <div class="card-image">
                  <img src="{{asset('front/image/home-3/user-circle-2.png')}}" alt="">
                </div>
                <div class="card-body ">
                  <p class="card-description">There are many variations passages of Lorem lpsum available, but the majority have suffered alteration in some form, by injected or randomised.</p>
                  <div class="d-flex flex-wrap justify-content-between align-items-center card-user-block">
                    <div class="card-body__user mr-3">
                      <h3 class="card-title">Tiana Dokidis</h3>
                      <p class="card-text--ext">CMO, Dotcorn</p>
                    </div>
                    <ul class="review-star reviw-star--size-2 list-unstyled mb-0">
                      <li class="review-star__single">
                        <i class="fa fa-star"></i>
                      </li>
                      <li class="review-star__single">
                        <i class="fa fa-star"></i>
                      </li>
                      <li class="review-star__single">
                        <i class="fa fa-star"></i>
                      </li>
                      <li class="review-star__single">
                        <i class="fa fa-star"></i>
                      </li>
                      <li class="review-star__single">
                        <i class="fa fa-star"></i>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12">
              <div class="card card-testimonial--l3">
                <div class="card-image">
                  <img src="{{asset('front/image/home-3/user-circle-3.png')}}" alt="">
                </div>
                <div class="card-body ">
                  <p class="card-description">There are many variations passages of Lorem lpsum available, but the majority have suffered alteration in some form, by injected or randomised.</p>
                  <div class="d-flex flex-wrap justify-content-between align-items-center card-user-block">
                    <div class="card-body__user mr-3">
                      <h3 class="card-title">Talan Bergson</h3>
                      <p class="card-text--ext">CEO, Greener</p>
                    </div>
                    <ul class="review-star reviw-star--size-2 list-unstyled mb-0">
                      <li class="review-star__single">
                        <i class="fa fa-star"></i>
                      </li>
                      <li class="review-star__single">
                        <i class="fa fa-star"></i>
                      </li>
                      <li class="review-star__single">
                        <i class="fa fa-star"></i>
                      </li>
                      <li class="review-star__single">
                        <i class="fa fa-star"></i>
                      </li>
                      <li class="review-star__single">
                        <i class="fa fa-star"></i>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

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

