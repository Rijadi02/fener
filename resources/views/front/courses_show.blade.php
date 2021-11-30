<x-front-master>

    @section('content')


        <div class="blog-details bg-default-6">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="blog-title">
                            <h1 class="blog-title__heading">Creativo Para Jóvenes:<br> A UI/UX Designer’s Checklist.</h1>
                            <div class="blog__metainfo">
                                <a href="#" class="blog__metainfo__author-name">By David Jones</a>
                                <a href="#" class="blog__metainfo__date">Jan 14, 2021</a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-content__img">
                                <img class="w-100" src="https://images.unsplash.com/photo-1610388549158-cb214541f30c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80" alt="">
                            </div>
                            <p class="blog-content__text">Doubling my 9–5 salary several times in my career is something I
                                never thought would happen. My career went from startup land to call center operator in a
                                short space of time.</p>
                            <p class="blog-content__text">That meant going from six-figures down to the minimum wage in my
                                home country of Australia. And to top it off, I have no degrees in anything business related
                                — unless you count a sound engineering qualification.</p>



                            <div class="post-tags-section d-flex align-items-center flex-wrap">
                                <h4 class="post-tags-section__title mb-0">Tags:</h4>
                                <ul class="post-tags list-unstyled mt-3 mt-lg-5">
                                    <li><a href="#">Freelance</a></li>
                                    <li><a href="#">Education</a></li>
                                    <li><a href="#">Marketing</a></li>
                                    <li><a href="#">Job</a></li>
                                    <li><a href="#">Freelance</a></li>
                                </ul>
                            </div>
                            <div class="post-social-share d-flex align-items-center flex-wrap">
                                <h4 class="post-social-share__title mb-0">Share:</h4>
                                <ul class="social-share list-unstyled mb-0">
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                            {{-- <div class="next-prev-btn d-flex align-items-center justify-content-between">
                            <div class="prev-btn">
                                <a class="btn-link btn-link--prev" href="#"><i class="fa fa-arrow-left"></i>prev</a>
                            </div>
                            <div class="prev-btn">
                                <a class="btn-link btn-link--next" href="#">next<i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div> --}}
                        </div>
                    </div>
                    <div class="col-xl-4 offset-xl-1 col-lg-5 mt-5 mt-lg-0">
                        <div class="sidebar-area">
                            <!-- Single Widgets -->

                            <!--/ .Single Widgets -->
                            <!-- Single Widgets -->
                            <div class="widget">
                                <h3 class="widget__title">Te dhenat</h3>
                                <ul class="widget__recent-post list-unstyled mb-0 pb-0">

                                    <div class="row m-0">
                                        <div class="col-1 d-flex align-items-center justify-content-center text-primary"
                                            style="font-size: 1.2rem">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="col-9">
                                            <li class="widget__recent-post__single py-0 border-0">
                                                <p class="widget__recent-post__date">Ligjerues</p>
                                                <h5 class="widget__recent-post__title">Jahaja Hondozi</h5>
                                            </li>
                                        </div>

                                    </div>
                                    <div class="row m-0">
                                        <div class="col-1 d-flex align-items-center justify-content-center text-primary"
                                            style="font-size: 1.2rem">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="col-9">
                                            <li class="widget__recent-post__single py-0 border-0">
                                                <p class="widget__recent-post__date">Ligjerues</p>
                                                <h5 class="widget__recent-post__title">Jahaja Hondozi</h5>
                                            </li>
                                        </div>

                                    </div>

                                    <div class="row m-0">
                                        <div class="col-1 d-flex align-items-center justify-content-center text-primary"
                                            style="font-size: 1.2rem">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="col-9">
                                            <li class="widget__recent-post__single py-0 border-0">
                                                <p class="widget__recent-post__date">Ligjerues</p>
                                                <h5 class="widget__recent-post__title">Jahaja Hondozi</h5>
                                            </li>
                                        </div>

                                    </div>
                                </ul>
                                <a
                                    class="btn btn--lg-3  mt-5  btn-electric-violet-2 shadow--electric-violet-2-2 rounded-50 me-3 text-white">
                                    Buy now &nbsp; <i class="fa fa-shopping-basket"></i></a>
                            </div>



                            <div class="widget">
                                <h3 class="widget__title">Search</h3>
                                <div class="widget__search">
                                    <form action="./">
                                        <i class="fa fa-search text-royal-blue"></i>
                                        <input type="text" placeholder="Type to search">
                                    </form>
                                </div>
                            </div>
                            <!--/ .Single Widgets -->


                        </div>
                        <!--/ .Single Widgets -->
                    </div>
                </div>
            </div>
        </div>


    @endsection


</x-front-master>
