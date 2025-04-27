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
                    <div class="row mt-4">
                        @if($machines)
                            @foreach($machines as $machine)
                                <div class="col-lg-12 col-md-12 mb-4 bg-white p-3">
                                    <div class=" row">
                                        <img class="col-md-4" src="{{ url('storage/' . $machine->image) }}" alt="{{ $machine->name }}">
                                        <div class=" col-md-8 d-flex flex-column justify-content-center ">
                                            <h3 class="card-title">{{ $machine->name }}</h3>
                                            <p class="card-text">{{ \Illuminate\Support\Str::limit($machine->short_description, 320, '...') }}</p>
                                            <div>
                                                <a href="{{ $machine->brochure_link }}" class="btn btn-primary">Brochure</a>
                                                <a href="{{ $machine->driver_link }}" class="btn btn-secondary">Driver</a>
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