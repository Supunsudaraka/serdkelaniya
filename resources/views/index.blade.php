@extends('includes.main')

@section('pageSpecificStyles')
    <style type="text/css">
        .main-section{
            margin-top:50px;
            font-family: 'Abel', sans-serif;
        }
        .card-header-first{
            margin-top:-40px;
            background: linear-gradient(-90deg, #BF019F, #F28A57);
            box-shadow:1px 5px 15px #a2a2a2;
        }
        @media only screen and (max-width:749px) {
            .parallax {
                background-attachment: scroll;
                background-size: 100% 100%;
            }
        }
        .card-section{
            box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
        }
        .card-header-first span i,.card-section-third span i{
            padding:17px;
            margin:0px 10px;
            color:#fff;
            height:50px;
            width:50px;
            box-shadow:1px 6px 24px #d2d2d2;
            background: linear-gradient(-90deg,  #ED5B80,#BF019F);
        }
        .card-header-first span i:hover,.card-section-third span i:hover{
            box-shadow:1px 1px 15px #000;
        }
        .card-header-second{
            box-shadow:1px 5px 15px #a2a2a2;
            margin:-25px -25px 0px -25px;
            background: linear-gradient(-90deg, #90E8FC, #0080FF);
        }
        .card-header-third{
            margin-top:-25px;
            box-shadow:1px 5px 15px #a2a2a2;
            background: linear-gradient(-90deg, #F2635F, #F4D00C);
        }
        .card-section-third span i{
            background: linear-gradient(-90deg, #F4D00C, #F2635F);
        }
        .card-section:hover{
            box-shadow:1px 1px 20px #d2d2d2;
        }
        .zoom {

            transition: transform .2s;


        }



        .primary-color{
            background-color:#4989bd;
        }
        .success-color{
            background-color:#5cb85c;
        }
        .danger-color{
            background-color:#d9534f;
        }
        .warning-color{
            background-color:#f0ad4e;
        }
        .info-color{
            background-color:#5bc0de;
        }
        .no-color{
            background-color:inherit;
        }


        .zoom:hover {
            -ms-transform: scale(1.5); /* IE 9 */
            -webkit-transform: scale(1.5); /* Safari 3-8 */
            transform: scale(1.1);
        }
        .parallax {
            /* The image used */
            background-image: url({{\Illuminate\Support\Facades\URL::asset('myAssets/images/paralax-child.jpg')}});

            /* Set a specific height */
            min-height: 500px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* .card-img-wrap {
  overflow: hidden;
  position: relative;
}

.card-img-wrap:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  opacity: 0;
  transition: opacity .25s;
}

.card-img-wrap img {
  transition: transform .25s;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.card-img-wrap:hover img {
  transform: scale(1.1);
}

.card-img-wrap:hover:after {
  opacity: 1;
} */




.card-img-wrap {
  overflow: hidden;
  position: relative;
  background-color: #f2f2f2;

}

.card-img-wrap:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  opacity: 0;
  transition: opacity .25s;
}

.card-img-wrap img {
  transition: transform .25s;
  width: auto;
  height: auto;
  max-width: 100%;
  max-height: 100%;
  display: block;
  margin: auto;
  object-fit: contain;
  background-color: #f2f2f2;

}

.card-img-wrap:hover img {
  transform: scale(1.1);
}

.card-img-wrap:hover:after {
  opacity: 1;
}






        .testimonial {
            margin: 0;
            background: #B7EDFF;
            padding: 10px 50px;
            position: relative;
            font-family: Georgia, serif;
            color: #666;
            border-radius: 5px;
            font-style: italic;
            text-shadow: 0 1px 0 #ECFBFF;
            background-image: linear-gradient(#CEF3FF, #B7EDFF);
            background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#CEF3FF), to(#B7EDFF));
            background-image: -webkit-linear-gradient(top, #CEF3FF, #B7EDFF);
            background-image:    -moz-linear-gradient(top, #CEF3FF, #B7EDFF);
            background-image:     -ms-linear-gradient(top, #CEF3FF, #B7EDFF);
            background-image:      -o-linear-gradient(top, #CEF3FF, #B7EDFF);
        }

        .testimonial:before, .testimonial:after {
            content: "\201C";
            position: absolute;
            font-size: 80px;
            line-height: 1;
            color: #999;
            font-style: normal;
        }

        .testimonial:before {
            top: 0;
            left: 10px;
        }

        .testimonial:after {
            content: "\201D";
            right: 10px;
            bottom: -0.5em;
        }

        .arrow-down {
            width: 0;
            height: 0;
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
            border-top: 15px solid #B7EDFF;
            margin: 0 0 0 25px;
        }

        .testimonial-author {
            margin: 0 0 0 25px;
            font-family: Arial, Helvetica, sans-serif;
            color: #999;
            text-align:left;
        }

        .testimonial-author span {
            font-size: 12px;
            color: #666;
        }
		
		 .xs-round-nav {
            line-height: 50px;
        }

        .carousel-indicators {
            bottom: -40px;
        }
        .carousel-indicators li, .carousel-indicators li.active {
            width: 12px;
            height: 12px;
            margin: 1px 3px;
            border-radius: 50%;
            border: none;
        }
        .carousel-indicators li {
            background: #999;
            border-color: transparent;
            box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
        }
        .carousel-indicators li.active {
            background: #555;
            box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
        }

    </style>

@endsection
@section('pageSpecificContent')

    <!-- welcome section -->
    <section class="xs-welcome-slider">
        <div class="xs-banner-slider owl-carousel">
            <div class="xs-welcome-content" style="background-image: url({{\Illuminate\Support\Facades\URL::asset('myAssets/images/slider/slider_1.jpg')}});">
                <div class="container">
                    <div class="xs-welcome-wraper color-white">

                        <h2>{{__('common.carouselText-1')}}</h2>

                        <div class="xs-btn-wraper">

                        </div><!-- .xs-btn-wraper END -->
                    </div><!-- .xs-welcome-wraper END -->
                </div><!-- .container end -->
                <div class="xs-black-overlay"></div>
            </div><!-- .xs-welcome-content END -->
            <div class="xs-welcome-content" style="background-image: url({{\Illuminate\Support\Facades\URL::asset('myAssets/images/slider/slider_2.jpg')}});">
                <div class="container">
                    <div class="xs-welcome-wraper color-white">

                        <h2>{{__('common.carouselText-2')}}</h2>

                        <div class="xs-btn-wraper">

                        </div><!-- .xs-btn-wraper END -->
                    </div><!-- .xs-welcome-wraper END -->
                </div><!-- .container end -->
                <div class="xs-black-overlay"></div>
            </div><!-- .xs-welcome-content END -->
            <div class="xs-welcome-content" style="background-image: url({{\Illuminate\Support\Facades\URL::asset('myAssets/images/slider/slider_3.jpg')}});">
                <div class="container">
                    <div class="xs-welcome-wraper color-white">

                        <h2>{{__('common.carouselText-3')}}</h2>

                        <div class="xs-btn-wraper">

                        </div><!-- .xs-btn-wraper END -->
                    </div><!-- .xs-welcome-wraper END -->
                </div><!-- .container end -->
                <div class="xs-black-overlay"></div>
            </div><!-- .xs-welcome-content END -->
        </div>
    </section><!-- End welcome section -->



    <section class="xs-content-section-padding bottomIn">
        <div class="container">
            <div class="row">

                <div class="col-lg-4">

                </div>
                <div class="col-lg-4">
                    <h2 style="text-align: center">{{__('common.whoWeAre-heading')}}</h2>
                    <div class="progress">

                    </div>
                </div>
                <div class="col-lg-4">

                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-lg-12">
                    <p style="font-size: 18px;text-align: justify;">{{__('common.whoWeAre-description1')}}</p>
                    <p style="font-size: 18px;text-align: justify;">{{__('common.whoWeAre-description2')}}</p>

                </div>
            </div>
        </div>
    </section>	<!-- End what we do section -->


    <section class="xs-content-section-padding bottomIn">
        <div class="container">
            <div class="row">

                <div class="col-lg-4">

                </div>
                <div class="col-lg-4">
                    <h2 style="text-align: center">{{__('common.whatWeDo-heading')}}</h2>
                    <div class="progress">

                    </div>
                </div>
                <div class="col-lg-4">

                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-lg-12">
                    <p style="font-size: 18px;text-align: justify;">{{__('common.whatWeDo-description')}}</p>

                </div>
            </div>



            <div class="row">

                <div class="col-lg-4 col-md-12 mb-4 card-main zoom">
                    <div class="card-section card-section-second border rounded ml-4 mr-4">
                        <div class="card-body text-center card-body-second">
                            <div class="scroll-animations">
                                <div class="animated">

                                    <i style="font-size: 50px;color: blueviolet" class="fa fa-book" aria-hidden="true"></i>

                                    <h4>{{__('common.Education')}}</h4>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-4 card-main zoom">
                    <div class="card-section card-section-second border rounded ml-4 mr-4">

                        <div class="card-body text-center card-body-second">

                            <div class="scroll-animations">
                                <div class="animated">
                                    <i style="font-size: 53px;color: blueviolet" class="fa fa-heart" aria-hidden="true"></i>

                                    <h4>{{__('common.Children Care')}}</h4>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 mb-4 card-main zoom" >
                    <div class="card-section card-section-second border rounded ml-4 mr-4" style="border-radius: 10px" >

                        <div class="card-body text-center card-body-second">
                            <div class="scroll-animations">
                                <div class="animated">

                                    <i style="font-size: 53px;color: blueviolet"  class="rounded-circle fa fa-user" aria-hidden="true"></i>


                                    <h4>{{__('common.Social Skills Training')}}</h4>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>	<!-- End what we do section -->




  <!--  <section class="">
      <div class="parallax">
            <div class="row">
                <div class="col-lg-12" style="margin-top: 100px">
                    <h1 style="text-align: center;color: white">{{__('common.parallaxText-1')}}</h1>
                    <h1 style="text-align: center;color: white">{{__('common.parallaxText-2')}}</h1>
                    <h1 style="text-align: center;color: white">{{__('common.parallaxText-3')}}</h1>
                    <h1 style="text-align: center;color: white">{{__('common.parallaxText-4')}}</h1>
                </div>
            </div>
        </div>
    </section>	<!-- End what we do section --> 


    @if(isset($events) && count($events) > 0)
    <section class="xs-content-section-padding zoomIn">
        <div class="container">
            <div class="row">

                <div class="col-lg-4">

                </div>
                <div class="col-lg-4">
                    <h2 style="text-align: center">{{__('common.latestEventsHeading')}}</h2>
                    <div class="progress">

                    </div>
                </div>
                <div class="col-lg-4">

                </div>
            </div>

            <div class="row" style="padding-top: 10px">
                @foreach($events as $event)

                    <div  class="col-lg-4">
                        <div  class="card">

                            @if($event->images()->count() > 0)
                            <!-- Card image -->
                            <div class="view overlay">
                                <div class="card-img-wrap">
                                    <img style="height: 231px;width: 348px" class="card-img-top"
                                                                src="{{ $event->getFirstImage() }}"
                                                                alt="Card image cap"></div>
                                <a href="#">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            @endif

                            <!-- Card content -->
                            <div class="card-body">

                                <!-- Title -->
                                <h4 style="min-height: 56px;"   class="card-title">{{Str::limit($event->name, 38)}}</h4>
                                <!-- Text -->
                                <p style="min-height: 75px;padding-bottom:0px;"  class="card-text">{{Str::limit(strip_tags($event->description), 100)}}</p>
                                <a href="{{route('event-view',['language'=>app()->getLocale(),'eventId'=>$event->id])}}" class="btn btn-primary">View</a>

                            </div>

                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </section>	<!-- End what we do section -->
    @endif


    <section class="xs-content-section-padding bottomIn">
        <div class="container">
            <div class="row" style="padding-bottom: 20px">

                <div class="col-lg-4">

                </div>
                <div class="col-lg-4">
                    <h2 style="text-align: center">{{__('common.testimonialHeading')}}</h2>
                    <div class="progress">

                    </div>
                </div>
                <div class="col-lg-4">

                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="img-box"><img src="/examples/images/clients/1.jpg" alt=""></div>
                                <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
                                <p class="overview"><b>Paula Wilson</b>, Media Analyst</p>
                            </div>
                            <div class="carousel-item">
                                <div class="img-box"><img src="/examples/images/clients/2.jpg" alt=""></div>
                                <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
                                <p class="overview"><b>Antonio Moreno</b>, Web Developer</p>
                            </div>
                            <div class="carousel-item">
                                <div class="img-box"><img src="/examples/images/clients/3.jpg" alt=""></div>
                                <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
                                <p class="overview"><b>Michael Holz</b>, Seo Analyst</p>
                            </div>
                        </div>
                        <!-- Carousel controls -->
                        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('pageSpecificScript')
    <script>

        $(document).ready(function () {
            var owl = $('.testmonial_active');
            owl.trigger('stop.owl.autoplay');
        });

    </script>
@endsection