@section('title')
    Contact - Craft Copier Solution
@endsection

@section('meta_description', 'Get in touch with Craft Copier Solution in Karachi. Contact us for printer sales, repairs, maintenance, and expert support.')
@section('meta_keywords', 'contact Craft Copier Solution, printer repair Karachi, copier sales Karachi, printer maintenance contact, office printer support Karachi')
@section('og_title', 'Contact - Craft Copier Solution')
@section('og_description', 'Contact Craft Copier Solution for printer and copier sales, repairs, and maintenance services in Karachi and Pakistan.')
@section('og_image', asset('front/img/contact-og-image.jpg'))
@section('og_url', url()->current())
@section('twitter_title', 'Contact - Craft Copier Solution')
@section('twitter_description', 'Reach out to Craft Copier Solution for printer support and services in Karachi.')
@section('twitter_image', asset('front/img/contact-og-image.jpg'))
@section('canonical_url', url()->current())

@php
    $breadcrumbs = [
        [
            "@type" => "ListItem",
            "position" => 1,
            "name" => "Home",
            "item" => url('/')
        ],
        [
            "@type" => "ListItem",
            "position" => 2,
            "name" => "Contact Us",
            "item" => url()->current()
        ],
    ];
@endphp

@push('head')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": {!! json_encode($breadcrumbs, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
}
</script>
@endpush

<div>
    <!-- Hero Section -->
    <section class="relative about-banner">
      <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10">
                    <h1 class="text-white display-4 fw-bold">Contact Us</h1>
                    <nav class="text-white mt-3 small">
                        <a wire:navigate href="{{ route('homepage') }}" class="text-white">Home</a> <span> > </span>
                        <a wire:navigate href="{{ route('aboutpage') }}" class="text-white">About Us</a> <span> > </span>
                        <a wire:navigate href="{{ route('contactpage') }}" class="text-white">Contact Us</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-page-area section-gap py-5" style="background: #fffbe7;">
        <div class="container">
            <div class="row g-5 align-items-start">
               <div class="mb-4 shadow rounded overflow-hidden" style="height: 320px;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462117.05296393496!2d66.82581529773248!3d25.193458567990753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Pakistan!5e0!3m2!1sen!2s!4v1740514341752!5m2!1sen!2s"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                <div class="col-lg-7">
                    <div class="p-4 bg-white shadow rounded mb-4 border border-warning">
                        <h3 class="fw-bold mb-4 text-warning text-center">Send Us a Message</h3>
                        @if (session()->has('message'))
                            <div class="alert alert-success">{{ session('message') }}</div>
                        @endif
                        <form wire:submit.prevent="submit">
                            @csrf
                            <div class="row g-3">
                              <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" wire:model="name" class="form-control form-control-lg border-warning" placeholder="Your Name">
                                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-6">
                                    <input type="email" wire:model="email" class="form-control form-control-lg border-warning" placeholder="Your Email">
                                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-12">
                                    <input type="text" wire:model="subject" class="form-control form-control-lg border-warning" placeholder="Subject">
                                    @error('subject') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-12">
                                    <textarea wire:model="message" class="form-control form-control-lg border-warning" rows="5" placeholder="Message"></textarea>
                                    @error('message') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-12 text-end">
                                    <button type="submit" class="btn btn-lg btn-warning px-5 py-2 rounded-pill" style="font-weight: 600; letter-spacing: 1px;">Send Message</button>
                                </div>
                            </div>
                                <div class="col-12 text-end">
                                    <button type="submit" class="btn btn-lg btn-warning px-5 py-2 rounded-pill">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="p-4 bg-white shadow rounded border border-warning">
                        <h4 class="fw-bold mb-3 text-warning">Quick Links</h4>
                        <ul class="list-unstyled small">
                            <li><a href="{{ route('homepage') }}"><i class="fa fa-home me-2 text-warning"></i>Home</a></li>
                            <li><a href="{{ route('aboutpage') }}"><i class="fa fa-info-circle me-2 text-warning"></i>About Us</a></li>
                            <li><a href="{{ route('contactpage') }}"><i class="fa fa-envelope me-2 text-warning"></i>Contact Us</a></li>
                            <!-- Other quick links -->
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>

@push('styles')
 <style>
            .contact-page-area .form-control:focus {
                border-color: #ffc107;
                box-shadow: 0 0 0 0.2rem rgba(255,193,7,.15);
            }
            .contact-page-area .btn-warning {
                background: linear-gradient(45deg, #ffc107, #ffb300);
                border: none;
                color: #fff;
            }
            .contact-page-area .btn-warning:hover {
                background: #0F172A;
                color: #fff;
            }
            .contact-page-area .icon {
                font-size: 1.5rem;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 48px;
                height: 48px;
            }
            .contact-page-area .shadow {
                box-shadow: 0 4px 24px rgba(0,0,0,0.08)!important;
            }
            .contact-page-area .rounded {
                border-radius: 14px!important;
            }
            .contact-page-area h3, .contact-page-area h4 {
                letter-spacing: 0.5px;
            }
            .contact-page-area ul.list-unstyled li a {
                font-size: 1.08rem;
                font-weight: 500;
                display: flex;
                align-items: center;
                gap: 6px;
                color: #22223b;
                transition: color 0.2s;
            }
            .contact-page-area ul.list-unstyled li a:hover {
                color: #ffc107;
                text-decoration: underline;
            }
            .contact-page-area .bg-white {
                background: #fff !important;
            }
            .contact-page-area .border-warning {
                border-color: #ffc107 !important;
            }
        </style>
@endpush
