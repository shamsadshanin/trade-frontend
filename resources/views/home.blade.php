@extends('layouts.app')

@section('title', 'Bangladesh Stock Brokerage | Open BO Account')

@section('content')
    <!-- Live Market Ticker / TradingView ticker-tape style -->
    <div class="top-ticker">
        <div class="container-fluid px-0">
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                    {
                        "symbols": [
                            { "proName": "DSE:DS30", "title": "DSE DS30" },
                            { "proName": "DSE:DSEX", "title": "DSE DSEX" },
                            { "proName": "NASDAQ:IXIC", "title": "Global Tech" },
                            { "proName": "TVC:GOLD", "title": "Gold" },
                            { "proName": "FX:USDBDT", "title": "USD/BDT" }
                        ],
                        "showSymbolLogo": true,
                        "isTransparent": true,
                        "displayMode": "adaptive",
                        "colorTheme": "dark",
                        "locale": "en"
                    }
                </script>
            </div>
        </div>
    </div>

    <!-- Sticky Header -->
    <header id="mainHeader" class="main-header py-2">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">TradeFront BD</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainNav">
                    <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#platforms">Platforms</a></li>
                        <li class="nav-item"><a class="nav-link" href="#reviews">Reviews</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                            <a href="#" class="btn btn-gradient px-4">Open BO Account</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <div class="hero-badge wow fadeInUp" data-wow-delay="0.1s">Bangladesh Capital Market Broker</div>
                    <h1 class="wow fadeInUp" data-wow-delay="0.2s">Start Trading with us. Open A New BO Account.</h1>
                    <p class="text-muted-dark fs-5 mt-3 wow fadeInUp" data-wow-delay="0.3s">
                        Invest confidently in Stocks, G-SEC, Mutual Funds, and IPOs with advanced tools, real-time insights, and a legacy of trust.
                    </p>
                    <div class="d-flex flex-wrap gap-3 mt-4 wow fadeInUp" data-wow-delay="0.4s">
                        <a href="#" class="btn btn-gradient btn-lg px-4">Register BO Account</a>
                        <a href="#" class="btn btn-outline-light btn-lg px-4">Download App</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-visual glass wow fadeInRight" data-wow-delay="0.2s">
                        <img src="https://placehold.co/700x420/0b1220/ffffff?text=Trading+Dashboard+Preview" alt="Trading dashboard preview" class="img-fluid rounded-4">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Indicators -->
    <section class="section-padding pt-2">
        <div class="container">
            <div class="row g-3">
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="counter-box glass p-4 text-center">
                        <h3>29+</h3>
                        <p class="mb-0 text-muted-dark">Years of Trust</p>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="counter-box glass p-4 text-center">
                        <h3>60,000+</h3>
                        <p class="mb-0 text-muted-dark">Satisfied Clients</p>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="counter-box glass p-4 text-center">
                        <h3>Top Ranked</h3>
                        <p class="mb-0 text-muted-dark">Broker</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Cards -->
    <section id="services" class="section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title wow fadeInUp">Our Investment Services</h2>
                <p class="text-muted-dark wow fadeInUp" data-wow-delay="0.1s">One platform for every segment of the market.</p>
            </div>
            <div class="row g-4">
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-card glass">
                        <div class="service-icon">
                            <img src="https://placehold.co/28x28/ffffff/0f172a?text=S" alt="Stocks icon">
                        </div>
                        <h5>Stocks</h5>
                        <p class="text-muted-dark mb-0">Trade listed equities on DSE/CSE with pro-grade execution.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-card glass">
                        <div class="service-icon">
                            <img src="https://placehold.co/28x28/ffffff/0f172a?text=G" alt="G-SEC icon">
                        </div>
                        <h5>G-SEC</h5>
                        <p class="text-muted-dark mb-0">Invest in secure government securities with transparent returns.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-card glass">
                        <div class="service-icon">
                            <img src="https://placehold.co/28x28/ffffff/0f172a?text=M" alt="Mutual Funds icon">
                        </div>
                        <h5>Mutual Funds</h5>
                        <p class="text-muted-dark mb-0">Diversified portfolios managed by experienced fund experts.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-card glass">
                        <div class="service-icon">
                            <img src="https://placehold.co/28x28/ffffff/0f172a?text=I" alt="IPO icon">
                        </div>
                        <h5>IPO</h5>
                        <p class="text-muted-dark mb-0">Easy digital access to initial public offering opportunities.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Investment Anywhere -->
    <section id="platforms" class="section-padding">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-5 wow fadeInLeft">
                    <h2 class="section-title">Invest Anywhere, Anytime</h2>
                    <p class="text-muted-dark mt-3">Access your portfolio across Android, iOS, Windows, and Web with seamless sync and bank-grade security.</p>
                    <a href="#" class="btn btn-gradient mt-2">Get Trading App</a>
                </div>
                <div class="col-lg-7">
                    <div class="row g-3">
                        <div class="col-6 col-md-3 wow zoomIn" data-wow-delay="0.1s">
                            <div class="platform-item glass platform-card p-3">
                                <img src="https://placehold.co/72x72/16a34a/ffffff?text=A" alt="Android app">
                                <span>Android</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 wow zoomIn" data-wow-delay="0.2s">
                            <div class="platform-item glass platform-card p-3">
                                <img src="https://placehold.co/72x72/0ea5e9/ffffff?text=i" alt="iOS app">
                                <span>iOS</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 wow zoomIn" data-wow-delay="0.3s">
                            <div class="platform-item glass platform-card p-3">
                                <img src="https://placehold.co/72x72/2563eb/ffffff?text=W" alt="Windows app">
                                <span>Windows</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 wow zoomIn" data-wow-delay="0.4s">
                            <div class="platform-item glass platform-card p-3">
                                <img src="https://placehold.co/72x72/9333ea/ffffff?text=Web" alt="Web app">
                                <span>Web</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Slider -->
    <section id="reviews" class="section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title wow fadeInUp">What Our Clients Say</h2>
                <p class="text-muted-dark wow fadeInUp" data-wow-delay="0.1s">Trusted by retail and institutional investors across Bangladesh.</p>
            </div>

            <div class="swiper testimonial-swiper wow fadeInUp" data-wow-delay="0.2s">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card glass p-4">
                            <p>“Fast execution, great support, and a user-friendly app. Perfect for active market sessions.”</p>
                            <h6 class="mb-0">Afsana Rahman</h6>
                            <small class="text-muted-dark">Retail Investor, Dhaka</small>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card glass p-4">
                            <p>“The BO opening process was smooth, and their advisory updates are very practical.”</p>
                            <h6 class="mb-0">Mahmud Hasan</h6>
                            <small class="text-muted-dark">Entrepreneur, Chattogram</small>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card glass p-4">
                            <p>“Real-time dashboard and secure transactions gave me confidence to scale my portfolio.”</p>
                            <h6 class="mb-0">Nabila Sultana</h6>
                            <small class="text-muted-dark">Professional Trader, Sylhet</small>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card glass p-4">
                            <p>“I use web and mobile interchangeably and it works flawlessly. Great fintech experience.”</p>
                            <h6 class="mb-0">Ishrak Karim</h6>
                            <small class="text-muted-dark">Investor, Rajshahi</small>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-card">
                        <h6>Company Info</h6>
                        <p class="text-muted-dark small mb-2">TradeFront Securities Ltd.<br>Empowering Bangladesh investors with innovative brokerage solutions.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-card">
                        <h6>Quick Links</h6>
                        <a href="#">Open BO Account</a><br>
                        <a href="#">Trading Platforms</a><br>
                        <a href="#">Research & Insights</a><br>
                        <a href="#">Career</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-card">
                        <h6>Legal & Regulatory</h6>
                        <p class="text-muted-dark small mb-1">BSEC Reg: Placeholder-12345</p>
                        <p class="text-muted-dark small mb-1">DSE TREC: Placeholder-67890</p>
                        <p class="text-muted-dark small mb-0">CSE TREC: Placeholder-24680</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-card">
                        <h6>Contact</h6>
                        <p class="text-muted-dark small mb-1">Dhaka HQ: 123 Motijheel C/A, Dhaka</p>
                        <p class="text-muted-dark small mb-1">Chattogram Office: Agrabad C/A</p>
                        <p class="text-muted-dark small mb-0">Email: support@example-broker.bd</p>
                    </div>
                </div>
            </div>
            <div class="pt-4 mt-4 border-top" style="border-color: rgba(148,163,184,.2) !important;">
                <p class="text-muted-dark mb-0 small">© {{ date('Y') }} TradeFront Securities Ltd. All rights reserved.</p>
            </div>
        </div>
    </footer>
@endsection
