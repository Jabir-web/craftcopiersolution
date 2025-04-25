<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

{{-- #### Favicon #### --}}
<link rel="icon" href="{{ asset('front/img/favicon.ico') }}" type="image/x-icon">

{{-- #### Title SEO Tag #### --}}
<title>@yield('title', 'Copier Rental & Kyocera Photocopier Dealer Karachi | Craft Copier Solutions')</title>

{{-- ==================== FOR SEO TAGS ===================== --}}

<!-- Meta Description -->
<meta name="description" content="@yield('description', 'Affordable copier rental and repair services in Karachi. We specialize in Kyocera printers. Fast support and expert service available!')">

<!-- Meta Keywords -->
<meta name="keywords" content="@yield('keywords', 'copier rental Karachi, photocopier dealer Karachi, Kyocera copier repair Karachi, Kyocera dealers Karachi, office copier rental, buy photocopier in Karachi, copier maintenance services, Kyocera printer service, Karachi copier shop, best copier dealers Karachi')">

<!-- Robots Meta Tag -->
<meta name="robots" content="index, follow">

<!-- Author -->
<meta name="author" content="Craft Copier Solution">

<!-- Open Graph for Social Media -->
<meta property="og:title" content="@yield('og_title', 'Craft Copier Solution | Printer Sales & Repair Services in Pakistan')">
<meta property="og:description" content="@yield('og_description', 'We provide expert printer repair, maintenance, and sales solutions. Contact us today for top-quality service!')">
<meta property="og:image" content="@yield('og_image', 'https://craftcopiersolutions.com/images/printer-repair.jpg')">
<meta property="og:url" content="@yield('og_url', 'https://craftcopiersolutions.com')">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Craft Copier Solution">
<meta property="og:locale" content="en_US">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="@yield('twitter_title', 'Craft Copier Solution | Printer Sales & Repair Services')">
<meta name="twitter:description" content="@yield('twitter_description', 'Looking for expert printer repair or a new printer? Get the best deals and services here!')">
<meta name="twitter:image" content="@yield('twitter_image', 'https://craftcopiersolutions.com/images/printer-repair.jpg')">
<meta name="twitter:site" content="@yourtwitterhandle">
<meta name="twitter:creator" content="@yourtwitterhandle">

<!-- Canonical Tag -->
<link rel="canonical" href="@yield('canonical_url', 'https://craftcopiersolutions.com')">

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
    "https://twitter.com/yourtwitterhandle",
    "https://www.linkedin.com/company/craftcopiersolutions"
  ],
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+92-21-1234567",
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
  },
  "sameAs": [
    "https://www.facebook.com/craftcopiersolutions",
    "https://twitter.com/yourtwitterhandle"
  ]
}
</script>

{{-- ######################### FOR GOOGLE ANALYTICS ########################## --}}
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-89Q28SH00Z"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-89Q28SH00Z');
</script>

    {{-- ######################### FOR GOOGLE ANAYLTICS ########################## --}}



    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
        CSS
        ============================================= -->
    <link rel="stylesheet" href="{{ asset('front/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/mai.css') }}">

    <script src="https://analytics.ahrefs.com/analytics.js" data-key="f1Gix9bLikaAvYHKF8dZKQ" async></script>
    @livewireStyles
</head>

<body>
    <div id="loader" class="loader" style="display: none">
        <div class="spinners"></div>
    </div>
    <header id="header">
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
                            <a href="https://www.facebook.com/profile.php?id=61556891930367&rdid=4qDlIWTRQW53rlKG&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F14izAv1Qm5%2F#"
                                target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://wa.me/+923282499598" target="_blank"><i class="fa fa-whatsapp"></i></a>
                            <a href="https://www.instagram.com/craftcopiersolution/#" target="_blank"><i
                                    class="fa fa-instagram"></i></a>
                            <a href="https://www.youtube.com/@craftcopiersolution" target="_blank"><i
                                    class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="{{ route('homepage') }}">
                        <h3 class="text-warning">Craft Copier Solution</h3>
                    </a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li><a wire:navigate href="{{ route('homepage') }}">Home</a></li>
                        <li><a wire:navigate href="{{ route('aboutpage') }}">About</a></li>
                        @livewire('service-dropdown')
                        @livewire('product-dropdown')
                        <li><a wire:navigate href="/contact">Contact</a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header>

    {{ $slot }}

    <!-- start footer Area -->
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4  col-md-6 col-sm-6">
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
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Navigation Links</h6>
                        <div class="row">
                            <div class="col">
                                <ul>
                                    <li><a href="{{ route('homepage') }}">Home</a></li>
                                    <li><a href="{{ route('aboutpage') }}">About us</a></li>
                                    <li><a wire:navigate href="/contact">Services</a></li>
                                    <li><a href="#">Products</a></li>
                                    <li><a href="#">Blogs</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Our Social Media Accounts</h6>
                        <p>
                            Stay updated with our latest printing solutions and exclusive offers.
                        </p>
                        <div id="mc_embed_signup ">
                            <div class="row footer-social">
                                <a class="col-3"
                                    href="https://www.facebook.com/profile.php?id=61556891930367&rdid=4qDlIWTRQW53rlKG&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F14izAv1Qm5%2F#"
                                    target="_blank"><i class="fa fa-facebook"></i></a>
                                <a class="col-3" href="https://wa.me/+923282499598" target="_blank"><i
                                        class="fa fa-whatsapp"></i></a>
                                <a class="col-3" href="https://www.instagram.com/craftcopiersolution/#"
                                    target="_blank"><i class="fa fa-instagram"></i></a>
                                <a class="col-3" href="https://www.youtube.com/@craftcopiersolution"
                                    target="_blank"><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <p class="col-lg-8 col-sm-12 footer-text m-0">
                    Copyright © 2015-2025 Craft Copier Solution. All Rights Reserved.
                </p>
                <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="https://www.facebook.com/profile.php?id=61556891930367&rdid=4qDlIWTRQW53rlKG&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F14izAv1Qm5%2F#"
                        target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://wa.me/+923282499598" target="_blank"><i class="fa fa-whatsapp"></i></a>
                    <a href="https://www.instagram.com/craftcopiersolution/#" target="_blank"><i
                            class="fa fa-instagram"></i></a>
                    <a href="https://www.youtube.com/@craftcopiersolution" target="_blank"><i
                            class="fa fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->

    <script src="{{ asset('front/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('front/js/popper.min.js') }}"></script>
    <script src="{{ asset('front/js/vendor/bootstrap.min.js') }}"></script>
    {{-- <script src="{{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA') }}"></script> --}}
    <script src="{{ asset('front/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('front/js/easing.min.js') }}"></script>
    <script src="{{ asset('front/js/hoverIntent.js') }}"></script>
    <script src="{{ asset('front/js/superfish.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/js/mail-script.js') }}"></script>
    <script src="{{ asset('front/js/main.js') }}"></script>

    @livewireScripts
</body>

</html> 