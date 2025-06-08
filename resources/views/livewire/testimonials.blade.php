<div>
    <section class="testimonial-area section-gap" style="background: #fffbe7;">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h2 class="mb-10" style="font-weight: 800; color: #ffc107;">Testimonials from Our Clients</h2>
                        <p style="font-size: 1.08rem; color: #555;">
                            What our satisfied customers have to say about our printer sales, repair, and accessories services.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="testimonial-carousel owl-carousel owl-theme">
                        @foreach ($testimonials as $item)
                            <div class="single-testimonial item p-4 mb-4 bg-white shadow rounded text-center" style="border: 1px solid #ffe082;">
                                <div class="desc mb-3">
                                    <p class="mb-3" style="font-size: 1.15rem; color: #222; font-style: italic;">
                                        <i class="fa fa-quote-left text-warning me-2"></i>
                                        {{ $item->review_description }}
                                        <i class="fa fa-quote-right text-warning ms-2"></i>
                                    </p>
                                    <h4 class="fw-bold mb-2" style="color: #0F172A;">{{ $item->name }}</h4>
                                    <div class="star mb-2">
                                        @for ($i = 0; $i < $item->stars; $i++)
                                            <span class="fa fa-star checked" style="color: #ffc107;"></span>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <style>
            .testimonial-area {
                padding-top: 60px;
                padding-bottom: 60px;
            }
            .testimonial-carousel .single-testimonial {
                min-height: 200px;
                transition: box-shadow 0.2s;
            }
            .testimonial-carousel .single-testimonial:hover {
                box-shadow: 0 8px 32px rgba(255,193,7,0.13);
            }
            .testimonial-carousel .fa-quote-left,
            .testimonial-carousel .fa-quote-right {
                font-size: 1.2em;
                vertical-align: middle;
            }
            .testimonial-carousel .star .fa-star {
                font-size: 1.1em;
                margin-right: 2px;
            }
        </style>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                if (window.jQuery && $('.testimonial-carousel').owlCarousel) {
                    $('.testimonial-carousel').owlCarousel({
                        loop: true,
                        margin: 24,
                        nav: false,
                        dots: true,
                        autoplay: true,
                        autoplayTimeout: 6000,
                        responsive: {
                            0: { items: 1 },
                            768: { items: 2 }
                        }
                    });
                }
            });
        </script>
    </section>
</div>