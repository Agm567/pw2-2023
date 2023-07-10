@extends('layouts.app')
@section('content')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <span>Genres</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Section Begin -->
    <section class="product-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__page__content">
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title">
                                        <h4>Anime {{$genre->name}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($genre->movies as $movie)
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <a href="/movies/{{ $movie->id }}">
                                            <div class="product__item__pic set-bg" data-setbg="{{ $movie->poster }}">
                                                <div class="ep">{{ $movie->rating }} / 10</div>
                                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                            </div>
                                        </a>
                                        <div class="product__item__text">
                                            <ul>
                                                <li>{{ $movie->genres->name }}</li>
                                                <li>{{ $movie->countries->name }}</li>
                                            </ul>
                                            <h5><a href="/movies/{{ $movie->id }}">{{ $movie->title }}</a></h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
@endsection
