<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Management Solution.</title>
    <link rel="shortcut icon" href="../img/favicon.ico">
    <!--STYLESHEET-->
    @include('layouts.css')

    @stack('ex_js')
</head>
<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
    <div id="container" class="effect mainnav-lg navbar-fixed mainnav-fixed">
        <!--NAVBAR-->
        <!--===================================================-->
        @include('layouts.header')
        <!--===================================================-->
        <!--END NAVBAR-->
        <div class="boxed">
            @yield('content')
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->
            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            @if (Auth::user()->is_super == 1)
                @include('layouts.nav')
            @else
                @include('nav')
            @endif
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->
            <!--END ASIDE-->
        </div>
        <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer" style=" background-color: #A8A8A8; color: white;">
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="hide-fixed pull-right pad-rgt">Currently v2.0</div>
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class name "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <p class="pad-lft">&#0169; 2023 Technical support by <a href="https://www.techlozi.com/" target="_blank"
                    class="btn-link">techlozi</a></p>
        </footer>
        <!--===================================================-->
        <!-- END FOOTER -->
        <!-- SCROLL TOP BUTTON -->
        <!--===================================================-->
        <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
        <!--===================================================-->
    </div>
