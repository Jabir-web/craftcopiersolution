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
        <section class="popular-destination-area section-gap">
            <style>
                @keyframes animated-border {
                    0% {
                        background-position: 0% 50%;
                    }
                    50% {
                        background-position: 100% 50%;
                    }
                    100% {
                        background-position: 0% 50%;
                    }
                }
            
                .product-card {
                    position: relative !important;
                    border-radius: 20px !important;
                    overflow: hidden !important;
                    display: flex !important;
                    flex-direction: column !important;
                    height: 100% !important;
                    background-color: #ffffff !important;
                    z-index: 1 !important;
                }
            
                .product-card::before {
                    content: "" !important;
                    position: absolute !important;
                    top: -2px !important;
                    left: -2px !important;
                    right: -2px !important;
                    bottom: -2px !important;
                    background: linear-gradient(270deg, #42A5F5, #0F172A, #42A5F5) !important;
                    background-size: 600% 600% !important;
                    z-index: -1 !important;
                    animation: animated-border 10s ease infinite !important;
                    border-radius: 22px !important;
                    pointer-events: none !important;
                }
            
                .product-image {
                    width: 100% !important;
                    height: 230px !important;
                    overflow: hidden !important;
                }
            
                .product-image img {
                    width: 100% !important;
                    height: 100% !important;
                    object-fit: cover !important;
                    transition: transform 0.4s ease !important;
                }
            
                .product-card:hover .product-image img {
                    transform: scale(1.05) !important;
                }
            
                .product-body {
                    padding: 25px !important;
                    text-align: center !important;
                    position: relative !important;
                    z-index: 1 !important;
                    background: white !important;
                    border-radius: 0 0 20px 20px !important;
                }
            
                .product-body h4 {
                    font-size: 20px !important;
                    font-weight: 600 !important;
                    margin-bottom: 15px !important;
                    color: #0F172A !important;
                }
            
                .product-link {
                    background: #42A5F5 !important;
                    color: #ffffff !important;
                    padding: 10px 20px !important;
                    border-radius: 25px !important;
                    text-decoration: none !important;
                    font-weight: 500 !important;
                    display: inline-block !important;
                    transition: background 0.3s ease !important;
                }
            
                .product-link:hover {
                    background: #0F172A !important;
                }
            </style>
            
            
            <div class="container py-5">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-8 text-center">
                        <h2 class="mb-3">Our Best Machines</h2>
                        <p class="text-muted">We import upgraded models of KONICA MINOLTA, RICOH, KYOCERA, and XEROX. Each photocopier machine is fully inspected so when you take delivery you can be sure the copier is in top-class working condition.</p>
                    </div>
                </div>
            
                <div class="row g-4">
                    @foreach ($products as $product)
                        <div class="col-sm-12 col-md-6 col-lg-4 d-flex">
                            <div class="product-card w-100">
                                <div class="product-image">
                                    @if ($loop->iteration == 1)
                                        <img loading="lazy" src="{{ asset('front/img/web/prthree.jpg') }}" alt="{{ $product->name }}">
                                    @elseif ($loop->iteration == 2)
                                        <img loading="lazy" src="{{ asset('front/img/web/prtwo.jpg') }}" alt="{{ $product->name }}">
                                    @elseif ($loop->iteration == 3)
                                        <img loading="lazy" src="{{ asset('front/img/web/prone.jpg') }}" alt="{{ $product->name }}">
                                    @else
                                        <img loading="lazy" src="{{ asset('front/img/web/default.jpg') }}" alt="{{ $product->name }}">
                                    @endif
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
                        <h2>
                            Did not find your Package? <br>
                            Feel free to ask us. <br>
                            We‘ll make it for you
                        </h2>
                        <p>
                            inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
                            standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on
                            the job is beyond reproach. inappropriate behavior is often laughed.
                        </p>
                        <a  href="{{ route('contactpage') }}"  class="primary-btn text-uppercase">request custom price</a>
                    </div>
                   
                  
                    
                </div>
            </div>
        </section>
        <!-- End home-about Area -->
    
    
        <!-- Start blog Area -->
        @livewire('blog-list')
        <!-- End recent-blog Area -->
</div>
