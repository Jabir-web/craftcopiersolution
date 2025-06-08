@section('title', 'Printer Sales, Repairs & Rentals | Craft Copier Solution')
@section('meta_description', 'Craft Copier Solution: Printer sales, rentals, repairs & accessories in Karachi, Pakistan & worldwide. High-quality printers, expert maintenance, genuine parts.')
@section('meta_keywords', 'printer sales Karachi, printer rentals Pakistan, printer repairs, copier solutions, office printers, copier maintenance, printer accessories, Craft Copier Solution, photocopier dealer Pakistan, international printer sales, global copier services, office equipment export, Karachi, Pakistan, UAE, Saudi Arabia, Middle East, Africa, Europe, Asia')
@section('og_title', 'Printer Sales, Repairs & Rentals | Craft Copier Solution')
@section('og_description', 'Reliable printer solutions: sales, rentals, repairs, and accessories for your business in Pakistan and worldwide.')
@section('og_image', asset('front/img/web/prthree.jpg'))
@section('og_url', url()->current())
@section('twitter_title', 'Printer Sales, Repairs & Rentals | Craft Copier Solution')
@section('twitter_description', 'Reliable printer solutions: sales, rentals, repairs, and accessories for your business in Pakistan and worldwide.')
@section('twitter_image', asset('front/img/web/prthree.jpg'))
@section('canonical_url', url()->current())

{{-- Remove duplicate <title> and meta tags from @push('head') --}}
@push('head')
    <!-- Only include structured data and any additional scripts/styles here, NOT <title> or meta description/keywords -->
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Craft Copier Solution",
      "url": "{{ url('/') }}",
      "logo": "{{ asset('front/img/logo.png') }}",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+92-XXX-XXXXXXX",
        "contactType": "customer service",
        "areaServed": "PK"
      },
      "sameAs": [
        "https://www.facebook.com/yourpage"
      ]
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
                            <div class="row align-items-center">
                                <div class="col-md-3 text-center mb-3 mb-md-0">
                                    <img src="{{ asset('data:image/jpeg;base64,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') }}" alt="Custom Package" style="max-width: 100px; border-radius: 16px; box-shadow: 0 4px 18px rgba(255,193,7,0.13); background: #fff;">
                                </div>
                                <div class="col-md-6 text-center text-md-start">
                                    <h2 class="fw-bold mb-2" style="color: #0F172A; font-size: 2rem;">
                                        Didn't find your package?
                                    </h2>
                                    <p class="mb-0" style="color: #555; font-size: 1.13rem;">
                                        No worries! We specialize in custom solutions for all your printing and copier needs. Let us know your requirements and our team will create a tailored package just for you.
                                    </p>
                                </div>
                                <div class="col-md-3 text-center mt-3 mt-md-0">
                                    <a href="{{ route('contactpage') }}" class="btn btn-lg btn-warning px-4 py-2 rounded-pill fw-bold shadow" style="font-size: 1.15rem; letter-spacing: 1px;">
                                        <i class="fa fa-envelope me-2"></i>Request Custom Price
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
