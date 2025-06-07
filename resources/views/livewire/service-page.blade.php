{{-- SEO meta tags --}}
@push('head')
    <title>{{ $productsingle->name }} | Services | Craft Copier Solution</title>
    <meta name="description" content="Discover {{ $productsingle->name }} services at Craft Copier Solution. Professional, reliable, and affordable office equipment and support for your business.">
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="robots" content="index, follow">
    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="{{ $productsingle->name }} | Services | Craft Copier Solution">
    <meta property="og:description" content="Discover {{ $productsingle->name }} services at Craft Copier Solution. Professional, reliable, and affordable office equipment and support for your business.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="service">
    <meta property="og:image" content="{{ isset($machines[0]) ? url('storage/' . $machines[0]->img) : asset('front/img/logo.png') }}">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $productsingle->name }} | Services | Craft Copier Solution">
    <meta name="twitter:description" content="Discover {{ $productsingle->name }} services at Craft Copier Solution. Professional, reliable, and affordable office equipment and support for your business.">
    <meta name="twitter:image" content="{{ isset($machines[0]) ? url('storage/' . $machines[0]->img) : asset('front/img/logo.png') }}">
@endpush

@section('title')
{{ $productsingle->name }} - Craft Copier Solution
@endsection
<div>
    <!-- Breadcrumbs for SEO -->
    <nav aria-label="breadcrumb" class="my-3">
        <ol class="breadcrumb bg-transparent p-0 m-0">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/products') }}">Products</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $productsingle->name }}</li>
        </ol>
    </nav>
    <!-- start banner Area -->
    <section class="relative about-banner" style="background: linear-gradient(90deg, #f8fafc 60%, #f1c40f 100%); border-radius: 0 0 24px 24px;">
        <div class="overlay overlay-bg" style="border-radius: 0 0 24px 24px;"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12 text-center">
                    <h1 class="text-white display-4 fw-bold" style="letter-spacing: 1px;">
                        {{ $productsingle->name }}
                    </h1>
                    <p class="text-white link-nav fs-5">Home <span class="lnr lnr-arrow-right"></span> Products <span class="lnr lnr-arrow-right"></span> {{ $productsingle->name }}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start post-content Area -->
    <section class="post-content-area single-post-area py-5">
        <div class="container">
            <div class="row">
                <!-- Left Column: Machines -->
                <div class="col-lg-8 posts-list" data-aos="fade-up">
                    <div class="row mt-4">
                        @if($machines)
                            @foreach($machines as $index => $machine)
                                <div class="col-lg-12 col-md-12 mb-4 bg-white p-4 shadow-sm rounded-4"
                                    data-aos="fade-up"
                                    data-aos-delay="{{ $index * 100 }}">
                                    <div class="row align-items-center">
                                        <div class="col-md-5 mb-3 mb-md-0">
                                            <img loading="lazy" src="{{ url('storage/' . $machine->img) }}" alt="{{ $machine->description }}" class="img-fluid rounded-3 border border-warning shadow-sm w-100" style="max-height: 260px; object-fit: contain; background: #f9f9f9;">
                                        </div>
                                        <div class="col-md-7 d-flex flex-column justify-content-center">
                                            <p class="card-text fs-6 text-muted">{!! $machine->description !!}</p>
                                            <div class="mt-3">
                                                <a wire:navigate href="{{ route('contactpage') }}" class="btn btn-warning me-2 px-4 py-2 fw-semibold shadow-sm">Contact Us</a>
                                                <a href="https://wa.me/+923282499598" class="btn btn-success px-4 py-2 fw-semibold shadow-sm"><i class="fa fa-whatsapp"></i> Whatsapp</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="alert alert-warning text-center" role="alert">
                                No machines found.
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Right Column: Sidebar -->
                <aside class="col-lg-4 sidebar-widgets" data-aos="fade-left" data-aos-delay="200">
                    <div class="widget-wrap p-3" style="background: #fff; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.07);">
                        <h4 class="widget-title mb-3 text-warning fw-bold">Our Services</h4>
                        <ul class="list-group">
                            @foreach($products as $service)
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0"
                                    data-aos="zoom-in" data-aos-delay="{{ $loop->index * 100 }}">
                                    <a wire:navigate href="{{ route('services', ['service_id' => $service->id]) }}" class="text-dark fw-semibold">
                                        {{ $service->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!-- End post-content Area -->
</div>