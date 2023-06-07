<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="_token" content="{{ csrf_token() }}" />
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico?v=2">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- slider-link -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- slider-link-end -->
    <title>@yield('title') | {{ env('APP_NAME') }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('layouts.styles')

</head>

<body id="contactpage">
    @include('layouts.headers')


    @if (Auth::check() && Auth::user()->email_verified_at != null)
        <div class="container-fluid p-0">
            <div class="row adminsidebar">
                @include('layouts.user-company.sidebar')
                <div class="col-md-9 sidebarright">
                    @include('sweetalert::alert')
                    @if (Auth::user()->status == 'pending' || Auth::user()->status == 'unapproved')
                        <div class="alert alert-dark" role="alert">
                            <h3>Waiting for profile approval </h3>
                        </div>
                    @endif
                    @yield('content')
                </div>
            </div>
        </div>
    @else
        <div class="sign-up">
            @yield('content')
        </div>
    @endif
    @include('layouts.footer')
    @include('layouts.script')
    @livewireScripts
    @yield('script')
</body>

</html>
