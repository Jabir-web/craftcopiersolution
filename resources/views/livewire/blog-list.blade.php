<div>
    <section class="recent-blog-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-9">
                    <div class="title text-center">
                        <h2 class="mb-10">Latest from Our Blog</h2>
                        <p>With the exception of Nietzsche, no other madman has contributed so much to human sanity as has.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-recent-blog-carusel">
                    @foreach($blogs as $blog)
                        <div class="single-recent-blog-post item">
                            <div class="thumb">
                                <img src="{{ url('storage/' . $blog->img) }}" alt="{{ $blog->title }}" class="img-fluid fixed-image">
                            </div>
                            <div class="details">
                                <div class="tags">
                                    <ul>
                                        <li>
                                            <a href="">{{ $blog->category }}</a>
                                        </li>
                                    </ul>
                                </div>
    
                                <a href="{{ route('blogpage', ['title' => $blog->title]) }}">
                                    <h4 class="title">{{ $blog->title }}</h4>
                                </a>
                                <h6 class="date">{{ $blog->created_at->format('F j, Y') }}</h6>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    
    <style>
    /* Make images responsive and fixed height */
    .fixed-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 8px;
    }
    
    /* Style blog post container */
    .single-recent-blog-post {
        background: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
        padding: 15px;
        margin: 10px;
    }
    
    /* Blog title style */
    .single-recent-blog-post .title {
        font-size: 1.2rem;
        margin-top: 12px;
        color: #0F172A;
        font-weight: 600;
    }
    
    /* Tags styling */
    .single-recent-blog-post .tags a {
        font-size: 0.85rem;
        color: #42A5F5;
        text-decoration: none;
    }
    
    /* Date style */
    .single-recent-blog-post .date {
        font-size: 0.85rem;
        color: #94A3B8;
        margin-top: 10px;
    }
    
    /* Responsive fixes for mobile */
    @media (max-width: 768px) {
        .single-recent-blog-post {
            margin: 10px 0;
            padding: 10px;
        }
    
        .single-recent-blog-post .title {
            font-size: 1rem;
        }
    
        .single-recent-blog-post .date {
            font-size: 0.75rem;
        }
    
        .active-recent-blog-carusel {
            display: flex;
            flex-direction: column;
        }
    }
    </style>
    
    <script>
    /* Initialize Owl Carousel for responsive design (Optional) */
    $('.active-recent-blog-carusel').owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        dots: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        }
    });
    </script>
    
</div>