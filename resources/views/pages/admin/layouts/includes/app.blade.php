<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="_token" content="{{ csrf_token() }}" />
    <link rel="icon" type="image/x-icon" href="/public/img/favicon.ico">
    <title>@yield('title') </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- @notifyCss -->
    @include('pages.admin.layouts.includes.styles')
    @livewireStyles
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('pages.admin.layouts.includes.header')

        @include('pages.admin.layouts.includes.sidebar')


        @if ($errors->any())
            <div class="alert alert-danger">
                <p><strong>Opps Something went wrong</strong></p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @yield('content')
    </div>
    </div> -->
    </div>

    @include('pages.admin.layouts.includes.footer')
    @include('pages.admin.layouts.includes.script')
</body>
@livewireScripts
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<x-livewire-alert::scripts />
@stack('scripts')

</html>
