<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Premium stock brokerage platform for Bangladesh capital market.">
    <title>@yield('title', 'TradeFront - Brokerage Landing')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- WOW.js animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        :root {
            --bg-primary: #0c0a19;
            --bg-secondary: #131028;
            --text-primary: #f1f5f9;
            --text-muted: #94a3b8;
            --line-soft: rgba(148, 163, 184, 0.2);
            --accent-gradient: linear-gradient(90deg, #06b6d4 0%, #2563eb 100%);
            --glass-bg: rgba(255, 255, 255, 0.08);
            --glass-border: rgba(255, 255, 255, 0.2);
            --shadow-soft: 0 20px 35px rgba(2, 8, 23, 0.35);
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: radial-gradient(circle at 10% 0%, #1a1540 0%, var(--bg-primary) 45%, #090513 100%);
            color: var(--text-primary);
            overflow-x: hidden;
        }

        .section-padding { padding: 5rem 0; }
        .section-title {
            font-weight: 800;
            letter-spacing: -0.02em;
        }

        .text-muted-dark { color: var(--text-muted) !important; }

        .glass {
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            box-shadow: var(--shadow-soft);
            border-radius: 1rem;
        }

        .btn-gradient {
            background: var(--accent-gradient);
            color: #fff;
            border: none;
            font-weight: 600;
            transition: all .25s ease;
        }

        .btn-gradient:hover {
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(37, 99, 235, .35);
        }

        .top-ticker {
            border-bottom: 1px solid var(--line-soft);
            background: rgba(12, 10, 25, .9);
            backdrop-filter: blur(10px);
            min-height: 46px;
            display: flex;
            align-items: center;
        }

        .main-header {
            position: sticky;
            top: 0;
            z-index: 1030;
            transition: all .3s ease;
            border-bottom: 1px solid transparent;
        }

        .main-header.scrolled {
            background: rgba(12, 10, 25, .92);
            backdrop-filter: blur(12px);
            border-color: var(--line-soft);
        }

        .navbar-brand {
            font-size: 1.25rem;
            font-weight: 800;
            color: #fff !important;
        }

        .nav-link {
            color: #dbeafe !important;
            font-weight: 500;
        }

        .hero {
            padding: 6rem 0 4rem;
            position: relative;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: .45rem;
            padding: .45rem .85rem;
            border-radius: 999px;
            border: 1px solid var(--glass-border);
            background: rgba(6, 182, 212, 0.08);
            color: #a5f3fc;
            font-size: .85rem;
            margin-bottom: 1rem;
        }

        .hero h1 {
            font-size: clamp(2rem, 6vw, 3.75rem);
            font-weight: 800;
            line-height: 1.1;
            letter-spacing: -0.025em;
        }

        .hero-visual {
            min-height: 320px;
            border-radius: 1.25rem;
            padding: 1.25rem;
        }

        .counter-box,
        .service-card,
        .platform-card,
        .testimonial-card,
        .footer-card {
            height: 100%;
        }

        .counter-box h3 {
            font-size: clamp(1.5rem, 5vw, 2.25rem);
            font-weight: 800;
            margin-bottom: .35rem;
        }

        .service-card {
            padding: 1.5rem;
            transition: all .25s ease;
        }

        .service-card:hover {
            transform: translateY(-6px);
            border-color: rgba(6, 182, 212, .5);
        }

        .service-icon {
            width: 54px;
            height: 54px;
            border-radius: 14px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: rgba(37, 99, 235, .2);
            margin-bottom: 1rem;
            transition: transform .25s ease;
        }

        .service-card:hover .service-icon { transform: scale(1.07) rotate(2deg); }

        .platform-item {
            min-height: 110px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            gap: .5rem;
        }

        .platform-item img {
            width: 36px;
            height: 36px;
            object-fit: contain;
        }

        .swiper { padding-bottom: 2rem; }

        .swiper-pagination-bullet {
            background: #60a5fa;
            opacity: .65;
        }

        .swiper-pagination-bullet-active { opacity: 1; }

        .footer {
            border-top: 1px solid var(--line-soft);
            padding-top: 4rem;
            padding-bottom: 2rem;
            background: rgba(4, 2, 15, .8);
        }

        .footer h6 {
            font-weight: 700;
            margin-bottom: .9rem;
        }

        .footer a {
            text-decoration: none;
            color: #cbd5e1;
            display: inline-block;
            margin-bottom: .5rem;
        }

        .footer a:hover { color: #67e8f9; }

        @media (max-width: 991.98px) {
            .hero { padding-top: 4rem; }
            .section-padding { padding: 4rem 0; }
        }
    </style>

    @stack('styles')
</head>
<body>
    @yield('content')

    <!-- Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- WOW.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <!-- Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        // Header: transparent to solid on scroll.
        window.addEventListener('scroll', function () {
            const header = document.getElementById('mainHeader');
            if (!header) return;
            header.classList.toggle('scrolled', window.scrollY > 20);
        });

        // WOW.js initialization.
        new WOW().init();

        // Swiper for testimonial slider.
        const testimonialSwiper = new Swiper('.testimonial-swiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                768: { slidesPerView: 2 },
                1200: { slidesPerView: 3 }
            }
        });
    </script>

    @stack('scripts')
</body>
</html>
