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
                <!-- Map and Quick Links Section -->
                <div class="col-lg-8 d-flex">
                    <!-- Map Container -->
                    <div class="map-wrap" style="flex: 2; margin-right: 20px; height: 445px;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462117.05296393496!2d66.82581529773248!3d25.193458567990753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Pakistan!5e0!3m2!1sen!2s!4v1740514341752!5m2!1sen!2s"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <!-- Quick Links Placeholder -->
                    <div class="quick-links-area" style="flex: 1;">
                       		<div class="col-lg-4 sidebar-widgets">
					<div class="widget-wrap" style="font-family: 'Poppins', sans-serif;">
						<!-- Internal Professional Links Widget -->
						<div class="single-sidebar-widget mb-4 p-4 bg-white shadow rounded">
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
						<!-- Author Info Widget -->
						<div class="single-sidebar-widget user-info-widget text-center mb-4 p-4 bg-white shadow rounded">
							<h4 class="mb-1" style="font-weight: 700;">CRAFT COPIER SOLUTION Team</h4>
							<p class="text-muted">Professional Blog Writers</p>
							<div class="d-flex justify-content-center gap-3 mb-3 ">
								<a href="https://www.facebook.com/craftcopiersolutions" target="_blank" rel="noopener noreferrer" class="text-primary fs-5">
									<i class="fa fa-facebook"></i>
								</a>
								<a href="https://wa.me/+923282499598" target="_blank" rel="noopener noreferrer" class="text-success fs-5 mx-2">
									<i class="fa fa-whatsapp"></i>
								</a>
								<a href="https://www.instagram.com/craftcopiersolution/" target="_blank" rel="noopener noreferrer" class="text-danger fs-5 mx-2">
									<i class="fa fa-instagram"></i>
								</a>
								<a href="https://www.youtube.com/@craftcopiersolution" target="_blank" rel="noopener noreferrer" class="text-danger fs-5 mx-2">
									<i class="fa fa-youtube"></i>
								</a>
							</div>
							<p class="text-secondary" style="font-size: 0.95rem;">
								Sharing expert advice, troubleshooting tips, and maintenance guides to keep your
								printing solutions smooth and efficient.
							</p>
						</div>
						<!-- Popular Posts Widget -->
						<div class="single-sidebar-widget popular-post-widget mb-4 p-4 bg-white shadow rounded">
							<h4 class="mb-3" style="font-weight: 700;">Popular Posts</h4>
							<div class="popular-post-list">
								@foreach($blogs->take(5) as $popular)
									<a href="{{ route('blogpage', ['title' => $popular->title]) }}" class="blog-link d-flex align-items-center mb-3" style="text-decoration: none;">
										<img src="{{ url('storage/' . $popular->img) }}" alt="{{ $popular->title }}" style="width: 60px; height: 60px; object-fit: cover; border-radius: 8px; margin-right: 12px;">
										<div>
											<h5 class="mb-1" style="font-size: 1rem; color: #0F172A;">{{ $popular->title }}</h5>
											<small class="text-muted">{{ $popular->created_at->format('M d, Y') }}</small>
										</div>
									</a>
								@endforeach
							</div>
						</div>
						<!-- Post Categories Widget -->
						<div class="single-sidebar-widget post-category-widget mb-4 p-4 bg-white shadow rounded">
							<h4 class="mb-3" style="font-weight: 700;">Post Categories</h4>
							<ul class="cat-list list-unstyled">
								@foreach($blogs->unique('category') as $blogItem)
									<li class="mb-2">
										<span class="d-flex justify-content-between text-decoration-none text-dark">
											<p class="mb-0">{{ $blogItem->category }}</p>
										</span>
									</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
                    </div>
                </div>

                <!-- Contact Info Section -->
                <div class="col-lg-4 d-flex flex-column address-wrap mt-5 mt-lg-0">
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-home"></span>
                        </div>
                        <div class="contact-details">
                            <h5>Karachi, Pakistan</h5>
                            <p>We deal all over pakistan customers.</p>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-phone-handset"></span>
                        </div>
                        <div class="contact-details">
                            <h5>+92 339 0027031<br>*92 328 2499598</h5>
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

                <!-- Contact Form Section -->
                <div class="col-lg-12 mt-5">
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
