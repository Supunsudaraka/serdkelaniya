<header class="xs-header header-transparent xs-box">
    <div class="container">
        <nav class="xs-menus">
            <div class="xs-top-bar clearfix">
                <ul class="xs-top-social">

                    <li><a href="{{route('logout',\Illuminate\Support\Facades\App::getLocale())}}">Log Out</a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                </ul>

            </div>
            <div class="nav-header">
                <div class="nav-toggle"></div>
                <a href="index.html" class="xs-nav-logo">
                    <img src="{{\Illuminate\Support\Facades\URL::asset('myAssets/images/logo.jpg')}}"
                         style="width: 110px" alt="">
                </a>
            </div><!-- .nav-header END -->
            <div class="nav-menus-wrapper row">
                <div class="xs-logo-wraper col-lg-2 col-xl-2 xs-padding-0">
                    <a class="nav-brand" href="{{route('welcome',app()->getLocale())}}">
                        <img src="{{\Illuminate\Support\Facades\URL::asset('myAssets/images/logo.jpg')}}"
                             style="width: 110px" alt="">
                    </a>

                </div><!-- .xs-logo-wraper END -->
                <div class="col-lg-10 col-xl-7">
                    <ul class="nav-menu pull-left">
                        <li ><a href="#">Events</a>
                            <ul class="nav-dropdown">
                                <li>
                                    <a href="{{route('add-event',['language'=>app()->getLocale()])}}">Add Event</a>
                                </li>
                                <li>
                                    <a href="{{route('view-events',['language'=>app()->getLocale()])}}">View Events</a>
                                </li>
                            </ul>
                        </li>

                        <li ><a href="#">Victories</a>
                            <ul class="nav-dropdown">
                                <li>
                                    <a href="{{route('add-victory',['language'=>app()->getLocale()])}}">Add Victory</a>
                                </li>
                                <li>
                                    <a href="{{route('view-victory',['language'=>app()->getLocale()])}}">View Victories</a>
                                </li>
                            </ul>
                        </li>
                        <li ><a href="#">News</a>
                            <ul class="nav-dropdown">
                                <li>
                                    <a href="{{route('add-news',['language'=>app()->getLocale()])}}">Add News</a>
                                </li>
                                <li>
                                    <a href="{{route('view-news',['language'=>app()->getLocale()])}}">View News</a>
                                </li>
                            </ul>
                        </li>
                        <li ><a href="#">Activities</a>
                            <ul class="nav-dropdown">
                                <li>
                                    <a href="{{route('add-activity',['language'=>app()->getLocale()])}}">Add Activity</a>
                                </li>
                                <li>
                                    <a href="{{route('view-activities',['language'=>app()->getLocale()])}}">View Activities</a>
                                </li>
                            </ul>
                        </li>




                    </ul><!-- .nav-menu END -->
                </div>

                <div class="xs-navs-button d-flex-center-end col-lg-3 col-xl-3 d-block d-lg-none d-xl-block">
                    <ul class="nav-menu">

                        <li style="padding-left: 20px"> <a  href="{{route('welcome',\Illuminate\Support\Facades\App::getLocale())}}">Home</a>
                        <li style="padding-left: 20px"> <a  href="{{route('dashboard',\Illuminate\Support\Facades\App::getLocale())}}">Dashboard</a>


                        </li>

                    </ul>
                </div><!-- .xs-navs-button END -->
            </div><!-- .nav-menus-wrapper .row END -->
        </nav><!-- .xs-menus .fundpress-menu END -->
    </div><!-- .container end -->
</header><!-- End header section -->