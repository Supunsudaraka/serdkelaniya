<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto+Slab:400,700" rel="stylesheet">

{{--<link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('myAssets/myCss/animation.css')}}">--}}

{{--<link rel="icon" type="image/png" href="favicon.html">--}}
<!-- Place favicon.ico in the root directory -->
{{--<link rel="apple-touch-icon" href="apple-touch-icon.html">--}}

<link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('myAssets/css/font-awesome.min.css')}}">

<link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('myAssets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('myAssets/css/xsIcon.css')}}">
<link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('myAssets/css/isotope.css')}}">
<link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('myAssets/css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('myAssets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('myAssets/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('myAssets/css/animate.css')}}">


<!--For Plugins external css-->
<link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('myAssets/css/plugins.css')}}" />

<!--Theme custom css -->
<link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('myAssets/css/style.css')}}">

<!--Theme Responsive css-->
<link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('myAssets/css/responsive.css')}}" />

<link rel='stylesheet alternate' title='color-1' type='text/css' href='{{\Illuminate\Support\Facades\URL::asset('myAssets/css/colors/color-1.css')}}' >
<link rel='stylesheet alternate' title='color-2' type='text/css' href='{{\Illuminate\Support\Facades\URL::asset('myAssets/css/colors/color-2.css')}}' >
<link rel='stylesheet alternate' title='color-3' type='text/css' href='{{\Illuminate\Support\Facades\URL::asset('myAssets/css/colors/color-3.css')}}' >
<link rel='stylesheet alternate' title='color-4' type='text/css' href='{{\Illuminate\Support\Facades\URL::asset('myAssets/css/colors/color-4.css')}}' >
<link rel='stylesheet alternate' title='color-5' type='text/css' href='{{\Illuminate\Support\Facades\URL::asset('myAssets/css/colors/color-5.css')}}' >
<link rel='stylesheet alternate' title='color-6' type='text/css' href='{{\Illuminate\Support\Facades\URL::asset('myAssets/css/colors/color-6.css')}}' >
<link rel='stylesheet alternate' title='color-7' type='text/css' href='{{\Illuminate\Support\Facades\URL::asset('myAssets/css/colors/color-7.css')}}' >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


<style>

    /*bottom in animation : Start*/
    .bottomIn{
        opacity: 0;
    }

    .bottomIn-animate {
        transform: translateY(150px);
        animation: bottomIn-Key 2s ease forwards;
    }
    .bottomIn-animate:nth-child(odd) {
        animation-duration: 1.5s; /* So they look staggered */
    }

    @keyframes bottomIn-Key {
        to {
            transform: translateY(0);
            opacity:1;
        }

    }
    /*bottom in animation : END*/

    /*zoom in animation : Start*/

    .zoomIn{
        opacity: 0;
    }

    .zoomIn-animate {
        transform: scale(0.5);
        animation: zoomIn-Key 1.5s ease forwards;
    }
    .zoomIn-animate:nth-child(odd) {
        animation-duration: 1.5s; /* So they look staggered */
    }

    @keyframes zoomIn-Key {
        to {
            transform: scale(1);
            opacity:1;
        }
    }
    /*zoom in animation : END*/

    /*left in animation : Start*/

    .leftIn{
        opacity: 0;
    }

    .leftIn-animate {
        transform: translateX(-100%);
        animation: leftIn-Key 1.5s ease-in forwards;
    }
    .leftIn-animate:nth-child(odd) {
        animation-duration: 0.5s; /* So they look staggered */
    }

    @keyframes leftIn-Key {
        to {
            transform: translateX(0);
            opacity:1;
        }
    }
    /*left in animation : END*/

    /*right in animation : Start*/

    .rightIn{
        opacity: 0;
    }

    .rightIn-animate {
        transform: translateX(100%);
        animation: rightIn-Key 1.5s ease-in forwards;
    }
    .rightIn-animate:nth-child(odd) {
        animation-duration: 0.5s; /* So they look staggered */
    }

    @keyframes rightIn-Key {
        to {
            transform: translateX(0);
            opacity:1;
        }
    }
    /*right in animation : END*/

</style>