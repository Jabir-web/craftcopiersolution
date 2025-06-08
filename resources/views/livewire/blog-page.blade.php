@section('title')
    {{ $blog ? $blog->title . ' | Blog | Craft Copier Solution' : 'Blog | Craft Copier Solution' }}
@endsection

@section('meta_description', $blog ? Str::limit(strip_tags($blog->description), 150) : 'Read expert printer and copier tips, news, and guides from Craft Copier Solution.')
@section('meta_keywords', $blog ? $blog->category . ', printer blog, copier tips, printer repair Karachi, office productivity, copier rental, printer maintenance, Craft Copier Solution blog' : 'printer blog, copier tips, printer repair Karachi, office productivity, copier rental, printer maintenance, Craft Copier Solution blog')
@section('og_title', $blog ? $blog->title : 'Blog | Craft Copier Solution')
@section('og_description', $blog ? Str::limit(strip_tags($blog->description), 150) : 'Read expert printer and copier tips, news, and guides from Craft Copier Solution.')
@section('og_image', $blog ? url('storage/' . $blog->img) : asset('front/img/og-image.jpg'))
@section('og_url', url()->current())
@section('twitter_title', $blog ? $blog->title : 'Blog | Craft Copier Solution')
@section('twitter_description', $blog ? Str::limit(strip_tags($blog->description), 150) : 'Read expert printer and copier tips, news, and guides from Craft Copier Solution.')
@section('twitter_image', $blog ? url('storage/' . $blog->img) : asset('front/img/og-image.jpg'))
@section('canonical_url', url()->current())
@section('breadcrumbs')
{
    "@type": "ListItem",
    "position": 1,
    "name": "Home",
    "item": "{{ url('/') }}"
},
{
    "@type": "ListItem",
    "position": 2,
    "name": "Blog",
    "item": "{{ url('/blog') }}"
},
@if($blog)
{
    "@type": "ListItem",
    "position": 3,
    "name": "{{ $blog->title }}",
    "item": "{{ url()->current() }}"
}
@endif
@endsection

<div>
	<!-- start banner Area -->
	<section class="about-banner relative" aria-label="Blog Banner">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						{{ $blog ? $blog->title : 'Our Blogs' }}
					</h1>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-center bg-transparent p-0 mb-0">
							<li class="breadcrumb-item"><a href="{{ route('homepage') }}" class="text-white">Home</a></li>
							<li class="breadcrumb-item"><a href="{{ url('/blog') }}" class="text-white">Blog</a></li>
							@if($blog)
								<li class="breadcrumb-item active text-white" aria-current="page">{{ $blog->title }}</li>
							@endif
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start post-content Area -->
	<section class="post-content-area py-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 posts-list">
					@if ($blog)
						<article class="single-blog-container p-4 shadow-lg rounded bg-white"
							style="border: 1px solid #e2e8f0; font-family: 'Poppins', sans-serif;"
							itemscope itemtype="https://schema.org/BlogPosting">
							<header>
								<h1 class="mb-3 text-primary"
									style="font-weight: 800; font-size: 1.75rem; color: #ffffff !important; line-height: 1.3; background-color: #02d602; border-radius: 12px; padding: 10px;"
									itemprop="headline">
									{{ $blog->title }}
								</h1>
							</header>
							<figure class="mb-4">
								<img loading="lazy" src="{{ url('storage/' . $blog->img) }}"
									alt="{{ $blog->title }} - Blog Image"
									class="img-fluid rounded mb-4"
									style="max-height: 400px; object-fit: cover; width: 100%; height: auto;"
									itemprop="image">
							</figure>
							<div class="d-flex flex-wrap justify-content-start mb-4"
								style="gap: 20px; font-size: 1rem; color: #64748b;">
								<p class="mb-0 btn-style"><i class="fas fa-folder-open"></i> <strong>Category:</strong>
									<span itemprop="about">{{ $blog->category }}</span>
								</p>
								<p class="mb-0 btn-style"><i class="fas fa-calendar-alt"></i> <strong>Date:</strong>
									<span itemprop="datePublished">{{ $blog->created_at->format('d M, Y') }}</span>
								</p>
							</div>
							<section class="blog-description mt-4"
								style="line-height: 1.8; color: #465263; font-size: 1.1rem; background-color: #f4f8fb; padding: 20px; border-radius: 8px; font-family: 'Arial', sans-serif; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);"
								itemprop="articleBody">
								{!! $blog->description !!}
							</section>
							<!-- Social Share Buttons -->
							<div class="mt-4 mb-3 text-center">
								<span class="fw-bold me-2">Share:</span>
								<a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" rel="noopener" class="btn btn-sm btn-primary mx-1" title="Share on Facebook">
									<i class="fa fa-facebook"></i>
								</a>
								<a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($blog->title) }}" target="_blank" rel="noopener" class="btn btn-sm btn-info mx-1" title="Share on Twitter">
									<i class="fa fa-twitter"></i>
								</a>
								<a href="https://wa.me/?text={{ urlencode($blog->title . ' ' . url()->current()) }}" target="_blank" rel="noopener" class="btn btn-sm btn-success mx-1" title="Share on WhatsApp">
									<i class="fa fa-whatsapp"></i>
								</a>
								<a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}&title={{ urlencode($blog->title) }}" target="_blank" rel="noopener" class="btn btn-sm btn-secondary mx-1" title="Share on LinkedIn">
									<i class="fa fa-linkedin"></i>
								</a>
								<a href="mailto:?subject={{ urlencode($blog->title) }}&body={{ urlencode(url()->current()) }}" class="btn btn-sm btn-dark mx-1" title="Share via Email">
									<i class="fa fa-envelope"></i>
								</a>
							</div>
							<div class="mt-5 text-center">
								<a href="{{ url('/homepage') }}" class="btn btn-primary btn-lg rounded-pill px-5 py-2"
									style="font-weight: 600; letter-spacing: 1px;">Back to Blog List</a>
							</div>
							<!-- Blog Schema -->
							<script type="application/ld+json">
							{
							  "@context": "https://schema.org",
							  "@type": "BlogPosting",
							  "headline": "{{ $blog->title }}",
							  "image": "{{ url('storage/' . $blog->img) }}",
							  "author": {
								"@type": "Organization",
								"name": "Craft Copier Solution"
							  },
							  "publisher": {
								"@type": "Organization",
								"name": "Craft Copier Solution",
								"logo": {
								  "@type": "ImageObject",
								  "url": "{{ asset('front/img/favicon-32x32.png') }}"
								}
							  },
							  "datePublished": "{{ $blog->created_at->toIso8601String() }}",
							  "dateModified": "{{ $blog->updated_at->toIso8601String() }}",
							  "description": "{{ Str::limit(strip_tags($blog->description), 150) }}",
							  "mainEntityOfPage": "{{ url()->current() }}"
							}
							</script>
						</article>
					@else
						<div class="alert alert-danger mt-4 p-4 text-center rounded shadow"
							style="font-family: 'Poppins', sans-serif;">
							Blog not found.
						</div>
					@endif
				</div>
				<!-- Sidebar -->
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
								<li>
									<a href="{{ route('contactpage') }}" class="d-flex align-items-center quick-link">
										<span class="quick-link-icon bg-danger text-white me-3"><i class="fa fa-envelope"></i></span>
										<span class="quick-link-text">Contact</span>
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
				<!-- End Sidebar -->
			</div>
		</div>
	</section>
	<!-- End post-content Area -->

	<style>
		.btn-style {
			display: inline-flex;
			align-items: center;
			padding: 8px 15px;
			border-radius: 25px;
			background-color: #02d602;
			color: #fff;
			font-size: 1rem;
			text-decoration: none;
			transition: background-color 0.3s ease;
		}
		.btn-style:hover {
			background-color: #029b02;
		}
		.btn-style i {
			margin-right: 8px;
		}
		.single-blog-container {
			margin-bottom: 30px;
			transition: all 0.3s ease;
		}
		.blog-link:hover h5, .blog-link:hover .blog-title {
			color: #ffc107;
			text-decoration: underline;
		}
		.popular-post-list img {
			box-shadow: 0 2px 8px rgba(0,0,0,0.07);
			background: #f9f9f9;
		}
		.cat-list p {
			margin-bottom: 0;
			font-size: 1rem;
			color: #444;
		}
		.quick-link {
			text-decoration: none;
			transition: background 0.2s, color 0.2s;
			padding: 8px 10px;
			border-radius: 8px;
		}
		.quick-link:hover, .quick-link:focus {
			background: #f1f5f9;
			color: #02d602;
			text-decoration: none;
		}
		.quick-link-icon {
			display: flex;
			align-items: center;
			justify-content: center;
			width: 36px;
			height: 36px;
			border-radius: 50%;
			font-size: 1.2rem;
		}
		.quick-link-text {
			font-size: 1.08rem;
			font-weight: 600;
			color: #22223b;
		}
		.quick-link:hover .quick-link-text {
			color: #02d602;
		}
	</style>
</div>