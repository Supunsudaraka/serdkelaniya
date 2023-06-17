@extends('includes.main')

@section('pageSpecificStyles')


@endsection
@section('pageSpecificContent')


    <!-- welcome section -->
    <!--breadcumb start here-->
    <section class="xs-banner-inner-section parallax-window"
             style="background-size: cover;background-image:url({{\Illuminate\Support\Facades\URL::asset('myAssets/images/activity/'.$activity->category->image)}})">
        <div class="xs-black-overlay"></div>
        <div class="container">
            <div class="color-white xs-inner-banner-content">
                <h2 style="text-align: center">{{$activity->category->heading}}</h2>
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
                        <h4>{{$activity->name}}</h4>
                    </div>
                </div>
               
                <!-- Content  -->
                @include('components.show-page-content.index',['record'=>$activity])
            </div>
        </section>    <!-- End video popup section section -->


        <!-- partners section -->

    </main>

@endsection
@section('pageSpecificScript')
  
@endsection