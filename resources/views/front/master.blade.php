<!DOCTYPE html>
<html lang="en">
@include('front.includes.links')
<body>
<!-- Header -->
@include('front.includes.header')
<!-- /Header -->


<!-- Home Section -->
<div id="home" class="banner-area">

    <!-- Background Image -->
    <div class="bg-img overlay" style="background-image:url('{{asset('/front/')}}/img/background1.jpg')"></div>
    <!-- /Background Image -->

    <!-- home wrapper -->
    <div class="home-wrapper">
        <div class="container">
            <div class="row">

                <!-- home content -->
                <div class="col-md-10 col-md-offset-1">
                    <h1>We Build Your Dream</h1>
                    <p class="lead">Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
                    <button class="secondary-button">Learn more</button>
                </div>
                <!-- /home content -->

            </div>
        </div>
    </div>
    <!-- /home wrapper -->

</div>
<!-- /Home Section -->

<!-- About Section -->
<div id="about">

    <!-- About section 01 -->


    @yield('experience')



    <!-- About section 02 -->
    <div class="section md-section bg-grey" id="about-us">

        <!-- Half Background Image -->
        <div class="bg-img bg-half overlay" style="background-image:url('{{asset('/front/')}}/img/about4.jpg')"></div>
        <!-- /Half Background Image -->

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- About content -->
                <div class="col-md-offset-7 col-md-6">
                    <h4 class="sub-title">Subtitle</h4>
                    <h2 class="title">About Us</h2>
                    <p class="lead">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu</p>
                    <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.</p>
                </div>
                <!-- /About content -->

            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /About section 02 -->

</div>
<!-- /About Section -->

<!-- Numbers Section -->
<div id="numbers" class="section sm-section bg-main">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- number -->
            <div class="col-xs-6 col-md-3">
                <div class="number">
                    <i class="fa fa-building"></i>
                    <h3>20</h3>
                    <span>Year Of Experience</span>
                </div>
            </div>
            <!-- /number -->

            <!-- number -->
            <div class="col-xs-6 col-md-3">
                <div class="number">
                    <i class="fa fa-university"></i>
                    <h3>154</h3>
                    <span>Project Completed</span>
                </div>
            </div>
            <!-- /number -->

            <!-- number -->
            <div class="col-xs-6 col-md-3">
                <div class="number">
                    <i class="fa fa-handshake-o"></i>
                    <h3>785</h3>
                    <span>Happy Client</span>
                </div>
            </div>
            <!-- /number -->

            <!-- number -->
            <div class="col-xs-6 col-md-3">
                <div class="number">
                    <i class="fa fa-trophy"></i>
                    <h3>14</h3>
                    <span>Award Won</span>
                </div>
            </div>
            <!-- /number -->

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
<!-- /Numbers Section -->


<!-- Portfolio Section -->
<div id="portfolio" class="section md-section">

    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row">

            <!-- section header -->
            <div class="section-header text-center">
                <h4 class="sub-title">Subtitle</h4>
                <h2 class="title">Featured Works</h2>
            </div>
            <!-- section header -->

            <!-- portfolio slider -->
            <div id="portfolio-slider" class="owl-carousel owl-theme">

                <!-- portfolio -->
                <div class="portfolio">
                    <div class="portfolio-img">
                        <div class="overlay"></div>
                        <div class="portfolio-links">
                            <a href="#"><i class="fa fa-link"></i></a>
                            <a class="lightbox" href="{{asset('/front/')}}/img/project1.jpg"><i class="fa fa-search"></i></a>
                        </div>
                        <img src="{{asset('/front/')}}/img/project1.jpg" alt="">
                    </div>
                    <div class="portfolio-content">
                        <h3>Project Title</h3>
                        <span>Category</span>
                    </div>
                </div>
                <!-- /portfolio -->

                <!-- portfolio -->
                <div class="portfolio">
                    <div class="portfolio-img">
                        <div class="overlay"></div>
                        <div class="portfolio-links">
                            <a href="#"><i class="fa fa-link"></i></a>
                            <a class="lightbox" href="{{asset('/front/')}}/img/project2.jpg"><i class="fa fa-search"></i></a>
                        </div>
                        <img src="{{asset('/front/')}}/img/project2.jpg" alt="">
                    </div>
                    <div class="portfolio-content">
                        <h3>Project Title</h3>
                        <span>Category</span>
                    </div>
                </div>
                <!-- /portfolio -->


                <!-- portfolio -->
                <div class="portfolio">
                    <div class="portfolio-img">
                        <div class="overlay"></div>
                        <div class="portfolio-links">
                            <a href="#"><i class="fa fa-link"></i></a>
                            <a class="lightbox" href="{{asset('/front/')}}/img/project3.jpg"><i class="fa fa-search"></i></a>
                        </div>
                        <img src="{{asset('/front/')}}/img/project3.jpg" alt="">
                    </div>
                    <div class="portfolio-content">
                        <h3>Project Title</h3>
                        <span>Category</span>
                    </div>
                </div>
                <!-- /portfolio -->


                <!-- portfolio -->
                <div class="portfolio">
                    <div class="portfolio-img">
                        <div class="overlay"></div>
                        <div class="portfolio-links">
                            <a href="#"><i class="fa fa-link"></i></a>
                            <a class="lightbox" href="{{asset('/front/')}}/img/project4.jpg"><i class="fa fa-search"></i></a>
                        </div>
                        <img src="{{asset('/front/')}}/img/project4.jpg" alt="">
                    </div>
                    <div class="portfolio-content">
                        <h3>Project Title</h3>
                        <span>Category</span>
                    </div>
                </div>
                <!-- /portfolio -->


            </div>
            <!-- /portfolio slider -->

            <div class="view-all-portfolio">
                <a href="#" class="main-button">View All</a>
            </div>

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
<!-- /Portfolio Section -->

<!-- Services Section -->
<div id="service" class="section md-section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- section header -->
            <div class="section-header text-center">
                <h4 class="sub-title">Subtitle</h4>
                <h2 class="title">Our Services</h2>
            </div>
            <!-- /section header -->

            <!-- service -->
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <i class="fa fa-building"></i>
                    <div class="service-content">
                        <h3>Construction</h3>
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <a href="#" class="text-link"><span>Read more</span></a>
                    </div>
                </div>
            </div>
            <!-- /service -->

            <!-- service -->
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <i class="fa fa-wrench"></i>
                    <div class="service-content">
                        <h3>Renovation</h3>
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <a href="#" class="text-link"><span>Read more</span></a>
                    </div>
                </div>
            </div>
            <!-- /service -->

            <!-- service -->
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <i class="fa fa-university"></i>
                    <div class="service-content">
                        <h3>Architecture</h3>
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <a href="#" class="text-link"><span>Read more</span></a>
                    </div>
                </div>
            </div>
            <!-- /service -->

            <!-- service -->
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <i class="fa fa-paint-brush"></i>
                    <div class="service-content">
                        <h3>Painting</h3>
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <a href="#" class="text-link"><span>Read more</span></a>
                    </div>
                </div>
            </div>
            <!-- /service -->

            <!-- service -->
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <i class="fa fa-magic"></i>
                    <div class="service-content">
                        <h3>Decorating</h3>
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <a href="#" class="text-link"><span>Read more</span></a>
                    </div>
                </div>
            </div>
            <!-- /service -->

            <!-- service -->
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <i class="fa fa-bullhorn"></i>
                    <div class="service-content">
                        <h3>Consulting</h3>
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <a href="#" class="text-link"><span>Read more</span></a>
                    </div>
                </div>
            </div>
            <!-- /service -->

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
<!-- /Services Section -->

<!-- Why Choose us Section -->
<div class="section md-section bg-grey">

    <!-- Half Background Image -->
    <div class="bg-img bg-half bg-right overlay" style="background-image:url('{{asset('/front/')}}/img/about5.jpg')"></div>
    <!-- Half Background Image -->

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- Why Choose us content -->
            <div class="col-md-5">

                <!-- section header -->
                <div class="section-header">
                    <h4 class="sub-title">Subtitle</h4>
                    <h2 class="title">Why Choose Us</h2>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu</p>
                </div>
                <!-- /section header -->

                <!-- Why Choose us accordion -->
                <div class="accordion" id="accordion">

                    <!-- panel -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" href="#collapse-1">Certified Experience</a></h4>
                        </div>
                        <div id="collapse-1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /panel -->

                    <!-- panel -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapse-2">The Great Teamwork</a></h4>
                        </div>
                        <div id="collapse-2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /panel -->

                    <!-- panel -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapse-3">Modern Thechnology</a></h4>
                        </div>
                        <div id="collapse-3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /panel -->

                </div>
                <!-- /Why Choose us accordion -->

            </div>
            <!-- /Why Choose us content -->

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
<!-- /Why Choose us Section -->

<!-- Call to Action Section -->
<div id="cta-1" class="section md-section bg-main">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- CTA content -->
            <div class="col-md-10 col-md-offset-1 text-center">
                <h2>Aenean imperdiet. Etiam ultricies nisi vel augue.</h2>
                <h4>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</h4>
                <button class="main-button">Contact Us</button>
            </div>
            <!-- /CTA content -->

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
<!-- /Call to Action Section -->

<!-- Clients Section -->
<div id="clients" class="section">

    <!-- Half Background Image -->
    <div class="bg-img overlay" style="background-image:url('{{asset('/front/')}}/img/background2.jpg')"></div>
    <!-- /Half Background Image -->

    <!-- Testimonial Section -->
    <div id="testimonial" class="section sm-section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- section header -->
                <div class="section-header text-center">
                    <h4 class="sub-title">Subtitle</h4>
                    <h2 class="title">Happy Clients</h2>
                </div>
                <!-- /section header -->

                <!-- Testimonial slider -->
                <div class="col-md-8 col-md-offset-2">
                    <div id="testimonial-slider" class="owl-carousel owl-theme">

                        <!-- testimonial -->
                        <div class="testimonial">
                            <div class="testimonial-quote">
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</p>
                            </div>
                            <div class="testimonial-meta">
                                <h3>John Doe</h3>
                                <span>CEO Company</span>
                            </div>
                        </div>
                        <!-- /testimonial -->

                        <!-- testimonial -->
                        <div class="testimonial">
                            <div class="testimonial-quote">
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</p>
                            </div>
                            <div class="testimonial-meta">
                                <h3>John Doe</h3>
                                <span>CEO Company</span>
                            </div>
                        </div>
                        <!-- /testimonial -->

                        <!-- testimonial -->
                        <div class="testimonial">
                            <div class="testimonial-quote">
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</p>
                            </div>
                            <div class="testimonial-meta">
                                <h3>John Doe</h3>
                                <span>CEO Company</span>
                            </div>
                        </div>
                        <!-- /testimonial -->

                    </div>
                </div>
                <!-- /Testimonial slider -->

            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /Testimonial Section -->


    <!-- Partners Section -->
    <div id="partners" class="section sm-section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- partners slider -->
                <div id="partners-slider" class="owl-carousel owl-theme">

                    <!-- partner -->
                    <a href="#" class="partner">
                        <img src="{{asset('/front/')}}/img/partner.jpg" alt="">
                    </a>
                    <!-- /partner -->

                    <!-- partner -->
                    <a href="#" class="partner">
                        <img src="{{asset('/front/')}}/img/partner.jpg" alt="">
                    </a>
                    <!-- /partner -->

                    <!-- partner -->
                    <a href="#" class="partner">
                        <img src="{{asset('/front/')}}/img/partner.jpg" alt="">
                    </a>
                    <!-- /partner -->

                    <!-- partner -->
                    <a href="#" class="partner">
                        <img src="{{asset('/front/')}}/img/partner.jpg" alt="">
                    </a>
                    <!-- /partner -->

                    <!-- partner -->
                    <a href="#" class="partner">
                        <img src="{{asset('/front/')}}/img/partner.jpg" alt="">
                    </a>
                    <!-- /partner -->

                    <!-- partner -->
                    <a href="#" class="partner">
                        <img src="{{asset('/front/')}}/img/partner.jpg" alt="">
                    </a>
                    <!-- /partner -->

                    <!-- partner -->
                    <a href="#" class="partner">
                        <img src="{{asset('/front/')}}/img/partner.jpg" alt="">
                    </a>
                    <!-- /partner -->

                </div>
                <!-- /partners slider -->

            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /Partner Section -->

</div>
<!-- /Clients Section -->


<!-- Blog Section -->
<div id="blog" class="section md-section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- section header -->
            <div class="section-header text-center">
                <h4 class="sub-title">Subtitle</h4>
                <h2 class="title">Lastest News</h2>
            </div>
            <!-- /section header -->

            <!-- blog -->

            <!-- /blog -->

            <!-- blog -->
            @foreach($blogs as $blog)
            <div class="col-md-4">
                <div class="blog">
                    <div class="blog-img">
                        <img src="{{asset($blog->blog_image)}}" alt="">
                    </div>
                    <ul class="blog-meta" style="list-style:none;">
                        <li style="list-style:none;">Time{{$blog->created_at}},</li>
                        <li style="list-style:none;">Author{{$blog->blog_auther}}</li>
                    </ul>
                    <h3>{{$blog->blog_title}}</h3>
                    <p>{{$blog->blog_description}}</p>
                    <a href="{{url('/blog/readblog')}}" class="text-link"><span>Read more</span></a>
                </div>
            </div>
        @endforeach
            <!-- /blog -->

            <!-- blog -->


            <!-- /blog -->

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
<!-- /Blog Section -->

<!-- Call to Action Section -->
<div id="cta-2" class="section xs-section bg-main">

    <!-- container -->
    <div class="container">

        <!-- container -->
        <div class="row">

            <!-- CTA Content -->
            <div class="col-md-9">
                <h3>Cum sociis natoque penatibus et magnis dis parturient montes.</h3>
            </div>
            <div class="col-md-3">
                <button class="main-button">Contact Us</button>
            </div>
            <!-- /CTA Content -->

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
<!-- /Call to Action Section -->


<!-- Footer Section -->
@include('front.includes.footer')
<!-- /Footer Section -->

<!-- Preloader -->
<div id="preloader">
    <div class="preloader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- /Preloader -->

<!-- jQuery Plugins -->
<script type="text/javascript" src="{{asset('/front/')}}/js/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('/front/')}}/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('/front/')}}/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="{{asset('/front/')}}/js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="{{asset('/front/')}}/js/main.js"></script>

</body>
</html>
