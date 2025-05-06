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
						<div class="single-blog-container p-5 shadow rounded bg-white"
							style="border: 1px solid #e2e8f0; font-family: 'Poppins', sans-serif;">
							<h1 class="mb-3" style="font-weight: 800; font-size: 2.5rem; color: #1e293b; line-height: 1.2;">
								{{ $blog->title }}</h1>

							<img loading="lazy" src="{{ url('storage/' . $blog->img) }}" alt="{{ $blog->title }}"
								class="img-fluid rounded mb-4" style="max-height: 450px; object-fit: cover; width: 100%;">

							<div class="d-flex flex-wrap justify-content-start mb-4"
								style="gap: 20px; font-size: 0.95rem; color: #64748b;">
								<p class="mb-0"><i class="fas fa-folder-open"></i> <strong>Category:</strong>
									{{ $blog->category }}</p>
								<p class="mb-0"><i class="fas fa-calendar-alt"></i> <strong>Date:</strong>
									{{ $blog->created_at->format('d M, Y') }}</p>

							</div>

							<div class="blog-description mt-4"
								style="line-height: 1.8; color: #475569; font-size: 1.05rem;">
								{!! $blog->description !!}
							</div>

							<div class="mt-5 text-center">
								<a href="{{ url()->previous() }}" class="btn btn-primary btn-lg rounded-pill px-5 py-2"
									style="font-weight: 600; letter-spacing: 1px;">Back</a>
							</div>
						</div>
					@else
						<div class="alert alert-danger mt-4 p-4 text-center rounded shadow"
							style="font-family: 'Poppins', sans-serif;">
							Blog not found.
						</div>
					@endif
				</div>

				<div class="col-lg-4 sidebar-widgets">
					<div class="widget-wrap" style="font-family: 'Poppins', sans-serif;">
				
						
						<!-- Author Info Widget -->
						<div class="single-sidebar-widget user-info-widget text-center mb-4 p-4 bg-white shadow rounded">
							{{-- <img src="img/blog/user-info.png" alt="Author Image" class="img-fluid rounded-circle mb-3" style="width: 120px; height: 120px; object-fit: cover;"> --}}
							<h4 class="mb-1" style="font-weight: 700;">CRAFT COPIER SOLUTION Team</h4>
							<p class="text-muted">Professional Blog Writers</p>
				
							<div class="d-flex justify-content-center gap-3 mb-3 ">
								<a href="https://www.facebook.com/craftcopiersolutions" target="_blank" class="text-primary fs-5">
									<i class="fa fa-facebook"></i>
								</a>
								<a href="https://wa.me/+923282499598" target="_blank" class="text-success fs-5 mx-2">
									<i class="fa fa-whatsapp"></i>
								</a>
								<a href="https://www.instagram.com/craftcopiersolution/" target="_blank" class="text-danger fs-5 mx-2">
									<i class="fa fa-instagram"></i>
								</a>
								<a href="https://www.youtube.com/@craftcopiersolution" target="_blank" class="text-danger fs-5 mx-2">
									<i class="fa fa-youtube"></i>
								</a>
							</div>
				
							<p class="text-secondary" style="font-size: 0.95rem;">
								Sharing expert advice, troubleshooting tips, and maintenance guides to keep your printing solutions smooth and efficient.
							</p>
						</div>
				
						<!-- Popular Posts Widget -->
						<div class="single-sidebar-widget popular-post-widget mb-4 p-4 bg-white shadow rounded">
							<h4 class="mb-3" style="font-weight: 700;">Popular Posts</h4>
							<div class="popular-post-list">
								@foreach($blogs as $blog)
								<div class="single-recent-blog-post item">
									
									<div class="details">
										
		
										<a href="{{ route('blogpage', ['title' => $blog->title]) }}">
											<h4 class="title">{{ $blog->title }}</h4>
										</a>
								
										<h6 class="date">{{ $blog->created_at->format('F j, Y') }}</h6>
									</div>
								</div>
							@endforeach
							</div>
						</div>
				
						<!-- Ads Widget -->
						{{-- <div class="single-sidebar-widget ads-widget mb-4">
							<a href="#"><img class="img-fluid rounded shadow" src="img/blog/ads-banner.jpg" alt="Ad Banner"></a>
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
				
						<!-- Tag Cloud Widget -->
						<div class="single-sidebar-widget tag-cloud-widget p-4 bg-white shadow rounded">
							<h4 class="mb-3" style="font-weight: 700;">Tag Clouds</h4>
							<ul class="d-flex flex-wrap gap-2 list-unstyled">
								<li><a href="#" class="badge bg-primary text-white p-2">Technology</a></li>
								<li><a href="#" class="badge bg-success text-white p-2">Fashion</a></li>
								<li><a href="#" class="badge bg-warning text-white p-2">Architecture</a></li>
								<li><a href="#" class="badge bg-danger text-white p-2">Food</a></li>
								<li><a href="#" class="badge bg-info text-white p-2">Lifestyle</a></li>
								<li><a href="#" class="badge bg-secondary text-white p-2">Art</a></li>
								<li><a href="#" class="badge bg-primary text-white p-2">Adventure</a></li>
							</ul>
						</div>
				
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End post-content Area -->
</div>