@extends('layouts.app')
@section('content')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <a href="/movies">Movies</a>
                        <span>{{ $movie->title }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="anime__details__pic set-bg" data-setbg="{{ $movie->poster }}">
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3>{{ $movie->title }}</h3>
                            </div>
                            <div class="anime__details__rating">
                                <div class="rating">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= round($movie->rating / 2))
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        @else
                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                        @endif
                                    @endfor

                                </div>
                                <span>{{ $totalreview }} Reviews</span>
                            </div>
                            <p>{{ $movie->synopsis }}</p>
                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Type:</span> TV Series</li>
                                            <li><span>Countries:</span> {{ $movie->countries->name }}</li>
                                            <li><span>Date aired:</span> {{ $movie->release_date }}</li>
                                            <li><span>Status:</span> Airing</li>
                                            <li><span>Genre:</span> {{ $movie->genres->name }}</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Rating:</span> {{ $movie->rating }} / {{ $totalreview }} Review</li>
                                            <li><span>Duration:</span> 24 min/ep</li>
                                            <li><span>Quality:</span> HD</li>
                                            <li><span>Views:</span> 131,541</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="anime__details__btn">
                                <a href="#" class="follow-btn"><i class="fa fa-heart-o"></i> Follow</a>
                                <a href="#" class="watch-btn"><span>Watch Now</span> <i
                                        class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="anime__details__review">
                        <div class="section-title">
                            <h5>Reviews</h5>
                        </div>
                        @if ($movie->reviews)
                            @foreach ($movie->reviews as $review)
                                <div class="anime__review__item">

                                    <div class="anime__review__item__pic">
                                        <img src="{{asset('assetlanding/img/anime/review-1.jpg')}}" alt="">
                                    </div>

                                    <div class="anime__review__item__text">
                                        <h6>{{ $review->users->name }} - <span>{{ $review->date }}</span></h6>
                                        <p>{{ $review->description }}</p>
                                    </div>

                                </div>
                            @endforeach
                        @else
                            <p>No reviews available</p>
                        @endif

                    </div>
                    <div class="anime__details__form">
                        <div class="section-title">
                            <h5>Your Reviews</h5>
                        </div>
                        @if (Auth::user() && Auth::user()->role == 'user')
                            <form action="/movies" method="post">
                                @csrf
                                <input type="hidden" name="movies_id" value="{{ $movie->id }}">
                                <input type="hidden" name="date" value="{{ date('Y-m-d') }}">
                                <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
                                <input type="text" class="form-control mb-3" name="rating" placeholder="Rating 1-10"
                                    required>
                                <textarea placeholder="Your Comment" name="description" required></textarea>
                                <button type="submit"><i class="fa fa-location-arrow"></i> Review</button>
                            </form>
                        @else
                            <p>Only users can submit a review</p>
                        @endif
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="anime__details__sidebar">
                        <div class="section-title">
                            <h5>you might like...</h5>
                        </div>
                        @foreach ($randommovies as $random)
                            <a href="/movies/{{ $random->id }}">
                                <div class="product__sidebar__view__item set-bg" data-setbg="{{ $random->poster }}">
                                    <div class="ep">{{ $random->rating }} / 10</div>
                                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    <h5><a href="/movies/{{ $random->id }}">{{ $random->title }}</a></h5>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Anime Section End -->
@endsection
