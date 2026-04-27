<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>About Us - Bach Multi Global</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">

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
    :root{
        --site-heading:#1f3550;
        --site-accent:#315d8f;
        --site-accent-soft:#77b4f2;
        --site-text:#46576b;
        --site-border:rgba(49,93,143,.10);
        --site-shadow:0 16px 34px rgba(13,42,90,.07);
    }

    body{
        font-family:'Plus Jakarta Sans', sans-serif;
        color:var(--site-text);
    }

    /* ===== HEADER ===== */

    .logo-header{
        max-width:180px;
        height:auto;
    }

    /* CONTACT WRAPPER */
    .header-contact{
        display:flex;
        flex-direction:column;
        align-items:flex-end;
        gap:6px;
    }

    .header-right{
    padding-left:10px;
    }

    /* CONTACT ITEM */
    .header-contact-item{
        display:flex;
        gap:8px;
        align-items:flex-start;
    }

    /* ICON */
    .header-contact-item i{
        font-size:14px;
        color:#0d6efd;
        margin-top:3px;
    }

    /* TITLE */
    .contact-title-small{
        font-size:13px;
        font-weight:600;
        color:#0d6efd;
    }

    /* PHONE */
    .contact-link{
        font-size:13px;
        color:#222;
        text-decoration:none;
    }

    /* COMPANY NAME */
    .contact-office{
        font-size:13px;
        font-weight:600;
        color:#333;
    }

    /* ADDRESS */
    .contact-address{
        font-size:12px;
        line-height:1.4;
        max-width:320px;
        color:#555;
    }

    /* ===== MOBILE ===== */

    @media (max-width:768px){

    .logo-header{
        max-width:140px;
    }

    /* reduce spacing */
    .top-header{
        margin-bottom:6px;
    }

    .header-contact{
        gap:4px;
        align-items:flex-end;
    }

    /* make address narrower */
    .contact-address{
        max-width:200px;
        font-size:11px;
        text-align:right;
    }

    .contact-office{
        font-size:12px;
        text-align:right;
    }

    .contact-link{
        font-size:12px;
    }

    }

    .page-section{
        box-shadow: var(--site-shadow);
        border: 1px solid var(--site-border);
    }

    .page-section h1,
    .page-section h2,
    .page-section h3,
    .page-section .genset-title h1,
    .page-section .contact-title{
        font-family:'Plus Jakarta Sans', sans-serif;
        color:var(--site-heading);
    }

    .page-section h1,
    .page-section h2{
        font-weight:800;
        letter-spacing:-.02em;
    }

    .page-section p,
    .page-section li,
    .page-section .text-muted,
    .page-section .blog-desc{
        color:var(--site-text);
    }

    .brands .fw-bold{
        font-family:'Plus Jakarta Sans', sans-serif;
        color:var(--site-heading);
        font-weight:800;
        letter-spacing:-.02em;
    }

    .page-title-elegant{
        font-family:'Plus Jakarta Sans', sans-serif;
        text-align:center;
        font-size:34px;
        font-weight:800;
        letter-spacing:-.02em;
        color:var(--site-heading);
        margin:0 auto 30px;
        line-height:1.15;
    }

    .page-title-elegant::after{
        content:"";
        display:block;
        width:74px;
        height:4px;
        margin:12px auto 0;
        border-radius:999px;
        background:linear-gradient(90deg, var(--site-accent-soft), var(--site-accent));
        opacity:.95;
    }

    .page-subtitle-elegant{
        font-family:'Plus Jakarta Sans', sans-serif;
        text-align:center;
        font-size:26px;
        font-weight:800;
        letter-spacing:-.02em;
        color:var(--site-heading);
        margin:0 auto 24px;
    }

    .page-subtitle-elegant::after{
        content:"";
        display:block;
        width:64px;
        height:4px;
        margin:10px auto 0;
        border-radius:999px;
        background:linear-gradient(90deg, var(--site-accent-soft), var(--site-accent));
    }

    .brand-footer-item{
        transition: transform .28s ease, filter .28s ease;
        filter: drop-shadow(0 10px 18px rgba(13,42,90,.08));
    }

    .brand-footer-item:hover{
        transform: translateY(-4px);
        filter: drop-shadow(0 14px 24px rgba(13,42,90,.12));
    }

    .reveal-on-scroll{
        opacity:0;
        transform: translateY(26px);
        transition: opacity .7s ease, transform .7s cubic-bezier(.2,.65,.2,1);
        will-change: opacity, transform;
    }

    .reveal-on-scroll.is-visible{
        opacity:1;
        transform: translateY(0);
    }

    .reveal-on-scroll[data-reveal-delay="1"]{ transition-delay: .08s; }
    .reveal-on-scroll[data-reveal-delay="2"]{ transition-delay: .16s; }
    .reveal-on-scroll[data-reveal-delay="3"]{ transition-delay: .24s; }

    @media (prefers-reduced-motion: reduce){
        .reveal-on-scroll{
            opacity:1;
            transform:none;
            transition:none;
        }
    }

    /* ===== STICKY NAV ===== */
    .nav-wrapper {
        transition: all 0.3s ease;
        z-index: 1030;
    }

    .nav-wrapper.is-sticky {
        position: sticky;
        top: 0;
        background: linear-gradient(135deg, #5aa1e3, #2f6fb1);
        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.15);
        border-radius: 40px 40px 0 0;
    }
    </style>
</head>

<body>

    <div class="container">

        <!-- ===== TOP HEADER ===== -->
        <div class="row top-header align-items-start">
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
                        
                        @if($globalSettings?->location_name)
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
            <div class="container-fluid">

                <!-- TOGGLER -->
                <button class="navbar-toggler text-white border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#mainNavbar">
                    ☰
                </button>

                <!-- MENU -->
                <div class="collapse navbar-collapse justify-content-center" id="mainNavbar">
                    <ul class="navbar-nav gap-lg-4 text-center">

                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                                href="{{ route('home') }}">
                                Home
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                                href="{{ route('about') }}">
                                About Us
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('user.genset*') ? 'active' : '' }}"
                                href="{{ route('user.genset') }}">
                                Genset
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('service*') ? 'active' : '' }}"
                                href="{{ route('service') }}">
                                Service
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('blog*') ? 'active' : '' }}"
                                href="{{ route('blog') }}">
                                Blog
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                                href="{{ route('contact') }}">
                                Contact
                            </a>
                        </li>

                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">
                                    Login
                                </a>
                            </li>
                            @endguest

                            @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.index') }}">
                                    Admin
                                </a>
                            </li>

                            <li class="nav-item">
                                <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="nav-link border-0 bg-transparent">
                                        Logout
                                    </button>
                                </form>
                            </li>
                            @endauth

                    </ul>
                </div>
            </div>
        </nav>


        @yield('content')


        <!-- ===== BRANDS ===== -->
        @yield('footer')

        @if (!View::hasSection('footer'))
        <div class="brands text-center mt-5">
            <div class="fw-bold mb-4">Powered by</div>

            <div class="brand-footer-wrapper">
                @foreach ($footerBrands as $brand)
                    @php
                        $logo = $brand->logo
                            ? asset('storage/' . $brand->logo)
                            : asset('genset-website/img/brand/' . $brand->slug . '.png');
                    @endphp

                    <a href="{{ route('user.genset.detail', $brand->slug) }}" class="brand-footer-item">
                        <img src="{{ $logo }}" alt="{{ $brand->name }}">
                    </a>
                @endforeach
            </div>
        </div>
        @endif


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
                    '.brand-footer-item',
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
            const navbar = document.querySelector('.nav-wrapper');
            const placeholder = document.querySelector('.navbar-placeholder');
            if (navbar) {
                const navOffset = navbar.offsetTop;
                const handleScroll = () => {
                    if (window.pageYOffset > navOffset) {
                        navbar.classList.add('is-sticky');
                    } else {
                        navbar.classList.remove('is-sticky');
                    }
                };
                window.addEventListener('scroll', handleScroll);
                // Initial check
                handleScroll();
            }
        </script>

</body>
