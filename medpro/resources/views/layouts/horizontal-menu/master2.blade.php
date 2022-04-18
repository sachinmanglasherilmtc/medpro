<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="MedPro">
        <meta name="author" content="Mindcrew Technologies">
        <meta name="keywords" content="dashboard, admin">

        @include('layouts.horizontal-menu.head')

    </head>

    <body>

        @yield('content')

        @include('layouts.horizontal-menu.footer-scripts')

    </body>
</html>
