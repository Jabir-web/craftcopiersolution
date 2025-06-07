{{-- SEO meta tags --}}
@push('head')
    <title>Other Printing & Copier Services | Craft Copier Solution</title>
    <meta name="description" content="Explore our bulk printing, copier repair, photocopier rentals, and per-copy cost plans. Professional, affordable, and reliable services for your business needs.">
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="robots" content="index, follow">
    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Other Printing & Copier Services | Craft Copier Solution">
    <meta property="og:description" content="Bulk printing, copier repair, rentals, and per-copy cost plans for businesses.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="service">
    <meta property="og:image" content="{{ asset('front/img/bulk.png') }}">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Other Printing & Copier Services | Craft Copier Solution">
    <meta name="twitter:description" content="Bulk printing, copier repair, rentals, and per-copy cost plans for businesses.">
    <meta name="twitter:image" content="{{ asset('front/img/bulk.png') }}">
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "serviceType": "Printing and Copier Services",
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
                        <h2 id="other-issues-heading" class="mb-10">Other issues we can help you with</h2>
                        <p>Discover our range of specialized printing and copier services designed to meet your business needs efficiently and affordably.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Bulk Printing Service -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-other-issue">
                        <div class="thumb">
                            <img class="img-fluid border rounded" src="{{ asset('front/img/bulk.png') }}" alt="Bulk Printing Service">
                        </div>
                        <a href="#">
                            <h4>Bulk Printing Service</h4>
                        </a>
                        <p>
                            We offer fast and reliable bulk printing solutions for businesses, events, and organizations. Get high-quality prints at competitive rates for all your large-volume needs.
                        </p>
                    </div>
                </div>
                <!-- Copier Repair Service -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-other-issue">
                        <div class="thumb">
                            <img class="img-fluid border rounded" src="{{ asset('front/img/repair.png') }}" alt="Copier Repair Service">
                        </div>
                        <a href="#">
                            <h4>Copier Repair Service</h4>
                        </a>
                        <p>
                            Our expert technicians provide prompt and professional repair services for all major copier brands, ensuring minimal downtime and maximum productivity for your business.
                        </p>
                    </div>
                </div>
                <!-- Photocopier Rentals -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-other-issue">
                        <div class="thumb">
                            <img class="img-fluid border rounded" src="{{ asset('front/img/rental.png') }}" alt="Photocopier Rentals">
                        </div>
                        <a href="#">
                            <h4>Photocopier Rentals</h4>
                        </a>
                        <p>
                            Rent top-quality photocopiers for short or long-term use. Flexible rental plans and a wide selection of models to suit your office requirements and budget.
                        </p>
                    </div>
                </div>
                <!-- Get Copier On Per Copy Cost -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-other-issue">
                        <div class="thumb">
                            <img class="img-fluid border rounded" src="{{ asset('front/img/percopy.png') }}" alt="Get Copier On Per Copy Cost">
                        </div>
                        <a href="#">
                            <h4>Get Copier On Per Copy Cost</h4>
                        </a>
                        <p>
                            Enjoy hassle-free copier usage with our per-copy cost plans. Pay only for what you print, with maintenance and support included for complete peace of mind.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End issue Area -->
</div>
