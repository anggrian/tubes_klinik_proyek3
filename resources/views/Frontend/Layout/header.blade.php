<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="http://webthemez.com" />
    <!-- css -->
    <link href="{!! asset('Frontend/css/bootstrap.min.css') !!}" rel="stylesheet" />
    <link href="{!! asset('Frontend/css/fancybox/jquery.fancybox.css') !!}" rel="stylesheet">
    <link href="{!! asset('Frontend/css/jcarousel.css') !!}" rel="stylesheet" />
    <link href="{!! asset('Frontend/css/flexslider.css') !!}" rel="stylesheet" />
    <link href="{!! asset('Frontend/js/owl-carousel/owl.carousel.css') !!}" rel="stylesheet">
    <link href="{!! asset('Frontend/css/style.css') !!}" rel="stylesheet" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>
    <div id="wrapper" class="home-page">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="pull-left hidden-xs">Alamat : Jl. Prof. Moch. Yamin, No. 108, RT/RW 2/8, Kel. Sayang
                        </p>
                        <p class="pull-right"><i class="fa fa-phone"></i> 0857-2222-2177</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- start header -->
        <header>
            <div class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{!! asset('Frontend/index.html') !!}"><img src="{!! asset('Frontend/asset_img/bidan.png') !!}"
                                style="width: 50px; background: #FFFFFF; border-radius:50%;" alt="logo" /> Pondok
                            Bersalin
                            Bidan
                            Rani</a>
                    </div>
                    <div class="navbar-collapse collapse ">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{ route('index') }}">Home</a></li>
                            <li><a href="#">Tentang</a></li>
                            {{-- <li class="dropdown">
                                <a href="" data-toggle="dropdown" class="dropdown-toggle">About Us <b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{!! asset('Frontend/about.html') !!}">My Team</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Timeable</a></li>
                                    <li><a href="#">Galery</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </li> --}}
                            <li><a href="{!! asset('Frontend/courses.html') !!}">Jadwal</a></li>
                            <li><a href="">Galeri</a></li>
                            <li><a href="{!! asset('Frontend/pricing.html') !!}">Blog</a></li>
                            <li><a href="{!! asset('Frontend/contact.html') !!}">Kontak</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->

        {{-- ISI KONTEN --}}
        @yield('content')

        {{-- BAGAIAN FOOTER --}}
        @extends('Frontend/Layout/footer')
        @yield('footer')
