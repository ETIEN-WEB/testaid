<!DOCTYPE HTML>
<html lang="en-US">

@include('themes.layouts.head')
<body>
<div class="flash_notify text-center" style="display: none;">
    <div class="flash_type"> flash_type </div>
    <span class="flash_msg"> flash_msg </span>
</div>
    @include('themes.layouts.header')

    @yield('content')

    @include('themes.layouts.footer')

</body>
<!-- Mirrored from html.ditsolution.net/cleaning/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 May 2023 06:24:03 GMT -->
</html>
