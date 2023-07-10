@extends('layouts.app')
@section('content')
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                @foreach ($randommovies as $random)
                    <div class="hero__items set-bg" data-setbg="{{ $random->poster }}">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="hero__text">
                                    <div class="label">{{ $random->genres->name }}</div>
                                    <h2>{{ $random->title }}</h2>
                                    <p>{{ substr($random->synopsis, 0, '50') }}... </p>
                                    <a href="/movies/{{ $random->id }}"><span>Detail</span> <i
                                            class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Trending Now</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="/movies" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($moviestranding as $tranding)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <a href="/movies/{{ $tranding->id }}">
                                            <div class="product__item__pic set-bg" data-setbg="{{ $tranding->poster }}">
                                                <div class="ep">{{ $tranding->rating }} / 10</div>
                                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                            </div>
                                        </a>
                                        <div class="product__item__text">  
                                            <ul>
                                                <li>{{ $tranding->genres->name }}</li>
                                                <li>{{ $tranding->countries->name }}</li>
                                            </ul>
                                            <h5><a href="/movies/{{ $tranding->id }}">{{ $tranding->title }}</a></h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="popular__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Popular Shows</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="/movies" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($moviespopuler as $populer)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <a href="/movies/{{ $populer->id }}">
                                            <div class="product__item__pic set-bg" data-setbg="{{ $populer->poster }}">
                                                <div class="ep">{{ $populer->rating }} / 10</div>
                                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                            </div>
                                        </a>
                                        <div class="product__item__text">
                                            <ul>
                                                <li>{{ $populer->genres->name }}</li>
                                                <li>{{ $populer->countries->name }}</li>
                                            </ul>
                                            <h5><a href="/movies/{{ $populer->id }}">{{ $populer->title }}</a></h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="recent__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Recently Added Shows</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="/movies" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($moviesrecent as $recent)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <a href="/movies/{{ $recent->id }}">
                                            <div class="product__item__pic set-bg" data-setbg="{{ $recent->poster }}">
                                                <div class="ep">{{ $recent->rating }} / 10</div>
                                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                            </div>
                                        </a>
                                        <div class="product__item__text">
                                            <ul>
                                                <li>{{ $recent->genres->name }}</li>
                                                <li>{{ $recent->countries->name }}</li>
                                            </ul>
                                            <h5><a href="/movies/{{ $recent->id }}">{{ $recent->title }}</a></h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>Top Views</h5>
                            </div>
                            <ul class="filter__controls">
                                <li class="active" data-filter="*">All</li>
                                @foreach ($genres as $genre)
                                    <li data-filter=".g{{ $genre->id }}">{{ $genre->name }}</li>
                                @endforeach
                            </ul>
                            <div class="filter__gallery">
                                @foreach ($topview as $view)
                                    <div class="product__sidebar__view__item set-bg mix g{{ $view->genres_id }}"
                                        data-setbg="{{ $view->poster }}">
                                        <div class="ep">{{ $view->rating }} / 10</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                        <h5><a href="#">{{ $view->title }}</a></h5>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="product__sidebar__comment">
                            <div class="section-title">
                                <h5>New Reviews</h5>
                            </div>

                            @foreach ($newreviews as $review)
                                <div class="product__sidebar__comment__item">
                                    <div class="product__sidebar__comment__item__pic">
                                        <img src="{{ $review->movies->poster }}" style="width:100px" alt="">
                                    </div>
                                    <div class="product__sidebar__comment__item__text">
                                        <ul>
                                            <li>{{ $review->movies->genres->name }}</li>
                                            <li>{{ $review->movies->countries->name }}</li>
                                        </ul>
                                        <h5><a href="/movies/{{ $review->movies->id }}">{{ $review->movies->title }}</a>
                                        </h5>
                                        <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
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
