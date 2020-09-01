@extends('admin_section.main')

<title>News</title>
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
    .main-section {
        margin-top: 50px;
        font-family: 'Abel', sans-serif;
    }

    .card-header-first {
        margin-top: -40px;
        background: linear-gradient(-90deg, #BF019F, #F28A57);
        box-shadow: 1px 5px 15px #a2a2a2;
    }

    .card-section {
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
    }

    .card-header-first span i, .card-section-third span i {
        padding: 17px;
        margin: 0px 10px;
        color: #fff;
        height: 50px;
        width: 50px;
        box-shadow: 1px 6px 24px #d2d2d2;
        background: linear-gradient(-90deg, #ED5B80, #BF019F);
    }

    .card-header-first span i:hover, .card-section-third span i:hover {
        box-shadow: 1px 1px 15px #000;
    }

    .card-header-second {
        box-shadow: 1px 5px 15px #a2a2a2;
        margin: -25px -25px 0px -25px;
        background: linear-gradient(-90deg, #90E8FC, #0080FF);
    }

    .card-header-third {
        margin-top: -25px;
        box-shadow: 1px 5px 15px #a2a2a2;
        background: linear-gradient(-90deg, #F2635F, #F4D00C);
    }

    .card-section-third span i {
        background: linear-gradient(-90deg, #F4D00C, #F2635F);
    }

    .card-section:hover {
        box-shadow: 1px 1px 20px #d2d2d2;
    }

    .zoom {

        transition: transform .2s;

    }

    .primary-color {
        background-color: #4989bd;
    }

    .success-color {
        background-color: #5cb85c;
    }

    .danger-color {
        background-color: #d9534f;
    }

    .warning-color {
        background-color: #f0ad4e;
    }

    .info-color {
        background-color: #5bc0de;
    }

    .no-color {
        background-color: inherit;
    }

    .zoom:hover {
        -ms-transform: scale(1.5); /* IE 9 */
        -webkit-transform: scale(1.5); /* Safari 3-8 */
        transform: scale(1.1);
    }

    input:focus {
        background-color: yellow;
    }

    .modal {
        text-align: center;
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
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-rep-plugin">
                                        <div class="table table-responsive b-0" data-pattern="priority-columns">
                                            <table class="table"
                                                   cellspacing="0"
                                                   width="100%">
                                                <thead>
                                                <tr>
                                                    <th scope="col"><label
                                                                for="eDescription">Name</label>
                                                    </th>
                                                    <th scope="col"><label
                                                                for="eDescription">Description</label>
                                                    </th>
                                                    <th scope="col"><label
                                                                for="eDescription">Edit</label>
                                                    </th>
                                                    <th scope="col"><label
                                                                for="eDescription">Delete</label>
                                                    </th>

                                                </tr>


                                                </thead>
                                                <tbody>
                                                @if(count($newses)==0)
                                                    <tr>

                                                        <td scope="co" colspan="5" style="text-align: center">Sorry No
                                                            Results Found.
                                                        </td>
                                                    </tr>
                                                @endif

                                                @foreach($newses as $news)
                                                    <tr>
                                                        <td>{{$news->name_en}}</td>
                                                        <td>{{\Illuminate\Support\Str::limit(strip_tags($news->description_en),180)}}</td>
                                                        <td><a style="padding: 12px 20px;background-color: #d1d138"
                                                               href="{{route('edit-news',['language'=>app()->getLocale(),'newsId'=>$news->idnews])}}"

                                                               class="btn btn-warning"><i class="fa fa-pencil-square-o"
                                                                                          aria-hidden="true"></i></a>
                                                        </td>
                                                        <td>
                                                            <button style="padding: 12px 20px;" type="button"
                                                                    data-id="{{$news->idnews}}" id="dNewsId"
                                                                    class="btn btn-danger"><i class="fa fa-trash"
                                                                                              aria-hidden="true"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>    <!-- End video popup section section -->


    <!-- partners section -->

</main>


</div>
</body>


<script>

    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })


        $(document).on('click', '#dNewsId', function () {
            var newsId = $(this).data("id");

            $.post('deleteByNewsId', {newsId: newsId}, function (data) {
                if (data.success) {
                    location.reload();
                }
            });
        });

        function uItemImageUploader() {
            $("#uProductionImage").click();
        }

        function uSetProductImage(input) {

            if (input.files[0] !== null) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById("uMyImage").setAttribute("src", e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

    });

</script>




