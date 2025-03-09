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
    <section class="contact-page-area section-gap">
        <div class="container">
            <div class="row">
                <div class="map-wrap" style="width:100%; height: 445px;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462117.05296393496!2d66.82581529773248!3d25.193458567990753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Pakistan!5e0!3m2!1sen!2s!4v1740514341752!5m2!1sen!2s"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-4 d-flex flex-column address-wrap">
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-home"></span>
                        </div>
                        <div class="contact-details">
                            <h5>Karachi, Pakistan</h5>
                            <p>
                                We deal all over pakistan customers.
                            </p>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-phone-handset"></span>
                        </div>
                        <div class="contact-details">
                            <h5>+92 339 0027031
                                <br>
                                *92 328 2499598
                            </h5>
                            <p>Mon to Fri 9am to 6 pm</p>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-envelope"></span>
                        </div>
                        <div class="contact-details">
                            <h5>info@craftcopiersolution.com</h5>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                    <form wire:submit.prevent="submit" class="form-area contact-form text-right" id="contactForm">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <input wire:model="name" placeholder="Enter your name" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter your name'"
                                    class="common-input mb-20 form-control" type="text">
                                @error('name')
                                    <span class="error">{{ $message }}</span>
                                @enderror

                                <input wire:model="email" placeholder="Enter email address"
                                    pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                    class="common-input mb-20 form-control" type="email">
                                @error('email')
                                    <span class="error">{{ $message }}</span>
                                @enderror

                                <input wire:model="subject" placeholder="Enter subject" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control"
                                    type="text">
                                @error('subject')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-6 form-group">
                                <textarea wire:model="message" class="common-textarea form-control" placeholder="Enter Message"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"></textarea>
                                @error('message')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <div class="alert-msg" style="text-align: left;"></div>
                                <button type="submit" class="genric-btn primary" style="float: right;">Send
                                    Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End contact-page Area -->
</div>
