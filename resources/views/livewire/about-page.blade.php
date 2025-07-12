@section('title')
    About Us - Craft Copier Solutions | Printer Services in Karachi
@endsection

@section('meta_description', 'Craft Copier Solution is a leading printer repair, sales, and maintenance company based in Karachi, Pakistan. Learn about our professional services, mission, and why clients across Pakistan trust us for expert copier and printing solutions.')

@section('meta_keywords', 'Craft Copier Solution Karachi, about printer repair Pakistan, copier sales Karachi, printing company Pakistan, printer maintenance Karachi, photocopier experts Pakistan, best printer repair Karachi, Canon Kyocera Ricoh repair Karachi')

@section('og_title', 'About Craft Copier Solution | Karachi’s Trusted Printer & Copier Experts')
@section('og_description', 'Meet the experts at Craft Copier Solution. We offer top-rated printer and copier repair, sales, and bulk printing services in Karachi and across Pakistan.')

@section('og_image', asset('front/img/about-img.png'))
@section('og_url', url()->current())

@section('twitter_title', 'About Craft Copier Solution - Printer & Copier Services in Karachi')
@section('twitter_description', 'Discover Craft Copier Solution’s journey and expertise in printer and copier services across Karachi and Pakistan.')
@section('twitter_image', asset('front/img/about-img.png'))

@section('canonical_url', url()->current())

@section('breadcrumbs')
[
    {
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "{{ url('/') }}"
    },
    {
        "@type": "ListItem",
        "position": 2,
        "name": "About Us",
        "item": "{{ url()->current() }}"
    }
]
@endsection

@push('head')
<!-- JSON-LD Breadcrumb -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": @yield('breadcrumbs')
}
</script>

<!-- JSON-LD Organization Info -->
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "name": "Craft Copier Solution",
  "url": "https://craftcopiersolutions.com",
  "logo": "https://craftcopiersolutions.com/front/img/logo.png",
  "description": "Craft Copier Solution provides professional printer and copier repair, maintenance, and sales services based in Karachi, Pakistan.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "123 Copier Street",
    "addressLocality": "Karachi",
    "addressRegion": "Sindh",
    "postalCode": "74600",
    "addressCountry": "PK"
  },
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+92-339-0027031",
    "contactType": "Customer Service"
  },
  "sameAs": [
    "https://www.facebook.com/craftcopiersolutions",
    "https://www.instagram.com/craftcopiersolution",
    "https://www.linkedin.com/company/craftcopiersolutions",
    "https://twitter.com/craftcopiersolution"
  ]
}
</script>

<!-- JSON-LD About Page Info -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "AboutPage",
  "name": "About Us - Craft Copier Solution",
  "url": "{{ url()->current() }}",
  "description": "Craft Copier Solution is Karachi’s most trusted provider of expert printer and copier repair, bulk printing, and equipment sales. Learn more about our team, vision, and services across Pakistan.",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "{{ url()->current() }}"
  }
}
</script>
@endpush


<main>
    <!-- Banner Area -->
    <section class="about-banner relative" aria-label="About Craft Copier Solution">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        About Us
                    </h1>
                    <nav aria-label="Breadcrumb">
                        <p class="text-white link-nav">
                            <a href="{{ route('homepage') }}">Home</a>
                            <span class="lnr lnr-arrow-right"></span>
                            <span>About Us</span>
                        </p>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- About Info Area -->
    <section class="about-info-area section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 info-left">
                    <img class="img-fluid" src="{{ asset('front/img/about-img.png') }}" alt="About Craft Copier Solution - Printer Sales, Repairs, Maintenance in Karachi">
                </div>
                <div class="col-lg-6 info-right">
                    <h2>Who We Are</h2>
                    <h3>Trusted Printer & Copier Experts in Karachi</h3>
                    <p>
                        At <strong>Craft Copier Solution</strong>, we are a team of passionate professionals dedicated to providing
                        top-notch <a href="{{ route('machines') }}">printer sales</a>, <a href="{{ route('contactpage') }}">repairs</a>, and <a href="{{ route('contactpage') }}">maintenance services</a>. With extensive experience in the
                        printing industry, we understand the challenges businesses and individuals face when dealing
                        with printing equipment. That’s why we offer reliable, cost-effective, and efficient solutions
                        tailored to your needs.
                    </p>
                    <p>
                        Our mission is to ensure that your printing operations run smoothly with high-quality products,
                        expert repairs, and exceptional customer service. Whether you're looking for a new printer, need
                        urgent repairs, or want long-term maintenance support, we’ve got you covered.
                    </p>
                    <ul>
                        <li>✔️ Certified printer & copier technicians</li>
                        <li>✔️ Genuine parts & accessories</li>
                        <li>✔️ Fast response & on-site support</li>
                        <li>✔️ Serving all of Karachi & Pakistan</li>
                    </ul>
                    <a href="{{ route('contactpage') }}" class="btn btn-warning mt-3">Contact Us for a Free Consultation</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End about-info Area -->

    <!-- FAQ Section for SEO -->
    <section class="faq-area section-gap" aria-label="Frequently Asked Questions">
        <div class="container">
            <h2 class="mb-4">Frequently Asked Questions</h2>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h3 class="accordion-header" id="faq1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                            <span class="faq-icon me-2"><i class="fa fa-question-circle"></i></span>
                            What services does Craft Copier Solution offer?
                        </button>
                    </h3>
                    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We provide printer and copier sales, repairs, maintenance, rentals, and genuine accessories for all major brands in Karachi and across Pakistan.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="faq2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            <span class="faq-icon me-2"><i class="fa fa-wrench"></i></span>
                            Do you offer on-site printer repair in Karachi?
                        </button>
                    </h3>
                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, our technicians provide fast on-site printer and copier repair services throughout Karachi.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="faq3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            <span class="faq-icon me-2"><i class="fa fa-envelope"></i></span>
                            How can I request a quote or consultation?
                        </button>
                    </h3>
                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Simply <a href="{{ route('contactpage') }}">contact us</a> or fill out our online form for a free, no-obligation quote.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQ Schema for SEO -->
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What services does Craft Copier Solution offer?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "We provide printer and copier sales, repairs, maintenance, rentals, and genuine accessories for all major brands in Karachi and across Pakistan."
              }
            },
            {
              "@type": "Question",
              "name": "Do you offer on-site printer repair in Karachi?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, our technicians provide fast on-site printer and copier repair services throughout Karachi."
              }
            },
            {
              "@type": "Question",
              "name": "How can I request a quote or consultation?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Simply contact us or fill out our online form for a free, no-obligation quote."
              }
            }
          ]
        }
        </script>
        <style>
            /* FAQ Accordion Design */
            .faq-area .accordion-item {
                border: none;
                margin-bottom: 18px;
                border-radius: 12px;
                box-shadow: 0 4px 18px rgba(0,0,0,0.08);
                background: #fff;
                transition: box-shadow 0.2s;
            }
            .faq-area .accordion-item:hover {
                box-shadow: 0 8px 24px rgba(255,193,7,0.15);
            }
            .faq-area .accordion-header {
                background: none;
            }
            .faq-area .accordion-button {
                background: #f9fafb;
                color: #0F172A;
                font-weight: 600;
                font-size: 1.13rem;
                border-radius: 12px 12px 0 0;
                box-shadow: none;
                padding: 20px 28px;
                transition: background 0.2s, color 0.2s;
                display: flex;
                align-items: center;
                gap: 10px;
            }
            .faq-area .accordion-button .faq-icon {
                color: #ffc107;
                font-size: 1.3em;
                transition: color 0.2s;
            }
            .faq-area .accordion-button:not(.collapsed) {
                background: linear-gradient(90deg, #ffc107 0%, #ffb300 100%);
                color: #fff;
            }
            .faq-area .accordion-button:not(.collapsed) .faq-icon {
                color: #fff;
            }
            .faq-area .accordion-button:focus {
                box-shadow: 0 0 0 2px #ffc10733;
            }
            .faq-area .accordion-body {
                background: #fffbea;
                color: #444;
                font-size: 1.05rem;
                border-radius: 0 0 12px 12px;
                padding: 22px 28px;
                border-top: 1px solid #ffe082;
            }
            .faq-area .accordion-item:last-child {
                margin-bottom: 0;
            }
            .faq-area .accordion-button::after {
                content: "\f078";
                font-family: "FontAwesome";
                font-weight: 900;
                float: right;
                margin-left: auto;
                color: #ffc107;
                transition: transform 0.3s;
            }
            .faq-area .accordion-button:not(.collapsed)::after {
                transform: rotate(-180deg);
                color: #fff;
            }
            @media (max-width: 576px) {
                .faq-area .accordion-button,
                .faq-area .accordion-body {
                    padding: 14px 12px;
                    font-size: 1rem;
                }
            }
        </style>
        <script>
          document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.faq-area .accordion-button').forEach(function(btn) {
        btn.addEventListener('click', function (e) {
            var targetSelector = btn.getAttribute('data-bs-target');
            var target = document.querySelector(targetSelector);

            if (target) {
                var isOpen = target.classList.contains('show');
                var bsInstance = bootstrap.Collapse.getOrCreateInstance(target);

                // Close all others
                document.querySelectorAll('.faq-area .accordion-collapse.show').forEach(function (el) {
                    if (el !== target) {
                        var otherInstance = bootstrap.Collapse.getOrCreateInstance(el);
                        otherInstance.hide();
                    }
                });

                // Toggle current one
                if (isOpen) {
                    bsInstance.hide(); // Close if open
                } else {
                    bsInstance.show(); // Open if not
                }

                e.preventDefault();
            }
        });
    });
});

        </script>
    </section>
    <!-- Other Issue Area -->
    @livewire('other-issue')

    <!-- Testimonial Area -->
    @livewire('testimonials')
</main>