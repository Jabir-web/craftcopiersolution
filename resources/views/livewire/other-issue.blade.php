{{-- SEO meta tags --}}
@push('head')
    <title>Bulk Printing, Copier Repair & Rental Services | Craft Copier Solution</title>
    <meta name="description" content="Bulk printing, copier repair, photocopier rentals, and per-copy cost plans for offices and businesses in Karachi, Pakistan. Affordable, reliable, and professional services by Craft Copier Solution.">
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="robots" content="index, follow">
    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Bulk Printing, Copier Repair & Rental Services | Craft Copier Solution">
    <meta property="og:description" content="Bulk printing, copier repair, rentals, and per-copy cost plans for offices and businesses in Karachi, Pakistan.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="service">
    <meta property="og:image" content="{{ asset('front/img/bulk.png') }}">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bulk Printing, Copier Repair & Rental Services | Craft Copier Solution">
    <meta name="twitter:description" content="Bulk printing, copier repair, rentals, and per-copy cost plans for offices and businesses in Karachi, Pakistan.">
    <meta name="twitter:image" content="{{ asset('front/img/bulk.png') }}">
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "serviceType": "Bulk Printing, Copier Repair, Photocopier Rentals, Per Copy Cost Plans",
      "provider": {
        "@type": "Organization",
        "name": "Craft Copier Solution",
        "url": "{{ url('/') }}"
      },
      "areaServed": "Pakistan",
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Other Services",
        "itemListElement": [
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Bulk Printing Service" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Copier Repair Service" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Photocopier Rentals" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Get Copier On Per Copy Cost" } }
        ]
      }
    }
    </script>
@endpush

<div>
    <!-- Start issue Area -->
    <section class="price-area section-gap" aria-labelledby="other-issues-heading">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 id="other-issues-heading" class="mb-10" style="font-size:2.1rem; font-weight:800;">
                            Bulk Printing, Copier Repair & Rental Services in Karachi & Pakistan
                        </h1>
                        <p>
                            Discover our expert <strong>bulk printing</strong>, <strong>copier repair</strong>, <strong>photocopier rental</strong>, and <strong>per-copy cost</strong> plans. We help businesses and offices in Karachi and across Pakistan with affordable, reliable, and professional printing solutions.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Bulk Printing Service -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-other-issue h-100">
                        <div class="thumb">
                            <img class="img-fluid border rounded" src="{{ asset('front/img/bulk.png') }}" alt="Bulk Printing Service Karachi">
                        </div>
                        <a href="#">
                            <h4>Bulk Printing Service</h4>
                        </a>
                        <p>
                            Fast, high-quality bulk printing for businesses, events, and organizations. Save time and money with our affordable rates for large-volume print jobs in Karachi and nationwide.
                        </p>
                    </div>
                </div>
                <!-- Copier Repair Service -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-other-issue h-100">
                        <div class="thumb">
                            <img class="img-fluid border rounded" src="{{ asset('front/img/repair.png') }}" alt="Copier Repair Service Karachi">
                        </div>
                        <a href="#">
                            <h4>Copier Repair Service</h4>
                        </a>
                        <p>
                            Professional copier repair for all major brands. Our expert technicians ensure minimal downtime and maximum productivity for your office or business in Karachi and Pakistan.
                        </p>
                    </div>
                </div>
                <!-- Photocopier Rentals -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-other-issue h-100">
                        <div class="thumb">
                            <img class="img-fluid border rounded" src="{{ asset('front/img/rental.png') }}" alt="Photocopier Rentals Karachi">
                        </div>
                        <a href="#">
                            <h4>Photocopier Rentals</h4>
                        </a>
                        <p>
                            Rent top-quality photocopiers for short or long-term use. Flexible rental plans and a wide selection of models for your office needs, anywhere in Pakistan.
                        </p>
                    </div>
                </div>
                <!-- Get Copier On Per Copy Cost -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-other-issue h-100">
                        <div class="thumb">
                            <img class="img-fluid border rounded" src="{{ asset('front/img/percopy.png') }}" alt="Get Copier On Per Copy Cost Karachi">
                        </div>
                        <a href="#">
                            <h4>Get Copier On Per Copy Cost</h4>
                        </a>
                        <p>
                            Hassle-free copier usage: pay only for what you print! Our per-copy cost plans include maintenance and support for total peace of mind.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <a href="{{ route('contactpage') }}" class="btn btn-lg btn-warning w-100 py-3 fw-bold" style="font-size:1.25rem; letter-spacing:1px; border-radius: 12px;">
                        <i class="fa fa-envelope me-2"></i>Contact Us for a Free Consultation or Quote
                    </a>
                </div>
            </div>
        </div>
        <style>
            .single-other-issue {
                background: #fff;
                border-radius: 14px;
                box-shadow: 0 4px 18px rgba(0,0,0,0.07);
                padding: 24px 18px 18px 18px;
                margin-bottom: 24px;
                text-align: center;
                transition: box-shadow 0.2s;
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
            }
            .single-other-issue:hover {
                box-shadow: 0 8px 32px rgba(255,193,7,0.13);
            }
            .single-other-issue .thumb {
                margin-bottom: 18px;
            }
            .single-other-issue h4 {
                font-size: 1.15rem;
                font-weight: 700;
                color: #0F172A;
                margin-bottom: 10px;
            }
            .single-other-issue p {
                font-size: 1rem;
                color: #475569;
                margin-bottom: 0;
            }
            .price-area .btn-warning {
                background: linear-gradient(45deg, #ffc107, #ffb300);
                border: none;
                color: #fff;
                font-weight: 700;
                transition: background 0.2s;
            }
            .price-area .btn-warning:hover {
                background: #0F172A;
                color: #fff;
            }
        </style>
    </section>
    <!-- End issue Area -->
</div>
