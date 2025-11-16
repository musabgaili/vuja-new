@extends('main.layout',['page'=> 'details'])


@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>{{ $portfolio->title }}</h2>
                    <ol>
                        @if (App::getLocale() == 'en')
                            <li><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
                            <li><a href="#">{{ __('Portfolio') }}</a></li>
                            <li>{{ __('Portfolio Details') }}</li>
                        @else
                        <li>{{__("Portfolio Details")}}</li>
                        <li><a href="#">{{__("Portfolio")}}</a></li>
                        <li><a href="{{route('home')}}">{{__("Home")}}</a></li>
                        @endif
                    </ol>
                </div>

            </div>
        </section><!-- Breadcrumbs Section -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">

                                {{-- <div class="swiper-slide"> --}}
                                    <img src="{{ asset('storage/' . $portfolio->thumbnail) }}" alt="">
                                {{-- </div> --}}

                            </div>
                            {{-- <div class="swiper-pagination"></div> --}}
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>{{ __('Project information') }}</h3>
                            <ul>
                                <li><strong>{{ __('Category') }}</strong>: {{ implode(',', $portfolio->category) }}
                                </li>
                                @if ($portfolio->client)
                                    <li><strong>{{ __('Client') }}</strong>: {{ $portfolio->client }}</li>
                                @endif

                                @if ($portfolio->team)
                                    <li><strong>{{ __('Team') }}</strong>: {{ implode(',', $portfolio->team) }}</li>
                                @endif

                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h2>{{ $portfolio->title }}</h2>
                            <p>
                                {!! Str::inlineMarkdown($portfolio->content) !!}
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->
@endsection
