<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="MedPro">
        <meta name="author" content="Mindcrew Technologies">
        <meta name="keywords" content="dashboard, admin, dashboard template, admin template, laravel, php laravel, laravel bootstrap">

        @include('layouts.horizontal-menu.head')

    </head>

    <body>

        <!-- GLOBAL-LOADER -->
        <div id="global-loader">
            <img src="{{URL::asset('assets/images/loader.svg')}}" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOBAL-LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="page-main">

                @include('layouts.horizontal-menu.header')

                @include('layouts.horizontal-menu.horizontal-main')

                @include('layouts.horizontal-menu.mobile-header')

                <!--app-content open-->
                <div class="container app-content">
                    <div class="">

                        <div class="page-header">
                            @yield('page-header')
                            @include('layouts.horizontal-menu.header-breadcrumb')
                        </div>

                        @yield('content')

            @include('layouts.horizontal-menu.sidebar')

            @include('layouts.horizontal-menu.footer')

            @include('layouts.horizontal-menu.footer-scripts')

        </div>

    </body>
</html>
