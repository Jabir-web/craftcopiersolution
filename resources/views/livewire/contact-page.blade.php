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
 <section class="contact-page-area section-gap py-5" style="background: #fffbe7;">
    <div class="container">
        <div class=" bg-warning row g-5 align-items-start">
            <!-- Left Column: Map + Contact Info -->
            <div class="col-lg-5">
                <div class="mb-4 shadow rounded overflow-hidden" style="height: 320px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462117.05296393496!2d66.82581529773248!3d25.193458567990753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Pakistan!5e0!3m2!1sen!2s!4v1740514341752!5m2!1sen!2s"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="bg-white p-4 rounded shadow-sm border border-warning">
                    <div class="d-flex align-items-start mb-4">
                        <div class="icon bg-warning text-white rounded-circle me-3 p-3 d-flex align-items-center justify-content-center">
                            <i class="lnr lnr-home fs-5"></i>
                        </div>
                        <div>
                            <h6 class="mb-1 fw-bold">Karachi, Pakistan</h6>
                            <small class="text-muted">We deal all over Pakistan</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-4">
                        <div class="icon bg-warning text-white rounded-circle me-3 p-3 d-flex align-items-center justify-content-center">
                            <i class="lnr lnr-phone-handset fs-5"></i>
                        </div>
                        <div>
                            <h6 class="mb-1 fw-bold">+92 339 0027031 | +92 328 2499598</h6>
                            <small class="text-muted">Mon to Fri 9am - 6pm</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-start">
                        <div class="icon bg-warning text-white rounded-circle me-3 p-3 d-flex align-items-center justify-content-center">
                            <i class="lnr lnr-envelope fs-5"></i>
                        </div>
                        <div>
                            <h6 class="mb-1 fw-bold">info@craftcopiersolution.com</h6>
                            <small class="text-muted">Send us your queries anytime</small>
                        </div>
                    </div>
                    <div class="d-flex gap-3 mt-4">
                        <a href="https://www.facebook.com/craftcopiersolutions" target="_blank" class="btn btn-sm btn-warning rounded-circle">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="https://wa.me/+923282499598" target="_blank" class="btn btn-sm btn-warning rounded-circle">
                            <i class="fa fa-whatsapp"></i>
                        </a>
                        <a href="https://www.instagram.com/craftcopiersolution/" target="_blank" class="btn btn-sm btn-warning rounded-circle">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a href="https://www.youtube.com/@craftcopiersolution" target="_blank" class="btn btn-sm btn-warning rounded-circle">
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
                    </form>
                </div>

                <div class="p-4 bg-white shadow rounded border border-warning">
                    <h4 class="fw-bold mb-3 text-warning">Quick Links</h4>
                    <ul class="list-unstyled small mb-0">
                        <li class="mb-2"><a href="{{ route('homepage') }}"><i class="fa fa-home me-2 text-warning"></i>Home</a></li>
                        <li class="mb-2"><a href="{{ route('aboutpage') }}"><i class="fa fa-info-circle me-2 text-warning"></i>About Us</a></li>
                        <li class="mb-2"><a href="{{ route('contactpage') }}"><i class="fa fa-envelope me-2 text-warning"></i>Contact</a></li>
                        <li class="mb-2"><a href="{{ route('homepage') }}#our-best-machines"><i class="fa fa-print me-2 text-warning"></i>Machines</a></li>
                        <li class="mb-2"><a href="{{ route('homepage') }}#blog-list-area"><i class="fa fa-list me-2 text-warning"></i>Blogs</a></li>
                        <li class="mb-2"><a href="{{ route('homepage') }}#testimonials-area"><i class="fa fa-star me-2 text-warning"></i>Testimonials</a></li>
                        <li><a href="{{ route('homepage') }}#other-issue-area"><i class="fa fa-question-circle me-2 text-warning"></i>Other Issues</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    
</section>


</div>



