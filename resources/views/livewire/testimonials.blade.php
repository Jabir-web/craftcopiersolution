<div>
    <section class="testimonial-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h2 class="mb-10">Testimonial from our Clients</h2>
                        <p>What our satisfied customers have to say about our printer sales, repair, and accessories services.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-testimonial">
                    @foreach ($testimonials as $item)
                    <div class="single-testimonial item d-flex flex-row">
                      
                        <div class="desc">
                            <p>
                                {{ $item->review_description }}
                            </p>
                            <h4>{{ $item->name }}</h4>
                            <div class="star">
                                @for ($i = 0; $i < $item->stars; $i++)
                                    
                                <span class="fa fa-star checked"></span>
                                @endfor
                            </div>
                        </div>
                    </div>    
                    @endforeach

                </div>
            </div>
        </div>
    </section>
</div>
