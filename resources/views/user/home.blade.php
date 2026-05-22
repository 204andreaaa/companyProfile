@extends('layouts.userLayouts')

@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@600;700;800&display=swap');

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 195px;
        }

        @media (max-width: 767px) {
            html {
                scroll-padding-top: 70px;
            }
        }

        .home-anchor-section {
            padding-top: 45px;
            padding-left: 45px;
            padding-right: 45px;
            margin-top: 0;
            min-height: calc(100vh - 165px);
            display: flex;
            flex-direction: column;
        }

        .home-anchor-section>*:last-child {
            margin-top: auto;
        }

        #genset {
            min-height: auto;
            display: block;
        }

        #about {
            min-height: 70vh;
        }

        .home-white-wrapper {
            background: #fff;
            border-radius: 0;
            padding: 25px 0 10px;
            margin: 0;
            width: 100%;
            box-shadow: none;
        }

        .home-hero-wrap {
    padding: 0;
    min-height: auto;
    margin-bottom: 50px;
}

.home-hero-wrap .hero-section {
    width: calc(100% - var(--desktop-nav-gap));
    max-width: calc(100% - var(--desktop-nav-gap));
    margin: 14px auto 0;
}

.home-hero-wrap .hero {
    position: relative;
    margin-top: 0;
    border-radius: 24px;
    overflow: hidden;
    height: clamp(520px, 42vw, 720px);
    background: #dfe5ec;
}

.home-hero-wrap .heroSwiper,
.home-hero-wrap .heroSwiper .swiper-wrapper,
.home-hero-wrap .heroSwiper .swiper-slide {
    width: 100%;
    height: 100%;
}

.home-hero-wrap .heroSwiper {
    position: absolute;
    inset: 0;
    z-index: 1;
}

.home-hero-wrap .heroSwiper .swiper-slide {
    display: flex;
    align-items: center;
    justify-content: center;
    background: #dfe5ec;
}

.home-hero-wrap .heroSwiper .swiper-slide img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    object-position: center;
    transform: none;
    filter: saturate(.96) contrast(1.03);
    display: block;
}

.home-hero-wrap .hero-overlay {
    position: absolute;
    inset: 0;
    z-index: 2;
    padding: 0 72px;
    background: linear-gradient(
        94deg,
        rgba(8, 19, 35, 0.78),
        rgba(8, 19, 35, 0.34) 48%,
        rgba(8, 19, 35, 0.08)
    );
    pointer-events: none;
}

.home-hero-wrap .hero-overlay > div {
    max-width: 760px;
}

.home-hero-wrap .hero-overlay h1 {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: clamp(34px, 4.2vw, 56px);
    line-height: 1.08;
    letter-spacing: -.03em;
    text-transform: none;
    margin-bottom: 18px;
    text-wrap: balance;
}

.home-hero-wrap .hero-overlay p {
    font-size: 18px;
    line-height: 1.75;
    color: rgba(255, 255, 255, 0.9);
    max-width: 620px;
}

.home-hero-wrap .hero-nav {
    background: rgba(255, 255, 255, 0.92);
    box-shadow: 0 10px 22px rgba(13, 42, 90, 0.10);
    border: 1px solid rgba(47, 111, 177, 0.10);
    z-index: 5;
}

.home-hero-wrap .hero-nav::after {
    color: #315d8f;
    font-size: 20px;
    font-weight: 800;
}

.home-hero-wrap .hero-prev {
    left: 16px;
}

.home-hero-wrap .hero-next {
    right: 16px;
}

.home-hero-wrap .hero-pagination {
    bottom: 14px;
    z-index: 5;
}
        @media (max-width: 991px) {
            .home-hero-wrap {
                padding: 0;
            }

            .home-hero-wrap .hero {
                border-radius: 0;
                height: 400px;
            }

            .home-hero-wrap .hero-overlay {
                padding: 0 24px;
            }

            .home-hero-wrap .hero-prev {
                left: 12px;
            }

            .home-hero-wrap .hero-next {
                right: 12px;
            }

            .home-white-wrapper {
                padding: 0;
                border-radius: 0;
            }

            .home-anchor-section {
                padding: 30px 20px;
                min-height: auto;
            }
        }

        .home-anchor-section+.home-anchor-section {
            margin-top: 80px;
            padding-top: 80px;
            border-top: 1px solid #eef2f7;
        }

        #service,
        #project,
        #blog {
            display: block;
            width: 100%;
        }

        #service .home-section-title,
        #project .home-section-title,
        #blog .home-section-title,
        #genset .home-section-title,
        #about .home-section-title {
            display: block;
            width: 100%;
            text-align: center !important;
            margin: 0 auto 30px;
        }

        .home-section-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            text-align: center;
            font-size: 34px;
            font-weight: 800;
            letter-spacing: -.02em;
            color: #1a365d;
            margin-bottom: 30px;
            position: relative;
            line-height: 1.15;
        }

        .home-section-title::after {
            content: "";
            display: block;
            width: 74px;
            height: 4px;
            margin: 12px auto 0;
            border-radius: 999px;
            background: linear-gradient(90deg, #77b4f2, #2f6fb1);
            opacity: .9;
        }

        #service .row,
        #blog .row {
            margin-left: 0;
            margin-right: 0;
        }

        .about-image-wrap {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 24px;
            border-radius: 0;
            background: transparent;
            border: none;
            box-shadow: none;
        }

        .about-img {
            width: 100%;
            max-width: 390px;
            height: auto;
            object-fit: contain;
            border-radius: 0;
            filter: none;
        }

        #about .col-md-7 {
            color: #354456;
            font-size: 16px;
            line-height: 1.9;
        }

        #about .col-md-7 p {
            margin-bottom: 16px;
        }

        .blog-card {
            background: transparent;
            border-radius: 0;
            overflow: visible;
            border: none;
            height: 100%;
            transition: transform .25s ease;
            box-shadow: none;
        }

        .blog-thumb {
            width: 100%;
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: transparent;
            overflow: visible;
        }

        .blog-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .blog-card:hover {
            box-shadow: none;
            transform: translateY(-4px);
        }

        .service-home-section .card {
            background: transparent;
            border: none;
            box-shadow: none;
            transition: none;
        }

        .service-home-section .card-img-top {
            height: 230px !important;
            object-fit: cover !important;
        }

        .service-home-section .card-body {
            padding: 22px 18px 18px;
        }

        .service-home-section .card-title,
        .blog-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 700;
            color: #1f3550;
        }

        .service-home-section .text-muted,
        .blog-desc {
            color: #637487 !important;
            line-height: 1.7;
        }

        .service-home-section .btn-dark {
            background: var(--button-color);
            border: 0;
            border-radius: 999px;
            padding: 10px 18px;
            font-weight: 600;
            color: var(--button-text-color);
            box-shadow: 0 10px 20px rgba(36, 56, 79, 0.18);
        }

        .home-contact-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            text-align: center;
            font-size: 28px;
            font-weight: 800;
            letter-spacing: -.02em;
            color: #1a365d;
            margin-bottom: 24px;
            position: relative;
        }

        .home-contact-title::after {
            content: "";
            display: block;
            width: 64px;
            height: 4px;
            margin: 10px auto 0;
            border-radius: 999px;
            background: linear-gradient(90deg, #77b4f2, #2f6fb1);
        }

        .blog-body {
            padding: 18px 0 0;
            background: transparent;
            border: none;
            box-shadow: none;
        }

        .blog-link {
            color: #315d8f;
            font-weight: 700;
        }

        .blog-link:hover {
            color: #1f3550;
        }

        .project-card {
            height: 100%;
            overflow: visible;
            border-radius: 0;
            background: transparent;
            border: none;
            box-shadow: none;
            transition: transform .25s ease;
        }

        .project-grid {
            --bs-gutter-x: 46px;
            --bs-gutter-y: 42px;
        }

        .project-card:hover {
            transform: translateY(-4px);
            box-shadow: none;
        }

        .project-slider {
            width: 100%;
            height: 230px;
            background: transparent;
        }

        .project-slider img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .project-body {
            padding: 18px 0 0;
            background: transparent;
            border: none;
            box-shadow: none;
        }

        .project-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #1f3550;
            font-size: 17px;
            line-height: 1.35;
            font-weight: 800;
            margin-bottom: 8px;
            text-wrap: balance;
        }

        .project-location,
        .project-desc {
            color: #637487;
            line-height: 1.7;
        }

        .project-pagination {
            bottom: 8px !important;
        }

        .project-pagination .swiper-pagination-bullet {
            background: rgba(255, 255, 255, .95);
            opacity: .75;
        }

        .project-pagination .swiper-pagination-bullet-active {
            background: #315d8f;
            opacity: 1;
        }

        @media (max-width: 991px) {
            .home-hero-wrap .hero-overlay {
                padding: 0 24px;
            }

            .home-hero-wrap .hero-overlay h1 {
                font-size: 28px;
                margin-bottom: 12px;
            }

            .home-hero-wrap .hero-overlay p {
                font-size: 15px;
                line-height: 1.6;
            }
        }

        @media (max-width: 991px) {
            .home-dot-nav {
                display: none;
            }
        }

        /* ===== CONTACT SECTION FIX ===== */
#contact {
    min-height: auto;
    padding-bottom: 60px;
}

#contact .row {
    --bs-gutter-x: 34px;
    --bs-gutter-y: 28px;
    align-items: flex-start;
}

#contact .col-md-7 {
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
}

#contact .col-md-5 {
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
}

.contact-form {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 12px;
}

.contact-form input[name="name"],
.contact-form input[name="email"],
.contact-form input[name="subject"] {
    grid-column: span 4;
    height: 44px;
}

.contact-form textarea {
    grid-column: span 4;
    min-height: 130px;
    resize: vertical;
}

.contact-form .btn-submit {
    grid-column: span 1;
    width: fit-content;
    min-width: 90px;
    height: 42px;
}

.map-box {
    width: 100%;
    height: 260px;
    border-radius: 0;
    overflow: hidden;
}

.map-box iframe {
    width: 100%;
    height: 100%;
    display: block;
}

.address {
    margin-top: 12px;
    color: #1f3550;
    line-height: 1.6;
    font-size: 14px;
}

@media (max-width: 991px) {
    .home-hero-wrap {
        padding: 0;
    }

    .home-hero-wrap .hero-section {
        width: calc(100% - 28px);
        max-width: calc(100% - 28px);
        margin: 12px auto 0;
    }

    .home-hero-wrap .hero {
        height: clamp(360px, 58vw, 520px);
        border-radius: 18px;
    }

    .home-hero-wrap .hero-overlay {
        padding: 0 24px;
    }

    .home-hero-wrap .hero-prev {
        left: 12px;
    }

    .home-hero-wrap .hero-next {
        right: 12px;
    }

    #contact .col-md-7,
    #contact .col-md-5 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .map-box {
        height: 300px;
    }
}

@media (max-width: 575px) {
    .home-hero-wrap .hero-section {
        width: calc(100% - 20px);
        max-width: calc(100% - 20px);
        margin-top: 10px;
    }

    .home-hero-wrap .hero {
        height: clamp(260px, 78vw, 420px);
        border-radius: 16px;
    }

    .home-hero-wrap .hero-overlay h1 {
        font-size: 28px;
    }

    .home-hero-wrap .hero-overlay p {
        font-size: 15px;
    }

    .contact-form {
        grid-template-columns: 1fr;
    }

    .contact-form input[name="name"],
    .contact-form input[name="email"],
    .contact-form input[name="subject"],
    .contact-form textarea,
    .contact-form .btn-submit {
        grid-column: span 1;
    }

    .map-box {
        height: 260px;
    }
}
/* ===== CONTACT CENTER FIX ===== */
#contact {
    min-height: auto !important;
    padding-top: 0px ;
    padding-bottom: 70px !important;
}

#contact > .row {
    max-width: 1320px;
    margin-left: auto !important;
    margin-right: auto !important;
    justify-content: center !important;
    align-items: flex-start !important;
}

#contact .col-md-4 {
    flex: 0 0 52% !important;
    max-width: 52% !important;
}

#contact .col-md-5 {
    flex: 0 0 40% !important;
    max-width: 40% !important;
}

#contact .contact-footer-names,
#contact .contact-footer-names {
    margin-left: auto !important;
    margin-right: auto !important;
    justify-content: center !important;
}

/* map biar enak ukurannya */
#contact .map-box {
    width: 100% !important;
    height: 260px !important;
}

/* tablet / hp */
@media (max-width: 991px) {
    #contact > .row {
        max-width: 720px;
    }

    #contact .col-md-5,
    #contact .col-md-4 {
        flex: 0 0 100% !important;
        max-width: 100% !important;
    }

    #contact .map-box {
        height: 300px !important;
    }
}
    </style>


    <div class="home-white-wrapper">
        <section id="home" class="home-hero-wrap">
            <div class="hero-section">
                <div class="hero-nav hero-prev swiper-button-prev"></div>
                <div class="hero-nav hero-next swiper-button-next"></div>
                <div class="swiper-pagination hero-pagination"></div>

                <div class="hero">
                    <div class="swiper heroSwiper">
                        <div class="swiper-wrapper">
                            @php
                                $heroImages = $homepage->hero_images ?? [];
                            @endphp

                            @if (!empty($heroImages))
                                @foreach ($heroImages as $slide)
                                    <div class="swiper-slide">
                                        <img src="{{ Storage::url($slide['image']) }}">
                                    </div>
                                @endforeach
                            @else
                                @for ($i = 1; $i <= 4; $i++)
                                    <div class="swiper-slide">
                                        <img src="{{ asset('genset-website/imgGenset/' . $i . '.jpg') }}">
                                    </div>
                                @endfor
                            @endif
                        </div>
                    </div>

                    <div class="hero-overlay">
                        <div>
                            <h1>{{ $homepage->hero_title ?? 'Reliable Power Solutions' }}</h1>
                            <p>{{ $homepage->hero_subtitle ?? 'Industrial-grade genset and energy solutions' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="home-anchor-section">
            <div class="row align-items-center">
                <div class="col-md-5 mb-4 mb-md-0 text-center">
                    <div class="about-image-wrap">
                        @if ($profile && $profile->about_image)
                            <img src="{{ asset('storage/' . $profile->about_image) }}" class="about-img" alt="About Us">
                        @else
                            <img src="{{ asset('genset-website/imgGenset/4.jpg') }}" class="about-img" alt="About Us">
                        @endif
                    </div>
                </div>

                <div class="col-md-7">
                    <h2 class="home-section-title">About Us</h2>

                    @if ($profile)
                        {!! $profile->description !!}
                    @else
                        <p>Content not available.</p>
                    @endif
                </div>
            </div>
            @include('partials.footer-brands')
        </section>

        <section id="genset" class="home-anchor-section">
            <h2 class="home-section-title">Genset</h2>

            <div class="genset-grid">
                @foreach ($brands as $brand)
                    @php
                        $logo = $brand->logo
                            ? asset('storage/' . $brand->logo)
                            : asset('genset-website/img/brand/' . $brand->slug . '.png');
                    @endphp

                    <a href="{{ route('user.genset.detail', $brand->slug) }}" class="genset-item">
                        <div class="genset-img-box">
                            <img src="{{ $logo }}" alt="{{ $brand->name }}">
                        </div>
                        <div class="genset-label">{{ $brand->name }}</div>
                    </a>
                @endforeach
            </div>

        </section>

        <section id="service" class="home-anchor-section">
            <h2 class="home-section-title">Service</h2>

            <div class="row">
                @foreach ($serviceCatalog as $service)
                    <div class="col-md-4 mb-2">
                        <div class="card bg-transparent border-0 shadow-none">
                            <img src="{{ $service->image_url }}" class="card-img-top"
                                style="height:250px; object-fit:cover;">

                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $service->name }}</h5>

                                <p class="text-muted small">
                                    {{ $service->short_description }}
                                </p>

                                <a href="{{ route('service.detail', $service->slug) }}" class="btn btn-dark w-100 mt-3">
                                    View Detail
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @include('partials.footer-brands')
        </section>

        <section id="project" class="home-anchor-section">
            <h2 class="home-section-title">Project</h2>

            <div class="row project-grid">
                @forelse ($projects as $project)
                    <div class="col-lg-4 col-md-6">
                        <div class="project-card">
                            <div class="swiper projectSwiper project-slider">
                                <div class="swiper-wrapper">
                                    @if ($project->images->isNotEmpty())
                                        @foreach ($project->images as $image)
                                            <div class="swiper-slide">
                                                <img src="{{ $image->image_url }}" alt="{{ $project->title }}">
                                            </div>
                                        @endforeach
                                    @else
                                        @foreach ($project->fallbackSlides() as $fallback)
                                            <div class="swiper-slide">
                                                <img src="{{ $fallback }}" alt="{{ $project->title }}">
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="swiper-pagination project-pagination"></div>
                            </div>

                            <div class="project-body">
                                <div class="project-title">{{ $project->title }}</div>

                                @if ($project->location)
                                    <div class="project-location small mb-2">
                                        <i class="fas fa-map-marker-alt"></i> {{ $project->location }}
                                    </div>
                                @endif

                                @if ($project->description)
                                    <p class="project-desc small mb-0">{{ $project->description }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-muted">Belum ada project.</p>
                @endforelse
            </div>

            @include('partials.footer-brands')
        </section>

        <section id="blog" class="home-anchor-section">
            <h2 class="home-section-title">News & Articles</h2>

            <div class="row g-4">
                @forelse ($posts as $post)
                    <div class="col-md-4">
                        <div class="blog-card">
                            <div class="blog-thumb">
                                <img src="{{ $post->image_url }}" alt="{{ $post->title }}">
                            </div>

                            <div class="blog-body">
                                <div class="blog-title">{{ $post->title }}</div>

                                <p class="blog-desc">
                                    {{ $post->excerpt }}
                                </p>

                                <a href="{{ route('blog-detail', $post->slug) }}" class="blog-link">
                                    Read more →
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No articles yet.</p>
                @endforelse
            </div>
            @include('partials.footer-brands')
        </section>

        <section id="contact" class="home-anchor-section">
            <div class="row g-4">
                <div class="col-md-7">
                    <div class="home-contact-title">Contact Us</div>

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="contact-form" action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <input type="text" name="subject" placeholder="Subject" required>
                        <textarea name="message" placeholder="Message" required></textarea>
                        <button type="submit" class="btn-submit mt-2">Submit</button>
                    </form>
                </div>

                <div class="col-md-5">
                    <div class="home-contact-title">Find Us</div>
                    <div class="map-box">
                        @if ($settings?->map_embed_url)
                            <iframe src="{{ $settings->map_embed_url }}" width="100%" height="100%" style="border:0;"
                                loading="lazy"></iframe>
                        @else
                            <div class="text-muted">Map not configured.</div>
                        @endif
                    </div>

                    <div class="address">
                        @if ($settings?->location_name)
                            <strong>{{ $settings->location_name }}</strong><br>
                        @endif

                        @if ($settings?->address)
                            {!! nl2br(e($settings->address)) !!}
                        @endif
                    </div>
                </div>
            </div>
            @include('partials.contact-footer-names')
        </section>
    </div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    const heroSlideCount = document.querySelectorAll('.heroSwiper .swiper-slide').length;

    new Swiper('.heroSwiper', {
        loop: heroSlideCount > 1,
        watchOverflow: true,
        autoplay: false,
        grabCursor: heroSlideCount > 1,

        navigation: {
            nextEl: '.hero-next',
            prevEl: '.hero-prev',
        },

        pagination: {
            el: '.hero-pagination',
            clickable: true,
            dynamicBullets: heroSlideCount > 1
        }
    });

    document.querySelectorAll('.projectSwiper').forEach((slider) => {
        const projectSlideCount = slider.querySelectorAll('.swiper-slide').length;

        new Swiper(slider, {
            loop: projectSlideCount > 1,
            watchOverflow: true,

            autoplay: projectSlideCount > 1 ? {
                delay: 2600,
                disableOnInteraction: false,
            } : false,

            speed: 650,

            pagination: {
                el: slider.querySelector('.project-pagination'),
                clickable: true,
            }
        });
    });
</script>
@endsection
