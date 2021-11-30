<x-front-master>

    @section('content')

    <div class="blog-area blog-area--reguler bg-default-6">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-7">
              <div class="section-title section-title--innerpage text-center pb-7">
                <h5 class="section-title__sub-heading text-electric-violet-2">Latest posts</h5>
                <h2 class="section-title__heading">Blog Reguler</h2>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-10">
              <div class="blogs-post blogs-post--big">
                <img class="w-100" src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1153&q=80" alt="">
                <div class="hover-content">
                  <div class="hover-content__top d-flex align-items-center dark-mode-texts">
                    <a href="{{route("blogs_show", 1)}}" class="hover-content__badge badge bg-primary">Gadgets</a>
                    <a href="{{route("blogs_show", 1)}}" class="hover-content__date">01 June, 2020</a>
                  </div>
                  <a href="{{route("blogs_show", 1)}}" class="hover-content__title">We can blend colors multiple ways, the most common</a>
                  <ul class="hover-content__post-meta list-unstyled">
                    <li>
                      <a href="{{route("blogs_show", 1)}}">
                        <i class="fa fa-user"></i>George Lee</a>
                      <a href="{{route("blogs_show", 1)}}">
                        <i class="fa fa-heart"></i>21K</a>
                      <a href="{{route("blogs_show", 1)}}">
                        <i class="fa fa-comments"></i>305</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-9 col-md-7 col-xs-10">
              <div class="blogs-post blogs-post--small">
                <img class="w-100" src="https://images.unsplash.com/photo-1540866225557-9e4c58100c67?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=640&q=80" alt="">
                <div class="hover-content">
                  <div class="hover-content__top d-flex align-items-center dark-mode-texts">
                    <a href="{{route("blogs_show", 1)}}" class="hover-content__badge badge bg-primary">Gadgets</a>
                    <a href="{{route("blogs_show", 1)}}" class="hover-content__date">01 June, 2020</a>
                  </div>
                  <a href="{{route("blogs_show", 1)}}" class="hover-content__title">We can blend colors multiple ways, the most common</a>
                  <ul class="hover-content__post-meta list-unstyled">
                    <li>
                      <a href="{{route("blogs_show", 1)}}">
                        <i class="fa fa-user"></i>George Lee</a>
                      <a href="{{route("blogs_show", 1)}}">
                        <i class="fa fa-heart"></i>21K</a>
                      <a href="{{route("blogs_show", 1)}}">
                        <i class="fa fa-comments"></i>305</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-9 col-md-7 col-xs-10">
              <div class="blogs-post blogs-post--small">
                <img class="w-100" src="{{asset('front/image/png/blog-post-3.png')}}" alt="">
                <div class="hover-content">
                  <div class="hover-content__top d-flex align-items-center dark-mode-texts">
                    <a href="{{route("blogs_show", 1)}}" class="hover-content__badge badge bg-primary">Gadgets</a>
                    <a href="{{route("blogs_show", 1)}}" class="hover-content__date">01 June, 2020</a>
                  </div>
                  <a href="{{route("blogs_show", 1)}}" class="hover-content__title">We can blend colors multiple ways, the most common</a>
                  <ul class="hover-content__post-meta list-unstyled">
                    <li>
                      <a href="{{route("blogs_show", 1)}}">
                        <i class="fa fa-user"></i>George Lee</a>
                      <a href="{{route("blogs_show", 1)}}">
                        <i class="fa fa-heart"></i>21K</a>
                      <a href="{{route("blogs_show", 1)}}">
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
                    <a href="{{route("blogs_show", 1)}}" class="hover-content__badge badge bg-primary">Gadgets</a>
                    <a href="{{route("blogs_show", 1)}}" class="hover-content__date">01 June, 2020</a>
                  </div>
                  <a href="{{route("blogs_show", 1)}}" class="hover-content__title">We can blend colors multiple ways, the most common</a>
                  <ul class="hover-content__post-meta list-unstyled">
                    <li>
                      <a href="{{route("blogs_show", 1)}}">
                        <i class="fa fa-user"></i>George Lee</a>
                      <a href="{{route("blogs_show", 1)}}">
                        <i class="fa fa-heart"></i>21K</a>
                      <a href="{{route("blogs_show", 1)}}">
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
                    <a href="{{route("blogs_show", 1)}}" class="hover-content__badge badge bg-primary">Gadgets</a>
                    <a href="{{route("blogs_show", 1)}}" class="hover-content__date">01 June, 2020</a>
                  </div>
                  <a href="{{route("blogs_show", 1)}}" class="hover-content__title">We can blend colors multiple ways, the most common</a>
                  <ul class="hover-content__post-meta list-unstyled">
                    <li>
                      <a href="{{route("blogs_show", 1)}}">
                        <i class="fa fa-user"></i>George Lee</a>
                      <a href="{{route("blogs_show", 1)}}">
                        <i class="fa fa-heart"></i>21K</a>
                      <a href="{{route("blogs_show", 1)}}">
                        <i class="fa fa-comments"></i>305</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-9 col-md-7 col-xs-10">
              <div class="blogs-post blogs-post--small">
                <img class="w-100" src="https://images.unsplash.com/photo-1575225702511-d72a2662cb53?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=675&q=80" alt="">
                <div class="hover-content">
                  <div class="hover-content__top d-flex align-items-center dark-mode-texts">
                    <a href="{{route("blogs_show", 1)}}" class="hover-content__badge badge bg-primary">Gadgets</a>
                    <a href="{{route("blogs_show", 1)}}" class="hover-content__date">01 June, 2020</a>
                  </div>
                  <a href="{{route("blogs_show", 1)}}" class="hover-content__title">We can blend colors multiple ways, the most common</a>
                  <ul class="hover-content__post-meta list-unstyled">
                    <li>
                      <a href="{{route("blogs_show", 1)}}">
                        <i class="fa fa-user"></i>George Lee</a>
                      <a href="{{route("blogs_show", 1)}}">
                        <i class="fa fa-heart"></i>21K</a>
                      <a href="{{route("blogs_show", 1)}}">
                        <i class="fa fa-comments"></i>305</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-9 col-md-7 col-xs-10">
              <div class="blogs-post blogs-post--small">
                <img class="w-100" src="https://images.unsplash.com/photo-1554230333-6fee16f4a12b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80" alt="">
                <div class="hover-content">
                  <div class="hover-content__top d-flex align-items-center dark-mode-texts">
                    <a href="{{route("blogs_show", 1)}}" class="hover-content__badge badge bg-primary">Gadgets</a>
                    <a href="{{route("blogs_show", 1)}}" class="hover-content__date">01 June, 2020</a>
                  </div>
                  <a href="{{route("blogs_show", 1)}}" class="hover-content__title">We can blend colors multiple ways, the most common</a>
                  <ul class="hover-content__post-meta list-unstyled">
                    <li>
                      <a href="{{route("blogs_show", 1)}}">
                        <i class="fa fa-user"></i>George Lee</a>
                      <a href="{{route("blogs_show", 1)}}">
                        <i class="fa fa-heart"></i>21K</a>
                      <a href="{{route("blogs_show", 1)}}">
                        <i class="fa fa-comments"></i>305</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center mt-7">
            <div class="col-xl-4">
              <div class="pagination">
                <ul class="list-unstyled text-center mx-auto">
                  <li>
                    <a href="#"><i class="fa fa-chevron-left"></i></a>
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">...</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#"><i class="fa fa-chevron-right"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

    @endsection


</x-front-master>

