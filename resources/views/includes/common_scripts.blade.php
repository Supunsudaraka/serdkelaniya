<script src="{{\Illuminate\Support\Facades\URL::asset('myAssets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('myAssets/js/plugins.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('myAssets/js/bootstrap.min.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('myAssets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('myAssets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('myAssets/js/owl.carousel.min.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('myAssets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('myAssets/js/jquery.countdown.min.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('myAssets/js/spectragram.min.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('myAssets/js/animate.min.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('myAssets/js/main.js')}}"></script>
<script src="{{ \Illuminate\Support\Facades\URL::asset('myAssets/plugins/ckeditor/ckeditor.js')}}"></script>


<script>

    //
    (function($) {

        /**
         * Copyright 2012, Digital Fusion
         * Licensed under the MIT license.
         * http://teamdf.com/jquery-plugins/license/
         *
         * @author Sam Sehnert
         * @desc A small plugin that checks whether elements are within
         *     the user visible viewport of a web browser.
         *     only accounts for vertical position, not horizontal.
         */

        $.fn.visible = function(partial) {

            var $t            = $(this),
                $w            = $(window),
                viewTop       = $w.scrollTop(),
                viewBottom    = viewTop + $w.height() - 200,
                _top          = $t.offset().top,
                _bottom       = _top + $t.height(),
                compareTop    = partial === true ? _bottom : _top,
                compareBottom = partial === true ? _top : _bottom;

            return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

        };
        animateClass('bottomIn');
        animateClass('zoomIn');
        animateClass('leftIn');
        animateClass('rightIn');

    })(jQuery);



    function animateClass(className) {
        $(window).scroll(function(event) {

            $("."+className).each(function(i, el) {
                var el = $(el);
                if (el.visible(true)) {
                    el.addClass(className+'-animate');
                }
            });

        });

        var win = $(window);
        var allMods = $("."+className);

        // Already visible comeIns
        allMods.each(function(i, el) {
            var el = $(el);
            if (el.visible(true)) {
                el.addClass("already-visible");
            }
        });

        win.scroll(function(event) {

            allMods.each(function(i, el) {
                var el = $(el);
                if (el.visible(true)) {
                    el.addClass(className+'-animate');
                }
            });

        });
    }

    function updateAllMessageForms()
    {
        for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }
    }
</script>