@extends('admin_section.main')

<title>Activity</title>
<meta name="_token" content="{{csrf_token()}}"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
{{--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link href="{{ URL::asset('assets/css/jquery.notify.css')}}" rel="stylesheet" type="text/css">
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

    .form-control{
        font-size: 1.1em!important;
    }
</style>
<body>
<main class="xs-main">
    <!-- video popup section section -->

    <!-- video popup section section -->
    <section class="xs-content-section-padding">
        <div class="container">

            <div class="row" style="padding-top: 120px">
                <div class="col-lg-12 col-md-12 mb-3 card-main">
                    <div class="card-section card-section-second border rounded ml-4 mr-4">
                        <div class="card-body text-center card-body-second">
                            <div class="scroll-animations">

                                <form method="post" action="{{route('activity-upload',app()->getLocale())}}" enctype="multipart/form-data"
                                      class="dropzone" id="dropzone">
                                    @csrf
                                </form>

                            </div>
                            <p id="eImagesError" style="color: red"></p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12 col-md-12 mb-12 card-main" >
                    <div class="card-section card-section-second border rounded ml-4 mr-4" >
                        <div class="card-body card-body-second">
                            <div class="scroll-animations">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#Home" data-toggle="tab">English</a></li>
                                    <li><a href="#Product" data-toggle="tab">Sinhala</a></li>
                                </ul>
                                <form id="saveForm">
                                    <div class="tab-content">
                                        <div id="Home" class="tab-pane fade in active">
                                            <div class="row" style="padding-top: 10px">
                                                <div class="col-lg-4">

                                                    <div class="form-group">
                                                        <label for="category">Category<span style="color:red;"> *</span></label>
                                                        <select class="form-control" style="height: 34px;" name="category"
                                                                id="category">
                                                            <option value="" disabled selected>Select Category
                                                            </option>
                                                            @if(isset($categories))
                                                                @foreach($categories as $category)
                                                                    <option value="{{"$category->idactivity_category"}}">{{$category->name_en}} </option>
                                                                @endforeach
                                                            @endif

                                                        </select>
                                                    </div>
                                                    <p id="categoryError" style="color: red"></p>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="eName">Activity Name<span style="color:red;"> *</span></label>
                                                        <input  type="text" class="form-control" name="eName" id="eName"
                                                                placeholder="Activity Name"/>
                                                    </div>
                                                    <p id="eNameError" style="color: red"></p>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="eDescription">Description<span
                                                                    style="color:red;"> *</span></label>
                                                        <textarea class="form-control" rows="6" name="eDescription"
                                                                  id="eDescription"
                                                                  placeholder="Write some description here...."></textarea>
                                                    </div>
                                                    <p id="eDescriptionError" style="color: red"></p>
                                                </div>

                                            </div>
                                        </div>
                                        <div id="Product" class="tab-pane fade">

                                            <div class="row" style="padding-top: 10px">

                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="sName">Activity Name</label>
                                                        <input  type="text" class="form-control" name="sName" id="sName"
                                                                placeholder="Activity Name"/>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="sDescription">Description</label>
                                                        <textarea class="form-control" rows="6" name="sDescription"
                                                                  id="sDescription"
                                                                  placeholder="Write some description here...."></textarea>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <button id="submitBtn" type="submit" class="btn btn-primary"
                                                    form="saveForm">
                                                Save Activity
                                            </button>

                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>	<!-- End video popup section section -->


    <!-- partners section -->

</main>
</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>

    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        CKEDITOR.replace( 'eDescription' );
        CKEDITOR.replace( 'sDescription' );


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
//                    console.log(response);
                },
                error: function(file, response)
                {
                    return false;
                }
            };




        $("#saveForm").on("submit", function (event) {
            event.preventDefault();
            updateAllMessageForms();
            $('#categoryError').html("");
            $('#eDescriptionError').html("");
            $('#eNameError').html("");
            $('#submitBtn').attr('disabled',true);

            $.post('{{route('activity-store',app()->getLocale())}}',
                $(this).serialize(), function (data) {
                    $('#submitBtn').attr('disabled',false);

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
                        swal("Saved!", "Activity saved successfully!", "success");
                        $('.form-control').val('').trigger('change');


                        setTimeout(function () {
                           location.reload()
                        }, 700);
                    }

                });

        });

    });

    window.onload = function() {

        $.post('activity-deleteImages',{

        },function (data) {
//                console.log(data)
        })
    }

</script>




