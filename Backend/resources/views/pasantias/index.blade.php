@extends('layout')

@section('titulo')
  Pasantias
@endsection

@section('content')

    @include('pasantias.title')


        <!-- Start Content -->
        <div id="content">
          <div class="container">
            <div class="page-content">


              <div class="row">

                <!-- Start Image Service Box 1 -->
                <div class="col-md-4 image-service-box">
                  <img class="img-thumbnail" src="assets/images/service-01.jpg" alt="" />
                  <h4>Clean Modern Code</h4>
                  <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis quasi architect.</p>
                </div>
                <!-- End Image Service Box 1 -->

                <!-- Start Image Service Box 2 -->
                <div class="col-md-4 image-service-box">
                  <img class="img-thumbnail" src="assets/images/service-02.jpg" alt="" />
                  <h4>Great Support</h4>
                  <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis quasi architect.</p>
                </div>
                <!-- End Image Service Box 2 -->

                <!-- Start Image Service Box 3 -->
                <div class="col-md-4 image-service-box">
                  <img class="img-thumbnail" src="assets/images/service-03.jpg" alt="" />
                  <h4>High Quality Theme</h4>
                  <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis quasi architect.</p>
                </div>
                <!-- End Image Service Box 3 -->

              </div>
              

            </div>
          </div>
        </div>

@endsection