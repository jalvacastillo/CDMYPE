@extends('layout')

@section('titulo')
  Noticias
@endsection

@section('content')
    
    @include('noticias.title')


    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="row blog-page">

          <!-- Start Blog Posts -->
          <div class="col-md-9 blog-box">

            <!-- Start Post -->
            <div class="blog-post image-post">
              <!-- Post Thumb -->
              <div class="post-head">
                <a class="lightbox" title="This is an image title" href="assets/images/blog-01.jpg">
                  <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                  <img alt="" src="assets/images/blog-01.jpg">
                </a>
              </div>
              <!-- Post Content -->
              <div class="post-content">
                <div class="post-type"><i class="fa fa-picture-o"></i></div>
                <h2><a href="#">Image Box With Nice Lightbox</a></h2>
                <ul class="post-meta">
                  <li>By <a href="#">iThemesLab</a></li>
                  <li>December 30, 2013</li>
                  <li><a href="#">WordPress</a>, <a href="#">Graphic</a></li>
                  <li><a href="#">4 Comments</a></li>
                </ul>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                <a class="main-button" href="#">Read More <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
            <!-- End Post -->

            <!-- Start Post -->
            <div class="blog-post video-post">
              <!-- Post Video -->
              <div class="post-head">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/iOPQrzAZYvc" frameborder="0" allowfullscreen></iframe>
              </div>
              <!-- Post Content -->
              <div class="post-content">
                <div class="post-type"><i class="fa fa-play"></i></div>
                <h2><a href="#">Iframe Video Post</a></h2>
                <ul class="post-meta">
                  <li>By <a href="#">iThemesLab</a></li>
                  <li>December 30, 2013</li>
                  <li><a href="#">WordPress</a>, <a href="#">Graphic</a></li>
                  <li><a href="#">4 Comments</a></li>
                </ul>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                <a class="main-button" href="#">Read More <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
            <!-- End Post -->


            <!-- Start Post -->
            <div class="blog-post gallery-post">
              <!-- Post Gallery -->
              <div class="post-head">
                <div class="post-slider touch-slider">
                  <div class="item">
                    <a class="lightbox" title="This is an image title" href="assets/images/blog-02.jpg" data-lightbox-gallery="gallery1">
                      <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                      <img alt="" src="assets/images/blog-02.jpg">
                    </a>
                  </div>
                  <div class="item">
                    <a class="lightbox" title="This is an image title" href="assets/images/blog-03.jpg" data-lightbox-gallery="gallery1">
                      <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                      <img alt="" src="assets/images/blog-03.jpg">
                    </a>
                  </div>
                  <div class="item">
                    <a class="lightbox" title="This is an image title" href="assets/images/blog-04.jpg" data-lightbox-gallery="gallery1">
                      <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                      <img alt="" src="assets/images/blog-04.jpg">
                    </a>
                  </div>
                </div>
              </div>
              <!-- Post Content -->
              <div class="post-content">
                <div class="post-type"><i class=" fa fa-picture-o"></i></div>
                <h2><a href="#">Gallery Post With Nice Lightbox.</a></h2>
                <ul class="post-meta">
                  <li>By <a href="#">iThemesLab</a></li>
                  <li>December 30, 2013</li>
                  <li><a href="#">WordPress</a>, <a href="#">Graphic</a></li>
                  <li><a href="#">4 Comments</a></li>
                </ul>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                <a class="main-button" href="#">Read More <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
            <!-- End Post -->

            <!-- Start Pagination -->
            <div id="pagination">
              <span class="all-pages">Page 1 of 3</span>
              <span class="current page-num">1</span>
              <a class="page-num" href="#">2</a>
              <a class="page-num" href="#">3</a>
              <a class="next-page" href="#">Next</a>
            </div>
            <!-- End Pagination -->

          </div>
          <!-- End Blog Posts -->


          @include('noticias.sidebar')


        </div>
      </div>
    </div>
    <!-- End Content -->

@endsection