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
                                            <!-- Share Buttons -->
                                            <div class="mt-3">
                                                <span class="fw-bold me-2" style="font-size:0.97em;">Share:</span>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url('storage/' . $machine->image)) }}" target="_blank" rel="noopener" class="btn btn-sm btn-primary mx-1" title="Share on Facebook">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(url('storage/' . $machine->image)) }}&text={{ urlencode($machine->name) }}" target="_blank" rel="noopener" class="btn btn-sm btn-info mx-1" title="Share on Twitter">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a href="https://wa.me/?text={{ urlencode($machine->name . ' ' . url('storage/' . $machine->image)) }}" target="_blank" rel="noopener" class="btn btn-sm btn-success mx-1" title="Share on WhatsApp">
                                                    <i class="fa fa-whatsapp"></i>
                                                </a>
                                                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url('storage/' . $machine->image)) }}&title={{ urlencode($machine->name) }}" target="_blank" rel="noopener" class="btn btn-sm btn-secondary mx-1" title="Share on LinkedIn">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                                <a href="mailto:?subject={{ urlencode($machine->name) }}&body={{ urlencode(url('storage/' . $machine->image)) }}" class="btn btn-sm btn-dark mx-1" title="Share via Email">
                                                    <i class="fa fa-envelope"></i>
                                                </a>
                                            </div>
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
                        <h4 class="widget-title mb-3" style="font-weight: 700; color: #0F172A;">Products</h4>
                        <ul class="list-group product-list-widget">
                            @foreach($products as $product)
                                <li class="list-group-item d-flex justify-content-between align-items-center product-list-item">
                                    <div class="d-flex align-items-center">
                                        <span class="product-dot me-2"></span>
                                        <a href="{{ route('machines', ['product_id' => $product->id]) }}" class="product-name" style="text-decoration:none;">
                                            {{ $product->name }}
                                        </a>
                                    </div>
                                    <span class="badge bg-warning text-dark rounded-pill px-3 py-1" style="font-size: 0.98em;">
                                        {{ $product->machines_count }}
                                    </span>
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
                        .product-list-widget {
                            background: #f8fafc;
                            border-radius: 10px;
                            box-shadow: 0 2px 8px rgba(2,214,2,0.04);
                            padding: 0;
                        }
                        .product-list-item {
                            border: none;
                            border-bottom: 1px solid #e2e8f0;
                            background: transparent;
                            font-size: 1.05rem;
                            font-weight: 500;
                            color: #22223b;
                            transition: background 0.15s;
                        }
                        .product-list-item:last-child {
                            border-bottom: none;
                        }
                        .product-list-item:hover {
                            background: #e9ffe6;
                        }
                        .product-dot {
                            display: inline-block;
                            width: 10px;
                            height: 10px;
                            border-radius: 50%;
                            background: #02d602;
                            margin-right: 6px;
                        }
                        .product-name {
                            font-weight: 500;
                            color: #0F172A;
                            transition: color 0.2s;
                        }
                        .product-name:hover {
                            color: #02d602;
                            text-decoration: underline;
                        }
                    </style>
                </aside>
            </div>
        </div>
    </section>
    <!-- End post-content Area -->
</div>