<div>
	<!-- start banner Area -->
	<section class="banner-area relative bg-warning blog-home-banner" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content blog-header-content col-lg-12">
					<h1 class="text-white">
						We Help You With Blogs
					</h1>
					<p class="text-white">
						There is a moment in the life of any aspiring astronomer that it is time to buy that first
					</p>
					<a href="blog-single.html" class="primary-btn">View More</a>
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
					@foreach($blogs as $blog)
						<div class="single-post row">
							<div class="col-lg-3  col-md-3 meta-details">
								<ul class="tags">
									<li><a href="#">{{ $blog->category }}</a></li>

								</ul>
								<div class="user-details row">
									{{-- <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Mark wiens</a> <span
											class="lnr lnr-user"></span></p> --}}
									<p class="date col-lg-12 col-md-12 col-6"><a href="#">{{ $blog->created_at }}</a> <span
											class="lnr lnr-calendar-full"></span></p>
									<p class="view col-lg-12 col-md-12 col-6"><a href="#">{{ $blog->views }} Views</a> <span
											class="lnr lnr-eye"></span></p>
									{{-- <p class="comments col-lg-12 col-md-12 col-6"><a href="#">06 Comments</a> <span
											class="lnr lnr-bubble"></span></p> --}}
								</div>
							</div>
							<div class="col-lg-9 col-md-9 ">
								<div class="feature-img">
									<img src="{{ url('storage/' . $blog->img) }}" alt="{{ $blog->title }}"
										class="img-fluid fixed-image">
								</div>
								<a class="posts-title" href="blog-single.html">
									<h3>{{ $blog->title }}</h3>
								</a>
								<p>{!! $blog->description !!}</p>
								<a href="blog-single.html" class="primary-btn">View More</a>
							</div>
						</div>
					@endforeach
					<nav class="blog-pagination justify-content-center d-flex">
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
								@foreach($blogs as $blog)
									<div class="single-post-list">
										<h6>{{ $blog->title }}</h6>
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
								@foreach($blogs as $blog)
									<li>
										<a href="#" class="d-flex justify-content-between">
											<p>{{ $blog->category }}</p> <!-- Displaying category name -->

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