@section('title')
    Blog - Latest News & Tips | Craft Copier Solution
@endsection

@section('meta_description', 'Read the latest blog posts, tips, and industry news from Craft Copier Solution. Stay updated on printer repairs, copier rentals, office productivity, and more in Karachi and Pakistan.')
@section('meta_keywords', 'printer blog, copier tips, printer repair Karachi, office productivity, copier rental, printer maintenance, Craft Copier Solution blog')
@section('og_title', 'Latest Blog Posts | Craft Copier Solution')
@section('og_description', 'Explore expert advice, news, and printers, copiers, and office solutions from Craft Copier Solution.')
@section('og_image', asset('front/img/og-image.jpg'))
@section('og_url', url()->current())
@section('twitter_title', 'Latest Blog Posts | Craft Copier Solution')
@section('twitter_description', 'Expert printer and copier tips, news, and guides from Craft Copier Solution.')
@section('twitter_image', asset('front/img/og-image.jpg'))
@section('canonical_url', url()->current())

@section('breadcrumbs')
    [
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
    "item": "{{ url()->current() }}"
    }
    ]
@endsection

@push('head')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": @yield('breadcrumbs')
    }
    </script>
@endpush

<div>
    <section id="blog-list-area" class="recent-blog-area section-gap" aria-label="Latest Blog Posts">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-9">
                    <div class="title text-center">
                        <h1 class="mb-3">Latest from Our Blog</h1>
                        <p>Discover expert tips, industry news, and printer solutions from Craft Copier Solution. Stay
                            informed and boost your office productivity.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-recent-blog-carusel">
                    @foreach($blogs as $blog)
                        <article class="single-recent-blog-post item" itemscope itemtype="https://schema.org/BlogPosting">
                            <div class="thumb">
                                <a href="{{ route('blogpage', ['title' => $blog->title]) }}">
                                    <img src="{{ url('storage/' . $blog->img) }}"
                                        alt="{{ $blog->title }} - {{ $blog->category }} | Craft Copier Solution Blog"
                                        class="" loading="lazy" itemprop="image">
                                </a>
                            </div>


                            <div class="details">
                                <div class="tags">
                                    <ul>
                                        <li>
                                            <a href="#" rel="tag" itemprop="about">{{ $blog->category }}</a>
                                        </li>
                                        <li>
                                             <p class="mb-0 btn-style">
    <i class="fas fa-eye"></i>
    <strong>Views:</strong>
    <span>{{ $blog->views }}</span>
</p>
                                        </li>
                                    </ul>
                                </div>
                                <a href="{{ route('blogpage', ['title' => $blog->title]) }}">
                                    <h2 class="title" itemprop="headline">{{ $blog->title }}</h2>
                                </a>
                                <meta itemprop="mainEntityOfPage"
                                    content="{{ route('blogpage', ['title' => $blog->title]) }}">
                                <meta itemprop="datePublished" content="{{ $blog->created_at->toIso8601String() }}">
                                <meta itemprop="dateModified" content="{{ $blog->updated_at->toIso8601String() }}">
                                <meta itemprop="author" content="Craft Copier Solution">
                                <meta itemprop="publisher" content="Craft Copier Solution">
                                <p class="blog-excerpt" itemprop="description">
                                    {{ Str::limit(strip_tags($blog->description), 120) }}
                                </p>
                             
                                <h6 class="date" itemprop="datePublished">{{ $blog->created_at->format('F j, Y') }}</h6>
                                <!-- Share Buttons -->
                                <div class="mt-2 mb-1 text-center">
                                    <span class="fw-bold me-2" style="font-size:0.97em;">Share:</span>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('blogpage', ['title' => $blog->title])) }}"
                                        target="_blank" rel="noopener" class="btn btn-sm btn-primary mx-1"
                                        title="Share on Facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('blogpage', ['title' => $blog->title])) }}&text={{ urlencode($blog->title) }}"
                                        target="_blank" rel="noopener" class="btn btn-sm btn-info mx-1"
                                        title="Share on Twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="https://wa.me/?text={{ urlencode($blog->title . ' ' . route('blogpage', ['title' => $blog->title])) }}"
                                        target="_blank" rel="noopener" class="btn btn-sm btn-success mx-1"
                                        title="Share on WhatsApp">
                                        <i class="fa fa-whatsapp"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(route('blogpage', ['title' => $blog->title])) }}&title={{ urlencode($blog->title) }}"
                                        target="_blank" rel="noopener" class="btn btn-sm btn-secondary mx-1"
                                        title="Share on LinkedIn">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                    <a href="mailto:?subject={{ urlencode($blog->title) }}&body={{ urlencode(route('blogpage', ['title' => $blog->title])) }}"
                                        class="btn btn-sm btn-dark mx-1" title="Share via Email">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                   
                                </div>
                            </div>
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
                                  "description": "{{ Str::limit(strip_tags($blog->description), 120) }}",
                                  "mainEntityOfPage": "{{ route('blogpage', ['title' => $blog->title]) }}"
                                }
                                </script>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <style>
        .single-recent-blog-post {
            border-radius: 12px;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.08);
            background: #fff;
            margin-bottom: 32px;
            transition: box-shadow 0.2s;
            display: flex;
            flex-direction: column;
            height: 520px;
            /* Fixed height */
            overflow: hidden;
        }

        .single-recent-blog-post:hover {
            box-shadow: 0 8px 32px rgba(255, 193, 7, 0.18);
        }

        .single-recent-blog-post .thumb {
            width: 100%;
            height: auto;
            max-height: 200px;
            background: #f9f9f9;
            border-radius: 12px 12px 0 0;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .single-recent-blog-post .thumb img {
            width: auto;
            height: 100%;
            max-height: 200px;
            object-fit: contain;
            /* Show full image */
            object-position: center;
            display: block;
        }

        .single-recent-blog-post .details {
            padding: 20px 18px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden;
        }

        .single-recent-blog-post .title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #0F172A;
            margin-bottom: 10px;
            line-height: 1.3;
            height: 48px;
            overflow: hidden;
        }

        .single-recent-blog-post .blog-excerpt {
            color: #475569;
            font-size: 1rem;
            margin-bottom: 12px;
            flex-grow: 1;
            overflow: hidden;
            line-height: 1.4;
            max-height: 72px;
        }

        .single-recent-blog-post .date {
            color: #ffc107;
            font-size: 0.95rem;
            font-weight: 500;
            margin-top: auto;
        }

        .single-recent-blog-post .tags a {
            color: #ffb300;
            font-weight: 600;
            font-size: 0.95rem;
            text-decoration: none;
        }

        .single-recent-blog-post .tags a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .single-recent-blog-post {
                height: 480px;
            }

            .single-recent-blog-post .thumb img {
                max-height: 180px;
            }
        }

        @media (max-width: 576px) {
            .single-recent-blog-post {
                height: 440px;
            }

            .single-recent-blog-post .thumb img {
                max-height: 160px;
            }

            .single-recent-blog-post .details {
                padding: 14px 10px;
            }

            .single-recent-blog-post .title {
                font-size: 1.1rem;
                height: auto;
            }

            .single-recent-blog-post .blog-excerpt {
                font-size: 0.95rem;
                max-height: 64px;
            }

            .single-recent-blog-post .date {
                font-size: 0.85rem;
            }
        }
    </style>



</div>