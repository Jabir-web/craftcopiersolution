@section('title')
    Contact - Craft Copier Solution
@endsection

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
    <section class="contact-page-area section-gap py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Left: Map + Info -->
                <div class="col-lg-6">
                    <div class="mb-4 shadow-sm rounded overflow-hidden" style="height: 400px;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462117.05296393496!2d66.82581529773248!3d25.193458567990753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Pakistan!5e0!3m2!1sen!2s!4v1740514341752!5m2!1sen!2s"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="bg-light p-4 rounded shadow-sm mb-3">
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon bg-primary text-white rounded-circle me-3 p-3">
                                <i class="lnr lnr-home fs-5"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">Karachi, Pakistan</h6>
                                <small class="text-muted">We deal all over Pakistan</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon bg-success text-white rounded-circle me-3 p-3">
                                <i class="lnr lnr-phone-handset fs-5"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">+92 339 0027031 | +92 328 2499598</h6>
                                <small class="text-muted">Mon to Fri 9am - 6pm</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="icon bg-danger text-white rounded-circle me-3 p-3">
                                <i class="lnr lnr-envelope fs-5"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">info@craftcopiersolution.com</h6>
                                <small class="text-muted">Send us your queries anytime</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Contact Form + Links -->
                <div class="col-lg-6">
                    <div class="p-4 bg-white shadow-sm rounded mb-4">
                        <h4 class="fw-bold mb-3">Quick Links</h4>
                        <ul class="list-unstyled small">
                            <li class="mb-2"><a href="{{ route('homepage') }}"><i class="fa fa-home me-2 text-primary"></i>Home</a></li>
                            <li class="mb-2"><a href="{{ route('aboutpage') }}"><i class="fa fa-info-circle me-2 text-success"></i>About Us</a></li>
                            <li class="mb-2"><a href="{{ route('contactpage') }}"><i class="fa fa-envelope me-2 text-danger"></i>Contact</a></li>
                            <li class="mb-2"><a href="{{ route('homepage') }}#our-best-machines"><i class="fa fa-print me-2 text-warning"></i>Machines</a></li>
                            <li class="mb-2"><a href="{{ route('homepage') }}#blog-list-area"><i class="fa fa-list me-2 text-info"></i>Blogs</a></li>
                            <li class="mb-2"><a href="{{ route('homepage') }}#testimonials-area"><i class="fa fa-star me-2 text-secondary"></i>Testimonials</a></li>
                            <li><a href="{{ route('homepage') }}#other-issue-area"><i class="fa fa-question-circle me-2 text-dark"></i>Other Issues</a></li>
                        </ul>
                    </div>

                    <div class="p-4 bg-white shadow-sm rounded">
                        <h4 class="fw-bold mb-4">Send Us a Message</h4>
                        @if (session()->has('message'))
                            <div class="alert alert-success">{{ session('message') }}</div>
                        @endif

                        <form wire:submit.prevent="submit">
                            @csrf
                            <div class="mb-3">
                                <input type="text" wire:model="name" class="form-control" placeholder="Your Name">
                                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="mb-3">
                                <input type="email" wire:model="email" class="form-control" placeholder="Your Email">
                                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="mb-3">
                                <input type="text" wire:model="subject" class="form-control" placeholder="Subject">
                                @error('subject') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="mb-3">
                                <textarea wire:model="message" class="form-control" rows="5" placeholder="Message"></textarea>
                                @error('message') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
