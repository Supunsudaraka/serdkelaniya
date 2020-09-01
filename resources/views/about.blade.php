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

		.width-auto {
			width: auto;
		}

		.text-lg {
			font-size: 2rem;
		}

		.carousel-indicators li {
			border: none;
			background: #ccc;
		}

		.carousel-indicators li.active {
			background: #28a745;
		}

		.obj-container {
			position: relative;
			overflow: hidden;
			background-color: #f0f0f6;
		}

		.obj-text {
			position: relative;
			z-index: 2;
			margin-left: 25%;
			text-shadow: 0px 0px 13px rgba(255, 255, 255, 0.75);
		}

		.obj-img {
			position: absolute;
			left: 0;
			top: 0;
			width: 300px;
			height: 180px;
			opacity: 0.4;
		}

		.teamImage{
			border: 5px solid #cfc7c1;
		}

	</style>
@endsection
@section('pageSpecificContent')


	<!-- welcome section -->
<!--breadcumb start here-->
<section class="xs-banner-inner-section parallax-window" style="background-image:url({{\Illuminate\Support\Facades\URL::asset('myAssets/images/about-us.jpg')}})">
	<div class="xs-black-overlay"></div>
	<div class="container">
		<div class="color-white xs-inner-banner-content">
			<h2>{{__('common.About Us')}}</h2>

		</div>
	</div>
</section>
<!--breadcumb end here--><!-- End welcome section -->



	<!-- video popup section section -->
	<section class="xs-content-section-padding">
	<div class="container">

		<div class="row">
			<div class="col-md-4">
				<div class="xs-about-feature">
					<h3>{{__('common.Our Mission')}}</h3>
					<p class="lead">{{__('common.ourMission-text')}}</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="xs-about-feature">
					<h3>{{__('common.Our Vision')}}</h3>
					<p class="lead">{{__('common.ourVision-text')}}</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="xs-about-feature">
					<h3>{{__('common.Our Values')}}</h3>
					<ul class="xs-unorder-list play green-icon">
						<li>{{__('common.Integrity')}}</li>
						<li>{{__('common.Empowerment')}}</li>
						<li>{{__('common.Excellence')}}</li>
						<li>{{__('common.Community')}}</li>
					</ul>
				</div>
			</div>
		</div><!-- .row end -->
	</div><!-- .container end -->
</section>	<!-- End video popup section section -->




	<section class="xs-content-section-padding">
		<div class="container">
	<div class="row">

			<div class="col-lg-4">

			</div>
			<div class="col-lg-4">
				<h2 style="text-align: center"><img  src="{{\Illuminate\Support\Facades\URL::asset('myAssets/images/obj-1.jpg')}}"  style="width: 20%;margin-bottom: 15px;"/> {{__('common.Our Objectives')}}</h2>
				<div class="progress">

				</div>
			</div>
			<div class="col-lg-4">

			</div>
		</div>
<br>
			<div class="row">
				<div class="col-lg-6">
					<div class="row">
						<div class="col-lg-12 col-md-12 mb-4 card-main leftIn">
							<div class="card-section card-section-second border rounded ml-4 mr-4">
								<div  class="card-body text-center card-body-second obj-container">

									<h5 class="obj-text"> {{__('common.objective-2')}}</h5>
									<img src="{{\Illuminate\Support\Facades\URL::asset('myAssets/images/aboutUs/obj3.svg')}}" class="obj-img">

								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 mb-4 card-main leftIn">
							<div class="card-section card-section-second border rounded ml-4 mr-4">
								<div class="card-body text-center card-body-second">

									<h5>{{__('common.objective-1')}}</h5>

								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="col-lg-6">
					<div class="row">
						<div class="col-lg-12 col-md-12 mb-4 card-main rightIn">
							<img id="optionalstuff"  src="{{\Illuminate\Support\Facades\URL::asset('myAssets/images/aboutUs/obj-bg-1.svg')}}"  style="width: 80%"/>

						</div>
					</div>
				</div>
			</div>



			<div class="row">
				<div class="col-lg-6">
					<div class="row">
						<div class="col-lg-12 col-md-12 mb-4 card-main leftIn">
							<div class="card-section card-section-second border rounded ml-4 mr-4">
								<div class="card-body text-center card-body-second obj-container">
									<h5  class="obj-text">{{__('common.objective-3')}}</h5>
									<img src="{{\Illuminate\Support\Facades\URL::asset('myAssets/images/aboutUs/obj2.svg')}}" class="obj-img">

								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 mb-4 card-main leftIn">
							<div class="card-section card-section-second border rounded ml-4 mr-4">
								<div class="card-body text-center card-body-second">
									<h5>{{__('common.objective-4')}}</h5>

								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="row">

						<div class="col-lg-12 col-md-12 mb-4 card-main rightIn">
							<div class="card-section card-section-second border rounded ml-4 mr-4">
								<div class="card-body text-center card-body-second  obj-container">
									<h5 style="margin:0" class="obj-text">{{__('common.objective-5')}}</h5>
									<img  style="margin:0;opacity: 0.4" src="{{\Illuminate\Support\Facades\URL::asset('myAssets/images/aboutUs/obj4.svg')}}" class="obj-img">

								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 mb-4 card-main rightIn">
							<div class="card-section card-section-second border rounded ml-4 mr-4">
								<div class="card-body text-center card-body-second">

									<h5>{{__('common.objective-7')}}</h5>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 mb-4 card-main rightIn">
							<div class="card-section card-section-second border rounded ml-4 mr-4">
								<div class="card-body card-body-second  obj-container">
									<h5 style="margin-left: 0;margin-right: 50%"  class="obj-text">{{__('common.objective-6')}}</h5>
									<img style="margin-left: 50%;width: 250px;" src="{{\Illuminate\Support\Facades\URL::asset('myAssets/images/aboutUs/obj1.svg')}}" class="obj-img">

								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col-lg-6">
					<div class="row">
						<div class="col-lg-12 col-md-12 mb-4 card-main leftIn">
							<img id="optionalstuff" src="{{\Illuminate\Support\Facades\URL::asset('myAssets/images/obj-2.png')}}"  style="width: 80%"/>

						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="row">

						<div class="col-lg-12 col-md-12 mb-4 card-main rightIn">
							<div class="card-section card-section-second border rounded ml-4 mr-4">
								<div class="card-body text-center card-body-second">

									<h5>{{__('common.objective-8')}}</h5>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 mb-4 card-main rightIn">
							<div class="card-section card-section-second border rounded ml-4 mr-4">
								<div class="card-body card-body-second obj-container">

									<h5 style="margin-left: 0;margin-right: 40%" class="obj-text">{{__('common.objective-9')}}</h5>
									<img  style="margin-left: 60%;margin-bottom:50%;width: 200px;"  src="{{\Illuminate\Support\Facades\URL::asset('myAssets/images/aboutUs/obj5.svg')}}" class="obj-img">

								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 mb-4 card-main rightIn">
							<div class="card-section card-section-second border rounded ml-4 mr-4">
								<div class="card-body text-center card-body-second">

									<h5>{{__('common.objective-10')}}</h5>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>

</section>	<!-- End what we do section -->



	{{--<section class="xs-content-section-padding">--}}
		{{--<div class="container">--}}

			{{--<div class="row">--}}

				{{--<div class="col-lg-2">--}}

				{{--</div>--}}
				{{--<div class="col-lg-8">--}}
					{{--<h2 style="text-align: center">{{__('common.Main Activities Implements During Last Year')}}</h2>--}}
					{{--<div class="progress">--}}

					{{--</div>--}}
				{{--</div>--}}
				{{--<div class="col-lg-2">--}}

				{{--</div>--}}
			{{--</div>--}}
			{{--<br>--}}
			{{--<div class="row">--}}
				{{--<div class="col-lg-12 col-xl-12 ">--}}
					{{--<div class="p-5 bg-white shadow rounded">--}}
						{{--<!-- Bootstrap carousel-->--}}
						{{--<div class="carousel slide" id="carouselExampleIndicators" data-ride="carousel">--}}
							{{--<!-- Bootstrap carousel indicators [nav] -->--}}
							{{--<ol class="carousel-indicators mb-0">--}}
								{{--<li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>--}}
								{{--<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>--}}
								{{--<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>--}}
								{{--<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>--}}
								{{--<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>--}}
								{{--<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>--}}
								{{--<li data-target="#carouselExampleIndicators" data-slide-to="6"></li>--}}
								{{--<li data-target="#carouselExampleIndicators" data-slide-to="7"></li>--}}
								{{--<li data-target="#carouselExampleIndicators" data-slide-to="8"></li>--}}
								{{--<li data-target="#carouselExampleIndicators" data-slide-to="9"></li>--}}

							{{--</ol>--}}


							{{--<!-- Bootstrap inner [slides]-->--}}
							{{--<div class="carousel-inner px-5 pb-4">--}}
								{{--<!-- Carousel slide-->--}}
								{{--<div class="carousel-item active">--}}
									{{--<div class="media">--}}

										{{--<div class="media-body ml-3">--}}
										{{--<h5 style="text-align: center">Maintained a nursery school to provide them with Pre-school Education.</h5>--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</div>--}}

								{{--<!-- Carousel slide-->--}}
								{{--<div class="carousel-item">--}}
									{{--<div class="media">--}}

										{{--<div class="media-body ml-3">--}}
											{{--<h5 style="text-align: center">Imparted them Special Education.</h5>--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</div>--}}

								{{--<!-- Carousel slide-->--}}
								{{--<div class="carousel-item">--}}
									{{--<div class="media">--}}

										{{--<div class="media-body ml-3">--}}
											{{--<h5 style="text-align: center">Conducted Programs of Physiotherapy, Speech Therapy & Occupational Therapy.</h5>--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</div>--}}

								{{--<div class="carousel-item">--}}
									{{--<div class="media">--}}

										{{--<div class="media-body ml-3">--}}
											{{--<h5 style="text-align: center">Conducted programs of Vocational Training.</h5>--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</div>--}}

								{{--<div class="carousel-item">--}}
									{{--<div class="media">--}}

										{{--<div class="media-body ml-3">--}}
											{{--<h5 style="text-align: center">Introduced programs on improving  Aesthetic and Cultural concepts.</h5>--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</div>--}}

								{{--<div class="carousel-item">--}}
									{{--<div class="media">--}}

										{{--<div class="media-body ml-3">--}}
											{{--<h5 style="text-align: center">Organized sports & recreational programs.</h5>--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</div>--}}

								{{--<div class="carousel-item">--}}
									{{--<div class="media">--}}

										{{--<div class="media-body ml-3">--}}
											{{--<h5 style="text-align: center">Organized a broad range of Social Programs.</h5>--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</div>--}}

								{{--<div class="carousel-item">--}}
									{{--<div class="media">--}}

										{{--<div class="media-body ml-3">--}}
											{{--<h5 style="text-align: center">Maintained a Day Care Service.</h5>--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</div>--}}


								{{--<div class="carousel-item">--}}
									{{--<div class="media">--}}

										{{--<div class="media-body ml-3">--}}
											{{--<h5 style="text-align: center">Activated a number of additional special programs to improve their living conditions.</h5>--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</div>--}}


								{{--<div class="carousel-item">--}}
									{{--<div class="media">--}}

										{{--<div class="media-body ml-3">--}}
											{{--<h5 style="text-align: center">Recently we have introduced Cookery Classes for them to improve their day to day activities.</h5>--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</div>--}}

							{{--</div>--}}


							{{--<!-- Bootstrap controls [dots]-->--}}

						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
		{{--</div><!-- .row end -->--}}
		{{--</div><!-- .container end -->--}}
	{{--</section>--}}
	<!-- team section -->
	<section class="xs-section-padding bg-gray">
	<div class="container">
		<div class="row">

			<div class="col-lg-4">

			</div>
			<div class="col-lg-4">
				<h2 style="text-align: center">{{__('common.Our Team')}}</h2>
				<div class="progress">

				</div>
			</div>
			<div class="col-lg-4">

			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12">
				<img  class="teamImage"  src="{{\Illuminate\Support\Facades\URL::asset('myAssets/images/team/group.jpeg')}}">
			</div>
		</div><!-- .row END -->

	</div><!-- .container end -->
</section>	<!-- End team section -->


</main>

@endsection
@section('pageSpecificScript')
	<script>

	</script>
@endsection