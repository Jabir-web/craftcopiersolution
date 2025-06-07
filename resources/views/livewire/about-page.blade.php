@section('title')
    About us - Craft Copier Solution
@endsection
<div>

    <!-- start banner Area new comment  -->
    <section class="about-banner relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        About Us
                    </h1>
                    <p class="text-white link-nav"><a href="{{ route('homepage') }}">Home </a> <span
                            class="lnr lnr-arrow-right"></span> <a href="about.html"> About Us</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start about-info Area -->
    <section class="about-info-area section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 info-left">
                    <img class="img-fluid" src="{{ asset('front/img/about-img.png') }}" alt="about-img">
                </div>
                <div class="col-lg-6 info-right">
                    <h6>About Us</h6>
                    <h1>Who We Are?</h1>
                    <p>
                        At Craft Copier Solution, we are a team of passionate professionals dedicated to providing
                        top-notch printer sales, repairs, and maintenance services. With extensive experience in the
                        printing industry, we understand the challenges businesses and individuals face when dealing
                        with printing equipment. That’s why we offer reliable, cost-effective, and efficient solutions
                        tailored to your needs.

                        Our mission is to ensure that your printing operations run smoothly with high-quality products,
                        expert repairs, and exceptional customer service. Whether you're looking for a new printer, need
                        urgent repairs, or want long-term maintenance support, we’ve got you covered.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End about-info Area -->




    <!-- Start other-issue Area -->
    @livewire('other-issue')
    <!-- End other-issue Area -->


    <!-- Start testimonial Area -->
    @livewire('testimonials')
    <!-- End testimonial Area -->
</div>