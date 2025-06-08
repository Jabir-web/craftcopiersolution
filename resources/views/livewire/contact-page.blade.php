@section('title')
    Contact - Craft Copier Solution
@endsection
<div>
    <!-- start banner Area -->
    <section class="relative about-banner">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Contact Us
                    </h1>
                    <p class="text-white link-nav"><a wire:navigate href="{{ route('homepage') }}">Home </a> <span
                            class="lnr lnr-arrow-right"></span> <a wire:navigate href="{{ route('contactpage') }}">
                            Contact Us</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start contact-page Area -->
    <section class="contact-page-area section-gap py-5" style="background: #f8fafc;">
        <div class="container">
            <div class="row">
                <!-- Contact Info & Quick Links Sidebar -->
                <div class="col-lg-4 mb-4">
                    <div class="widget-wrap p-4 bg-white shadow rounded" style="margin-bottom: 32px;">
                        <!-- Quick Links Widget -->
                        <div class="single-sidebar-widget mb-4">
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
                        <!-- Contact Info -->
                        <div class="contact-info-widget">
                            <h4 class="mb-3" style="font-weight: 700;">Contact Information</h4>
                            <div class="single-contact-address d-flex flex-row mb-3">
                                <div class="icon">
                                    <span class="lnr lnr-home"></span>
                                </div>
                                <div class="contact-details ms-2">
                                    <h5>Karachi, Pakistan</h5>
                                    <p>We deal all over Pakistan customers.</p>
                                </div>
                            </div>
                            <div class="single-contact-address d-flex flex-row mb-3">
                                <div class="icon">
                                    <span class="lnr lnr-phone-handset"></span>
                                </div>
                                <div class="contact-details ms-2">
                                    <h5>+92 339 0027031<br>*92 328 2499598</h5>
                                    <p>Mon to Fri 9am to 6 pm</p>
                                </div>
                            </div>
                            <div class="single-contact-address d-flex flex-row mb-3">
                                <div class="icon">
                                    <span class="lnr lnr-envelope"></span>
                                </div>
                                <div class="contact-details ms-2">
                                    <h5>info@craftcopiersolution.com</h5>
                                    <p>Send us your query anytime!</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 mt-3">
                                <a href="https://www.facebook.com/craftcopiersolutions" target="_blank" class="btn btn-sm btn-primary rounded-circle"><i class="fa fa-facebook"></i></a>
                                <a href="https://wa.me/+923282499598" target="_blank" class="btn btn-sm btn-success rounded-circle"><i class="fa fa-whatsapp"></i></a>
                                <a href="https://www.instagram.com/craftcopiersolution/" target="_blank" class="btn btn-sm btn-danger rounded-circle"><i class="fa fa-instagram"></i></a>
                                <a href="https://www.youtube.com/@craftcopiersolution" target="_blank" class="btn btn-sm btn-danger rounded-circle"><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact Form & Map -->
                <div class="col-lg-8">
                    <div class="bg-white shadow rounded p-4">
                        <h2 class="mb-4 text-primary" style="font-weight: 700;">Get in Touch</h2>
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif

                        <form wire:submit.prevent="submit" class="form-area contact-form" id="contactForm" style="font-family: 'Poppins', sans-serif;">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <input wire:model="name" placeholder="Enter your name" class="form-control form-control-lg" type="text">
                                    @error('name')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <input wire:model="email" placeholder="Enter email address"
                                        pattern="[A-Za-z0-9._%+-]+@[A-Za
