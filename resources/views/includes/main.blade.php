@include('includes.header_start')
@include('includes.common_styles')

@yield('pageSpecificStyles') <!-- your custom styles goes here -->

@include('includes.header_end')

{{--@if(Route::currentRouteName() != 'signUp' && Route::currentRouteName() != 'login')--}}
    @include('includes.top_bar')
{{--@endif--}}

@yield('pageSpecificContent') <!-- Page content goes here -->

{{--@if(Route::currentRouteName() != 'signUp' && Route::currentRouteName() != 'login')--}}
@include('includes.footer_start')
{{--@endif--}}

@include('includes.common_scripts')

@yield('pageSpecificScript') <!-- your custom scripts goes here -->

{{--@if(Route::currentRouteName() != 'signUp' && Route::currentRouteName() != 'login')--}}
@include('includes.footer_end')
{{--@endif--}}
