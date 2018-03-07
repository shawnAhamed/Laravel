@extends('front.master')

@section('title')
    Ena-The Best Developer in Bangladesh

    @endsection


@section('experience')


    <div class="section md-section">

        <!-- container -->
        <div class="container">

            <!-- row -->

            <div class="row">

                <!-- about -->
                @foreach($blogs as $blog)

                <div class="col-md-4">
                    <div class="about">
                       <img src="{{asset($blog->blog_image)}}" alt="">
                        <h3>{{$blog->blog_title}}</h3>
                        <p>{{$blog->blog_description}}</p>
                        <a href="#" class="text-link"><span>Read more</span></a>
                    </div>
                </div>
                @endforeach

                <!-- /about -->


            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /About section 01 -->



    @endsection