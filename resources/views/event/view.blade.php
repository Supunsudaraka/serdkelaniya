@extends('includes.main')

@section('pageSpecificStyles')
@endsection
@section('pageSpecificContent')
    <style>
        .image-viewer {
            display: none;
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.8);
            overflow: auto;
            pointer-events: auto;
        }

        .image-viewer img {
            max-height: calc(100% - 40px);
            max-width: calc(100% - 40px);
            margin: 20px;
            cursor: pointer;

        }

        .image-viewer .prev-btn,
        .image-viewer .next-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px;
            color: #fff;
            background-color: transparent;
            border: none;
            cursor: pointer;
            outline: none;
        }

        .image-viewer .prev-btn {
            left: 10px;
        }

        .image-viewer .next-btn {
            right: 10px;
        }

        .image-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            grid-gap: 10px;
        }

        .grid-item {
            position: relative;
            overflow: hidden;
            max-height: 300px;
            position: relative;
        }

        .grid-item:hover {
            /* Update hover styles to match your design */
            cursor: pointer;
        }

        .grid-item:hover::before {
            content: "Click to view full image";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.8);
            color: #fff;
            padding: 10px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .grid-item:hover::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.3);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .grid-item:hover::before,
        .grid-item:hover::after {
            opacity: 1;
        }


        .image-viewer .close {
            color: #fff;
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 24px;
            cursor: pointer;
        }


        .text-section {
            margin-top: 20px;
        }

        .text-description {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .text-description h2 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .text-description p {
            font-size: 14px;
            line-height: 1.4;
            color: #444;
        }
    </style>

    <!-- welcome section -->
    <!--breadcumb start here-->
    <section class="xs-banner-inner-section parallax-window"
        style="background-size: cover;background-image:url({{ \Illuminate\Support\Facades\URL::asset('myAssets/images/event/' . $event->category->image) }})">
        <div class="xs-black-overlay"></div>
        <div class="container">
            <div class="color-white xs-inner-banner-content">
                <h2 style="text-align: center">{{ $event->category->name }}</h2>
            </div>
        </div>
    </section>
    <!--breadcumb end here-->
    <!-- End welcome section -->


    <main class="xs-main">

        <section class="xs-content-section-padding">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h4>{{ $event->name }}</h4>
                    </div>
                </div>

                @if ($event->images()->count() > 0)
                    <div class="image-grid">
                        @foreach ($event->images as $image)
                            <div class="grid-item">
                                <img src="{{ $image->getPath() }}" alt="Image 1" onclick="openImageViewer(this)">
                            </div>
                        @endforeach
                    </div>
                @endif
                <div class="text-section">
                    <div class="text-description">
                        <div class="py-1 ">{!! $event->description !!}</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Image viewer : start -->
        <div id="imageViewer" class="image-viewer">
            <span class="close" onclick="closeImageViewer()">&times;</span>
            <img id="imageViewerImg" class="image-viewer-img">
            <button class="prev-btn" onclick="showPrevImage()">&lt;</button>
            <button class="next-btn" onclick="showNextImage()">&gt;</button>
        </div>
        <!-- Image viewer : end -->

    </main>

@endsection
@section('pageSpecificScript')
    <script>
        var images = [];
        var currentIndex = 0;

        function openImageViewer(element) {
            var imageSrc = element.src;
            images = document.querySelectorAll('.grid-item img');
            currentIndex = Array.from(images).indexOf(element);

            document.getElementById('imageViewerImg').src = imageSrc;
            document.getElementById('imageViewer').style.display = 'block';
            document.body.style.overflow = 'hidden';

            document.getElementById('imageViewerImg').addEventListener('click', showNextImageOnClick);

        }

        function closeImageViewer() {
            document.getElementById('imageViewer').style.display = 'none';
            document.body.style.overflow = '';
        }

        function showNextImageOnClick() {
            showNextImage();
        }

        function showPrevImage() {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            var prevImageSrc = images[currentIndex].src;
            document.getElementById('imageViewerImg').src = prevImageSrc;
        }

        function showNextImage() {
            currentIndex = (currentIndex + 1) % images.length;
            var nextImageSrc = images[currentIndex].src;
            document.getElementById('imageViewerImg').src = nextImageSrc;
        }

        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeImageViewer();
            } else if (event.key === 'ArrowLeft') {
                showPrevImage();
            } else if (event.key === 'ArrowRight') {
                showNextImage();
            }
        });

        const gridItems = document.querySelectorAll('.grid-item');
        gridItems.forEach((item) => {
            item.addEventListener('click', () => {
                openImageViewer(item.querySelector('img'));
            });
        });
    </script>
@endsection
