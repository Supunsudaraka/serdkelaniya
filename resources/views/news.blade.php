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
        @media (max-width:629px) {
            img#optionalstuff {
                display: none;
            }
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


        .card {
            padding-top: 20px;
            margin: 10px 0 20px 0;
            background-color: rgba(214, 224, 226, 0.2);
            border-top-width: 0;
            border-bottom-width: 2px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .card .card-heading {
            padding: 0 20px;
            margin: 0;
        }

        .card .card-heading.simple {
            font-size: 20px;
            font-weight: 300;
            color: #777;
            border-bottom: 1px solid #e5e5e5;
        }

        .card .card-heading.image img {
            display: inline-block;
            width: 46px;
            height: 46px;
            margin-right: 15px;
            vertical-align: top;
            border: 0;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
        }

        .card .card-heading.image .card-heading-header {
            display: inline-block;
            vertical-align: top;
        }

        .card .card-heading.image .card-heading-header h3 {
            margin: 0;
            font-size: 14px;
            line-height: 16px;
            color: #262626;
        }

        .card .card-heading.image .card-heading-header span {
            font-size: 12px;
            color: #999999;
        }

        .card .card-body {
            padding: 0 20px;
            margin-top: 20px;
        }

        .card .card-media {
            padding: 0 20px;
            margin: 0 -14px;
        }

        .card .card-media img {
            max-width: 100%;
            max-height: 100%;
        }

        .card .card-actions {
            min-height: 30px;
            padding: 0 20px 20px 20px;
            margin: 20px 0 0 0;
        }

        .card .card-comments {
            padding: 20px;
            margin: 0;
            background-color: #f8f8f8;
        }

        .card .card-comments .comments-collapse-toggle {
            padding: 0;
            margin: 0 20px 12px 20px;
        }

        .card .card-comments .comments-collapse-toggle a,
        .card .card-comments .comments-collapse-toggle span {
            padding-right: 5px;
            overflow: hidden;
            font-size: 12px;
            color: #999;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .card-comments .media-heading {
            font-size: 13px;
            font-weight: bold;
        }

        .card.people {
            position: relative;
            display: inline-block;
            width: 170px;
            height: 300px;
            padding-top: 0;
            margin-left: 20px;
            overflow: hidden;
            vertical-align: top;
        }

        .card.people:first-child {
            margin-left: 0;
        }

        .card.people .card-top {
            position: absolute;
            top: 0;
            left: 0;
            display: inline-block;
            width: 170px;
            height: 150px;
            background-color: #ffffff;
        }

        .card.people .card-top.green {
            background-color: #53a93f;
        }

        .card.people .card-top.blue {
            background-color: #427fed;
        }

        .card.people .card-info {
            position: absolute;
            top: 150px;
            display: inline-block;
            width: 100%;
            height: 101px;
            overflow: hidden;
            background: #ffffff;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .card.people .card-info .title {
            display: block;
            margin: 8px 14px 0 14px;
            overflow: hidden;
            font-size: 16px;
            font-weight: bold;
            line-height: 18px;
            color: #404040;
        }

        .card.people .card-info .desc {
            display: block;
            margin: 8px 14px 0 14px;
            overflow: hidden;
            font-size: 12px;
            line-height: 16px;
            color: #737373;
            text-overflow: ellipsis;
        }

        .card.people .card-bottom {
            position: absolute;
            bottom: 0;
            left: 0;
            display: inline-block;
            width: 100%;
            padding: 10px 20px;
            line-height: 29px;
            text-align: center;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .card.hovercard {
            position: relative;
            padding-top: 0;
            overflow: hidden;
            text-align: center;
            background-color: rgba(214, 224, 226, 0.2);
        }

        .card.hovercard .cardheader {
            background: url("http://lorempixel.com/850/280/nature/4/");
            background-size: cover;
            height: 135px;
        }

        .card.hovercard .avatar {
            position: relative;
            top: -50px;
            margin-bottom: -50px;
        }

        .card.hovercard .avatar img {
            width: 100px;
            height: 100px;
            max-width: 100px;
            max-height: 100px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            border: 5px solid rgba(255,255,255,0.5);
        }

        .card.hovercard .info {
            padding: 4px 8px 10px;
        }

        .card.hovercard .info .title {
            margin-bottom: 4px;
            font-size: 24px;
            line-height: 1;
            color: #262626;
            vertical-align: middle;
        }

        .card.hovercard .info .desc {
            overflow: hidden;
            font-size: 12px;
            line-height: 20px;
            color: #737373;
            text-overflow: ellipsis;
        }

        .card.hovercard .bottom {
            padding: 0 20px;
            margin-bottom: 17px;
        }


        .sidebar-box {
            max-height: 120px;
            position: relative;
            overflow: hidden;
        }
        .sidebar-box .read-more {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            text-align: center;
            margin: 0; padding: 30px 0;

            /* "transparent" only works here because == rgba(0,0,0,0) */
            background-image: linear-gradient(to bottom, transparent, black);
        }
        .content{
            display: none;
        }

		  .hide{
            display: none;
        }
    </style>

@endsection
@section('pageSpecificContent')


    <!-- welcome section -->
    <!--breadcumb start here-->
    <section class="xs-banner-inner-section parallax-window" style="background-image:url({{\Illuminate\Support\Facades\URL::asset('myAssets/images/news/news.jpeg')}})">
        <div class="xs-black-overlay"></div>
        <div class="container">
            <div class="color-white xs-inner-banner-content">
                <h2>{{__('common.news-carouselText')}}</h2>

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

                    <div class="col-lg-12">
                        <h2 style="text-align: center">{{__('common.news-heading')}}</h2>
                        <div class="progress">

                        </div>
                    </div>
                </div>
                <!-- .row end -->

                <div class="container main-section">
                    <div class="row">
                        <div class="col-lg-12 text-center">

                            <div class="row">

                                @if(count($newses) > 0)
                                @foreach($newses as $news)
                                    <div class="col-lg-12 leftIn">
                                        <div class="col-lg-12 col-md-12 mb-4 card-main">
                                            <div class="card-section card-section-second border rounded ml-4 mr-4">
                                                <div style="text-align: left" class="card-body card-body-second">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                                            <img style="height: 150px"
                                                                 src="{{ \Illuminate\Support\Facades\URL::asset('myAssets/images/uploads/news/'.$news ->images->first()->image)}}"
                                                                 alt="Image">
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <h5 style="text-align: left">{{$news->name}}</h5>

  <h6 class="less-{{$news->idnews}}"  style="text-align: left">{{Str::limit(strip_tags($news->description), 120)}}</h6>
                                                            <h6 id="more"  class="more-{{$news->idnews}} hide"  style="text-align: left">{{$news->description}}</h6>
                                                            <a  href="{{route('news-view',['language'=>app()->getLocale(),'id'=>$news->idnews])}}"  class="btn-md btn text-white btn-success" >{{__('common.READ MORE')}}</a>



                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                    @else
                                    <div class="col-md-12">
                                        <h4>{{__('common.noNewsText')}}</h4>
                                    </div>
                                @endif
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

        $('#moreSpan').click(function(e) {
            $("#less").hide();
            $("#more").show();
        });

        $('#lessSpan').click(function(e) {
            $("#less").show();
            $("#more").hide();
        });

    </script>
@endsection