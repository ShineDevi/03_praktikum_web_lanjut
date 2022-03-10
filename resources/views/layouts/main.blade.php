<!--Template Name: vacayhome
File Name: news.html
Author Name: ThemeVault
Author URI: http://www.themevault.net/
License URI: http://www.themevault.net/license/-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="{{ asset('style/images/icons/favicon.png')}}"/>
        
        <title>{{$title}}</title>

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('style/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('style/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Custom styles for this template -->
        <link href="{{ asset('style/css/style.css')}}" rel="stylesheet">
        <link href="{{ asset('style/fonts/antonio-exotic/stylesheet.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('style/css/lightbox.min.css')}}">
        <link href="{{ asset('style/css/responsive.css')}}" rel="stylesheet">
        <script src="{{ asset('style/js/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('style/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('style/js/lightbox-plus-jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('style/js/instafeed.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('style/js/custom.js')}}" type="text/javascript"></script>
    </head>
    <body>
        <div id="page">
            <!---header top---->
            @include('layouts.header')
            <!--header--->

            <!--end-->
            @yield('main_content')
            <!---footer--->
            @include('layouts.footer')

            <!--back to top--->
            <a style="display: none;" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
                <span><i aria-hidden="true" class="fa fa-angle-up fa-lg"></i></span>
                <span>Top</span>
            </a>
        </div>
    </body>
</html>
