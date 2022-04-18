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

        @include('layouts.vertical-menu.head')

    </head>

    <body class="login-img">

        @yield('content')

        @include('layouts.vertical-menu.footer-scripts')

    </body>
</html>
