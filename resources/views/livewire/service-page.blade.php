{{-- SEO meta tags --}}
@push('head')
    <title>{{ $productsingle->name }} | Services | Craft Copier Solution</title>
    <meta name="description" content="Discover {{ $productsingle->name }} services at Craft Copier Solution. Professional, reliable, and affordable office equipment and support for your business.">
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="robots" content="index, follow">
    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="{{ $productsingle->name }} | Services | Craft Copier Solution">
    <meta property="og:description" content="Discover {{ $productsingle->name }} services at Craft Copier Solution. Professional, reliable, and affordable office equipment and support for your business.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="service">
    <meta property="og:image" content="{{ isset($machines[0]) ? url('storage/' . $machines[0]->img) : asset('front/img/logo.png') }}">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $productsingle->name }} | Services | Craft Copier Solution">
    <meta name="twitter:description" content="Discover {{ $productsingle->name }} services at Craft Copier Solution. Professional, reliable, and affordable office equipment and support for your business.">
    <meta name="twitter:image" content="{{ isset($machines[0]) ? url('storage/' . $machines[0]->img) : asset('front/img/logo.png') }}">
@endpush

@section('title')
{{ $productsingle->name }} - Craft Copier Solution
@endsection
<div>
    <!-- start banner Area -->
    <section class="relative about-banner">    
        <div class="overlay overlay-bg"></div>
        <div class="container">                
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        {{ $productsingle->name }}              
                    </h1>    
                    <p class="text-white link-nav">Home   <span class="lnr lnr-arrow-right"></span>Products  <span class="lnr lnr-arrow-right"></span>  {{ $productsingle->name }}   </p>
                </div>    
            </div>
        </div>
    </section>
    <!-- End banner Area -->                      
    
    <!-- Start post-content Area -->
    <section class="post-content-area single-post-area">
        <div class="container">
            <div class="row">
                <!-- Left Column: Machines -->
                <div class="col-lg-8 posts-list" data-aos="fade-up">
                    <div class="row mt-4">
                        @if($machines)
                            @foreach($machines as $index => $machine)
                                <div class="col-lg-12 col-md-12 mb-4 bg-white p-4"
                                    data-aos="fade-up" 
                                    data-aos-delay="{{ $index * 100 }}">
                                    <div class="row align-items-center">
                                        <img loading="lazy" src="{{ url('storage/' . $machine->img) }}" alt="{{ $machine->description }}" class="img-fluid fixed-image">
    
                                        <div class="col-md-12 d-flex flex-column justify-content-center mt-3">
                                            <p class="card-text">{!! $machine->description !!}</p>
                                            <div>
                                                <a wire:navigate href="{{ route('contactpage') }}" class="btn btn-warning">Contact Us</a>
                                                <a href="https://wa.me/+923282499598" class="btn btn-success"><i class="fa fa-whatsapp"></i> Whatsapp</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>No machines found.</p>
                        @endif
                    </div>
                </div>
    
                <!-- Right Column: Sidebar -->
                <div class="col-lg-4 sidebar-widgets" data-aos="fade-left" data-aos-delay="200">
                    <div class="widget-wrap p-3" style="background: #fff; border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
                        <!-- Quick Links Widget -->
                        <div class="single-sidebar-widget mb-4 p-4 bg-white shadow rounded">
                            <h4 class="mb-3" style="font-weight: 700;">Quick Links</h4>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3">
                                    <a href="{{ route('homepage') }}" class="d-flex align-items-center quick-link">
                                        <span class="quick-link-icon bg-primary text-white me-3"><i class="fa fa-home"></i></span>
                                        <span class="quick-link-text">Home</span>
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="{{ route('aboutpage') }}" class="d-flex align-items-center quick-link">
                                        <span class="quick-link-icon bg-success text-white me-3"><i class="fa fa-info-circle"></i></span>
                                        <span class="quick-link-text">About Us</span>
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="{{ route('contactpage') }}" class="d-flex align-items-center quick-link">
                                        <span class="quick-link-icon bg-danger text-white me-3"><i class="fa fa-envelope"></i></span>
                                        <span class="quick-link-text">Contact</span>
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="{{ route('homepage') }}#our-best-machines" class="d-flex align-items-center quick-link">
                                        <span class="quick-link-icon bg-warning text-white me-3"><i class="fa fa-print"></i></span>
                                        <span class="quick-link-text">Machines</span>
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="{{ route('homepage') }}#blog-list-area" class="d-flex align-items-center quick-link blogs-link">
                                        <span class="quick-link-icon bg-info text-white me-3"><i class="fa fa-list"></i></span>
                                        <span class="quick-link-text blogs-link-text">
                                            <span style="font-weight:700; color:#0F172A; letter-spacing:1px;">Blogs</span>
                                            <span style="font-size:0.92em; color:#02d602; font-weight:500; margin-left:6px;"></span>
                                        </span>
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="{{ route('homepage') }}#testimonials-area" class="d-flex align-items-center quick-link">
                                        <span class="quick-link-icon bg-secondary text-white me-3"><i class="fa fa-star"></i></span>
                                        <span class="quick-link-text">Testimonials</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('homepage') }}#other-issue-area" class="d-flex align-items-center quick-link">
                                        <span class="quick-link-icon bg-dark text-white me-3"><i class="fa fa-question-circle"></i></span>
                                        <span class="quick-link-text">Other Issue</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Quick Links Widget -->
                        <h4 class="widget-title mb-3">Our Services</h4>
                        <ul class="list-group">
                            @foreach($products as $service)
                                <li class="list-group-item d-flex justify-content-between align-items-center"
                                    data-aos="zoom-in" data-aos-delay="{{ $loop->index * 100 }}">
                                    <a wire:navigate href="{{ route('services', ['service_id' => $service->id]) }}">
                                        {{ $service->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <style>
                        .quick-link {
                            text-decoration: none;
                            transition: background 0.2s, color 0.2s;
                            padding: 8px 10px;
                            border-radius: 8px;
                        }
                        .quick-link:hover, .quick-link:focus {
                            background: #f1f5f9;
                            color: #02d602;
                            text-decoration: none;
                        }
                        .quick-link-icon {
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            width: 36px;
                            height: 36px;
                            border-radius: 50%;
                            font-size: 1.2rem;
                            margin-right: 18px;
                        }
                        .quick-link-text {
                            font-size: 1.08rem;
                            font-weight: 600;
                            color: #22223b;
                        }
                        .quick-link:hover .quick-link-text {
                            color: #02d602;
                        }
                        .blogs-link-text {
                            display: flex;
                            align-items: baseline;
                            gap: 4px;
                        }
                        .blogs-link:hover .blogs-link-text span:first-child {
                            color: #02d602;
                            text-decoration: underline;
                        }
                    </style>
                </div>
            </div>
        </div>    
    </section>
    
    <!-- End post-content Area -->
</div>