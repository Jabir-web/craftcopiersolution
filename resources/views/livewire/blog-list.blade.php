@section('title')
    Blog - Latest News & Tips | Craft Copier Solution
@endsection

@section('meta_description', 'Read the latest blog posts, tips, and industry news from Craft Copier Solution. Stay updated on printer repairs, copier rentals, office productivity, and more in Karachi and Pakistan.')
@section('meta_keywords', 'printer blog, copier tips, printer repair Karachi, office productivity, copier rental, printer maintenance, Craft Copier Solution blog')
@section('og_title', 'Latest Blog Posts | Craft Copier Solution')
@section('og_description', 'Explore expert advice, news, and tips on printers, copiers, and office solutions from Craft Copier Solution.')
@section('og_image', asset('front/img/og-image.jpg'))
@section('og_url', url()->current())
@section('twitter_title', 'Latest Blog Posts | Craft Copier Solution')
@section('twitter_description', 'Expert printer and copier tips, news, and guides from Craft Copier Solution.')
@section('twitter_image', asset('front/img/og-image.jpg'))
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
    "item": "{{ url()->current() }}"
}
@endsection

<div>
    <section class="recent-blog-area section-gap" aria-label="Latest Blog Posts">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-9">
                    <div class="title text-center">
                        <h1 class="mb-3">Latest from Our Blog</h1>
                        <p>Discover expert tips, industry news, and printer solutions from Craft Copier Solution. Stay informed and boost your office productivity.</p>
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
                                         class="img-fluid fixed-image"
                                         loading="lazy"
                                         itemprop="image">
                                </a>
                            </div>
                            <div class="details">
                                <div class="tags">
                                    <ul>
                                        <li>
                                            <a href="#" rel="tag" itemprop="about">{{ $blog->category }}</a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="{{ route('blogpage', ['title' => $blog->title]) }}">
                                    <h2 class="title" itemprop="headline">{{ $blog->title }}</h2>
                                </a>
                                <meta itemprop="mainEntityOfPage" content="{{ route('blogpage', ['title' => $blog->title]) }}">
                                <meta itemprop="datePublished" content="{{ $blog->created_at->toIso8601String() }}">
                                <meta itemprop="dateModified" content="{{ $blog->updated_at->toIso8601String() }}">
                                <meta itemprop="author" content="Craft Copier Solution">
                                <meta itemprop="publisher" content="Craft Copier Solution">
                                <p class="blog-excerpt" itemprop="description">
                                    {{ Str::limit(strip_tags($blog->description), 120) }}
                                </p>
                                <h6 class="date" itemprop="datePublished">{{ $blog->created_at->format('F j, Y') }}</h6>
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
            box-shadow: 0 4px 18px rgba(0,0,0,0.08);
            background: #fff;
            margin-bottom: 32px;
            transition: box-shadow 0.2s;
            display: flex;
            flex-direction: column;
            height: 100%;
            min-height: 420px;
            max-height: 420px;
        }
        .single-recent-blog-post:hover {
            box-shadow: 0 8px 32px rgba(255,193,7,0.18);
        }
        .single-recent-blog-post .thumb {
            width: 100%;
            height: 180px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f9f9f9;
            border-radius: 12px 12px 0 0;
            overflow: hidden;
        }
        .single-recent-blog-post .thumb img {
            width: auto;
            height: 100%;
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            object-position: center;
            background: #fff;
            border-radius: 12px 12px 0 0;
            display: block;
        }
        .single-recent-blog-post .details {
            padding: 22px 18px 18px 18px;
            flex: 1 1 auto;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }
        .single-recent-blog-post .title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #0F172A;
            margin-bottom: 10px;
        }
        .single-recent-blog-post .blog-excerpt {
            color: #475569;
            font-size: 1.05rem;
            margin-bottom: 12px;
            flex-grow: 1;
        }
        .single-recent-blog-post .date {
            color: #ffc107;
            font-size: 0.95rem;
            font-weight: 500;
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
        @media (max-width: 576px) {
            .single-recent-blog-post {
                min-height: 320px;
                max-height: 320px;
            }
            .single-recent-blog-post .thumb {
                height: 110px;
            }
            .single-recent-blog-post .details {
                padding: 14px 8px 12px 8px;
            }
        }
    </style>
</div>