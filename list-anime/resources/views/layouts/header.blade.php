<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime Reviews</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Css Styles -->
    <link rel="icon" href="{{ asset('assetlanding/img/icon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('assetlanding/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assetlanding/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assetlanding/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assetlanding/css/plyr.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assetlanding/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assetlanding/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assetlanding/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assetlanding/css/style.css') }}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    {{-- <div id="preloder">
        <div class="loader"></div>
    </div> --}}

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="/">
                            <img src="{{ asset('assetlanding/img/logo.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="/">Homepage</a></li>
                                <li><a>Genres <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        @foreach ($genresall as $genre)
                                            <li><a href="/genres/{{ $genre->id }}">{{ $genre->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li> 
                                <li><a href="#">Our Blog</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        @if (Auth::user())
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="icon_profile"></span>Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        @else
                            <a href="/login"><span class="icon_profile"></span>Login</a>
                        @endif
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->
