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
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h2 class="mb-10">Our Best Machines</h2>
                            <p>We import upgraded models of KONICA MINOLTA, RICOH , KYOCERA , and XEROX. Each photocopier machine is fully inspected so when you take delivery you can be sure the copier is in top class working condition.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-lg-4">
                        <div class="single-destination relative">
                            <div class="thumb relative">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="{{ asset('front/img/web/kyocera-machine.jpg') }}" alt="kyocera-machine">
                            </div>
                            <div class="desc">
                                <a wire:navigate href="{{ route('machines', ['product_id' => $product->id]) }}" class="price-btn">{{ $product->name }} MACHINES</a>
                                <h4>{{ $product->name }}</h4>
                            </div>
                        </div>
                    </div>
                    @endforeach
                 
                    {{-- <div class="col-lg-4">
                        <div class="single-destination relative">
                            <div class="thumb relative">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="{{ asset('front/img/web/ricoh-machine.jpg') }}" alt="">
                            </div>
                            <div class="desc">
                                <a href="#" class="price-btn">RICOH MACHINES</a>
                                <h4>RICOH</h4>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-destination relative">
                            <div class="thumb relative">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="{{ asset('front/img/web/konica-minolta-machine.jpg') }}" alt="">
                            </div>
                            <div class="desc">
                                <a href="#" class="price-btn">KONICA MINOLTA MACHINE</a>
                                <h4>KONICA MINOLTA</h4>
                            </div>
                        </div>
                    </div> --}}
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
                    <div class="col-lg-6 col-md-12 home-about-left">
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
                    <div class="home-about-right no-padding">
                        <img class="img-fluid" src="{{ asset('public/front/img/aboutus.jpg') }}" alt="about-us" style="width: 50% !important;">
                    </div>
<style>
.home-about-right img {
    width: 50% !important;
    height: auto; /* Maintains the aspect ratio */
}

@media (max-width: 768px) {
    .home-about-right img {
        width: 100% !important; /* Full width on smaller screens */
    }
}

</style>                    
                    
                </div>
            </div>
        </section>
        <!-- End home-about Area -->
    
    
        <!-- Start blog Area -->
        @livewire('blog-list')
        <!-- End recent-blog Area -->
</div>
