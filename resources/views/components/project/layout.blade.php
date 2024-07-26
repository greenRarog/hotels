<!DOCTYPE html>
<html class="no-js">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Luxe &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ env('APP') . 'css/superfish.css' }}">
    <link rel="stylesheet" href="{{ env('APP') . 'css/bootstrap-datepicker.min.css' }}">
    <link rel="stylesheet" href="{{ env('APP') . 'css/cs-select.css' }}">
    <link rel="stylesheet" href="{{ env('APP') . 'css/cs-skin-border.css' }}">
    <link rel="stylesheet" href="{{ env('APP') . 'css/themify-icons.css' }}">
    <link rel="stylesheet" href="{{ env('APP') . 'css/flaticon.css' }}">
    <link rel="stylesheet" href="{{ env('APP') . 'css/icomoon.css' }}">
    <link rel="stylesheet" href="{{ env('APP') . 'css/flexslider.css' }}">
    <link rel="stylesheet" href="{{ env('APP') . 'css/style.css' }}">
    <script src="{{ env('APP') . 'js/modernizr-2.6.2.min.js' }}"></script>
</head>
<body>  
    <div id="fh5co-wrapper">
        <div id="fh5co-page">
            <x-header />        
                {{ $slot }}
            <x-footer />
        </div>
    </div>
    <script src="{{ env('APP') . 'js/jquery-2.1.4.min.js' }}"></script>
    <script src="{{ env('APP') . 'js/hoverIntent.js' }}"></script>
    <script src="{{ env('APP') . 'js/superfish.js' }}"></script>
    <script src="{{ env('APP') . 'js/bootstrap.min.js' }}"></script>
    <script src="{{ env('APP') . 'js/jquery.waypoints.min.js' }}"></script>
    <script src="{{ env('APP') . 'js/jquery.countTo.js' }}"></script>
    <script src="{{ env('APP') . 'js/jquery.stellar.min.js' }}"></script>
    <script src="{{ env('APP') . 'js/bootstrap-datepicker.min.js' }}"></script>
    <script src="{{ env('APP') . 'js/classie.js' }}"></script>
    <script src="{{ env('APP') . 'js/selectFx.js' }}"></script>
    <script src="{{ env('APP') . 'js/jquery.flexslider-min.js' }}"></script>
    <script src="{{ env('APP') . 'js/custom.js' }}"></script>
    </body>
</html>