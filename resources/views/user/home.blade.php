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
            margin-top: 0;
            min-height: calc(100vh - 165px);
            display: flex;
            flex-direction: column;
        }

        .home-anchor-section > *:last-child {
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
            border-radius: 18px;
            padding: 25px 45px 10px;
            margin: 0;
            box-shadow: 0 14px 34px rgba(13, 42, 90, 0.06);
        }

        .home-hero-wrap {
            padding: 0;
            min-height: auto;
            margin-bottom: 50px;
        }

        .home-hero-wrap .hero-section {
            width: 100%;
            max-width: none;
            margin: 0 auto;
        }

        .home-hero-wrap .hero {
            margin-top: 0;
            border-radius: 24px;
            overflow: hidden;
            height: 600px;
            /* Gedein biar full */
            background: #dfe5ec;
            box-shadow: 0 18px 38px rgba(13, 42, 90, 0.10);
        }

        .home-hero-wrap .hero img {
            transform: scale(1.01);
            filter: saturate(.96) contrast(1.03);
        }

        .home-hero-wrap .hero-overlay {
            padding: 0 72px;
            background: linear-gradient(94deg, rgba(8, 19, 35, 0.78), rgba(8, 19, 35, 0.34) 48%, rgba(8, 19, 35, 0.08));
        }

        .home-hero-wrap .hero-overlay>div {
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
        }

        .home-hero-wrap .hero-nav::after {
            color: #315d8f;
            font-size: 20px;
            font-weight: 800;
        }

        .home-hero-wrap .hero-prev {
            left: -26px;
        }

        .home-hero-wrap .hero-next {
            right: -26px;
        }

        .home-hero-wrap .hero-pagination {
            bottom: 14px;
        }

        @media (max-width: 991px) {
            .home-hero-wrap {
                padding: 18px;
            }

            .home-hero-wrap .hero {
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
        }

        .home-anchor-section+.home-anchor-section {
            margin-top: 80px;
            padding-top: 80px;
            border-top: 1px solid #eef2f7;
        }

        #service,
        #blog {
            display: block;
            width: 100%;
        }

        #service .home-section-title,
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
            border-radius: 24px;
            background: linear-gradient(180deg, #f7fbff, #eef4fb);
            border: 1px solid rgba(49, 93, 143, 0.08);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.9);
        }

        .about-img {
            width: 100%;
            max-width: 390px;
            height: auto;
            object-fit: contain;
            border-radius: 18px;
            filter: drop-shadow(0 18px 26px rgba(13, 42, 90, 0.14));
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
            background: #fff;
            border-radius: 18px;
            overflow: hidden;
            border: 1px solid rgba(49, 93, 143, 0.10);
            height: 100%;
            transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
            box-shadow: 0 14px 28px rgba(13, 42, 90, 0.05);
        }

        .blog-thumb {
            width: 100%;
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f5f5f5;
            overflow: hidden;
        }

        .blog-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .blog-card:hover,
        .service-home-section .card:hover,
        .genset-item:hover .genset-img-box {
            transform: translateY(-4px);
        }

        .blog-card:hover,
        .service-home-section .card:hover {
            box-shadow: 0 20px 36px rgba(13, 42, 90, 0.10);
            border-color: rgba(49, 93, 143, 0.16);
        }

        .service-home-section .card {
            border-radius: 18px;
            overflow: hidden;
            border: 1px solid rgba(49, 93, 143, 0.10);
            box-shadow: 0 14px 28px rgba(13, 42, 90, 0.05);
            transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
        }

        .service-home-section .card-img-top {
            height: 230px !important;
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
            background: linear-gradient(135deg, #24384f, #314d6d);
            border: 0;
            border-radius: 999px;
            padding: 10px 18px;
            font-weight: 600;
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


        .genset-item {
            border-radius: 18px;
            padding: 16px 14px 12px;
            transition: transform .25s ease, box-shadow .25s ease, background-color .25s ease;
        }

        .genset-item:hover {
            background: linear-gradient(180deg, #f8fbff, #f1f6fb);
            box-shadow: 0 14px 28px rgba(13, 42, 90, 0.06);
        }

        .genset-img-box {
            border-radius: 18px;
            border: 1px solid rgba(49, 93, 143, 0.10);
            background: #fff;
            box-shadow: 0 12px 22px rgba(13, 42, 90, 0.05);
            transition: transform .25s ease, box-shadow .25s ease;
        }

        .genset-label {
            margin-top: 12px;
            border-radius: 999px;
            border: 1px solid rgba(49, 93, 143, 0.14);
            background: #f8fbff;
            color: #315d8f;
            font-weight: 700;
            letter-spacing: .01em;
        }

        .blog-body {
            padding: 18px 18px 22px;
        }

        .blog-link {
            color: #315d8f;
            font-weight: 700;
        }

        .blog-link:hover {
            color: #1f3550;
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
                    <p>Konten belum tersedia.</p>
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
                        <div class="card shadow-sm border-0">
                            <img src="{{ $service->image_url }}" class="card-img-top"
                                style="height:250px; object-fit:cover;">

                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $service->name }}</h5>

                                <p class="text-muted small">
                                    {{ $service->short_description }}
                                </p>

                                <a href="{{ route('service.detail', $service->slug) }}"
                                    class="btn btn-dark w-100 mt-3">
                                    View Detail
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @include('partials.footer-brands')
    </section>

        <section id="blog" class="home-anchor-section">
        <h2 class="home-section-title">Berita & Artikel</h2>

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
                                Baca selengkapnya →
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <p>Belum ada artikel.</p>
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
            @include('partials.footer-brands')
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        new Swiper('.heroSwiper', {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            grabCursor: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: true
            }
        });

        const navLinks = document.querySelectorAll('[data-nav-link]');
        const sections = ['home', 'about', 'genset', 'service', 'blog', 'contact']
            .map(id => document.getElementById(id))
            .filter(Boolean);

        const activateNav = (sectionId) => {
            navLinks.forEach(link => {
                const targetId = link.getAttribute('data-nav-link');
                link.classList.toggle('active', targetId === sectionId);
            });
        };

        const handleScrollSpy = () => {
            // Fix buat Home pas di paling atas
            if (window.scrollY < 120) {
                activateNav('home');
                return;
            }

            let currentSection = "";
            const offset = 210; // Sesuaikan dengan scroll-padding-top

            sections.forEach((section) => {
                const sectionTop = section.offsetTop;
                if (window.pageYOffset >= sectionTop - offset) {
                    currentSection = section.getAttribute("id");
                }
            });

            // Paksa Contact aktif jika sudah di paling bawah mentok
            if ((window.innerHeight + window.pageYOffset) >= document.body.offsetHeight - 50) {
                currentSection = "contact";
            }

            if (currentSection) {
                activateNav(currentSection);
            }
        };

        window.addEventListener('scroll', handleScrollSpy);
        handleScrollSpy(); // Cek sekali pas load
    </script>
@endsection
