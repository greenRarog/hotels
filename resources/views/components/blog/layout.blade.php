<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="{{ env('APP_URL') . '/css/templatemo_style.css' }}" rel="stylesheet" type="text/css" />
    <link href="{{ env('APP_URL') . '/css/s3slider.css' }}" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="{{ env('APP_URL') . '/js/jquery.js' }}"></script>    
    <script type="text/javascript" src="{{ env('APP_URL') . '/js/s3Slider.js' }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#slider').s3Slider({
                timeOut: 1600
            });
        });
    </script> 
    <meta name="csrf-token" content="{{ csrf_token() }}" />   
    <title>{{ $title ?? "my blog" }}</title>        
</head>
    <body>   
        <div id="templatemo_wrapper">  
            <x-blog.header />
                {{ $slot }}
            <x-blog.footer />
        </div>
    </body>
</html>