<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="advanced custom search, agency, agent, business, clean, corporate, directory, google maps, homes, idx agent, listing properties, membership packages, property, real broker, real estate, real estate agent, real estate agency, realtor">
<meta name="description" content="FindHouse - Real Estate HTML Template">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="{{asset('Front/css')}}/bootstrap.min.css">
<link rel="stylesheet" href="{{asset('Front/css')}}/style.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{asset('Front/css')}}/responsive.css">
<!--My css File-->
<link rel ="stylesheet" href="{{asset('Front/css')}}/custom.css">

<link href="{{asset('Front/images')}}/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="{{asset('Front/images')}}/favicon.ico" sizes="128x128" rel="shortcut icon" />

<!-- Title -->
<title>@yield('title')</title>
<!-- Favicon -->


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>



@yield('content')


@include('Admin/inc/footer')