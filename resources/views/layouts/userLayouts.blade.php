<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>About Us - Bach Multi Global</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Swiper CSS (WAJIB) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('genset-website/css/style.css') }}">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        :root {
            --site-heading: #1f3550;
            --site-accent: #315d8f;
            --site-accent-soft: #77b4f2;
            --site-text: #46576b;
            --site-border: rgba(49, 93, 143, .10);
            --site-shadow: 0 16px 34px rgba(13, 42, 90, .07);
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--site-text);
        }

        /* ===== HEADER ===== */

        .logo-header {
            max-width: 180px;
            height: auto;
            margin-left: 15px;
            /* Geser dikit ke kanan */
        }

        /* CONTACT WRAPPER */
        .header-contact {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 6px;
            margin-right: 15px;
            /* Geser dikit ke kiri biar seimbang */
        }

        .header-right {
            padding-left: 10px;
        }

        /* CONTACT ITEM */
        .header-contact-item {
            display: flex;
            gap: 8px;
            align-items: flex-start;
        }

        /* ICON */
        .header-contact-item i {
            font-size: 14px;
            color: #0d6efd;
            margin-top: 3px;
        }

        /* TITLE */
        .contact-title-small {
            font-size: 13px;
            font-weight: 600;
            color: #0d6efd;
        }

        /* PHONE */
        .contact-link {
            font-size: 13px;
            color: #222;
            text-decoration: none;
        }

        /* COMPANY NAME */
        .contact-office {
            font-size: 13px;
            font-weight: 600;
            color: #333;
        }

        /* ADDRESS */
        .contact-address {
            font-size: 12px;
            line-height: 1.4;
            max-width: 320px;
            color: #555;
        }

        /* ===== MOBILE ===== */

        @media (max-width:768px) {

            .logo-header {
                max-width: 140px;
            }

            /* reduce spacing */
            .top-header {
                margin-bottom: 6px;
            }

            .header-contact {
                gap: 4px;
                align-items: flex-end;
            }

            /* make address narrower */
            .contact-address {
                max-width: 200px;
                font-size: 11px;
                text-align: right;
            }

            .contact-office {
                font-size: 12px;
                text-align: right;
            }

            .contact-link {
                font-size: 12px;
            }

        }

        .page-section {
            padding: 45px;
            width: 100%;
        }

        @media (max-width: 767px) {
            .page-section {
                padding: 30px 15px;
            }
        }

        .page-section h1,
        .page-section h2,
        .page-section h3,
        .page-section .genset-title h1,
        .page-section .contact-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--site-heading);
        }

        .page-section h1,
        .page-section h2 {
            font-weight: 800;
            letter-spacing: -.02em;
        }

        .page-section p,
        .page-section li,
        .page-section .text-muted,
        .page-section .blog-desc {
            color: var(--site-text);
        }

        .brands .fw-bold {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--site-heading);
            font-weight: 800;
            letter-spacing: -.02em;
        }

        .page-title-elegant {
            font-family: 'Plus Jakarta Sans', sans-serif;
            text-align: center;
            font-size: 34px;
            font-weight: 800;
            letter-spacing: -.02em;
            color: var(--site-heading);
            margin: 0 auto 30px;
            line-height: 1.15;
        }

        .page-title-elegant::after {
            content: "";
            display: block;
            width: 74px;
            height: 4px;
            margin: 12px auto 0;
            border-radius: 999px;
            background: linear-gradient(90deg, var(--site-accent-soft), var(--site-accent));
            opacity: .95;
        }

        .page-subtitle-elegant {
            font-family: 'Plus Jakarta Sans', sans-serif;
            text-align: center;
            font-size: 26px;
            font-weight: 800;
            letter-spacing: -.02em;
            color: var(--site-heading);
            margin: 0 auto 24px;
        }

        .page-subtitle-elegant::after {
            content: "";
            display: block;
            width: 64px;
            height: 4px;
            margin: 10px auto 0;
            border-radius: 999px;
            background: linear-gradient(90deg, var(--site-accent-soft), var(--site-accent));
        }

        .brand-footer-item {
            transition: transform .28s ease, filter .28s ease;
            filter: drop-shadow(0 10px 18px rgba(13, 42, 90, .08));
        }

        .brand-footer-item:hover {
            transform: translateY(-4px);
            filter: drop-shadow(0 14px 24px rgba(13, 42, 90, .12));
        }

        .brands {
            margin-top: 15px;
            padding: 10px 0;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
        }

        .brand-footer-wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            align-items: center;
        }

        .brand-footer-item img {
            max-height: 45px;
            width: auto;
            object-fit: contain;
        }

        .reveal-on-scroll {
            opacity: 0;
            transform: translateY(26px);
            transition: opacity .7s ease, transform .7s cubic-bezier(.2, .65, .2, 1);
            will-change: opacity, transform;
        }

        .reveal-on-scroll.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        .reveal-on-scroll[data-reveal-delay="1"] {
            transition-delay: .08s;
        }

        .reveal-on-scroll[data-reveal-delay="2"] {
            transition-delay: .16s;
        }

        .reveal-on-scroll[data-reveal-delay="3"] {
            transition-delay: .24s;
        }

        @media (prefers-reduced-motion: reduce) {
            .reveal-on-scroll {
                opacity: 1;
                transform: none;
                transition: none;
            }
        }

        .header-sticky-wrapper {
            position: sticky;
            top: 0;
            z-index: 1040;
            background: #f4f6f8;
            padding-top: 10px;
            padding-bottom: 0px !important;
            /* Nol-kan jarak bawah */
            transition: all 0.3s ease;
        }

        .nav-wrapper {
            margin-top: 0px !important;
            /* Nol-kan jarak atas navbar */
        }

        /* ===== MOBILE HEADER & NAV ===== */
        @media (max-width: 991px) {
            .header-sticky-wrapper {
                position: fixed;
                top: 0;
                width: 100%;
                background: #fff !important;
                box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
                padding: 10px 0 !important;
                height: 70px;
                display: flex;
                align-items: center;
                z-index: 10000;
            }

            .logo-header {
                max-width: 120px;
                margin-left: 15px;
            }

            .nav-wrapper {
                position: fixed !important;
                top: 70px !important;
                left: 0 !important;
                right: 0 !important;
                width: 100% !important;
                height: auto !important;
                border-radius: 0 !important;
                background: #fff !important;
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
                margin: 0 !important;
                padding: 0 !important;
                display: block !important;
                max-width: none !important;
                z-index: 9999;
            }

            .navbar-collapse {
                background: #fff !important;
            }

            .navbar-nav {
                padding: 10px 0;
            }

            .nav-link {
                color: #333 !important;
                text-align: left !important;
                padding: 15px 25px !important;
                border-bottom: 1px solid #f0f0f0;
                display: block;
                width: 100%;
                font-weight: 600;
            }

            .navbar-toggler {
                position: fixed;
                right: 15px;
                top: 15px;
                color: #315d8f !important;
                background: #fff !important;
                border: 1px solid rgba(0, 0, 0, 0.1) !important;
                padding: 6px 10px !important;
                border-radius: 8px !important;
                z-index: 10001;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            }

            body {
                padding-top: 70px;
            }

            .header-contact, .contact-address {
                display: none !important;
            }

            .top-header {
                padding: 5px 15px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                width: 100%;
            }
        }

        /* ===== DESKTOP HEADER & NAV ===== */
        @media (min-width: 992px) {
            .header-sticky-wrapper {
                position: sticky;
                top: 0;
                z-index: 1040;
                background: #fff !important;
                padding-top: 10px;
                padding-bottom: 0px !important;
                transition: all 0.3s ease;
            }

            .top-header {
                padding: 15px 45px;
                max-width: 100%;
                margin: 0 !important;
            }

            .nav-wrapper {
                background: linear-gradient(135deg, #5aa1e3, #2f6fb1) !important;
                border-radius: 35px 35px 0 0 !important;
                margin: 0 auto !important;
                max-width: calc(100% - 90px);
                width: 100% !important;
                padding: 8px 30px !important;
                box-shadow: 0 10px 24px rgba(13, 42, 90, 0.1);
            }

            .nav-link {
                color: #fff !important;
                font-weight: 600;
            }

            .nav-link:hover, .nav-link.active {
                color: #fff !important;
                opacity: 0.8;
            }
            
            .nav-wrapper.is-sticky {
                box-shadow: 0 4px 18px rgba(0, 0, 0, 0.15);
            }
        }

        /* ===== GENSET MODULE ===== */
        .genset-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }

        .genset-item {
            text-decoration: none !important;
            transition: transform 0.3s ease;
            display: block;
        }

        .genset-item:hover {
            transform: translateY(-8px);
        }

        .genset-img-box {
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 25px;
            border-radius: 20px;
            border: 1px solid rgba(49, 93, 143, 0.08);
            background: #fff;
            box-shadow: 0 10px 30px rgba(13, 42, 90, 0.04);
            transition: all .3s ease;
            overflow: hidden;
        }

        .genset-img-box img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            transition: transform 0.5s ease;
        }

        .genset-item:hover .genset-img-box {
            box-shadow: 0 15px 35px rgba(13, 42, 90, 0.1);
            border-color: rgba(49, 93, 143, 0.2);
        }

        .genset-item:hover .genset-img-box img {
            transform: scale(1.05);
        }

        .genset-label {
            margin-top: 15px;
            padding: 10px 15px;
            border-radius: 12px;
            border: 1px solid rgba(49, 93, 143, 0.1);
            background: #f8fbff;
            color: #315d8f;
            font-weight: 700;
            text-align: center;
            transition: all 0.3s ease;
        }

        .genset-item:hover .genset-label {
            background: #315d8f;
            color: #fff;
        }

        @media (max-width: 767px) {
            .genset-grid {
                grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
                gap: 15px;
            }
            .genset-img-box {
                height: 140px;
                padding: 15px;
            }
        }
    </style>
</head>

<body>

    <div class="container-fluid">

        <div class="header-sticky-wrapper">
            <!-- ===== TOP HEADER ===== -->
            <div class="row top-header align-items-center">
                <div class="col-6 col-md-6">
                    <img class="logo-header" src="{{ $globalSettings->logo_url }}" alt="Bach Multi Global">
                </div>
                @php
                    $phoneRaw = $globalSettings?->whatsapp_number;
                    $phoneClean = preg_replace('/[^0-9]/', '', $phoneRaw);
                @endphp

                <div class="col-6 col-md-6 header-right d-flex justify-content-end">

                    <div class="header-contact">

                        <!-- PHONE -->
                        <div class="header-contact-item">

                            <i class="fa-solid fa-phone"></i>

                            <div>
                                <div class="contact-title-small">Sales & Service</div>

                                <a href="tel:{{ $phoneClean }}" class="contact-link">
                                    {{ $globalSettings?->whatsapp_number ?? '-' }}
                                </a>
                            </div>

                        </div>


                        <!-- ADDRESS -->
                        <div class="header-contact-item">
                            <div>

                                @if ($globalSettings?->location_name)
                                    <div class="contact-office">
                                        {{ $globalSettings->location_name }}
                                    </div>
                                @endif

                                <div class="contact-address">
                                    {!! nl2br(e($globalSettings?->address)) !!}
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>

            <!-- ===== NAV ===== -->
            <nav class="navbar navbar-expand-lg nav-wrapper">
                <div class="container-fluid d-flex justify-content-between align-items-center">

                    <div class="d-lg-none"></div> <!-- Spacer for mobile center if needed -->

                    <!-- TOGGLER -->
                    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#mainNavbar">
                        <span class="fa-solid fa-bars"></span>
                    </button>

                    <!-- MENU -->
                    <div class="collapse navbar-collapse justify-content-center" id="mainNavbar">
                        <ul class="navbar-nav gap-lg-4 text-center">

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}#home" data-nav-link="home">
                                    Home
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}#about" data-nav-link="about">
                                    About Us
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}#genset" data-nav-link="genset">
                                    Genset
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}#service" data-nav-link="service">
                                    Service
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}#blog" data-nav-link="blog">
                                    Blog
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}#contact" data-nav-link="contact">
                                    Contact
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div> <!-- End .header-sticky-wrapper -->


        @yield('content')


        <!-- ===== BRANDS ===== -->
        @yield('footer')


        <!-- ===== WHATSAPP FLOAT ===== -->
        @php
            $wa = preg_replace('/^0/', '62', $globalSettings->whatsapp_number);
            $wa = preg_replace('/[^0-9]/', '', $wa);
        @endphp

        <a href="https://wa.me/{{ $wa }}?text=Halo%20saya%20ingin%20tanya" class="wa-float" target="_blank">

            <span class="wa-tooltip">Chat via WhatsApp</span>

            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
        </a>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            (() => {
                const selectors = [
                    '.page-section',
                    '.hero-section',
                    '.service-home-section .card',
                    '.blog-card',
                    '.genset-item',
                    '.detail-hero',
                    '.spec-box'
                ];

                const nodes = selectors.flatMap(selector => Array.from(document.querySelectorAll(selector)));
                nodes.forEach((node, index) => {
                    if (!node.classList.contains('reveal-on-scroll')) {
                        node.classList.add('reveal-on-scroll');
                        node.dataset.revealDelay = String(index % 4);
                    }
                });

                if (!('IntersectionObserver' in window) || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                    nodes.forEach(node => node.classList.add('is-visible'));
                    return;
                }

                const observer = new IntersectionObserver(entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-visible');
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.14,
                    rootMargin: '0px 0px -40px 0px'
                });

                nodes.forEach(node => observer.observe(node));
            })();

            // Sticky Header Logic
            const headerWrapper = document.querySelector('.header-sticky-wrapper');
            const navbar = document.querySelector('.nav-wrapper');
            if (headerWrapper && navbar) {
                const navOffset = navbar.offsetTop;
                const handleScroll = () => {
                    if (window.pageYOffset > 20) { // Small threshold to add shadow
                        navbar.classList.add('is-sticky');
                    } else {
                        navbar.classList.remove('is-sticky');
                    }
                };
                window.addEventListener('scroll', handleScroll);
                handleScroll();
            }

            // Tutup menu mobile otomatis sehabis klik link (Gunakan Event Delegation)
            document.addEventListener('click', function(event) {
                // Cari apakah yang diklik itu link navigasi atau anak dari link navigasi
                const navLink = event.target.closest('.nav-link');
                const navbarCollapse = document.getElementById('mainNavbar');

                if (navLink && navbarCollapse && navbarCollapse.classList.contains('show')) {
                    const toggler = document.querySelector('.navbar-toggler');
                    if (toggler) {
                        toggler.click();
                    }
                }
            });
        </script>

</body>
