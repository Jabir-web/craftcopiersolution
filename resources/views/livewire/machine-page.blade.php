@section('title')
{{ $productsingle->name }} Machines - Craft Copier Solution
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
                <div class="col-lg-8 posts-list">
                    <div class="row mt-5">
                        @if($machines && count($machines) > 0)
                            @foreach($machines as $machine)
                                <div class="col-12 mb-4">
                                    <div class="card shadow-sm border-0 h-100">
                                        <div class="row g-0">
                                            <div class="col-md-4 d-flex align-items-center justify-content-center" style="background: #f8f9fa; position: relative; padding: 20px; border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                                                <!-- Image -->
                                                <img src="{{ url('storage/' . $machine->image) }}" 
                                                     alt="{{ $machine->name }}" 
                                                     class="img-fluid p-3"
                                                     style="max-height: 250px; object-fit: contain; border-radius: 10px;">
                                            </div>
                                            
                                            <!-- Company Name and Contact Numbers Below the Image -->
                                            <div class="company-info" style="padding: 15px; background-color: #0F172A; color: white; border-radius: 10px; text-align: center; margin-top: 10px;">
                                                <!-- Company Name -->
                                                <p style="font-size: 1.5rem; font-weight: bold; margin: 0; letter-spacing: 1px;">CRAFT COPIER SOLUTION</p>
                                                
                                                <!-- Contact Numbers -->
                                                <p style="margin: 5px 0; font-size: 1rem;">+92 339 0027031</p>
                                                <p style="margin: 0; font-size: 1rem;">*92 328 2499598</p>
                                            </div>
                                            
                                            <div class="col-md-8 d-flex flex-column justify-content-center p-4">
                                                <h3 class="card-title mb-3" style="font-size: 1.8rem;">{{ $machine->name }}</h3>
                                                <p class="card-text" style="color: #555;">{{ \Illuminate\Support\Str::limit($machine->short_description, 500, '...') }}</p>
                                                <div class="mt-3">
                                                    <a href="{{ $machine->brochure_link }}" class="btn btn-primary me-2" target="_blank">View Brochure</a>
                                                    <a href="{{ $machine->driver_link }}" class="btn btn-outline-secondary" target="_blank">Download Driver</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-12">
                                <div class="alert alert-warning text-center" role="alert">
                                    No machines found.
                                </div>
                            </div>
                        @endif
                    </div>
                    
                </div>
                <div class="col-lg-4 sidebar-widgets">
                    <div class="widget-wrap p-3">
                        <h4 class="widget-title mb-3">Products</h4>
                        <ul class="list-group">
                            @foreach($products as $product)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        {{-- <input type="checkbox" id="product-{{ $product->id }}" name="products[]" value="{{ $product->id }}"> --}}
                                        <label for="product-{{ $product->id }}">{{ $product->name }}</label>
                                    </div>
                                    <span class="badge badge-primary badge-pill">{{ $product->machines_count }}</span>
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