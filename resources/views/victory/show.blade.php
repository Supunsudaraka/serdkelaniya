@extends('includes.main')

@section('pageSpecificStyles')


@endsection
@section('pageSpecificContent')
    <style>
        .slider {
            margin: 0 auto;
            max-width: 940px;
        }

        .slide_viewer {
            height: 340px;
            overflow: hidden;
            position: relative;
        }

        .slide_group {
            height: 100%;
            position: relative;
            width: 100%;
        }

        .slide {
            display: none;
            height: 100%;
            position: absolute;
            width: 100%;
        }

        .slide:first-child {
            display: block;
        }

        .slide:nth-of-type(1) {
            background: #D7A151;
        }

        .slide:nth-of-type(2) {
            background: #F4E4CD;
        }

        .slide:nth-of-type(3) {
            background: #C75534;
        }

        .slide:nth-of-type(4) {
            background: #D1D1D4;
        }

        .slide_buttons {
            left: 0;
            position: absolute;
            right: 0;
            text-align: center;
        }

        a.slide_btn {
            color: #474544;
            font-size: 42px;
            margin: 0 0.175em;
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            -ms-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
        }

        .slide_btn.active, .slide_btn:hover {
            color: #428CC6;
            cursor: pointer;
        }

        .directional_nav {
            height: 340px;
            margin: 0 auto;
            max-width: 940px;
            position: relative;
            top: -340px;
        }

        .previous_btn {
            bottom: 0;
            left: 100px;
            margin: auto;
            position: absolute;
            top: 0;
        }

        .next_btn {
            bottom: 0;
            margin: auto;
            position: absolute;
            right: 100px;
            top: 0;
        }

        .previous_btn, .next_btn {
            cursor: pointer;
            height: 65px;
            opacity: 0.5;
            -webkit-transition: opacity 0.4s ease-in-out;
            -moz-transition: opacity 0.4s ease-in-out;
            -ms-transition: opacity 0.4s ease-in-out;
            -o-transition: opacity 0.4s ease-in-out;
            transition: opacity 0.4s ease-in-out;
            width: 65px;
        }

        .previous_btn:hover, .next_btn:hover {
            opacity: 1;
        }

        @media only screen and (max-width: 767px) {
            .previous_btn {
                left: 50px;
            }

            .next_btn {
                right: 50px;
            }
        }
    </style>

    <!-- welcome section -->
    <!--breadcumb start here-->
    <section class="xs-banner-inner-section parallax-window"
             style="background-size: cover;background-image:url({{\Illuminate\Support\Facades\URL::asset('myAssets/images/victories/victory.jpeg')}})">
        <div class="xs-black-overlay"></div>
        <div class="container">
            <div class="color-white xs-inner-banner-content">
                <h2>{{__('common.victories-carouselText')}}</h2>
            </div>
        </div>
    </section>
    <!--breadcumb end here--><!-- End welcome section -->


    <main class="xs-main">
        <!-- video popup section section -->


        <!-- video popup section section -->
        <section class="xs-content-section-padding">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h4>{{$record->name}}</h4>
                    </div>
                </div>

                @if($record->images()->count() > 0)
                    <div class="slider">
                        <div class="slide_viewer">
                            <div class="slide_group">
                                @foreach($record->images as $image)
                                    <div class="slide">
                                        <img style="width: 940px;height: 528.75px"
                                             src="{{ $image->getPath()}}"
                                             alt="Image">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
                <h5 class="py-4 " >{!! $record->description !!}</h5>

            </div>
        </section>    <!-- End video popup section section -->


        <!-- partners section -->

    </main>

@endsection
@section('pageSpecificScript')
    <script>
        $('.slider').each(function () {
            var $this = $(this);
            var $group = $this.find('.slide_group');
            var $slides = $this.find('.slide');
            var bulletArray = [];
            var currentIndex = 0;
            var timeout;

            function move(newIndex) {
                var animateLeft, slideLeft;

                advance();

                if ($group.is(':animated') || currentIndex === newIndex) {
                    return;
                }

                bulletArray[currentIndex].removeClass('active');
                bulletArray[newIndex].addClass('active');

                if (newIndex > currentIndex) {
                    slideLeft = '100%';
                    animateLeft = '-100%';
                } else {
                    slideLeft = '-100%';
                    animateLeft = '100%';
                }

                $slides.eq(newIndex).css({
                    display: 'block',
                    left: slideLeft
                });
                $group.animate({
                    left: animateLeft
                }, function () {
                    $slides.eq(currentIndex).css({
                        display: 'none'
                    });
                    $slides.eq(newIndex).css({
                        left: 0
                    });
                    $group.css({
                        left: 0
                    });
                    currentIndex = newIndex;
                });
            }

            function advance() {
                clearTimeout(timeout);
                timeout = setTimeout(function () {
                    if (currentIndex < ($slides.length - 1)) {
                        move(currentIndex + 1);
                    } else {
                        move(0);
                    }
                }, 4000);
            }

            $('.next_btn').on('click', function () {
                if (currentIndex < ($slides.length - 1)) {
                    move(currentIndex + 1);
                } else {
                    move(0);
                }
            });

            $('.previous_btn').on('click', function () {
                if (currentIndex !== 0) {
                    move(currentIndex - 1);
                } else {
                    move(3);
                }
            });

            $.each($slides, function (index) {
                var $button = $('<a class="slide_btn">•</a>');

                if (index === currentIndex) {
                    $button.addClass('active');
                }
                $button.on('click', function () {
                    move(index);
                }).appendTo('.slide_buttons');
                bulletArray.push($button);
            });

            advance();
        });
    </script>
@endsection