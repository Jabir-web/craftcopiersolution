{{-- SEO meta tags --}}
@push('head')
    <title>{{ $productsingle->name }} Machines | Craft Copier Solution</title>
    <meta name="description" content="Explore {{ $productsingle->name }} machines at Craft Copier Solution. View details, brochures, drivers, and more for top-quality office equipment.">
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="robots" content="index, follow">
    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="{{ $productsingle->name }} Machines | Craft Copier Solution">
    <meta property="og:description" content="Explore {{ $productsingle->name }} machines at Craft Copier Solution. View details, brochures, drivers, and more for top-quality office equipment.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="product.group">
    <meta property="og:image" content="{{ isset($machines[0]) ? url('storage/' . $machines[0]->image) : asset('front/img/logo.png') }}">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $productsingle->name }} Machines | Craft Copier Solution">
    <meta name="twitter:description" content="Explore {{ $productsingle->name }} machines at Craft Copier Solution. View details, brochures, drivers, and more for top-quality office equipment.">
    <meta name="twitter:image" content="{{ isset($machines[0]) ? url('storage/' . $machines[0]->image) : asset('front/img/logo.png') }}">
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ProductGroup",
      "name": "{{ $productsingle->name }} Machines",
      "brand": {
        "@type": "Brand",
        "name": "Craft Copier Solution"
      },
      "description": "Explore {{ $productsingle->name }} machines at Craft Copier Solution. View details, brochures, drivers, and more for top-quality office equipment.",
      "url": "{{ url()->current() }}",
      "image": "{{ isset($machines[0]) ? url('storage/' . $machines[0]->image) : asset('front/img/logo.png') }}",
      "manufacturer": {
        "@type": "Organization",
        "name": "Craft Copier Solution"
      }
    }
    </script>
@endpush

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
    {{-- banner ended  --}}

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
                                    <div class="card shadow-lg border-0 h-100 machine-card" style="border-radius: 18px; overflow: hidden; background: linear-gradient(135deg, #fff 80%, #ffe082 100%); transition: transform 0.2s;">
                                        <div class="position-relative" style="border-radius: 18px 18px 0 0; background: #f9f9f9;">
                                            <!-- Image -->
                                            <img src="{{ url('storage/' . $machine->image) }}" alt="{{ $machine->name }}"
                                                class="img-fluid"
                                                style="width: 100%; height: 250px; object-fit: contain; border-radius: 18px 18px 0 0; background-color: #f9f9f9; box-shadow: 0 4px 16px rgba(255,193,7,0.10);">
                                            <!-- Decorative badge -->
                                            <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-3 px-3 py-2 shadow" style="font-size: 0.95rem; border-radius: 12px;">
                                                <i class="fa fa-star"></i> Featured
                                            </span>
                                            <!-- Text overlay -->
                                            <div class="text-overlay"
                                                style="position: absolute; bottom: 0; left: 0; width: 100%; background: linear-gradient(0deg, rgba(0,0,0,0.7) 70%, rgba(0,0,0,0.1) 100%);
                                                        color: #fff; font-weight: bold; font-size: 1rem; padding: 12px 18px; border-radius: 0 0 18px 18px;">
                                                <p class="mb-1" style="font-size: 1.15rem;">{{ $machine->name }}</p>
                                                <p class="mb-0" style="font-size: 0.95rem; letter-spacing: 1px;">CRAFT COPIER SOLUTION</p>
                                            </div>
                                        </div>
                                        <div class="card-body text-center d-flex flex-column justify-content-between" style="min-height: 120px;">
                                            <button type="button" class="btn btn-lg btn-warning text-dark fw-bold mt-2 shadow-sm rounded-pill px-4"
                                                data-bs-toggle="modal"
                                                data-bs-target="#machineModal{{ $machine->id }}">
                                                <i class="fa fa-eye"></i> View More
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal for full details -->
                                <div class="modal fade" id="machineModal{{ $machine->id }}" tabindex="-1"
                                    aria-labelledby="machineModalLabel{{ $machine->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" data-aos="zoom-in" data-aos-duration="500">
                                        <div class="modal-content shadow-lg rounded-4 border-0" style="background: linear-gradient(120deg, #fffbe7 60%, #fff 100%);">
                                            <!-- Header -->
                                            <div class="modal-header bg-warning bg-gradient border-0 rounded-top-4" data-aos="fade-down" data-aos-delay="200">
                                                <h5 class="modal-title fw-bold text-dark" id="machineModalLabel{{ $machine->id }}">
                                                    <i class="fa fa-print me-2"></i>{{ $machine->name }} - Full Details
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>

                                            <!-- Body -->
                                            <div class="modal-body bg-white px-4 py-4" data-aos="fade-up" data-aos-delay="300">
                                                <!-- Image -->
                                                <div class="d-flex justify-content-center mb-4">
                                                    <img src="{{ url('storage/' . $machine->image) }}"
                                                        alt="{{ $machine->name }}"
                                                        class="img-fluid rounded-3 border border-warning shadow"
                                                        style="max-height: 280px; max-width: 80%; object-fit: contain; background-color: #fff;">
                                                </div>

                                                <!-- Description -->
                                                <div class="mb-4">
                                                    <h6 class="fw-semibold text-uppercase text-warning mb-2"><i class="fa fa-info-circle me-1"></i> Description</h6>
                                                    <p class="text-muted mb-0">{{ $machine->short_description }}</p>
                                                </div>

                                                <!-- Buttons (Brochure & Driver) -->
                                                <div class="row g-3 mb-3 align-items-center">
                                                    <div class="col-md-6">
                                                        <a href="{{ $machine->brochure_link }}" class="btn w-100 btn-warning text-dark fw-semibold d-flex align-items-center justify-content-center gap-2 rounded-pill shadow-sm"
                                                            target="_blank" rel="noopener noreferrer">
                                                            <i class="fa fa-file-pdf-o"></i> View Brochure
                                                        </a>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <a href="{{ $machine->driver_link }}" class="btn w-100 btn-outline-warning fw-semibold d-flex align-items-center justify-content-center gap-2 rounded-pill shadow-sm"
                                                            target="_blank">
                                                            <i class="fa fa-download"></i> Download Driver
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Footer -->
                                            <div class="modal-footer bg-light border-0 rounded-bottom-4" data-aos="fade-up" data-aos-delay="400">
                                                <div class="text-start text-muted small me-auto">
                                                    <strong class="text-warning">CRAFT COPIER SOLUTION</strong><br>
                                                    <span class="me-2"><i class="fa fa-phone"></i> +92 339 0027031</span>
                                                    <span><i class="fa fa-phone"></i> +92 328 2499598</span>
                                                </div>
                                                <button type="button" class="btn btn-outline-warning px-4 rounded-pill" data-bs-dismiss="modal">Close</button>
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
                <aside class="col-lg-4 sidebar-widgets" aria-label="Product Categories">
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
                </aside>
            </div>
        </div>
    </section>
    <!-- End post-content Area -->
</div>