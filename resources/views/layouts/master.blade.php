<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->

    @include('layouts.css')
    @yield('addcss')
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">

        <!-- NAVBAR -->
        @include('layouts.navbar')
        <!-- END NAVBAR -->

        <!-- LEFT SIDEBAR -->
        @include('layouts.leftsidebar')
        <!-- END LEFT SIDEBAR -->

        <!-- MAIN -->
        <div class="main">
            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- END MAIN CONTENT -->
            </div>
            <!-- END MAIN -->

            <!-- FOOTER -->
            <div class="clearfix"></div>
            @include('layouts.footer')
            <!-- END FOOTER -->
        </div>
    </div>
    <!-- END WRAPPER -->

    <!-- Javascript -->
    @include('layouts.js')
    @yield('addjs')

</body>

</html>