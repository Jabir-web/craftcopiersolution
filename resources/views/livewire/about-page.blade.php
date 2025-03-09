@section('title')
    About us - Craft Copier Solution
@endsection
<div>

    <!-- start banner Area -->
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
                    <img class="img-fluid" src="#" alt="">
                </div>
                <div class="col-lg-6 info-right">
                    <h6>About Us</h6>
                    <h1>Who We Are?</h1>
                    <p>
                        Here, I focus on a range of items and features that we use in life without giving them a second
                        thought. such as Coca Cola. Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco.
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
