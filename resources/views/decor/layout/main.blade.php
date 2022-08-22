@php
    $g_setting = DB::table('general_settings')->where('id', 1)->first();
    $contact_us = \App\Models\Admin\PageContactItem::first();
@endphp
@include('decor.layout.header')
<!--Header Section Starts -->
<header class="site_header">

@yield("main_slider")
@include('decor.layout.nav')

<!-- Nav Section End -->

</header>
<!-- Header Section End --> 
@yield('main-container')
@include('decor.layout.footer')