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

            justify-content: center;
            align-items: center;
        }

        .image-viewer img {
            max-height: calc(100% - 40px);
            max-width: calc(100% - 40px);
            margin: 20px;
            cursor: pointer;
            max-height: calc(100vh - 100px);

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

        </style>


@if ($images->count() > 0)
<div class="image-grid">
    @foreach ($images as $image)
        <div class="grid-item">
            <img src="{{ $image->getPath() }}" alt="Image 1" onclick="openImageViewer(this)">
        </div>
    @endforeach
</div>
@endif
 
 <!-- Image viewer : start -->
 <div id="imageViewer" class="image-viewer">
    <span class="close" onclick="closeImageViewer()">&times;</span>
    <img id="imageViewerImg" class="image-viewer-img">
    <button class="prev-btn" onclick="showPrevImage()">&lt;</button>
    <button class="next-btn" onclick="showNextImage()">&gt;</button>
</div>
<!-- Image viewer : end -->

<script>
    var images = [];
    var currentIndex = 0;

    function openImageViewer(element) {
        var imageSrc = element.src;
        images = document.querySelectorAll('.grid-item img');
        currentIndex = Array.from(images).indexOf(element);

        document.getElementById('imageViewerImg').src = imageSrc;
        document.getElementById('imageViewer').style.display = 'flex';
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