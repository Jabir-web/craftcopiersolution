@section('title')
    Contact - Craft Copier Solution
@endsection

<div>
    <!-- Banner Area -->
    <section class="relative about-banner">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12 text-center">
                    <h1 class="text-white">Contact Us</h1>
                    <p class="text-white link-nav">
                        <a wire:navigate href="{{ route('homepage') }}">Home</a>
                        <span class="lnr lnr-arrow-right"></span>
                        <a wire:navigate href="{{ route('aboutpage') }}">About Us</a>
                        <span class="lnr lnr-arrow-right"></span>
                        <a wire:navigate href="{{ route('homepage') }}#our-best-machines">Services</a>
                        <span class="lnr lnr-arrow-right"></span>
                        <a wire:navigate href="{{ route('homepage') }}#blog-list-area">Blog</a>
                        <span class="lnr lnr-arrow-right"></span>
                        <a wire:navigate href="{{ route('contactpage') }}">Contact Us</a>
                        <span class="lnr lnr-arrow-right"></span>
                        <a wire:navigate href="{{ route('homepage') }}#other-issue-area">Other Issue</a>
                        <span class="lnr lnr-arrow-right"></span>
                        <a wire:navigate href="{{ route('homepage') }}#testimonials-area">Testimonials</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!-- Contact Page Area -->
    <section class="contact-page-area section-gap">
        <div class="container">
            <div class="row">
                <!-- Left Side: Map + Contact Info -->
                <div class="col-lg-6 mb-4">
                    <!-- Google Map -->
                    <div class="mb-4" style="height: 445px;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462117.05296393496!2d66.82581529773248!3d25.193458567990753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Pakistan!5e0!3m2!1sen!2s!4v1740514341752!5m2!1sen!2s"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <!-- Contact Info -->
                    <div class="single-contact-address d-flex mb-3">
                        <div class="icon"><span class="lnr lnr-home"></span></div>
                        <div class="contact-details ps-3">
                            <h5>Karachi, Pakistan</h5>
                            <p>We deal all over Pakistan.</p>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex mb-3">
                        <div class="icon"><span class="lnr lnr-phone-handset"></span></div>
                        <div class="contact-details ps-3">
                            <h5>+92 339 0027031 <br>*92 328 2499598</h5>
                            <p>Mon to Fri 9am to 6pm</p>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex">
                        <div class="icon"><span class="lnr lnr-envelope"></span></div>
                        <div class="contact-details ps-3">
                            <h5>info@craftcopiersolution.com</h5>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Quick Links + Contact Form -->
                <div class="col-lg-6">
                    <!-- Quick Links -->
                    <div class="single-sidebar-widget mb-4 p-4 bg-light shadow-sm rounded">
                        <h4 class="mb-3 fw-bold">Quick Links</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="{{ route('homepage') }}"><i class="fa fa-home me-2 text-primary"></i>Home</a></li>
                            <li class="mb-2"><a href="{{ route('aboutpage') }}"><i class="fa fa-info-circle me-2 text-success"></i>About Us</a></li>
                            <li class="mb-2"><a href="{{ route('contactpage') }}"><i class="fa fa-envelope me-2 text-danger"></i>Contact</a></li>
                            <li class="mb-2"><a href="{{ route('homepage') }}#our-best-machines"><i class="fa fa-print me-2 text-warning"></i>Machines</a></li>
                            <li class="mb-2"><a href="{{ route('homepage') }}#blog-list-area"><i class="fa fa-list me-2 text-info"></i>Blogs</a></li>
                            <li class="mb-2"><a href="{{ route('homepage') }}#testimonials-area"><i class="fa fa-star me-2 text-secondary"></i>Testimonials</a></li>
                            <li><a href="{{ route('homepage') }}#other-issue-area"><i class="fa fa-question-circle me-2 text-dark"></i>Other Issue</a></li>
                        </ul>
                    </div>

                    <!-- Contact Form -->
                    @if (session()->has('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif

                    <form wire:submit.prevent="submit" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input wire:model="name" type="text" class="form-control" placeholder="Enter your name">
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <input wire:model="email" type="email" class="form-control" placeholder="Enter email address">
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <input wire:model="subject" type="text" class="form-control" placeholder="Enter subject">
                                @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <textarea wire:model="message" class="form-control" rows="5" placeholder="Enter message"></textarea>
                                @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 text-end">
                                <button type="submit" class="genric-btn primary">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End Right Side -->
            </div>
        </div>
    </section>
</div>
