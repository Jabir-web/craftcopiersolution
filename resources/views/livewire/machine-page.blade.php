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
                    <p class="text-white link-nav">Home <span class="lnr lnr-arrow-right"></span>Products <span
                            class="lnr lnr-arrow-right"></span> {{ $productsingle->name }} </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start post-content Area -->
    <section class="post-content-area single-post-area">
      <div class="container">
    <div class="row">
        <!-- Machines List -->
        <div class="col-lg-8 posts-list">
            <div class="row mt-5">
                @if($machines && count($machines) > 0)
                    @foreach($machines as $machine)
                        <div class="col-md-6 mb-4">
                            <div class="card shadow-sm border-0 h-100">
                                <div class="position-relative" style="border: 1px solid #ddd; border-radius: 10px;">
                                    <!-- Image -->
                                   <img src="{{ url('storage/' . $machine->image) }}" alt="{{ $machine->name }}"
     class="img-fluid"
     style="width: 100%; height: 250px; object-fit: contain; border-radius: 10px; background-color: #f9f9f9;">

                                    <!-- Text overlay -->
                                    <div class="text-overlay"
                                         style="position: absolute; bottom: 0; left: 0; width: 100%; background-color: rgba(0, 0, 0, 0.6);
                                                color: white; font-weight: bold; font-size: 1rem; padding: 10px 15px; border-radius: 0 0 10px 10px;">
                                        <p class="mb-1" style="font-size: 1.1rem;">{{ $machine->name }}</p>
                                        <p class="mb-0" style="font-size: 0.9rem;">CRAFT COPIER SOLUTION</p>
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <button type="button" class="btn btn-sm btn-info mt-2"
                                            data-bs-toggle="modal" data-bs-target="#machineModal{{ $machine->id }}">
                                        View More
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Modal for full details -->
                        <div class="modal fade" id="machineModal{{ $machine->id }}" tabindex="-1"
                             aria-labelledby="machineModalLabel{{ $machine->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="machineModalLabel{{ $machine->id }}">
                                            {{ $machine->name }} - Full Details
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ url('storage/' . $machine->image) }}" alt="{{ $machine->name }}"
                                             class="img-fluid mb-3" style="max-height: 300px; object-fit: cover;">
                                        <h6>Description:</h6>
                                        <p>{{ $machine->short_description }}</p>
                                        <h6>Brochure:</h6>
                                        <a href="{{ $machine->brochure_link }}" class="btn btn-primary mb-2"
                                           target="_blank" rel="noopener noreferrer">View Brochure</a><br>
                                        <h6>Driver:</h6>
                                        <a href="{{ $machine->driver_link }}" class="btn btn-outline-secondary"
                                           target="_blank">Download Driver</a>
                                    </div>
                                    <div class="modal-footer">
                                        <p class="me-auto mb-0 text-muted">CRAFT COPIER SOLUTION | +92 339 0027031 | *92 328 2499598</p>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- Pagination -->
                    <div class="col-12 text-center mt-4">
                        <div class="pagination justify-content-center">
                            @if ($machines->onFirstPage())
                                <button class="btn btn-outline-secondary btn-lg" disabled>Previous</button>
                            @else
                                <a href="{{ $machines->previousPageUrl() }}"
                                   class="btn btn-outline-secondary btn-lg">Previous</a>
                            @endif

                            <span class="mx-3" style="font-size: 1rem; color: #555;">
                                Page {{ $machines->currentPage() }} of {{ $machines->lastPage() }}
                            </span>

                            @if ($machines->hasMorePages())
                                <a href="{{ $machines->nextPageUrl() }}" class="btn btn-outline-primary btn-lg">Next</a>
                            @else
                                <button class="btn btn-outline-primary btn-lg" disabled>Next</button>
                            @endif
                        </div>
                    </div>
                @else
                    <div class="col-12">
                        <div class="alert alert-warning text-center" role="alert">
                            No machines found.
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <!-- Sidebar Products List -->
        <div class="col-lg-4 sidebar-widgets">
            <div class="widget-wrap p-3">
                <h4 class="widget-title mb-3">Products</h4>
                <ul class="list-group">
                    @foreach($products as $product)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
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