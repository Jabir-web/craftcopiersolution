@section('title')
    Contact - Craft Copier Solution
@endsection

<div>
    <!-- Hero Section -->

    <section class="relative about-banner">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white display-4 fw-bold">Contact Us</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section class="contact-page-area section-gap py-5 bg-light">
        <div class="container">
            <div class="row g-5">
                <!-- Left Column: Map + Contact Info -->
                <div class="col-lg-5">
                    <div class="mb-4 shadow rounded overflow-hidden">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462117.05296393496!2d66.82581529773248!3d25.193458567990753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Pakistan!5e0!3m2!1sen!2s!4v1740514341752!5m2!1sen!2s"
                            class="w-100" height="320" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                    <div class="bg-white p-4 rounded shadow border border-warning">
                        <div class="d-flex align-items-center gap-3 my-3">


                            <div class="bg-warning text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                                style="width: 48px; height: 48px;">
                                <i class="lnr lnr-home fs-5"></i>
                            </div>
                            <div class="mx-4">
                                <h6 class="fw-bold mb-1">Karachi, Pakistan</h6>
                                <small class="text-muted">We deal all over Pakistan</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 my-3">


                            <div class="bg-warning text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                                style="width: 48px; height: 48px;">
                                <i class="lnr lnr-phone-handset fs-5"></i>
                            </div>
                            <div class="mx-4">
                                <h6 class="fw-bold mb-1">+92 339 0027031 | +92 328 2499598</h6>
                                <small class="text-muted">Mon to Fri 9am - 6pm</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 my-3">


                            <div class="bg-warning text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                                style="width: 48px; height: 48px;">
                                <i class="lnr lnr-envelope fs-5"></i>
                            </div>
                            <div class="mx-4">
                                <h6 class="fw-bold mb-1">info@craftcopiersolution.com</h6>
                                <small class="text-muted ">Send us your queries anytime</small>
                            </div>
                        </div>
                       <div class="d-flex justify-content-between flex-wrap gap-3 mt-4">
    <a href="https://www.facebook.com/craftcopiersolutions" target="_blank"
       class="btn btn-sm btn-warning rounded-circle d-flex align-items-center justify-content-center"
       style="width: 40px; height: 40px;">
        <i class="fa fa-facebook"></i>
    </a>
    <a href="https://wa.me/+923282499598" target="_blank"
       class="btn btn-sm btn-warning rounded-circle d-flex align-items-center justify-content-center"
       style="width: 40px; height: 40px;">
        <i class="fa fa-whatsapp"></i>
    </a>
    <a href="https://www.instagram.com/craftcopiersolution/" target="_blank"
       class="btn btn-sm btn-warning rounded-circle d-flex align-items-center justify-content-center"
       style="width: 40px; height: 40px;">
        <i class="fa fa-instagram"></i>
    </a>
    <a href="https://www.youtube.com/@craftcopiersolution" target="_blank"
       class="btn btn-sm btn-warning rounded-circle d-flex align-items-center justify-content-center"
       style="width: 40px; height: 40px;">
        <i class="fa fa-youtube"></i>
    </a>
</div>
                    </div>
                </div>

                <!-- Right Column: Contact Form + Quick Links -->
                <div class="col-lg-7">
                    <div class="p-4 bg-white shadow rounded mb-4 border border-warning">
                        <h3 class="fw-bold mb-4 text-warning text-center">Send Us a Message</h3>

                        @if (session()->has('message'))
                            <div class="alert alert-success">{{ session('message') }}</div>
                        @endif

                        <form wire:submit.prevent="submit">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6 my-4">
                                    <input type="text" wire:model="name" class="form-control border-warning"
                                        placeholder="Your Name">
                                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-6 my-4">
                                    <input type="email" wire:model="email" class="form-control border-warning"
                                        placeholder="Your Email">
                                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-12 my-4">
                                    <input type="text" wire:model="subject" class="form-control border-warning"
                                        placeholder="Subject">
                                    @error('subject') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-12 my-4">
                                    <textarea wire:model="message" class="form-control border-warning" rows="5"
                                        placeholder="Message"></textarea>
                                    @error('message') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-12 text-end my-4">
                                    <button type="submit"
                                        class="btn btn-warning px-5 py-2 rounded-pill fw-semibold">Send Message</button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="col-lg-12 sidebar-widgets">
                        <div class="widget-wrap">
                            <!-- Internal Professional Links Widget -->
                            <div class="single-sidebar-widget mb-4 p-4 bg-white shadow rounded"
                                style="font-family: 'Poppins', sans-serif;">
                                <h4 class="mb-4 fw-bold text-dark">Quick Links</h4>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-3">
                                        <a href="{{ route('homepage') }}"
                                            class="d-flex align-items-center text-decoration-none text-dark">
                                            <span
                                                class="d-inline-flex justify-content-center align-items-center bg-primary text-white rounded-circle me-4"
                                                style="width: 36px; height: 36px;">
                                                <i class="fa fa-home"></i>
                                            </span>
                                            <span class="mx-4">Home</span>
                                        </a>
                                    </li>
                                    <li class="mb-3">
                                        <a href="{{ route('aboutpage') }}"
                                            class="d-flex align-items-center text-decoration-none text-dark">
                                            <span
                                                class="d-inline-flex justify-content-center align-items-center bg-success text-white rounded-circle me-4"
                                                style="width: 36px; height: 36px;">
                                                <i class="fa fa-info-circle"></i>
                                            </span>
                                            <span class="mx-4">About Us</span>
                                        </a>
                                    </li>
                                    <li class="mb-3">
                                        <a href="{{ route('contactpage') }}"
                                            class="d-flex align-items-center text-decoration-none text-dark">
                                            <span
                                                class="d-inline-flex justify-content-center align-items-center bg-danger text-white rounded-circle me-4"
                                                style="width: 36px; height: 36px;">
                                                <i class="fa fa-envelope"></i>
                                            </span>
                                            <span class="mx-4">Contact</span>
                                        </a>
                                    </li>
                                    <li class="mb-3">
                                        <a href="{{ route('homepage') }}#our-best-machines"
                                            class="d-flex align-items-center text-decoration-none text-dark">
                                            <span
                                                class="d-inline-flex justify-content-center align-items-center bg-warning text-white rounded-circle me-4"
                                                style="width: 36px; height: 36px;">
                                                <i class="fa fa-print"></i>
                                            </span>
                                            <span class="mx-4">Machines</span>
                                        </a>
                                    </li>
                                    <li class="mb-3">
                                        <a href="{{ route('homepage') }}#blog-list-area"
                                            class="d-flex align-items-center text-decoration-none text-dark">
                                            <span
                                                class="d-inline-flex justify-content-center align-items-center bg-info text-white rounded-circle me-4"
                                                style="width: 36px; height: 36px;">
                                                <i class="fa fa-list"></i>
                                            </span>
                                            <span class="d-flex flex-column">
                                                <span class="fw-bold mx-4"
                                                    style="color: #0F172A; letter-spacing: 1px;">Blogs</span>
                                                <span class="small text-success fw-medium"
                                                    style="margin-top: -2px;">&nbsp;</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="mb-3">
                                        <a href="{{ route('homepage') }}#testimonials-area"
                                            class="d-flex align-items-center text-decoration-none text-dark">
                                            <span
                                                class="d-inline-flex justify-content-center align-items-center bg-secondary text-white rounded-circle me-4"
                                                style="width: 36px; height: 36px;">
                                                <i class="fa fa-star"></i>
                                            </span>
                                            <span class="mx-4">Testimonials</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('homepage') }}#other-issue-area"
                                            class="d-flex align-items-center text-decoration-none text-dark">
                                            <span
                                                class="d-inline-flex justify-content-center align-items-center bg-dark text-white rounded-circle me-4"
                                                style="width: 36px; height: 36px;">
                                                <i class="fa fa-question-circle"></i>
                                            </span>
                                            <span class="mx-4">Other Issue</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>



</div>