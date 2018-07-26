<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>@yield('title','格鲁津推广管理系统')</title>
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- http://davidbcalhoun.com/2010/viewport-metatag -->
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    @section('head')
        <!--// OPTIONAL & CONDITIONAL CSS FILES //-->
            <!-- date picker css -->
            <link rel="stylesheet" href="{{asset('ZhouResources/css/commoncss/datepicker.css')}}" />
            <!-- full calander css -->
            <link rel="stylesheet" href="{{asset('ZhouResources/css/commoncss/fullcalendar.css')}}" />
            <!-- data tables extended CSS -->
            <link rel="stylesheet" href="{{asset('ZhouResources/css/commoncss/TableTools.css')}}" />
            <!-- bootstrap wysimhtml5 editor -->
            <link rel="stylesheet" href="{{asset('ZhouResources/css/commoncss/bootstrap-wysihtml5.css')}}" />
            <link rel="stylesheet" href="{{asset('ZhouResources/css/commoncss/wysiwyg-color.css')}}" />
            <!-- custom/responsive growl messages -->
            <link rel="stylesheet" href="{{asset('ZhouResources/css/commoncss/toastr.custom.css')}}" />
            <link rel="stylesheet" href="{{asset('ZhouResources/css/commoncss/toastr-responsive.css')}}" />
            <link rel="stylesheet" href="{{asset('ZhouResources/css/commoncss/jquery.jgrowl.css')}}" />

            <!-- // DO NOT REMOVE OR CHANGE ORDER OF THE FOLLOWING // -->
            <!-- bootstrap default css (DO NOT REMOVE) -->
            <link rel="stylesheet" href="{{asset('ZhouResources/css/commoncss/bootstrap.min.css')}}" />
            <link rel="stylesheet" href="{{asset('ZhouResources/css/commoncss/bootstrap-responsive.min.css')}}" />
            <!-- font awsome and custom icons -->
            <link rel="stylesheet" href="{{asset('ZhouResources/css/commoncss/font-awesome.min.css')}}" />
            <link rel="stylesheet" href="{{asset('ZhouResources/css/commoncss/cus-icons.css')}}" />
            <!-- jarvis widget css -->
            <link rel="stylesheet" href="{{asset('ZhouResources/css/commoncss/jarvis-widgets.css')}}" />
            <!-- Data tables, normal tables and responsive tables css -->
            <link rel="stylesheet" href="{{asset('ZhouResources/css/commoncss/DT_bootstrap.css')}}" />
            <link rel="stylesheet" href="{{asset('ZhouResources/css/commoncss/responsive-tables.css')}}" />
            <!-- used where radio, select and form elements are used -->
            <link rel="stylesheet" href="{{asset('ZhouResources/css/commoncss/uniform.default.css')}}" />
            <link rel="stylesheet" href="{{asset('ZhouResources/css/commoncss/select2.css')}}" />
            <!-- main theme files -->
            <link rel="stylesheet" href="{{asset('ZhouResources/css/commoncss/theme.css')}}" />
            <link rel="stylesheet" href="{{asset('ZhouResources/css/commoncss/theme-responsive.css')}}" />

            <!-- // THEME CSS changed by javascript: the CSS link below will override the rules above // -->
            <!-- For more information, please see the documentation for "THEMES" -->
            <link rel="stylesheet" id="switch-theme-js" href="{{asset('ZhouResources/css/commoncss/themes/default.css')}}" />
            <!-- To switch to full width -->
            <link rel="stylesheet" id="switch-width" href="{{asset('ZhouResources/css/commoncss/full-width.css')}}" />

            <!-- Webfonts -->
            {{--<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:300,400,700' type='text/css' />--}}

            <!-- All javascripts are located at the bottom except for HTML5 Shim -->
            <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
            <!--[if lt IE 9]>
            <!--<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>-->
            <script src="{{asset('ZhouResources/js/commonjs/include/respond.min.js')}}"></script>
            <![endif]-->

            <!-- For Modern Browsers -->
            <link rel="shortcut icon" href="{{asset('ZhouResources/img/favicons/favicon.png')}}" />
            <!-- For everything else -->
            <link rel="shortcut icon" href="{{asset('ZhouResources/img/favicons/favicon.ico')}}" />
            <!-- For retina screens -->
            <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('ZhouResources/img/favicons/apple-touch-icon-retina.png')}}" />
            <!-- For iPad 1-->
            <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('ZhouResources/img/favicons/apple-touch-icon-ipad.png')}}" />
            <!-- For iPhone 3G, iPod Touch and Android -->
            <link rel="apple-touch-icon-precomposed" href="{{asset('ZhouResources/img/favicons/apple-touch-icon.png')}}" />

            <!-- iOS web-app metas -->
            <meta name="apple-mobile-web-app-capable" content="yes" />
            <meta name="apple-mobile-web-app-status-bar-style" content="black" />

            <!-- Startup image for web apps -->
            <link rel="apple-touch-startup-image" href="{{asset('ZhouResources/img/favicons/ipad-landscape.png')}}" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />
            <link rel="apple-touch-startup-image" href="{{asset('ZhouResources/img/favicons/ipad-portrait.png')}}" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" />
            <link rel="apple-touch-startup-image" href="{{asset('ZhouResources/img/favicons/iphone.png')}}" media="screen and (max-device-width: 320px)" />

            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        @show
</head>

<body>
<!-- .height-wrapper -->
<div class="height-wrapper">

    <!-- header -->
    <header>
        @section('header')
        @show
    </header>
    <!-- end header -->

    <div id="main" role="main" class="container-fluid">
        <div class="contained">
            <!-- aside -->
            <aside>
                @section('aside')
                @show
            </aside>
            <!-- aside end -->

            <!-- main content -->
            <div id="page-content">
                @yield('content')
            </div>
            <!-- end main content -->

            <!-- aside right on high res -->
            <aside class="right">
                @section('right')
                @show
                <!-- end aside buttons -->
            </aside>

            <!-- end aside right -->
        </div>

    </div><!--end fluid-container-->
    <div class="push"></div>
</div>
<!-- end .height wrapper -->

<!-- footer -->

<!-- if you like you can insert your footer here -->
@section('footer')
@show
<!-- end footer -->
@section('script')
    <script src="{{asset('ZhouResources/js/commonjs/jquery.min.js')}}"></script>
    <script>window.jQuery || document.write('<script src={{asset("ZhouResources/js/commonjs/libs/jquery.min.js")}}><\/script>')</script>
    {{--<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>--}}
    <script>window.jQuery.ui || document.write('<script src={{asset("ZhouResources/js/commonjs/libs/jquery.ui.min.js")}}><\/script>')</script>

    <!-- IMPORTANT: Jquery Touch Punch is always placed under Jquery UI -->
    <script src="{{asset('ZhouResources/js/commonjs/include/jquery.ui.touch-punch.min.js')}}"></script>

    <!-- REQUIRED: Datatable components -->
    <script src="{{asset('ZhouResources/js/commonjs/include/jquery.accordion.min.js')}}"></script>

    <!-- REQUIRED: Toastr & Jgrowl notifications  -->
    <script src="{{asset('ZhouResources/js/commonjs/include/toastr.min.js')}}"></script>
    <script src="{{asset('ZhouResources/js/commonjs/include/jquery.jgrowl.min.js')}}"></script>

    <!-- REQUIRED: Sleek scroll UI  -->
    <script src="{{asset('ZhouResources/js/commonjs/include/slimScroll.min.js')}}"></script>

    <script type="text/javascript">
        var ismobile = (/iphone|ipad|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));
        if(!ismobile){

            /** ONLY EXECUTE THESE CODES IF MOBILE DETECTION IS FALSE **/

            /* REQUIRED: Datatable PDF/Excel output componant */

            /*-- document.write('<script src="js/include/ZeroClipboard.min.js"><\/script>'); --*/
            /*-- document.write('<script src="js/include/TableTools.min.js"><\/script>'); --*/
            /*-- document.write('<script src="js/include/jquery.uniform.min.js"><\/script>'); --*/
            /*-- document.write('<script src="js/include/select2.min.js"><\/script>'); --*/
            document.write('<script src={{asset("ZhouResources/js/commonjs/include/jquery.excanvas.min.js")}}><\/script>');
            document.write('<script src={{asset("ZhouResources/js/commonjs/include/jquery.placeholder.min.js")}}><\/script>');

            /** DEMO SCRIPTS **/
            $(function() {
                /* show tooltips */
                $.jGrowl("I am the <strong>smartest Admin Template</strong> on <strong>wrapbootstrap.com</strong>. Don't forget to check out all my pages.", {
                    header: 'Welcome, I am Jarvis!',
                    sticky: false,
                    life: 5000,
                    speed: 500,
                    theme: 'with-icon',
                    position: 'top-right', //this is default position
                    easing: 'easeOutBack',
                    animateOpen: {
                        height: "show"
                    },
                    animateClose: {
                        opacity: 'hide'
                    }
                });
            });
            /** end DEMO SCRIPTS **/

        }else{

            /** ONLY EXECUTE THESE CODES IF MOBILE DETECTION IS TRUE **/

            document.write('<script src={{asset("ZhouResources/js/commonjs/include/selectnav.min.js")}}><\/script>');
            document.write('<script src={{asset("ZhouResources/js/commonjs/include/responsive-tables.min.js")}}><\/script>');
        }
    </script>

    <!-- REQUIRED: Animated pie chart -->
    <script src="{{asset('ZhouResources/js/commonjs/include/jquery.easy-pie-chart.min.js')}}"></script>
    <!-- REQUIRED: Functional Widgets -->
    <script src="{{asset('ZhouResources/js/commonjs/include/jarvis.widget.min.js')}}"></script>
    <script src="{{asset('ZhouResources/js/commonjs/include/mobiledevices.min.js')}}"></script>
    <!-- DISABLED (only needed for IE7 <script src="js/include/json2.js"></script> -->

    <!-- REQUIRED: Full Calendar -->
    <script src="{{asset('ZhouResources/js/commonjs/include/jquery.fullcalendar.min.js')}}"></script>

    <!-- REQUIRED: Flot Chart Engine -->
    <script src="{{asset('ZhouResources/js/commonjs/include/jquery.flot.cust.min.js')}}"></script>
    <script src="{{asset('ZhouResources/js/commonjs/include/jquery.flot.resize.min.js')}}"></script>
    <script src="{{asset('ZhouResources/js/commonjs/include/jquery.flot.tooltip.min.js')}}"></script>

    <!-- REQUIRED: Sparkline Charts -->
    <script src="{{asset('ZhouResources/js/commonjs/include/jquery.sparkline.min.js')}}"></script>

    <!-- REQUIRED: Progress bar animation -->
    <script src="{{asset('ZhouResources/js/commonjs/include/bootstrap-progressbar.min.js')}}"></script>

    <!-- REQUIRED: wysihtml5 editor -->
    <script src="{{asset('ZhouResources/js/commonjs/include/wysihtml5-0.3.0.min.js')}}"></script>
    <script src="{{asset('ZhouResources/js/commonjs/include/bootstrap-wysihtml5.min.js')}}"></script>

    <!-- REQUIRED: Bootstrap Date Picker -->
    <script src="{{asset('ZhouResources/js/commonjs/include/bootstrap-datepicker.min.js')}}"></script>


    <!-- REQUIRED: Bootstrap engine -->
    <script src="{{asset('ZhouResources/js/commonjs/include/bootstrap.min.js')}}"></script>

    <!-- DO NOT REMOVE: Theme Config file -->
    <script src="{{asset('ZhouResources/js/commonjs/config.js')}}"></script>

    <!-- end scripts -->
@show


</body>
</html>
