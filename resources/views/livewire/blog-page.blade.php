<div>
	<!-- start banner Area -->
	<section class="banner-area relative text-center">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-center">
				<div class="col-lg-8 col-md-10">
					<h6 class="text-white d-none d-md-block">Insights, Tips, and Solutions for All Your Printing Needs</h6>
					<h1 class="text-white">Welcome to Our Printer Solutions Blog</h1>
					<p class="text-white d-none d-md-block">
						Explore expert articles, maintenance tips, troubleshooting guides, and the latest updates in the world of printers. 
						Stay informed and keep your office running smoothly with advice from the professionals at Craft Copier Solution.
					</p>
					<div class="mt-4">
						<a href="{{ route('contactpage') }}" wire:navigate class="primary-btn text-uppercase d-inline-block">Get a Free Consultation.</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	

	<!-- End banner Area -->

	<!-- Start top-category-widget Area -->
	<section class="top-category-widget-area pt-90 pb-90 ">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>
							<a href="#" target="_blank">
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="img/blog/cat-widget1.jpg"
										alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">Social life</h4>
									<span></span>
									<p>Enjoy your social life together</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>
							<a href="#" target="_blank">
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="img/blog/cat-widget2.jpg"
										alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">Politics</h4>
									<span></span>
									<p>Be a part of politics</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>
							<a href="#" target="_blank">
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="img/blog/cat-widget3.jpg"
										alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">Food</h4>
									<span></span>
									<p>Let the food be finished</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End top-category-widget Area -->

	<!-- Start post-content Area -->
	<section class="post-content-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 posts-list">
					@if ($blog)
						{{-- Single blog view --}}
						<div class="single-blog-container p-4 shadow rounded bg-white" style="border: 1px solid #e2e8f0;">
							<h1 class="mb-3" style="font-weight: 700; font-size: 2rem; color: #0F172A;">{{ $blog->title }}</h1>
				
							<img src="{{ url('storage/' . $blog->img) }}" alt="{{ $blog->title }}" class="img-fluid rounded mb-4" style="max-height: 450px; object-fit: cover; width: 100%;">
				
							<div class="d-flex flex-wrap justify-content-start mb-3" style="gap: 20px;">
								<p class="mb-0 text-muted"><strong>Category:</strong> {{ $blog->category }}</p>
								<p class="mb-0 text-muted"><strong>Date:</strong> {{ $blog->created_at->format('d M, Y') }}</p>
								<p class="mb-0 text-muted"><strong>Views:</strong> {{ $blog->views }}</p>
							</div>
				
							<div class="blog-description mt-4" style="line-height: 1.8; color: #334155;">
								{!! $blog->description !!}
							</div>
				
							<div class="mt-5 text-center">
								<a href="{{ url()->previous() }}" class="btn btn-primary btn-lg rounded-pill px-5 py-2">Back</a>
							</div>
						</div>
					@else
						<div class="alert alert-danger mt-4 p-4 text-center rounded shadow">
							Blog not found.
						</div>
					@endif
				
					<nav class="blog-pagination justify-content-center d-flex mt-5">
						<ul class="pagination">
							<li class="page-item">
								<a href="#" class="page-link" aria-label="Previous">
									<span aria-hidden="true">
										<span class="lnr lnr-chevron-left"></span>
									</span>
								</a>
							</li>
							<li class="page-item"><a href="#" class="page-link">01</a></li>
							<li class="page-item active"><a href="#" class="page-link">02</a></li>
							<li class="page-item"><a href="#" class="page-link">03</a></li>
							<li class="page-item"><a href="#" class="page-link">04</a></li>
							<li class="page-item"><a href="#" class="page-link">09</a></li>
							<li class="page-item">
								<a href="#" class="page-link" aria-label="Next">
									<span aria-hidden="true">
										<span class="lnr lnr-chevron-right"></span>
									</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
				
				<div class="col-lg-4 sidebar-widgets">
					<div class="widget-wrap">
						<div class="single-sidebar-widget search-widget">
							<form class="search-form" action="#">
								<input placeholder="Search Posts" name="search" type="text"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'">
								<button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
						<div class="single-sidebar-widget user-info-widget">
							<img src="img/blog/user-info.png" alt="">
							<a href="#">
								<h4>Charlie Barber</h4>
							</a>
							<p>
								Senior blog writer
							</p>
							<ul class="social-links">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-github"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>
							<p>
								Boot camps have its supporters andit sdetractors. Some people do not understand why you
								should have to spend money on boot camp when you can get. Boot camps have itssuppor ters
								andits detractors.
							</p>
						</div>
						<div class="single-sidebar-widget popular-post-widget">
							<h4 class="popular-title">Popular Posts</h4>
							<div class="popular-post-list">
								@foreach($blogs as $blogItem)
									<div class="single-post-list">
										<h6>{{ $blogItem->title }}</h6>
									</div>
								@endforeach



							</div>
						</div>

						<div class="single-sidebar-widget ads-widget">
							<a href="#"><img class="img-fluid" src="img/blog/ads-banner.jpg" alt=""></a>
						</div>
						<div class="single-sidebar-widget post-category-widget">
							<h4 class="category-title">Post Categories</h4>
							<ul class="cat-list">
								@foreach($blogs as $blogItem)
									<li>
										<a href="#" class="d-flex justify-content-between">
											<p>{{ $blogItem->category }}</p>
										</a>
									</li>
								@endforeach
							</ul>


						</div>


						<div class="single-sidebar-widget tag-cloud-widget">
							<h4 class="tagcloud-title">Tag Clouds</h4>
							<ul>
								<li><a href="#">Technology</a></li>
								<li><a href="#">Fashion</a></li>
								<li><a href="#">Architecture</a></li>
								<li><a href="#">Fashion</a></li>
								<li><a href="#">Food</a></li>
								<li><a href="#">Technology</a></li>
								<li><a href="#">Lifestyle</a></li>
								<li><a href="#">Art</a></li>
								<li><a href="#">Adventure</a></li>
								<li><a href="#">Food</a></li>
								<li><a href="#">Lifestyle</a></li>
								<li><a href="#">Adventure</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End post-content Area -->
</div>