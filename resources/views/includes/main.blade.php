<!DOCTYPE html>

<html lang="en">

<head>
    @include('includes.head')
</head>

<body>
    <div id="app">
        {{-- header start--}}
        @include('includes.header')
        {{-- header End --}}
        @yield('content')
        <!-- prs patner slider End -->
        <!-- prs Newsletter Wrapper Start -->
        {{-- footer start from here --}}
        @include('includes.footer')
        {{-- footer end here --}}
        <!-- st login wrapper End -->
        <!--main js file start-->
        @include('includes.foot')
        <!--main js file end-->
    </div>
</body>

</html>