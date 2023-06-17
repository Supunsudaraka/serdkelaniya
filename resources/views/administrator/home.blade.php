@extends('admin_section.main')

<title>Events</title>
<meta name="_token" content="{{csrf_token()}}"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
{{--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<meta name="csrf-token" content="{{ csrf_token() }}"/>

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
    input:focus {
        background-color: yellow;
    }

</style>
<script src="https://cdn.jsdelivr.net/npm/apexcharts@latest"></script>

<body>
<main class="xs-main">
    <!-- video popup section section -->

    <!-- video popup section section -->
    <section class="xs-content-section-padding">
        <div class="container">

            <div class="row" style="padding-top: 120px">

            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12 mb-6 card-main" >
                    <div class="card-section card-section-second border rounded ml-4 mr-4" >
                        <div class="card-body card-body-second">
                            <div class="scroll-animations">

                                <h1 style="text-align: center">{{$eventCount}}</h1>
                                <h3 style="text-align: center">No   of Events</h3>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mb-6 card-main" >
                    <div class="card-section card-section-second border rounded ml-4 mr-4" >
                        <div class="card-body card-body-second">
                            <div class="scroll-animations">
                                <h1 style="text-align: center">{{$victoryCount}}</h1>
                                <h3 style="text-align: center">No   of Victory</h3>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 mt-5 ">
                    <h2 style="text-align: center">Storage </h2>

                    @include('components.pie-chart.index')
                </div>
            </div>

        </div>
    </section>	<!-- End video popup section section -->


    <!-- partners section -->

</main>
</body>


<script>

    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })




        $(document).on('focus', ':input', function () {
            $(this).attr('autocomplete', 'off');
        });





        Dropzone.options.dropzone =
            {
                maxFilesize: 12,
                renameFile: function(file) {
                    var dt = new Date();
                    var time = dt.getTime();
                    return time+file.name;
                },
                acceptedFiles: ".jpeg,.jpg,.png,.gif",
                addRemoveLinks: true,
                timeout: 50000,
                removedfile: function(file)
                {
                    var name = file.upload.filename;
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        },
                        type: 'POST',
                        url: '{{ url("delete") }}',
                        data: {filename: name},
                        success: function (data){
                            console.log("File has been successfully removed!!");
                        },
                        error: function(e) {
                            console.log(e);
                        }});
                    var fileRef;
                    return (fileRef = file.previewElement) != null ?
                        fileRef.parentNode.removeChild(file.previewElement) : void 0;
                },

                success: function(file, response)
                {
                    console.log(response);
                },
                error: function(file, response)
                {
                    return false;
                }
            };




        $("#saveForm").on("submit", function (event) {
            event.preventDefault();
            $('#categoryError').html("");
            $('#eDescriptionError').html("");
            $('#eNameError').html("");

            $.post('{{route('event-store',app()->getLocale())}}',
                $(this).serialize(), function (data) {

                    if (data.errors != null) {

                        if (data.errors.category) {
                            var p = document.getElementById('categoryError');
                            p.innerHTML = data.errors.category[0];

                        }
                        if (data.errors.eDescription) {
                            var p = document.getElementById('eDescriptionError');
                            p.innerHTML = data.errors.eDescription[0];

                        }
                        if (data.errors.eName) {
                            var p = document.getElementById('eNameError');
                            p.innerHTML = data.errors.eName[0];

                        }
                    }
                    if (data.eventImagesError) {

                        var p = document.getElementById('eImagesError');
                        p.innerHTML = data.eventImagesError;
                    }

                    if (data.success != null) {
                        location.reload();
                    }

                });

        });

    });

    window.onload = function() {


        $.post('deleteImages',{

        },function (data) {

        })
    }

</script>




