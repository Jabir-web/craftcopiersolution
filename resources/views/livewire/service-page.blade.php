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
                </div>
            </div>
        </div>    
    </section>
    
    <!-- End post-content Area -->
</div>