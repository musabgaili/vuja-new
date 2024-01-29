@extends('main.layout', ['page' => 'home'])


@section('content')
    <!-- ======= hero Section ======= -->
    <section id="hero">

        <div class="hero-content" data-aos="fade-up">
            <h2>{{ __('hero') }}</h2>
            <div>
                <a href="#contact" class="btn-get-started scrollto">{{ __('Call Us') }}</a>
                <a href="#portfolio" class="btn-projects scrollto">{{ __('Our Portfolio') }}</a>
            </div>
        </div>

        <div class="hero-slider swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/1.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/2.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/3.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/4.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/5.jpg');"></div>
            </div>
        </div>

    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about">
            <div class="container" data-aos="fade-up">
                <div class="row">

                    <div class="col-lg-6 content">

                        <h2>{{ __('topic_') }}</h2>
                        {{-- <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                            anim id est laborum.</h3> --}}

                        <ul>
                            <li><i class="bi bi-check-circle"></i> {{ __('we_offer')['1'] }}</li>
                            <li><i class="bi bi-check-circle"></i> {{ __('we_offer')['2'] }}</li>
                            <li><i class="bi bi-check-circle"></i> {{ __('we_offer')['3'] }}</li>

                        </ul>

                    </div>
                    <div class="col-lg-6 about-img">
                        <img src="{{ asset('assets/img/steps.png') }}" alt="">
                        <div class="col-lg-3 cta-btn-container ">
                            {{-- <a class="cta-btn btn btn-primary align-right float-right" href="#contact">{{__("Call Us")}}</a> --}}
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>{{ __('Services') }}</h2>
                    {{-- <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet
                        veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute
                        nulla ipsum velit export irure minim illum fore</p> --}}
                </div>

                <div class="row gy-4">

                    @foreach ($services as $service)
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="box">
                                <div class="icon">
                                    {{-- <i class="bi bi-briefcase"></i> --}}
                                    <img src="{{ asset('storage/' . $service->thumbnail) }}" height="64" width="87.2"
                                        alt="">
                                </div>
                                <h4 class="title">{{ $service->name }}</h4>
                                <p class="description">

                                    {!! Str::inlineMarkdown($service->content) !!}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>{{ __('Our Clients') }}</h2>
                    {{-- <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet
                        veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute
                        nulla ipsum velit export irure minim illum fore</p> --}}
                </div>

                <style>
                    .img-fluid-clients {
                        height: 150px;
                    }
                </style>

                <div class="clients-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper align-items-center">
                        @foreach ($clients as $client)
                            <div class="swiper-slide hover-text">
                                <img src="{{ asset('storage/' . $client->thumbnail) }}"
                                    class="img-fluid img-fluid-clients " alt="{{ $client->name }}">

                                    <span class="tooltip-text" id="top">{{$client->name}}</span>
                            </div>
                        @endforeach


                        {{-- <div class="swiper-slide"><img src="assets/img/clients/client-2.png"
                                class="img-fluid img-fluid-clients" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-3.png"
                                class="img-fluid img-fluid-clients" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-4.png"
                                class="img-fluid img-fluid-clients" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-5.png"
                                class="img-fluid img-fluid-clients" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-6.png"
                                class="img-fluid img-fluid-clients" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-7.png"
                                class="img-fluid img-fluid-clients" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-8.png"
                                class="img-fluid img-fluid-clients" alt=""></div> --}}
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>{{ __('Our Portfolio') }}</h2>
                    <p>{{ __('portfolio_header') }}</p>
                </div>

                {{-- <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div> --}}

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    @foreach ($portfolios as $item)
                        <div class="col-lg-4 col-md-6 portfolio-item ">
                            <a href="{{ route('portfolio.details', ['portfolio' => $item]) }}">
                                <img src="{{ asset('storage/' . $item->thumbnail) }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>{{ $item->title }}</h4>
                                    {{-- <p>{!! Str::inlineMarkdown($item->content) !!}</p> --}}
                                    {{-- <a href="{{ asset('storage/' . $item->thumbnail) }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                        title="App 1"><i class="bx bx-plus"></i></a>
                                    <a href="{{route('portfolio.details',['portfolio'=>$item])}}" class="details-link" title="More Details"><i
                                            class="bx bx-link"></i></a> --}}
                                </div>
                            </a>
                        </div>
                    @endforeach



                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>{{ __('Testimonials') }}</h2>
                    {{-- <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet
                        veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute
                        nulla ipsum velit export irure minim illum fore</p> --}}
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        @foreach ($testimonials as $te)
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p>
                                        {{-- <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt=""> --}}

                                        {{ $te->message }}
                                        {{-- <img src="assets/img/quote-sign-right.png" class="quote-sign-right"alt=""> --}}
                                    </p>
                                    {{-- <img src="assets/img/testimonial-1.jpg" class="testimonial-img" alt=""> --}}
                                    <svg width="50px" height="50px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" stroke="#1c5b63">

                                        <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M5 21C5 17.134 8.13401 14 12 14C15.866 14 19 17.134 19 21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                                                stroke="#1c5b63" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </g>

                                    </svg>
                                    <h3>{{ $te->name }}</h3>
                                    <h4>{{ $te->company }}</h4>
                                </div>
                            </div><!-- End testimonial item -->
                        @endforeach



                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action">
            <div class="container" data-aos="zoom-out">
                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3 class="cta-title">{{ __('Call Us') }}</h3>
                        <p class="cta-text">{{ __('call_action') }}</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#contact">{{ __('Call Us') }}</a>
                    </div>
                </div>
            </div>
        </section><!-- End Call To Action Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>{{ __('Contact Us') }}</h2>
                    <p>{{ __('happy to hear') }}</p>
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="bi bi-geo-alt"></i>
                            <h3>{{ __('Address') }}</h3>
                            <address>Riyadh - Thaka Center - Roshen Front</address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="bi bi-phone"></i>
                            <h3>{{ __('Phone') }}</h3>
                            <p><a href="tel:+966544615194">+966544615194</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="bi bi-envelope"></i>
                            <h3>{{ __('Email') }}</h3>
                            <p><a href="mailto:info@vujadesa.com">info@vujadesa.com</a></p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container mb-4">
                {{-- <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452"
                    width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
                <iframe width="100%" height="380"
                    src="https://www.openstreetmap.org/export/embed.html?bbox=46.72028303146363%2C24.835524532123838%2C46.740367412567146%2C24.848687720270302&amp;layer=mapnik"
                    style="border: 1px solid black"></iframe><br />
                {{-- <small><a href="https://www.openstreetmap.org/#map=16/24.8421/46.7303">View Larger Map</a></small> --}}
            </div>

            <div class="container">
                <div class="form">
                    <form action="{{ route('contact') }}" method="post" role="form" class="php-email-form">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="{{ __('Name') }}" required>
                            </div>
                            <div class="form-group col-md-6 mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="{{ __('Email') }}" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="phone" id="subject"
                                placeholder="{{ __('Phone') }}" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="{{ __('Message') }}" required></textarea>
                        </div>

                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">{{ __('We received your message. Thank You!') }}</div>
                        </div>

                        <div class="text-center"><button type="submit">{{ __('Send Message') }}</button></div>
                    </form>
                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
