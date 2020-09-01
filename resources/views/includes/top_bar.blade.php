<header class="xs-header header-transparent xs-box">
    <div class="container">
        <nav class="xs-menus">
            <div class="xs-top-bar clearfix">
                <ul class="xs-top-social">

                    @if(\Illuminate\Support\Facades\Auth::check())
                        <li><a href="{{route('dashboard',\Illuminate\Support\Facades\App::getLocale())}}">Dashboard</a></li>
                    @else
                        <li><a href="{{route('login',\Illuminate\Support\Facades\App::getLocale())}}">Login</a></li>
                    @endif
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
                    <ul class="nav-menu">
                        <li style="padding-left: 20px"><a
                                    href="{{route('welcome',app()->getLocale())}}">{{__('common.Home')}}</a></li>
                        <li style="padding-left: 20px"><a
                                    href="{{route('victories',app()->getLocale())}}">{{__('common.Victories')}}</a></li>
                        <li style="padding-left: 20px"><a href="#">{{__('common.Activities')}}</a>
                            <ul class="nav-dropdown">
                                @if(\App\ActivityCategory::where('status',1)->exists())
                                    @foreach(\App\ActivityCategory::where('status',1)->get() as $category)
                                        <li>
                                            <a href="{{route('activities',['language'=>app()->getLocale(),'id'=>$category->id])}}">{{$category->name}}</a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </li>

                        <li style="padding-left: 20px"><a href="#">{{__('common.Events')}}</a>
                            <ul class="nav-dropdown">
                                @if(\App\EventCategory::where('status',1)->exists())
                                    @foreach(\App\EventCategory::where('status',1)->get() as $category)
                                        <li>
                                            <a href="{{route('event-list',['language'=>app()->getLocale(),'categoryId'=>$category->id])}}">{{$category->name}}</a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </li>
                        <li style="padding-left: 20px"><a href="#">{{__('common.More')}}</a>
                            <ul class="nav-dropdown">
                                <li>
                                    <a href="{{route('news',app()->getLocale())}}">{{__('common.News')}}</a>
                                </li>
                                <li>
                                    <a href="{{route('about',app()->getLocale())}}">{{__('common.About Us')}}</a>
                                </li>
                                <li>
                                    <a href="{{route('contact-us',app()->getLocale())}}">{{__('common.Contact Us')}}</a>
                                </li>
                            </ul>
                        </li>

                    </ul><!-- .nav-menu END -->
                </div>
                <form style="display: none;" id="languageForm"
                      action="{{route('changeLanguage',['language'=>\Illuminate\Support\Facades\App::getLocale()])}}"
                      method="GET">
                    <input type="hidden" id="selectedLang" class="noClear" name="selectedLang">
                    <input type="hidden" class="noClear" value="{{\Request::route()->getName()}}" name="currentRoute">
                </form>
                <div class="xs-navs-button d-flex-center-end col-lg-3 col-xl-3 d-block d-lg-none d-xl-block">
                    <ul class="nav-menu">
                        <li style="padding-left: 20px"><a href="#"> {{__('common.Language')}}</a>
                            <ul class="nav-dropdown">
                                <li><a onclick="$('#selectedLang').val('en');$('#languageForm').submit();"
                                       class="dropdown-item" href="#">{{__('common.English')}}</a></li>
                                <li><a onclick="$('#selectedLang').val('si');$('#languageForm').submit();"
                                       class="dropdown-item" href="#">{{__('common.Sinhala')}}</a></li>
                                {{--<li><a onclick="$('#selectedLang').val('fr');$('#languageForm').submit();"--}}
                                       {{--class="dropdown-item" href="#">{{__('common.French')}}</a></li>--}}

                            </ul>
                        </li>
                    </ul>
                </div><!-- .xs-navs-button END -->
            </div><!-- .nav-menus-wrapper .row END -->
        </nav><!-- .xs-menus .fundpress-menu END -->
    </div><!-- .container end -->
</header><!-- End header section -->