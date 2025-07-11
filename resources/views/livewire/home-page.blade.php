@section('title', 'Printer Sales, Repairs & Rentals | Craft Copier Solution')
@section('meta_description', 'Craft Copier Solution: Printer sales, rentals, repairs & accessories in Karachi, Pakistan. High-quality printers & expert maintenance.')
@section('meta_keywords', 'printer sales Karachi, printer rentals Pakistan, printer repairs, copier solutions, office printers, copier maintenance, printer accessories, Craft Copier Solution, photocopier dealer Pakistan, international printer sales, global copier services, office equipment export, Karachi, Pakistan, UAE, Saudi Arabia, Middle East, Africa, Europe, Asia')
@section('og_title', 'Printer Sales, Repairs & Rentals | Craft Copier Solution')
@section('og_description', 'Reliable printer solutions: sales, rentals, repairs, and accessories for your business in Pakistan and worldwide.')
@section('og_image', asset('front/img/web/prthree.jpg'))
@section('og_url', url()->current())
@section('twitter_title', 'Printer Sales, Repairs & Rentals | Craft Copier Solution')
@section('twitter_description', 'Reliable printer solutions: sales, rentals, repairs, and accessories for your business in Pakistan and worldwide.')
@section('twitter_image', asset('front/img/web/prthree.jpg'))
@section('canonical_url', url()->current())

@push('head')
    <!-- LocalBusiness Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "Craft Copier Solution",
      "image": "{{ asset('front/img/logo.png') }}",
      "url": "{{ url('/') }}",
      "telephone": "+92-339-0027031",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "123 Copier St",
        "addressLocality": "Karachi",
        "addressRegion": "Sindh",
        "postalCode": "74600",
        "addressCountry": "PK"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 24.8607,
        "longitude": 67.0011
      },
      "openingHours": "Mo,Tu,We,Th,Fr 09:00-18:00",
      "sameAs": [
        "https://www.facebook.com/craftcopiersolutions",
        "https://twitter.com/craftcopiersolution",
        "https://www.linkedin.com/company/craftcopiersolutions",
        "https://www.instagram.com/craftcopiersolution/"
      ],
      "paymentAccepted": "Cash, Credit Card, Bank Transfer"
    }
    </script>
@endpush

<div class="">
        <!-- start banner Area -->
        <section class="banner-area relative ">
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
                    <div class="col-lg-4 col-md-6 banner-right ">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="flight-tab" data-toggle="tab" href="#flight" role="tab"
                                    aria-controls="flight" aria-selected="true">Rental</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab"
                                    aria-controls="hotel" aria-selected="false">Repair</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="holiday-tab" data-toggle="tab" href="#holiday" role="tab"
                                    aria-controls="holiday" aria-selected="false">Accessories</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="flight" role="tabpanel"
                                aria-labelledby="flight-tab">
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
        <section id="our-best-machines" class="popular-destination-area section-gap">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h2 class="mb-10">Our Best Machines</h2>
                            <p>We import upgraded models of KONICA MINOLTA, RICOH , KYOCERA , and XEROX. Each photocopier machine is fully inspected so when you take delivery you can be sure the copier is in top class working condition.</p>
                        </div>
                    </div>
                </div>
                {{-- boxes  --}}
                <div class="row g-4">
                    @foreach ($products as $product)
                        <div class="col-sm-12 col-md-6 col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                            <div class="product-card w-100"
                                style="background: #fff; border-radius: 16px; overflow: hidden; box-shadow: 0 8px 24px rgba(0,0,0,0.12); transition: 0.3s ease; display: flex; flex-direction: column; justify-content: space-between;">
                
                                <div class="product-image"
                                    style="width: 100%; height: 220px; display: flex; align-items: center; justify-content: center; background: #f9f9f9; padding: 10px;">
                                    @php
                                        $image = match(true) {
                                            $loop->iteration == 1 => 'prthree.jpg',
                                            $loop->iteration == 2 => 'prtwo.jpg',
                                            $loop->iteration == 3 => 'prone.jpg',
                                            default => 'default.jpg',
                                        };
                                    @endphp
                                    <img loading="lazy" src="{{ asset('front/img/web/' . $image) }}" alt="{{ $product->name }}"
                                        style="max-width: 100%; max-height: 100%; object-fit: contain;">
                                </div>
                
                                <div class="product-body" style="padding: 20px; text-align: center;">
                                    <h3 style="font-size: 1.3rem; font-weight: 600; color: #222; margin-bottom: 10px;">
                                        {{ $product->name }}
                                    </h3>
                                    <a wire:navigate href="{{ route('machines', ['product_id' => $product->id]) }}"
                                        style="display: inline-block; padding: 10px 20px; background: linear-gradient(45deg, #ffc107, #ffb300); color: #fff; border-radius: 30px; text-decoration: none; font-weight: 500; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: 0.3s;">
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
    <section id="other-issue-area">
        @livewire('other-issue')
    </section>
    <!-- End other-issue Area -->
      
    <!-- Start testimonial Area -->
    <section id="testimonials-area">
        @livewire('testimonials')
    </section>
    <!-- End testimonial Area -->
    
        <!-- Start home-about Area -->
        <section class="home-about-area py-5" style="background: #fffbe7;">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-10 mx-auto">
                        <div class="card shadow-lg border-0 rounded-4 p-4" style="background: linear-gradient(120deg, #fffbe7 70%, #fff 100%);">
                            <div class="d-flex flex-column flex-md-row align-items-center justify-content-center gap-4">
                                <div class="flex-shrink-0 text-center">
                                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Custom Package" style="max-width: 70px; border-radius: 16px; box-shadow: 0 4px 18px rgba(255,193,7,0.13); background: #fff;">
                                </div>
                                <div class="flex-grow-1 text-center text-md-start">
                                    <h2 class="fw-bold mb-2" style="color: #0F172A; font-size: 2rem;">
                                        Didn't find your package?
                                    </h2>
                                    <p class="mb-0" style="color: #555; font-size: 1.13rem;">
                                        <span style="display:inline-block;vertical-align:middle;margin-right:8px;">
                                            <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" alt="Question" style="width:22px;height:22px;">
                                        </span>
                                        No worries! We specialize in <span class="text-warning fw-bold">custom solutions</span> for all your printing and copier needs. Let us know your requirements and our team will create a tailored package just for you.
                                    </p>
                                </div>
                                <div class="flex-shrink-0 mt-3 mt-md-0 d-flex justify-content-center align-items-center w-100" style="max-width: 300px;">
                                    <a href="{{ route('contactpage') }}" class="btn btn-lg btn-warning px-4 py-2 rounded-pill fw-bold shadow d-flex align-items-center justify-content-center w-100" style="font-size: 1.08rem; letter-spacing: 1px; min-width: 200px; white-space: nowrap;">
                                        <img src="https://cdn-icons-png.flaticon.com/512/561/561127.png" alt="Contact" style="width:22px;height:22px;margin-right:10px;">Request Custom Price
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .home-about-area .card .d-flex {
                    gap: 32px;
                }
                @media (max-width: 991.98px) {
                    .home-about-area .card .d-flex {
                        flex-direction: column !important;
                        text-align: center !important;
                        gap: 18px;
                    }
                    .home-about-area .card .flex-shrink-0,
                    .home-about-area .card .flex-grow-1 {
                        width: 100% !important;
                        max-width: 100% !important;
                    }
                }
                .home-about-area .btn-warning {
                    font-size: 1.08rem;
                    font-weight: 600;
                    padding-left: 1.5rem;
                    padding-right: 1.5rem;
                    min-width: 200px;
                    white-space: nowrap;
                }
            </style>
        </section>
        <!-- End home-about Area -->
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
    
        <!-- Start blog Area -->
        <section id="blog-list-area">
            @livewire('blog-list')
        </section>
        <!-- End recent-blog Area -->
</div>
