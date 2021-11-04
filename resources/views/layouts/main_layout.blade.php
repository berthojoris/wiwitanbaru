<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="google-site-verification" content="LhbYJhXzPJNBSHrkYE__HVThW1NtlMRxzy8KWYUUQ_Y" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <?php
            if (isset($_GET['lang'])) {
                    $lang = $_GET['lang'];
                } else {
                    $lang = "";
                }
            if($lang == "jp"){
        ?>
            <title>ウィウィタン・バル</title>
        <?php
            }else{
        ?>
            <title>Wiwitan Baru</title>
        <?php
            }
        ?>


        <link href="{{ asset('template/main/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="{{ asset('template/main/js/bootstrap.js') }}"></script>

        <link rel="icon" href="{{ asset('template/main/favicon.ico') }}" type="image/png">
        <link rel="shortcut icon" href="{{ asset('template/main/favicon.ico') }}" type="img/x-icon">
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
        <!-- font awesome -->
        <link rel="stylesheet" href="{{ asset('template/main/css/font-awesome/css/font-awesome.min.css') }}">
        <!-- Bootstrap -->
        <link href="{{ asset('template/main/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('template/main/css/superslide/superslides.css') }}">


        <link rel="stylesheet" href="{{ asset('template/main/css/fancybox/jquery.fancybox.css') }}">
        <link rel="stylesheet" href="{{ asset('template/main/css/nivo-lightbox/nivo-lightbox.css') }}">
        <link rel="stylesheet" href="{{ asset('template/main/css/themes/default/default.css') }}">
        <link rel="stylesheet" href="{{ asset('template/main/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('template/main/css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('template/main/css/animate/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('template/main/css/owl-carousel/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('template/main/css/owl-carousel/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ asset('template/main/css/owl-carousel/owl.transitions.css') }}">
		<link rel="stylesheet" href="{{ asset('template/main/css/flag-icon.css') }}">




        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        @yield('content')
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ asset('template/main/js/jquery/jquery.js') }}"></script>

        <script src="{{ asset('template/main/js/script.js') }}"></script>


        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('template/main/js/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('template/main/js/fancybox/jquery.fancybox.pack.js') }}"></script>
        <script src="{{ asset('template/main/js/nivo-lightbox/nivo-lightbox.min.js') }}"></script>
        <script src="{{ asset('template/main/js/owl-carousel/owl.carousel.min.js') }}"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBL6gbhsnCEt4FS9D6BBl3mZO1xy-NcwpE&sensor=false"></script>
        <script src="{{ asset('template/main/js/jquery-easing/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('template/main/js/superslide/jquery.superslides.js') }}"></script>
        <script src="{{ asset('template/main/js/wow/wow.min.js') }}"></script>
    </body>
</html>