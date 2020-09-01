<!-- footer section start -->
<footer class="xs-footer-section">
    <div class="container">
        <div class="xs-footer-top-layer">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-widget xs-pr-20">
                    <a href="{{route('welcome',app()->getLocale())}}" class="xs-footer-logo">
                        <img src="{{\Illuminate\Support\Facades\URL::asset('myAssets/images/logo.jpeg')}}" alt="">
                    </a>

                    <ul class="xs-social-list-v2">
                        <li><a href="#" class="color-facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="color-twitter"><i class="fa fa-twitter"></i></a></li>

                    </ul><!-- .xs-social-list END -->
                </div>
                <div class="col-lg-2 col-md-6 footer-widget">
                    <h3 class="widget-title">{{__('common.Links')}}</h3>
                    <ul class="xs-footer-list">
                        <li><a href="{{route('welcome',app()->getLocale())}}">{{__('common.Home')}}</a></li>
                        <li><a href="{{route('victories',app()->getLocale())}}">{{__('common.Victories')}}</a></li>
                        <li><a href="{{route('about',app()->getLocale())}}">{{__('common.About Us')}}</a></li>
                        <li><a href="{{route('contact-us',app()->getLocale())}}">{{__('common.Contact Us')}}</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-widget">
                    <h3 class="widget-title">{{__('common.Events')}}</h3>
                    <ul class="xs-footer-list">
                        @if(\App\EventCategory::where('status',1)->exists())
                            @foreach(\App\EventCategory::where('status',1)->get() as $category)
                                <li>
                                    <a href="{{route('event-list',['language'=>app()->getLocale(),'categoryId'=>$category->id])}}">{{$category->name}}</a>
                                </li>
                            @endforeach
                        @endif
                   </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-widget">
                    <h3 class="widget-title">{{__('common.Contact Us')}}</h3>
                    <ul class="xs-info-list">
                        <li><i class="fa fa-home bg-red"></i>{{__('common.serdAddress')}}</li>
                        <li><i class="fa fa-phone bg-green"></i>+(94) 77 333 9231</li>
                        <li><i class="fa fa-envelope-o bg-blue"></i><a href="mailto:yourname@domain.com">serd@gmail.com
                                </a></li>
                    </ul><!-- .xs-list-with-icon END -->
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="xs-copyright">
            <div class="row">

                <div class="col-md-6">

                </div>
            </div>
        </div>
    </div>
    <div class="xs-back-to-top-wraper">
        <a href="#" class="xs-back-to-top"><i class="fa fa-angle-up"></i></a>
    </div>
</footer>