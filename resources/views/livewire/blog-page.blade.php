<div>
	<!-- start banner Area -->
	<section class="about-banner relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Our Blogs
					</h1>

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
							<article class="single-blog-container p-4 shadow-lg rounded bg-white"
								style="border: 1px solid #e2e8f0; font-family: 'Poppins', sans-serif;">

								<header>
									<h1 class="mb-3 text-primary"
										style="font-weight: 800; font-size: 1.75rem; color: #ffffff !important; line-height: 1.3; background-color: #02d602; border-radius: 12px; padding: 10px;">
										{{ $blog->title }}
									</h1>
								</header>

								<!-- Responsive Image with SEO-friendly alt -->
								<figure class="mb-4">
									<img loading="lazy" src="{{ url('storage/' . $blog->img) }}"
										alt="{{ $blog->title }} - Blog Image" class="img-fluid rounded mb-4"
										style="max-height: 100%; object-fit: cover; width: 100%; height: auto;">
								</figure>

								<!-- Meta Information with Improved Visual Design -->
								<div class="d-flex flex-wrap justify-content-start mb-4"
									style="gap: 20px; font-size: 1rem; color: #64748b;">
									<p class="mb-0 btn-style"><i class="fas fa-folder-open"></i> <strong>Category:</strong>
										<span>{{ $blog->category }}</span>
									</p>
									<p class="mb-0 btn-style"><i class="fas fa-calendar-alt"></i> <strong>Date:</strong>
										<span>{{ $blog->created_at->format('d M, Y') }}</span>
									</p>
								</div>


								<!-- Blog Content Section -->
								<section class="blog-description mt-4" style="line-height: 1.8; color: #465263; font-size: 1.1rem; 
						background-color: #f4f8fb; 
						padding: 20px; 
						border-radius: 8px; 
						font-family: 'Arial', sans-serif; 
						box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
									{!! $blog->description !!}
								</section>


								<!-- Back Button -->
								<div class="mt-5 text-center">
									<a href="{{ url()->previous() }}" class="btn btn-primary btn-lg rounded-pill px-5 py-2"
										style="font-weight: 600; letter-spacing: 1px;">Back</a>
								</div>
							</article>

					@else
						<!-- Error Message for Missing Blog -->
						<div class="alert alert-danger mt-4 p-4 text-center rounded shadow"
							style="font-family: 'Poppins', sans-serif;">
							Blog not found.
						</div>
					@endif
				</div>


				<div class="col-lg-4 sidebar-widgets">
					<div class="widget-wrap" style="font-family: 'Poppins', sans-serif;">


						<!-- Author Info Widget -->
						<div
							class="single-sidebar-widget user-info-widget text-center mb-4 p-4 bg-white shadow rounded">
							{{-- <img src="img/blog/user-info.png" alt="Author Image"
								class="img-fluid rounded-circle mb-3"
								style="width: 120px; height: 120px; object-fit: cover;"> --}}
							<h4 class="mb-1" style="font-weight: 700;">CRAFT COPIER SOLUTION Team</h4>
							<p class="text-muted">Professional Blog Writers</p>

							<div class="d-flex justify-content-center gap-3 mb-3 ">
								<a href="https://www.facebook.com/craftcopiersolutions" target="_blank"
									class="text-primary fs-5">
									<i class="fa fa-facebook"></i>
								</a>
								<a href="https://wa.me/+923282499598" target="_blank" class="text-success fs-5 mx-2">
									<i class="fa fa-whatsapp"></i>
								</a>
								<a href="https://www.instagram.com/craftcopiersolution/" target="_blank"
									class="text-danger fs-5 mx-2">
									<i class="fa fa-instagram"></i>
								</a>
								<a href="https://www.youtube.com/@craftcopiersolution" target="_blank"
									class="text-danger fs-5 mx-2">
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

							</div>
							@foreach($blogs as $blog)
								<div class="single-recent-blog-post item">
									<a href="{{ route('blogpage', ['title' => $blog->title]) }}" class="blog-link">
										<div class="blog-card">
											<div class="blog-card-image">
												<!-- Optional: You can add a thumbnail or image here -->
												<img src="{{ url('storage/' . $blog->img) }}" alt="{{ $blog->title }}"
													class="img-fluid">
											</div>
											<div class="blog-card-details">
												<h4 class="blog-title">{{ $blog->title }}</h4>
												<h6 class="blog-date">{{ $blog->created_at->format('F j, Y') }}</h6>
												<p class="blog-excerpt">
													{{ Str::limit($blog->content, 100) }} <!-- Display a short excerpt -->
												</p>
											</div>
										</div>
									</a>
								</div>
							@endforeach

						</div>

						<!-- Ads Widget -->
						{{-- <div class="single-sidebar-widget ads-widget mb-4">
							<a href="#"><img class="img-fluid rounded shadow" src="img/blog/ads-banner.jpg"
									alt="Ad Banner"></a>
						</div> --}}

						<!-- Post Categories Widget -->
						<div class="single-sidebar-widget post-category-widget mb-4 p-4 bg-white shadow rounded">
							<h4 class="mb-3" style="font-weight: 700;">Post Categories</h4>
							<ul class="cat-list list-unstyled">
								@foreach($blogs as $blogItem)
									<li class="mb-2">
										<a href="#" class="d-flex justify-content-between text-decoration-none text-dark">
											<p class="mb-0">{{ $blogItem->category }}</p>
										</a>
									</li>
								@endforeach
							</ul>
						</div>



					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End post-content Area -->



	<style>
		/* Make the paragraphs look like buttons */
		.btn-style {
			display: inline-flex;
			align-items: center;
			padding: 8px 15px;

			border-radius: 25px;
			/* Rounded edges */
			background-color: #02d602;
			/* Button background color */
			color: #fff;
			/* Text color */
			font-size: 1rem;
			/* Font size */
			text-decoration: none;
			/* Remove text underline */
			transition: background-color 0.3s ease;
			/* Smooth background transition */
		}

		/* Hover effect to simulate button hover (not necessary but can be added for styling) */
		.btn-style:hover {
			background-color: #02d602;
			/* Darker background when hovered */

		}

		/* Optionally, you can add spacing between the icons and text */
		.btn-style i {
			margin-right: 8px;
		}

		.single-recent-blog-post {
			margin-bottom: 30px;
			transition: all 0.3s ease;
		}

		/* Blog card layout */
		.blog-card {
			border: 1px solid #f0f0f0;
			border-radius: 8px;
			overflow: hidden;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
			background-color: #fff;
			transition: transform 0.3s ease, box-shadow 0.3s ease;
		}

		/* Hover effect */
		.blog-card:hover {
			transform: translateY(-5px);
			box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
		}

		/* Image styles */
		.blog-card-image img {
			width: 100%;
			height: auto;
			border-bottom: 1px solid #f0f0f0;
		}

		/* Blog text details */
		.blog-card-details {
			padding: 20px;
		}

		.blog-title {
			font-size: 1rem;
			font-weight: bold;
			color: #333;
			margin-bottom: 10px;
		}

		.blog-date {
			font-size: 0.875rem;
			color: #888;
			margin-bottom: 15px;
		}

		.blog-excerpt {
			font-size: 1rem;
			color: #666;
			line-height: 1.5;
			margin-bottom: 20px;
		}

		/* Optional: Add a link style for blog page */
		.blog-link {
			text-decoration: none;
			color: inherit;
		}
	</style>
</div>