<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    @include('Cdn.top')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
    <div class="wrapper">
        @include('Admin.sidebar')
        <div class="main">
            @include('Admin.header')

            @yield('dashboardcontent')

            {{-- @include('Orm.footer') --}}
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    @include('Cdn.bottom')

</body>

</html>
