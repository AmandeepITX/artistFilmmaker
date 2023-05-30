<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="_token" content="{{ csrf_token() }}" />
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
    <title>@yield('title') </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.styles')
</head>

<body>
    @include('layouts.user-company.headers')
    <div class="container">
        <div class="row">
            @include('layouts.user-company.sidebar')
            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    </div>
    @include('layouts.user-company.footer')
    @include('layouts.script')
</body>

</html>