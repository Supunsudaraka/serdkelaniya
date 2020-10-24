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
		.box {
			border-radius: 3px;
			box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
			padding: 10px 25px;
			text-align: right;
			display: block;
			margin-top: 60px;
		}
		.box-icon {
			background-color: #57a544;
			border-radius: 50%;
			display: table;
			height: 100px;
			margin: 0 auto;
			width: 100px;
			margin-top: -61px;
		}
		.box-icon span {
			color: #fff;
			display: table-cell;
			text-align: center;
			vertical-align: middle;
		}
		.info h4 {
			font-size: 26px;
			letter-spacing: 2px;
			text-transform: uppercase;
		}
		.info > p {
			color: #717171;
			font-size: 16px;
			padding-top: 10px;
			text-align: justify;
		}
		.info > a {
			background-color: #03a9f4;
			border-radius: 2px;
			box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
			color: #fff;
			transition: all 0.5s ease 0s;
		}
		.info > a:hover {
			background-color: #0288d1;
			box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.16), 0 2px 5px 0 rgba(0, 0, 0, 0.12);
			color: #fff;
			transition: all 0.5s ease 0s;
		}


		.CustomCard {
			padding-top: 20px;
			margin: 10px 0 20px 0;
			background-color: rgba(214, 224, 226, 0.2);
			border-top-width: 0;
			border-bottom-width: 2px;
			-webkit-border-radius: 3px;
			-moz-border-radius: 3px;
			border-radius: 15px;
			-webkit-box-shadow: none;
			-moz-box-shadow: none;
			box-shadow: none;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
		}

		.CustomCard.hoverCustomCard {
			position: relative;
			padding-top: 0;
			overflow: hidden;
			text-align: center;
		}

		.CustomCard.hoverCustomCard .CustomCardheader {
			background-size: cover;
			height: 85px;
		}

		.CustomCard.hoverCustomCard .avatar {
			position: relative;
			top: -65px;
			margin-bottom: -50px;
		}

		.CustomCard.hoverCustomCard .avatar img {
			width: 160px;
			height: 160px;
			-webkit-border-radius: 50%;
			-moz-border-radius: 50%;
			border-radius: 50%;
			border: 5px solid rgba(255,255,255,0.5);
		}

		.CustomCard.hoverCustomCard .info {
			padding: 4px 8px 10px;
		}

		.CustomCard.hoverCustomCard .info .desc {
			overflow: hidden;
			font-size: 12px;
			line-height: 20px;
			color: #737373;
			text-overflow: ellipsis;
		}

		.CustomCard.hoverCustomCard .bottom {
			padding: 20px 5px;
			margin-bottom: -6px;
			text-align: center;
		}

         .managerMsg::after{
            content:'\"';
            font-size: 1rem;
            font-weight: 800;
            position: relative;
            bottom: 0px;
        }

        .managerMsg::before{
            content:'\"';
            font-size: 1rem;
            font-weight: 1000;
            position: relative;
            margin:0px;
            padding:0px;
        }

		.btn{ border-radius: 50%; width:30px; height:30px; line-height:18px;  }

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



	<section class="xs-content-section-padding">
		<div class="container">

			<div class="row">

				<div class="col-lg-2">

				</div>
				<div class="col-lg-8">
					<h2 style="text-align: center">{{__('common.Future Plan')}}</h2>
					<div class="progress">

					</div>
				</div>
				<div class="col-lg-2">

				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-12 col-xl-12 ">
					<div class="p-5 bg-white shadow rounded">
						<!-- Bootstrap carousel-->
						<div class="carousel slide" id="carouselExampleIndicators" data-ride="carousel">
							<!-- Bootstrap carousel indicators [nav] -->
							<ol class="carousel-indicators mb-0">
								<li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>


							</ol>


							<!-- Bootstrap inner [slides]-->
							<div class="carousel-inner px-5 pb-4">
								<!-- Carousel slide-->
								<div class="carousel-item active">
									<div class="media">

										<div class="media-body ml-3">
										<h5 style="text-align: center">{{__('common.plan-1')}}</h5>
										</div>
									</div>
								</div>

								<!-- Carousel slide-->
								<div class="carousel-item">
									<div class="media">

										<div class="media-body ml-3">
											<h5 style="text-align: center">{{__('common.plan-2')}}</h5>
										</div>
									</div>
								</div>

								<!-- Carousel slide-->
								<div class="carousel-item">
									<div class="media">

										<div class="media-body ml-3">
											<h5 style="text-align: center">{{__('common.plan-3')}}</h5>
										</div>
									</div>
								</div>

								<div class="carousel-item">
									<div class="media">

										<div class="media-body ml-3">
											<h5 style="text-align: center">{{__('common.plan-4')}}</h5>
										</div>
									</div>
								</div>



							</div>


							<!-- Bootstrap controls [dots]-->

						</div>
					</div>
				</div>
			</div>
		</div>
		</div><!-- .row end -->
		</div><!-- .container end -->
	</section>
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




	<section class="xs-content-section-padding">
		<div class="container">
			<div class="row">

				<div class="col-lg-2">
				</div>
				<div class="col-lg-8">
					<h2 style="text-align: center">{{__('common.Special Message of the Managing Director')}}</h2>
					<div class="progress">

					</div>
				</div>
				<div class="col-lg-2">
				</div>
			</div>
			<br>


			<div class="container">
				<div class="row">

					<div class="col col-md-12 rightIn" >
						<div class="CustomCard hoverCustomCard">
							<div class="CustomCardheader text-white btn-primary">

							</div>
							<div class="avatar">
								<img  class="teamImage"  src="{{\Illuminate\Support\Facades\URL::asset('myAssets/images/team/ceo.jpeg')}}">	</div>
							<div class="">
								<p class="managerMsg">{!! __('common.mngMessage') !!}</div>
							</div>

						</div>
					</div>

			</div>

		</div><!-- .container end -->
	</section>	<!-- End video popup section section -->


</main>

@endsection
@section('pageSpecificScript')
	<script>

	</script>
@endsection
