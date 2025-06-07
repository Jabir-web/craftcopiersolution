<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="theme-color" content="#ffc107">
    <meta name="format-detection" content="telephone=no">
    <meta name="HandheldFriendly" content="true">
    <meta name="mobile-web-app-capable" content="yes">

    {{-- #### Favicon #### --}}
    <link rel="icon" href="{{ asset('front/img/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('front/img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front/img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front/img/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('front/img/site.webmanifest') }}">

    <!-- Title SEO Tag -->
    <title>@yield('title', 'Craft Copier Solution | Copier Rental, Sales & Repair in Karachi')</title>

    {{-- Meta description --}}
    <meta name="description"
        content="@yield('meta_description', 'Top-quality copier rental, sales, and repair services in Karachi. Fast, reliable, and affordable office copier solutions. Contact us now!')">


    <!-- Meta Keywords -->
    <meta name="keywords"
        content="@yield('meta_keywords', 'copier rental Karachi, photocopier dealer Karachi, Kyocera copier repair Karachi, office copier rental, buy photocopier in Karachi, copier maintenance services, printer service Karachi, best copier dealers Karachi')">

    <!-- Robots Meta Tag -->
    <meta name="robots" content="index, follow">

    <!-- Canonical Tag -->
    <link rel="canonical" href="@yield('canonical_url', url()->current())">

    <!-- Alternate Language -->
    <link rel="alternate" hreflang="en" href="{{ url()->current() }}" />

    <!-- Author -->
    <meta name="author" content="Craft Copier Solution">

    <!-- Open Graph for Social Media -->
    <meta property="og:title"
        content="@yield('og_title', 'Craft Copier Solution | Printer Sales & Repair Services in Karachi')">
    <meta property="og:description"
        content="@yield('og_description', 'Expert printer repair, maintenance, and sales solutions. Contact us today for top-quality service!')">
    <meta property="og:image"
        content="@yield('og_image', asset('front/img/og-image.jpg'))">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Craft Copier Solution">
    <meta property="og:locale" content="en_US">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title"
        content="@yield('twitter_title', 'Craft Copier Solution | Printer Sales & Repair Services')">
    <meta name="twitter:description"
        content="@yield('twitter_description', 'Looking for expert printer repair or a new printer? Get the best deals and services here!')">
    <meta name="twitter:image"
        content="@yield('twitter_image', asset('front/img/og-image.jpg'))">
    <meta name="twitter:site" content="@craftcopiersolution">
    <meta name="twitter:creator" content="@craftcopiersolution">

    {{-- ==================== END SEO TAGS ===================== --}}

    {{-- ==================== SCHEMA.ORG MARKUP (Structured Data) ===================== --}}
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "url": "https://craftcopiersolutions.com",
      "name": "Craft Copier Solution",
      "logo": "https://craftcopiersolutions.com/logo.png",
      "sameAs": [
        "https://www.facebook.com/craftcopiersolutions",
        "https://twitter.com/craftcopiersolution",
        "https://www.linkedin.com/company/craftcopiersolutions",
        "https://www.instagram.com/craftcopiersolution/"
      ],
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+92-339-0027031",
        "contactType": "Customer Service",
        "areaServed": "PK",
        "availableLanguage": "en"
      },
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "123 Copier St",
        "addressLocality": "Karachi",
        "addressRegion": "Sindh",
        "postalCode": "74600",
        "addressCountry": "Pakistan"
      }
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "url": "https://craftcopiersolutions.com",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://craftcopiersolutions.com/search?q={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    }
    </script>
    {{-- BreadcrumbList example --}}
    @hasSection('breadcrumbs')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        @yield('breadcrumbs')
      ]
    }
    </script>
    @endif

    {{-- ######################### FOR GOOGLE ANALYTICS ########################## --}}
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-89Q28SH00Z"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-89Q28SH00Z');
    </script>
    <noscript>
        <img src="https://www.googletagmanager.com/ns.html?id=G-89Q28SH00Z" alt="Google Tag Manager" style="display:none;visibility:hidden"/>
    </noscript>
    {{-- ######################### FOR GOOGLE ANALYTICS ########################## --}}

    <!-- Preconnect for Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/mai.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <script src="https://analytics.ahrefs.com/analytics.js" data-key="f1Gix9bLikaAvYHKF8dZKQ" async></script>
    @livewireStyles
</head>

<body>
    <a href="#main-content" class="skip-link sr-only sr-only-focusable">Skip to main content</a>
    <div id="loader" class="loader" style="display: none">
        <div class="spinners"></div>
    </div>
    <header id="header" role="banner">
        <div class="header-top ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6 col-6 header-top-left">
                        <ul>
                            <li><a href="#">Best Printers</a></li>
                            <li><a href="#">Printer Solutions</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-6 header-top-right">
                        <div class="header-social">
                            <!-- Facebook -->
                            <a href="https://www.facebook.com/craftcopiersolutions" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <!-- WhatsApp -->
                            <a href="https://wa.me/+923282499598" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-whatsapp"></i>
                            </a>
                            <!-- Instagram -->
                            <a href="https://www.instagram.com/craftcopiersolution/" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-instagram"></i>
                            </a>
                            <!-- YouTube -->
                            <a href="https://www.youtube.com/@craftcopiersolution" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-youtube"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="{{ route('homepage') }}" aria-label="Craft Copier Solution Home">
                        <h3 class="text-warning">Craft Copier Solution</h3>
                    </a>
                </div>
                <nav id="nav-menu-container" aria-label="Main Navigation">
                    <ul class="nav-menu">
                        <li><a wire:navigate href="{{ route('homepage') }}">Home</a></li>
                        <li><a wire:navigate href="{{ route('aboutpage') }}">About</a></li>
                        @livewire('service-dropdown')
                        @livewire('product-dropdown')
                        <li><a wire:navigate href="/contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main id="main-content" tabindex="-1">
        {{ $slot }}
    </main>

    <!-- start footer Area -->
    <footer class="footer-area section-gap" role="contentinfo">
        <div class="container">
            <div class="row">
                <!-- About Section -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>ABOUT CRAFT COPIER SOLUTION</h6>
                        <p>
                            Craft Copier Solution specializes in high-quality printing solutions, providing
                            cost-effective and innovative copier and printing services. Our mission is to bridge the gap
                            between high OEM prices and low-quality alternatives by delivering premium printing
                            solutions at competitive rates.
                        </p>
                    </div>
                </div>
                <!-- Navigation Links Section -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Navigation Links</h6>
                        <div class="row">
                            <div class="col">
                                <ul>
                                    <li><a href="{{ route('homepage') }}">Home</a></li>
                                    <li><a href="{{ route('aboutpage') }}">About us</a></li>
                                    <li><a href="/contact">Services</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Social Media Links Section -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Our Social Media Accounts</h6>
                        <p>Stay updated with our latest printing solutions and exclusive offers.</p>
                        <div class="row footer-social">
                            <a class="col-3" href="https://www.facebook.com/profile.php?id=61556891930367" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook"></i></a>
                            <a class="col-3" href="https://wa.me/+923282499598" target="_blank" rel="noopener noreferrer"><i class="fa fa-whatsapp"></i></a>
                            <a class="col-3" href="https://www.instagram.com/craftcopiersolution/" target="_blank" rel="noopener noreferrer"><i class="fa fa-instagram"></i></a>
                            <a class="col-3" href="https://www.youtube.com/@craftcopiersolution" target="_blank" rel="noopener noreferrer"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom Section -->
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <p class="col-lg-8 col-sm-12 footer-text m-0">
                    Copyright © 2015-@php echo date('Y'); @endphp Craft Copier Solution. All Rights Reserved.
                </p>
                <div class="col-lg-4 col-sm-12 footer-social">
                    <a class="col-3" href="https://www.facebook.com/profile.php?id=61556891930367" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook"></i></a>
                    <a class="col-3" href="https://wa.me/+923282499598" target="_blank" rel="noopener noreferrer"><i class="fa fa-whatsapp"></i></a>
                    <a class="col-3" href="https://www.instagram.com/craftcopiersolution/" target="_blank" rel="noopener noreferrer"><i class="fa fa-instagram"></i></a>
                    <a class="col-3" href="https://www.youtube.com/@craftcopiersolution" target="_blank" rel="noopener noreferrer"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- End footer Area -->
    <script src="{{ asset('front/js/vendor/jquery-2.2.4.min.js') }}" defer></script>
    <script src="{{ asset('front/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('front/js/vendor/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('front/js/jquery-ui.js') }}" defer></script>
    <script src="{{ asset('front/js/easing.min.js') }}" defer></script>
    <script src="{{ asset('front/js/hoverIntent.js') }}" defer></script>
    <script src="{{ asset('front/js/superfish.min.js') }}" defer></script>
    <script src="{{ asset('front/js/jquery.ajaxchimp.min.js') }}" defer></script>
    <script src="{{ asset('front/js/jquery.magnific-popup.min.js') }}" defer></script>
    <script src="{{ asset('front/js/jquery.nice-select.min.js') }}" defer></script>
    <script src="{{ asset('front/js/owl.carousel.min.js') }}" defer></script>
    <script src="{{ asset('front/js/mail-script.js') }}" defer></script>
    <script src="{{ asset('front/js/main.js') }}" defer></script>
    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
    @livewireScripts
</body>

</html>