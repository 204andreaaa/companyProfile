<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title></title>
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

    <link rel="icon" type="image/png" href="{{ ($globalSettings?->logo_url ?? asset('favicon.ico')) . '?v=' . time() }}">
    <link rel="shortcut icon" href="{{ ($globalSettings?->logo_url ?? asset('favicon.ico')) . '?v=' . time() }}">
    <link rel="apple-touch-icon" href="{{ ($globalSettings?->logo_url ?? asset('favicon.ico')) . '?v=' . time() }}">

    <style>
        :root {
            --site-heading: #1f3550;
            --site-accent: #315d8f;
            --site-accent-soft: #77b4f2;
            --site-text: #46576b;
            --site-border: rgba(49, 93, 143, .10);
            --site-shadow: 0 16px 34px rgba(13, 42, 90, .07);
            --navbar-color-start: {{ $globalSettings?->navbar_color_start ?? '#5aa1e3' }};
            --navbar-color-end: {{ $globalSettings?->navbar_color_end ?? '#2f6fb1' }};
            --button-color: {{ $globalSettings?->button_color ?? '#b91c1c' }};
            --button-text-color: {{ $globalSettings?->button_text_color ?? '#ffffff' }};

            --mobile-header-height: 70px;
            --desktop-nav-gap: clamp(24px, 5vw, 90px);
            --section-padding-x: clamp(16px, 3vw, 45px);
            --section-padding-y: clamp(30px, 4vw, 45px);
            
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        html {
            width: 100%;
            min-width: 320px;
            scroll-behavior: smooth;
        }

        body {
            width: 100%;
            min-width: 320px;
            margin: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--site-text);
            background: #fff;
            overflow-x: clip;
        }

        @supports not (overflow-x: clip) {
            body {
                overflow-x: hidden;
            }
        }

        img,
        svg,
        video,
        canvas {
            max-width: 100%;
        }

        img {
            height: auto;
            display: block;
        }

        a {
            text-decoration-thickness: from-font;
        }

        .container-fluid {
            width: 100%;
            max-width: 100%;
            padding-left: 0;
            padding-right: 0;
        }

        .row {
            --bs-gutter-x: 0;
        }
                /* ===== HEADER ===== */
        .header-sticky-wrapper {
            position: sticky;
            top: 0;
            z-index: 1040;
            width: 100%;
            background: #fff !important;
            padding-top: 10px;
            padding-bottom: 0 !important;
            transition: box-shadow .3s ease, background .3s ease;
        }

        .top-header {
            width: 100%;
            max-width: 100%;
            margin: 0 !important;
            padding: clamp(10px, 1.6vw, 15px) var(--section-padding-x);
            align-items: center;
        }

        .logo-header {
            width: auto;
            max-width: clamp(120px, 14vw, 180px);
            height: auto;
            margin-left: 15px;
            object-fit: contain;
            object-position: left center;
        }

        .header-right {
            padding-left: 10px;
            min-width: 0;
        }

        .header-contact {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 6px;
            margin-right: 15px;
            max-width: 100%;
        }

        .header-contact-item {
            display: flex;
            gap: 8px;
            align-items: flex-start;
            justify-content: flex-end;
            max-width: 100%;
            text-align: right;
        }

        .header-contact-item i {
            flex: 0 0 auto;
            font-size: 14px;
            color: #0d6efd;
            margin-top: 3px;
        }

        .contact-title-small {
            font-size: clamp(11px, .95vw, 13px);
            font-weight: 600;
            color: #0d6efd;
            line-height: 1.25;
        }

        .contact-link {
            font-size: clamp(11px, .95vw, 13px);
            color: #222;
            text-decoration: none;
            line-height: 1.35;
            word-break: break-word;
        }

        .contact-office {
            font-size: clamp(11px, .95vw, 13px);
            font-weight: 600;
            color: #333;
            line-height: 1.3;
        }

        .contact-address {
            font-size: clamp(10px, .88vw, 12px);
            line-height: 1.4;
            max-width: min(320px, 42vw);
            color: #555;
        }

        /* ===== NAVBAR ===== */
        .nav-wrapper {
            width: calc(100% - var(--desktop-nav-gap)) !important;
            max-width: calc(100% - var(--desktop-nav-gap));
            min-height: 70px;
            margin: 0 auto !important;
            padding: 8px clamp(18px, 2vw, 30px) !important;
            border-radius: 35px 35px 0 0 !important;
            background: linear-gradient(135deg, var(--navbar-color-start), var(--navbar-color-end)) !important;
            box-shadow: 0 10px 24px rgba(13, 42, 90, .1);
            display: flex;
            align-items: center;
        }

        .nav-wrapper > .container-fluid {
            width: 100%;
            max-width: 100%;
            padding-left: 0;
            padding-right: 0;
        }

        .navbar-collapse {
            width: 100%;
        }

        .navbar-nav {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: nowrap;
            gap: clamp(14px, 2.1vw, 38px) !important;
            padding: 0;
            margin: 0;
        }

        .navbar-nav .nav-item {
            flex: 0 0 auto;
        }

        .nav-link {
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: var(--button-text-color) !important;
            font-weight: 700;
            font-size: clamp(13px, 1.05vw, 16px);
            line-height: 1.2;
            padding: 12px 2px !important;
            white-space: nowrap;
            text-align: center;
            transition: opacity .2s ease, color .2s ease;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--button-text-color) !important;
            opacity: .9;
        }

        .navbar-nav .nav-link::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: 3px;
            width: 34px;
            height: 3px;
            border-radius: 999px;
            background: var(--button-text-color) !important;
            transform: translateX(-50%) scaleX(0);
            transform-origin: center;
            opacity: 0;
            transition: transform .25s ease, opacity .25s ease;
        }

        .navbar-nav .nav-link:hover::after,
        .navbar-nav .nav-link.active::after {
            transform: translateX(-50%) scaleX(1);
            opacity: 1;
        }

        .nav-wrapper.is-sticky {
            box-shadow: 0 4px 18px rgba(0, 0, 0, .15);
        }

        /* ===== PAGE GENERAL ===== */
        .page-section {
            width: 100%;
            max-width: 100%;
            padding: var(--section-padding-y) var(--section-padding-x);
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

        .page-title-elegant {
            font-family: 'Plus Jakarta Sans', sans-serif;
            text-align: center;
            font-size: clamp(26px, 3vw, 34px);
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
            font-size: clamp(22px, 2.4vw, 26px);
            font-weight: 800;
            letter-spacing: -.02em;
            color: var(--site-heading);
            margin: 0 auto 24px;
            line-height: 1.2;
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

        /* ===== BUTTON ===== */
        .btn-submit,
        .btn.btn-dark,
        .btn.btn-primary {
            background: var(--button-color) !important;
            color: var(--button-text-color) !important;
            border-color: var(--button-color) !important;
        }

        .btn-submit:hover,
        .btn.btn-dark:hover,
        .btn.btn-primary:hover {
            filter: brightness(.92);
            color: var(--button-text-color) !important;
        }

        /* ===== STATIC IMAGE SYSTEM: BIAR GAMBAR BEDA UKURAN TETAP RAPI DAN GA KEPOTONG ===== */
        .genset-img-box,
        .brand-footer-item,
        .blog-img,
        .blog-image,
        .service-img,
        .service-image,
        .project-img,
        .project-image,
        .product-img,
        .product-image,
        .card-img-box,
        .image-box,
        .img-box,
        .thumb-box,
        .thumbnail-box {
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            overflow: visible !important;
        }

        .genset-img-box img,
        .brand-footer-item img,
        .blog-img img,
        .blog-image img,
        .service-img img,
        .service-image img,
        .project-img img,
        .project-image img,
        .product-img img,
        .product-image img,
        .card-img-box img,
        .image-box img,
        .img-box img,
        .thumb-box img,
        .thumbnail-box img,
        .blog-card img,
        .service-card img,
        .project-card img,
        .product-card img,
        .genset-item img,
        .detail-hero img,
        .spec-box img,
        .swiper-slide img,
        .card-img-top {
            max-width: 100% !important;
            max-height: 100% !important;
            object-fit: contain !important;
            object-position: center !important;
        }

        .blog-card > img,
        .service-card > img,
        .project-card > img,
        .product-card > img,
        .card > img,
        .card > a > img,
        .card-img-top {
            width: 100% !important;
            height: 220px !important;
            object-fit: contain !important;
            object-position: center !important;
            background: transparent;
        }

        /* ===== GENSET MODULE ===== */
        .genset-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 34px 30px;
            margin-top: 30px;
            width: 100%;
            max-width: 100%;
            align-items: start;
        }

        .genset-item {
            min-width: 0;
            width: 100%;
            text-decoration: none !important;
            transition: transform .3s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
        }

        .genset-item:hover {
            transform: translateY(-8px);
        }

        .genset-img-box {
            width: 100% !important;
            height: 230px !important;
            padding: 10px !important;
            border-radius: 0;
            border: none;
            background: transparent;
            box-shadow: none;
            transition: all .3s ease;
            overflow: visible !important;
        }

        .genset-img-box img {
            width: 100% !important;
            height: 100% !important;
            object-fit: contain !important;
            object-position: center !important;
            transition: transform .5s ease;
        }

        .genset-item:hover .genset-img-box {
            box-shadow: none;
        }

        .genset-item:hover .genset-img-box img {
            transform: scale(1.03);
        }

        .genset-label {
            width: 100%;
            margin-top: 12px;
            padding: 0;
            border-radius: 0;
            border: none;
            background: transparent;
            color: #000;
            font-weight: 700;
            text-align: center;
            font-size: clamp(13px, 1.1vw, 15px);
            line-height: 1.35;
            transition: all .3s ease;
            word-break: break-word;
        }

        .genset-item:hover .genset-label {
            background: transparent;
            color: #000;
        }

        /* ===== BRANDS ===== */
        .brands {
            width: 100%;
            margin-top: 15px;
            padding: 10px var(--section-padding-x);
            border-top: 1px solid rgba(0, 0, 0, .05);
        }

        .brands .fw-bold {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--site-heading);
            font-weight: 800;
            letter-spacing: -.02em;
        }

        .brand-footer-wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: clamp(18px, 3vw, 30px);
            align-items: center;
            width: 100%;
        }

        .brand-footer-item {
            width: 160px;
            height: 60px;
            transition: transform .28s ease, filter .28s ease;
            filter: drop-shadow(0 10px 18px rgba(13, 42, 90, .08));
        }

        .brand-footer-item:hover {
            transform: translateY(-4px);
            filter: drop-shadow(0 14px 24px rgba(13, 42, 90, .12));
        }

        .brand-footer-item img {
            width: 100% !important;
            height: 100% !important;
            object-fit: contain !important;
            object-position: center !important;
        }

        /* ===== CONTACT FOOTER ===== */
        .contact-footer-names {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px 0;
            margin-top: 42px;
            padding-top: 10px;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(14px, 1.4vw, 17px);
            font-weight: 800;
            color: #1672bf;
            line-height: 1.4;
            text-align: center;
        }

        #contact .contact-footer-names,
        .page-section > .contact-footer-names {
            margin-top: 42px;
        }

        .contact-footer-names a,
        .contact-footer-names span {
            display: inline-flex;
            align-items: center;
            color: #1672bf;
            text-decoration: none;
            transition: color .2s ease;
        }

        .contact-footer-names a:hover {
            color: #0d4f91;
        }

        .contact-footer-names a:not(:last-child)::after,
        .contact-footer-names span:not(:last-child)::after {
            content: "|";
            margin: 0 clamp(10px, 2vw, 20px);
            color: #1672bf;
            font-weight: 500;
        }

        /* ===== ANIMATION ===== */
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

        /* ===== LARGE DESKTOP ===== */
        @media (min-width: 1400px) {
            .genset-grid {
                grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
                gap: 38px 34px;
            }

            .genset-img-box {
                height: 240px !important;
            }
        }

        /* ===== LAPTOP 12-14 INCH / TABLET LANDSCAPE ===== */
        @media (max-width: 1199px) {
            :root {
                --desktop-nav-gap: 40px;
            }

            .top-header {
                padding-left: 24px;
                padding-right: 24px;
            }

            .nav-wrapper {
                min-height: 64px;
                padding-left: 18px !important;
                padding-right: 18px !important;
            }

            .navbar-nav {
                gap: 20px !important;
            }

            .nav-link {
                font-size: 14px;
                padding-top: 11px !important;
                padding-bottom: 11px !important;
            }

            .genset-grid {
                grid-template-columns: repeat(auto-fit, minmax(190px, 1fr));
                gap: 30px 24px;
            }

            .genset-img-box {
                height: 205px !important;
            }

            .blog-card > img,
            .service-card > img,
            .project-card > img,
            .product-card > img,
            .card > img,
            .card > a > img,
            .card-img-top {
                height: 200px !important;
            }
        }

        /* ===== TABLET & MOBILE NAV ===== */
        @media (max-width: 991px) {
            body {
                padding-top: var(--mobile-header-height);
            }

            .header-sticky-wrapper {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: var(--mobile-header-height);
                background: #fff !important;
                box-shadow: 0 2px 15px rgba(0, 0, 0, .1);
                padding: 10px 0 !important;
                display: flex;
                align-items: center;
                z-index: 10000;
            }

            .top-header {
                padding: 5px 15px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                width: 100%;
            }

            .logo-header {
                max-width: 120px;
                margin-left: 15px;
            }

            .header-contact,
            .contact-address {
                display: none !important;
            }

            .nav-wrapper {
                position: fixed !important;
                top: var(--mobile-header-height) !important;
                left: 0 !important;
                right: 0 !important;
                width: 100% !important;
                max-width: 100% !important;
                height: auto !important;
                min-height: 0;
                border-radius: 0 !important;
                background: #fff !important;
                box-shadow: 0 10px 20px rgba(0, 0, 0, .1) !important;
                margin: 0 !important;
                padding: 0 !important;
                display: block !important;
                z-index: 9999;
            }

            .navbar-collapse {
                background: #fff !important;
                width: 100%;
            }

            .navbar-nav {
                display: block !important;
                width: 100%;
                padding: 10px 0;
                margin: 0;
            }

            .navbar-nav .nav-item {
                width: 100%;
            }

            .nav-link {
                color: #333 !important;
                text-align: left !important;
                justify-content: flex-start;
                padding: 15px 25px !important;
                border-bottom: 1px solid #f0f0f0;
                display: flex;
                width: 100%;
                font-weight: 700;
                white-space: normal;
            }

            .nav-link:hover,
            .nav-link.active {
                color: var(--navbar-color-end) !important;
                opacity: 1;
            }

            .navbar-nav .nav-link::after {
                display: none;
            }

            .navbar-toggler {
                position: fixed;
                right: 15px;
                top: 15px;
                color: var(--navbar-color-end) !important;
                background: #fff !important;
                border: 1px solid rgba(0, 0, 0, .1) !important;
                padding: 6px 10px !important;
                border-radius: 8px !important;
                z-index: 10001;
                box-shadow: 0 2px 8px rgba(0, 0, 0, .1);
            }

            .page-section {
                padding: 32px 18px;
            }

            .genset-grid {
                grid-template-columns: repeat(auto-fit, minmax(165px, 1fr));
                gap: 26px 18px;
            }

            .genset-img-box {
                height: 175px !important;
                padding: 8px !important;
            }

            .blog-card > img,
            .service-card > img,
            .project-card > img,
            .product-card > img,
            .card > img,
            .card > a > img,
            .card-img-top {
                height: 180px !important;
            }

            .brand-footer-item {
                width: 140px;
                height: 54px;
            }
        }

        /* ===== MOBILE ===== */
        @media (max-width: 575px) {
            .page-section {
                padding: 28px 14px;
            }

            .page-title-elegant {
                margin-bottom: 24px;
            }

            .genset-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 22px 12px;
            }

            .genset-img-box {
                height: 145px !important;
                padding: 6px !important;
            }

            .genset-label {
                margin-top: 8px;
                font-size: 13px;
            }

            .blog-card > img,
            .service-card > img,
            .project-card > img,
            .product-card > img,
            .card > img,
            .card > a > img,
            .card-img-top {
                height: 155px !important;
            }

            .brand-footer-wrapper {
                gap: 16px;
            }

            .brand-footer-item {
                width: 125px;
                height: 48px;
            }

            .contact-footer-names {
                font-size: 14px;
            }

            .contact-footer-names a:not(:last-child)::after,
            .contact-footer-names span:not(:last-child)::after {
                margin: 0 10px;
            }
        }

        /* ===== VERY SMALL PHONE ===== */
        @media (max-width: 360px) {
            .genset-grid {
                grid-template-columns: 1fr;
            }

            .genset-img-box {
                height: 150px !important;
            }

            .blog-card > img,
            .service-card > img,
            .project-card > img,
            .product-card > img,
            .card > img,
            .card > a > img,
            .card-img-top {
                height: 145px !important;
            }
        }

        /* ===== COMPACT TOP HEADER ONLY ===== */
            @media (min-width: 992px) {
            .header-sticky-wrapper {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }

            .top-header {
                padding-top: 6px !important;
                padding-bottom: 6px !important;
                min-height: auto !important;
            }

            .logo-header {
                max-width: clamp(120px, 12vw, 165px) !important;
            }

            .header-contact {
                gap: 2px !important;
            }

            .header-contact-item {
                gap: 6px !important;
            }

            .contact-title-small,
            .contact-link,
            .contact-office {
                line-height: 1.15 !important;
            }

            .contact-address {
                line-height: 1.25 !important;
            }
        }

        /* ===== HERO SLIDER FIX ONLY ===== */
       /* ===== HERO WIDTH ALIGN WITH NAVBAR ONLY ===== */
.hero-section {
    width: calc(100% - var(--desktop-nav-gap)) !important;
    max-width: calc(100% - var(--desktop-nav-gap)) !important;
    margin: 14px auto 0 !important;
    padding: 0 !important;
    border-radius: 22px !important;
    overflow: visible !important;
    position: relative !important;
}

/* jangan paksa tinggi swiper dari layout, tinggi hero diatur di file home */
.hero-section .swiper,
.hero-section .swiper-container,
.hero-section .hero-swiper,
.hero-section .hero-slider,
.hero-section .carousel {
    width: 100% !important;
    border-radius: inherit !important;
    overflow: visible !important;
    position: relative !important;
}

/* tombol prev/next jangan kepotong */
.hero-section .swiper-button-prev,
.hero-section .swiper-button-next,
.hero-section .hero-prev,
.hero-section .hero-next,
.hero-section .slider-prev,
.hero-section .slider-next,
.hero-section .carousel-control-prev,
.hero-section .carousel-control-next {
    z-index: 50 !important;
    opacity: 1 !important;
    overflow: visible !important;
}

.hero-section .swiper-button-prev,
.hero-section .hero-prev,
.hero-section .slider-prev {
    left: 16px !important;
    right: auto !important;
}

.hero-section .swiper-button-next,
.hero-section .hero-next,
.hero-section .slider-next {
    right: 16px !important;
    left: auto !important;
}

@media (max-width: 991px) {
    .hero-section {
        width: calc(100% - 28px) !important;
        max-width: calc(100% - 28px) !important;
        margin-top: 12px !important;
        border-radius: 18px !important;
    }
}

@media (max-width: 575px) {
    .hero-section {
        width: calc(100% - 20px) !important;
        max-width: calc(100% - 20px) !important;
        margin-top: 10px !important;
        border-radius: 16px !important;
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
                    <img class="logo-header" src="{{ $globalSettings->logo_url }}" alt="Company Logo">
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
                                <a class="nav-link" href="{{ route('home') }}#project" data-nav-link="project">
                                    Project
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

    <script>
        (() => {
            const sectionTitles = {
                home: 'Home',
                about: 'About Us',
                genset: 'Genset',
                service: 'Service',
                project: 'Project',
                blog: 'Blog',
                contact: 'Contact'
            };

            const defaultTitle = 'Bipo';

            const navLinks = document.querySelectorAll('[data-nav-link]');
            const sections = Object.keys(sectionTitles)
                .map(id => document.getElementById(id))
                .filter(Boolean);

            function setActive(sectionId) {
                document.title = `${sectionTitles[sectionId] ?? 'Home'} - ${defaultTitle}`;

                navLinks.forEach(link => {
                    link.classList.toggle(
                        'active',
                        link.dataset.navLink === sectionId
                    );
                });
            }

            function detectSection() {
            const headerHeight = document.querySelector('.header-sticky-wrapper')?.offsetHeight ?? 120;
            const checkPoint = headerHeight + 160;

            let current = sections[0]?.id ?? 'home';

            sections.forEach(section => {
                const rect = section.getBoundingClientRect();

                if (rect.top <= checkPoint) {
                    current = section.id;
                }
            });

            if ((window.innerHeight + window.scrollY) >= document.body.scrollHeight - 80) {
                current = 'contact';
            }

            setActive(current);
        }

            window.addEventListener('load', () => {
                const hash = window.location.hash.replace('#', '');

                if (hash && sectionTitles[hash]) {
                    setActive(hash);
                    setTimeout(detectSection, 300);
                } else {
                    detectSection();
                }
            });

            window.addEventListener('scroll', detectSection);
        })();
    </script>

</body>
