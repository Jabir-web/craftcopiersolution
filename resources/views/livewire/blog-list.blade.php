<div>
    <section class="recent-blog-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-9">
                    <div class="title text-center">
                        <h2 class="mb-10">Latest from Our Blog</h2>
                        <p>With the exception of Nietzsche, no other madman has contributed so much to human sanity as
                            has.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-recent-blog-carusel">
                    @foreach($blogs as $blog)
                        <div class="single-recent-blog-post item">
                            <div class="thumb">
                                <img width="100%" height="500px" src="{{ url('storage/' . $blog->img) }}" alt="{{ $blog->title }}"
                                    class="img-fluid fixed-image">
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
                                {{-- <div class="blog-description mt-4"
                                    style="line-height: 1.8; color: #475569; font-size: 1.05rem;">
                                    {{  $blog->description }}
                                </div> --}}

                                <h6 class="date">{{ $blog->created_at->format('F j, Y') }}</h6>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
</div>