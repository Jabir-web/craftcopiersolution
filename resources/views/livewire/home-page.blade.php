<head>
    <!-- Title SEO Tag -->
    <title>@yield('title', 'Craft Copier Solutions | Copier Rental & Kyocera Photocopier Dealer Karachi')</title>

    <!-- Meta Description -->
    <meta name="description" content="@yield('description', 'Explore the evolution of printing technology from 1970s to 2025. Discover key milestones and the future of smart, sustainable printing.')">

    <!-- Meta Keywords -->
    <meta name="keywords" content="@yield('keywords', 'copier rental Karachi, photocopier dealer Karachi, Kyocera copier repair Karachi, Kyocera dealers Karachi, office copier rental, buy photocopier in Karachi, copier maintenance services, Kyocera printer service, Karachi copier shop, best copier dealers Karachi')">

    <!-- Robots Meta Tag -->
    <meta name="robots" content="index, follow">

    <!-- Canonical Tag -->
    <link rel="canonical" href="@yield('canonical_url', 'https://craftcopiersolutions.com')">

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

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-89Q28SH00Z"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-89Q28SH00Z');
    </script>
</head>

<div class="">
    <!-- start banner Area -->
    <section class="banner-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6 banner-left">
                    <h6 class="text-white d-none d-md-block">Your one-stop shop for printer sales, repairs, and maintenance.</h6>
                    <h1 class="text-white">RELIABLE PRINTER SOLUTIONS</h1>
                    <p class="text-white d-none d-md-block">
                        Craft Copier Solution is your trusted provider of high-quality printers, accessories, and professional repair services. Whether you need a new printer for your office, maintenance for an existing one, or genuine accessories like toner and cartridges
                    </p>
                    <div>
                        <a href="{{ route('contactpage') }}" wire:navigate class="primary-btn text-uppercase d-none d-md-block">Get a Free Consultation.</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 banner-right">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="flight-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="flight" aria-selected="true">Rental</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="false">Repair</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="holiday-tab" data-toggle="tab" href="#holiday" role="tab" aria-controls="holiday" aria-selected="false">Accessories</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
                            @livewire('client-rental')
                        </div>
                        <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                            @livewire('client-repair')
                        </div>
                        <div class="tab-pane fade" id="holiday" role="tabpanel" aria-labelledby="holiday-tab">
                            @livewire('accessories-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start popular-destination Area -->
    <section class="popular-destination-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h2 class="mb-10">Our Best Machines</h2>
                        <p>We import upgraded models of KONICA MINOLTA, RICOH , KYOCERA , and XEROX. Each photocopier machine is fully inspected so when you take delivery you can be sure the copier is in top-class working condition.</p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                @foreach ($products as $product)
                    <div class="col-sm-12 col-md-6 col-lg-4 d-flex">
                        <div class="product-card w-100">
                            <div class="product-image">
                                <img loading="lazy" src="{{ asset('front/img/web/prthree.jpg') }}" alt="{{ $product->name }} Printer" />
                            </div>
                            <div class="product-body">
                                <h4>{{ $product->name }}</h4>
                                <a wire:navigate href="{{ route('machines', ['product_id' => $product->id]) }}" class="product-link">
                                    {{ $product->name }} MACHINES
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End popular-destination Area -->

    <!-- Start other-issue Area -->
    @livewire('other-issue')
    <!-- End other-issue Area -->

    <!-- Start testimonial Area -->
    @livewire('testimonials')
    <!-- End testimonial Area -->

    <!-- Start home-about Area -->
    <section class="home-about-area">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-end">
                <div class="col-lg-12 col-md-12 home-about-left">
                    <h2>Did not find your Package? <br> Feel free to ask us. <br> We‘ll make it for you</h2>
                    <p>We provide customized solutions based on your specific needs. Let us help you find the right package.</p>
                    <a href="{{ route('contactpage') }}" class="primary-btn text-uppercase">request custom price</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End home-about Area -->

    <!-- Start blog Area -->
    @livewire('blog-list')
    <!-- End recent-blog Area -->
</div>

<!-- Custom CSS -->
<style>
    .product-card {
        border-radius: 16px;
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        height: 100%;
        background-color: #ffffff;
        border: none;
    }

    .product-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 25px 35px rgba(0, 0, 0, 0.15);
    }

    .product-image {
        width: 100%;
        height: 230px;
        overflow: hidden;
    }

    .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .product-card:hover .product-image img {
        transform: scale(1.05);
    }

    .product-body {
        padding: 20px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        text-align: center;
    }

    .product-body h4 {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 15px;
        color: #0F172A;
    }

    .product-link {
        background: #ffc107!important;
        color: #ffffff;
        padding: 10px 20px;
        border-radius: 25px;
        text-decoration: none;
        font-weight: 500;
        display: inline-block;
        transition: background 0.3s ease;
    }

    .product-link:hover {
        background: #0F172A;
    }
</style>
