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

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('front/img/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('front/img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front/img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front/img/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('front/img/site.webmanifest') }}">

    <title>@yield('title', 'Printer Repair, Sales & Bulk Printing in Karachi | Craft Copier Solution')</title>
    <meta name="description" content="@yield('meta_description', 'Craft Copier Solution offers expert printer repair, sales, rentals, and bulk printing services in Karachi and across Pakistan. Trusted service for Canon, Kyocera, Ricoh & more.')">
    <meta name="keywords" content="printer repair Karachi, printer sales Karachi, photocopier rental Pakistan, Canon Kyocera Ricoh repair Karachi, bulk printing service Karachi, office printer service Pakistan, laser printer repair Karachi, A3 printer sales, toner cartridge refill, best copier dealer in Pakistan">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="@yield('canonical_url', url()->current())">
    <link rel="alternate" hreflang="en-PK" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="x-default" href="{{ url()->current() }}">
    <meta name="author" content="Craft Copier Solution">
    <meta name="copyright" content="Craft Copier Solution">
    <meta name="publisher" content="Craft Copier Solution">

    <!-- Open Graph -->
    <meta property="og:title" content="@yield('og_title', 'Craft Copier Solution | Printer & Copier Services Karachi, Pakistan')">
    <meta property="og:description" content="@yield('og_description', 'Looking for reliable printer repair or copier rentals in Karachi or Pakistan? Craft Copier Solution is your trusted source.')">
    <meta property="og:image" content="@yield('og_image', asset('front/img/og-image.jpg'))">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Craft Copier Solution">
    <meta property="og:locale" content="en_PK">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:updated_time" content="@yield('og_updated_time', now()->toIso8601String())">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Craft Copier Solution | Printer Services Karachi')">
    <meta name="twitter:description" content="@yield('twitter_description', 'We provide expert printer repair, copier rental, and bulk printing in Karachi and Pakistan.')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('front/img/og-image.jpg'))">
    <meta name="twitter:site" content="@craftcopiersolution">
    <meta name="twitter:creator" content="@craftcopiersolution">

    <meta property="article:published_time" content="@yield('article_published_time', now()->toIso8601String())">

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
      "@context":"http://schema.org",
      "@type":"LocalBusiness",
      "name":"Craft Copier Solution",
      "image":"https://craftcopiersolutions.com/logo.png",
      "url":"https://craftcopiersolutions.com",
      "telephone":"+92-339-0027031",
      "email":"info@craftcopiersolutions.com",
      "address":{"@type":"PostalAddress","streetAddress":"123 Copier St","addressLocality":"Karachi","addressRegion":"Sindh","postalCode":"74600","addressCountry":"PK"},
      "geo":{"@type":"GeoCoordinates","latitude":24.8607,"longitude":67.0011},
      "openingHoursSpecification":{"@type":"OpeningHoursSpecification","dayOfWeek":["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"opens":"09:00","closes":"18:00"},
      "sameAs":["https://www.facebook.com/craftcopiersolutions","https://twitter.com/craftcopiersolution","https://www.linkedin.com/company/craftcopiersolutions","https://www.instagram.com/craftcopiersolution/"],
      "paymentAccepted":["Cash","Credit Card","Bank Transfer"],
      "priceRange":"$$"
    }
    </script>

    <!-- Services Schema -->
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Service",
      "serviceType": "Printer Repair & Bulk Printing",
      "provider": {
        "@type": "Organization",
        "name": "Craft Copier Solution",
        "url": "https://craftcopiersolutions.com"
      },
      "areaServed": {
        "@type": "Place",
        "name": "Karachi, Pakistan"
      },
      "availableChannel": {
        "@type": "ServiceChannel",
        "serviceUrl": "https://craftcopiersolutions.com",
        "availableLanguage": "en"
      }
    }
    </script>

    <script type="application/ld+json">
    {
      "@context":"https://schema.org",
      "@type":"WebSite",
      "url":"https://craftcopiersolutions.com",
      "potentialAction":{"@type":"SearchAction","target":"https://craftcopiersolutions.com/search?q={search_term_string}","query-input":"required name=search_term_string"}
    }
    </script>

    <script type="application/ld+json">
    {
      "@context":"https://schema.org",
      "@type":"WebPage",
      "name":"@yield('title', 'Printer Repair, Sales & Bulk Printing in Karachi | Craft Copier Solution')",
      "description":"@yield('meta_description', 'Craft Copier Solution offers expert printer repair, sales, rentals, and bulk printing services in Karachi and across Pakistan.')",
      "url":"@yield('canonical_url', url()->current())",
      "inLanguage":"en-PK"
    }
    </script>

    @hasSection('breadcrumbs')
    <script type="application/ld+json">
    {
      "@context":"https://schema.org",
      "@type":"BreadcrumbList",
      "itemListElement":[@yield('breadcrumbs')]
    }
    </script>
    @endif

    @livewireStyles


    <!-- Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-89Q28SH00Z"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-89Q28SH00Z');
    </script>
    <noscript><img src="https://www.googletagmanager.com/ns.html?id=G-89Q28SH00Z" alt="" style="display:none;" /></noscript>
    <script src="https://analytics.ahrefs.com/analytics.js" data-key="f1Gix9bLikaAvYHKF8dZQ" async></script>

    <!-- Styles & Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700&display=swap" rel="stylesheet">
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

    @livewireStyles
</head>


<style>
     html, body {
        max-width: 100vw !important;
        overflow-x: hidden  !important;
    }
    
</style>

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
                            <a href="https://www.facebook.com/craftcopiersolutions" target="_blank" rel="noopener noreferrer me">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <!-- WhatsApp -->
                            <a href="https://wa.me/+923282499598" target="_blank" rel="noopener noreferrer me">
                                <i class="fa fa-whatsapp"></i>
                            </a>
                            <!-- Instagram -->
                            <a href="https://www.instagram.com/craftcopiersolution/" target="_blank" rel="noopener noreferrer me">
                                <i class="fa fa-instagram"></i>
                            </a>
                            <!-- YouTube -->
                            <a href="https://www.youtube.com/@craftcopiersolution" target="_blank" rel="noopener noreferrer me">
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
                        <li>
                            <a wire:navigate href="{{ route('homepage') }}" @if(request()->routeIs('homepage')) aria-current="page" @endif>Home</a>
                        </li>
                        <li>
                            <a wire:navigate href="{{ route('aboutpage') }}" @if(request()->routeIs('aboutpage')) aria-current="page" @endif>About</a>
                        </li>
                        @livewire('service-dropdown')
                        @livewire('product-dropdown')
                        <li>
                            <a wire:navigate href="/contact" @if(request()->is('contact')) aria-current="page" @endif>Contact</a>
                        </li>
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
                                    <li><a href="{{ route('aboutpage') }}">About Us</a></li>
                                    <li><a href="{{ route('homepage') }}#our-best-machines">Services</a></li>
                                    <li><a href="{{ route('homepage') }}#blog-list-area">Blog</a></li>
                                    <li><a href="{{ route('contactpage') }}">Contact</a></li>
                                    <li><a href="{{ route('homepage') }}#other-issue-area">Other Issue</a></li>
                                    <li><a href="{{ route('homepage') }}#testimonials-area">Testimonials</a></li>
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
                            <a class="col-3" href="https://www.facebook.com/profile.php?id=61556891930367" target="_blank" rel="noopener noreferrer me"><i class="fa fa-facebook"></i></a>
                            <a class="col-3" href="https://wa.me/+923282499598" target="_blank" rel="noopener noreferrer me"><i class="fa fa-whatsapp"></i></a>
                            <a class="col-3" href="https://www.instagram.com/craftcopiersolution/" target="_blank" rel="noopener noreferrer me"><i class="fa fa-instagram"></i></a>
                            <a class="col-3" href="https://www.youtube.com/@craftcopiersolution" target="_blank" rel="noopener noreferrer me"><i class="fa fa-youtube"></i></a>
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
                    <a class="col-3" href="https://www.facebook.com/profile.php?id=61556891930367" target="_blank" rel="noopener noreferrer me"><i class="fa fa-facebook"></i></a>
                    <a class="col-3" href="https://wa.me/+923282499598" target="_blank" rel="noopener noreferrer me"><i class="fa fa-whatsapp"></i></a>
                    <a class="col-3" href="https://www.instagram.com/craftcopiersolution/" target="_blank" rel="noopener noreferrer me"><i class="fa fa-instagram"></i></a>
                    <a class="col-3" href="https://www.youtube.com/@craftcopiersolution" target="_blank" rel="noopener noreferrer me"><i class="fa fa-youtube"></i></a>
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
    <script>
        // Add loading="lazy" to all images after DOMContentLoaded
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('img').forEach(function(img) {
                img.setAttribute('loading', 'lazy');
            });
        });
    </script>
    @livewireScripts
</body>

</html>