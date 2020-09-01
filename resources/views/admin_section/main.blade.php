@include('includes.header_start')
@include('admin_section.common_styles')

@yield('pageSpecificStyles') <!-- your custom styles goes here -->

@include('includes.header_end')

{{--@if(Route::currentRouteName() != 'signUp' && Route::currentRouteName() != 'login')--}}
    @include('admin_section.top_bar')
{{--@endif--}}

@yield('pageSpecificContent') <!-- Page content goes here -->


@include('includes.common_scripts')

@yield('pageSpecificScript') <!-- your custom scripts goes here -->

