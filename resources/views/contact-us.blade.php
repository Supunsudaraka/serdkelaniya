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

        @media screen and (max-width: 600px) {
            #contactUsSection {
                height: auto;

            }

        }
        #contactUsSection {

            height: auto;
        }
    </style>

@endsection
@section('pageSpecificContent')


    <!-- welcome section -->
    <!--breadcumb start here-->
    <section class="xs-banner-inner-section parallax-window" style="background-size: cover;background-image:url({{\Illuminate\Support\Facades\URL::asset('myAssets/images/contact-us.jpg')}})">
        <div class="xs-black-overlay"></div>
        <div class="container">
            <div class="color-white xs-inner-banner-content">
                <h2>{{__('common.contactUs-heading')}}</h2>

            </div>
        </div>
    </section>
    <!--breadcumb end here--><!-- End welcome section -->


    <main class="xs-main">
        <!-- video popup section section -->


        <!-- video popup section section -->
        <section class="xs-content-section-padding">
            <div class="container">

                <div class="row">

                    <div class="col-lg-3">

                    </div>
                    <div class="col-lg-6">
                        <h2 style="text-align: center">{{__('common.Leave a Message Here')}}</h2>
                        <div class="progress">

                        </div>
                    </div>
                    <div class="col-lg-3">

                    </div>
                </div>
                <!-- .row end -->

                <div class="container main-section">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="row">

                                <div class="col-lg-6 col-md-12 mb-4 card-main">

                                    <img src="{{\Illuminate\Support\Facades\URL::asset('myAssets/images/contact.jpg')}}"  style="width: 80%"/>



                                </div>
                                <div class="col-lg-6 col-md-12 mb-4 card-main">
                                    <div class="card-section card-section-second border rounded ml-4 mr-4">

                                        <div class="card-body text-center card-body-second">
                                            <div class="row" style="padding-top: 20px">
                                                <div class="col-lg-12 form-group">
                                                    <div class="input-group">

                                                        <input type="text" class="form-control"  placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 form-group">
                                                    <div class="input-group">

                                                        <input type="text" class="form-control"  placeholder="abc@gmail.com">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 form-group">
                                                    <div class="input-group">

                                                        <input type="text" class="form-control"  placeholder="+(xx) xxx xxx xxxx">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 form-group">
                                                    <div class="input-group">

                                                        <textarea class="form-control" placeholder="Type your message here.."></textarea>
                                                    </div>
                                                </div>

                                            </div>
                                            <a  class="orange-text d-flex flex-row-reverse p-1">
                                                <h5 class="waves-effect waves-light btn btn-primary text-white">{{__('common.Send Message')}}</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="row">

                                <div class="col-lg-4 col-md-12 mb-3 card-main zoom">
                                    <div class="card-section card-section-second border rounded ml-4 mr-4">
                                        <div class="card-body text-center card-body-second">
                                            <div class="scroll-animations">
                                                <div class="animated">

                                                    <i style="font-size: 40px" class="fa fa-envelope" aria-hidden="true"></i>

                                                    <h5 style="padding-top: 11px;padding-bottom: 11px">serd@gmail.com</h5>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 mb-4 card-main zoom">
                                    <div class="card-section card-section-second border rounded ml-4 mr-4" >

                                        <div  class="card-body text-center card-body-second">

                                            <div class="scroll-animations">
                                                <div class="animated" >
                                                    <i style="font-size: 40px" class="fa fa-map-marker" aria-hidden="true"></i>
                                                    <h5>{{__('common.serdAddress')}}</h5>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12 mb-4 card-main zoom" >
                                    <div class="card-section card-section-second border rounded ml-4 mr-4" id="contactUsSection" >
                                        <div class="card-body text-center card-body-second">
                                            <div class="scroll-animations">
                                                <div class="animated">
                                                    <i style="font-size: 40px" class="fa fa-phone" aria-hidden="true"></i>
                                                    <h5 style="padding-top: 11px;padding-bottom: 11px">+(94) 77 333 9231</h5>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- .container end -->
        </section>	<!-- End video popup section section -->


        <!-- partners section -->

    </main>

@endsection
@section('pageSpecificScript')
    <script>

        $(document).ready(function () {
            var owl = $('.testmonial_active');
            owl.trigger('stop.owl.autoplay');
        });
        // Scroll function courtesy of Scott Dowding; http://stackoverflow.com/questions/487073/check-if-element-is-visible-after-scrolling

        $(document).ready(function() {
            // Check if element is scrolled into view
            function isScrolledIntoView(elem) {
                var docViewTop = $(window).scrollTop();
                var docViewBottom = docViewTop + $(window).height();

                var elemTop = $(elem).offset().top;
                var elemBottom = elemTop + $(elem).height();

                return elemBottom <= docViewBottom && elemTop >= docViewTop;
            }
            // If element is scrolled into view, fade it in
            $(window).scroll(function() {
                $(".scroll-animations .animated").each(function() {
                    if (isScrolledIntoView(this) === true) {
                        $(this).addClass("fadeInLeft");
                    }
                });
            });

            // Click Animations
            $("button").on("click", function() {
                /*
                 If any input is empty make it's border red and shake it. After the animation is complete, remove the shake and animated classes so that the animation can repeat.
                 */

                // Check name input
                if ($("#name").val() === "") {
                    $("#name")
                        .addClass("form-error animated shake")
                        .one(
                            "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",
                            function() {
                                $(this).removeClass("animated shake");
                            }
                        );
                } else {
                    $("#name").removeClass("form-error");
                }

                // Check email input
                if ($("#email").val() === "") {
                    $("#email")
                        .addClass("form-error animated shake")
                        .one(
                            "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",
                            function() {
                                $(this).removeClass("animated shake");
                            }
                        );
                } else {
                    $("#email").removeClass("form-error");
                }

                // Check message textarea
                if ($("#message").val() === "") {
                    $("#message")
                        .addClass("form-error animated shake")
                        .one(
                            "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",
                            function() {
                                $(this).removeClass("animated shake");
                            }
                        );
                } else {
                    $("#message").removeClass("form-error");
                }
            });
        });
    </script>
@endsection