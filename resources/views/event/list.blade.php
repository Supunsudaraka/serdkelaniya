@extends('includes.main')

@section('pageSpecificStyles')


@endsection
@section('pageSpecificContent')


    <!-- welcome section -->
    <!--breadcumb start here-->
    <section class="xs-banner-inner-section parallax-window" style="background-size: cover;background-image:url({{\Illuminate\Support\Facades\URL::asset('myAssets/images/event/'.$category->image)}})">
        <div class="xs-black-overlay"></div>
        <div class="container">
            <div class="color-white xs-inner-banner-content">
                <h2 style="text-align: center">{{$category->name}}</h2>
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

                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-4">
                        <h2 style="text-align: center">{{$category->heading}}</h2>
                        <div class="progress">

                        </div>
                    </div>
                    <div class="col-lg-4">

                    </div>
                </div>
                <!-- .row end -->

                <div class="row" style="padding-top: 10px">
                    @if(count($events) == 0)
                        <div class="col-md-12 text-center">
                        <h4 class="card-title">{{__('common.No events yet.')}}</h4>
                        </div>
                    @else
                    @foreach($events as $event)
                        <div class="col-lg-4">
                            <div class="card">
                                <!-- Card image -->
                                @if($event->images()->count())
                                <div class="view overlay">

                                    <img style="height: 231px;width: 348px" class="card-img-top" src="{{ $event->getFirstImage() }}"
                                         alt="Image">

                                    <a href="#!">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                @endif

                                <!-- Card content -->
                                <div class="card-body">

                                    <!-- Title -->
                                    <h4 style="min-height: 56px;"   class="card-title">{{Str::limit($event->name, 38)}}</h4>
                                    <!-- Text -->
                                    <p style="min-height: 75px;padding-bottom:0px;" class="card-text">{{Str::limit(strip_tags($event->description), 120)}}</p>
                                    <!-- Button -->
                                    <a href="{{route('event-view',['language'=>app()->getLocale(),'eventId'=>$event->id])}}" class="btn btn-primary">View</a>

                                </div>
                            </div>
                        </div>
                    @endforeach
                    @endif
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