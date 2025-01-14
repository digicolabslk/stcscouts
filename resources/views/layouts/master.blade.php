<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @php
        $siteTitle = "Official Web Portal of the 16th Colombo Scout Group of S. Thomas' College, Mount Lavinia";
        $siteURL = 'https://www.stcscouts.com';
        $siteDescription = "The 16th Colombo Scout Group is one of the leading Scout Groups in Sri
    Lanka. At S. Thomas’ College, Mount Lavinia our objective is to act as a 'Model Scout Group' dedicated to
          the development of young people's physical, mental, and spiritual potential. Staying true to the Spirit
           of Scouting, the Group takes pride in combining knowledge with fun to create an all round experience for
           Scouts of all ages.";
    @endphp

    <title>{{ $siteTitle }}</title>

    <meta name="keywords"
        content="Scout Movement, youth development, outdoor activities, leadership training,
		community service, physical development, mental development, spiritual growth, Scouting, adventure
		activities, team building, 16th Colombo, S. Thomas' College, Mount Lavinia, stcscouts">
    <meta name="description" content="{{ $siteDescription }}">
    <meta name="author" content="S. Thomas' College, Mount Lavinia">
    <meta name="robots" content="index, follow">

    <meta property="og:title" content="{{ $siteTitle }}">
    <meta property="og:image" content="{{ asset('images/stcscouts_logo.jpg') }}">
    <meta property="og:url" content="{{ $siteURL }}">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $siteTitle }}">
    <meta name="twitter:description" content="{{ $siteDescription }}">
    <meta name="twitter:image" content="{{asset('images/stcscouts_logo.jpg')}}">


    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/theme-elements.css">
    <link rel="stylesheet" href="css/theme-blog.css">
    <link rel="stylesheet" href="css/theme-shop.css">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="css/skins/default.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.min.js"></script>

</head>

<body data-plugin-page-transition>

    <div class="body">
        @include('layouts.header')


        <div role="main" class="main">

            @yield('content')



        </div>
        @extends('layouts.footer')


    </div>

    <!-- Vendor -->
    <script src="vendor/plugins/js/plugins.min.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="js/theme.js"></script>

    <!-- Theme Custom -->
    <script src="js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="js/theme.init.js"></script>

</body>

</html>
