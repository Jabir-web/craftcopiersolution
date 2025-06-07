{{-- SEO meta tags --}}
@push('head')
    <title>Request a Copier Rental Quote | Craft Copier Solution</title>
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="description" content="Request a copier rental quote for your business. Fast, reliable, and affordable copier rental solutions tailored to your needs.">
    <meta name="robots" content="index, follow">
@endpush

<section class="client-rental-section" aria-labelledby="client-rental-heading">
    <h1 id="client-rental-heading" class="mb-4">Request a Copier Rental Quote</h1>
    <p class="mb-4 text-muted">Fill out the form below to get a personalized copier rental solution for your business. Our team will contact you promptly.</p>

    <div>
        @if (session()->has('rent'))
            <div class="alert alert-success">
                {{ session('rent') }}
            </div>
        @endif

        <form action="{{ route('client-rentals.store') }}" method="POST" class="form-wrap">
            @csrf
            <!-- Client Name -->
            <input type="text" class="form-control" name="client_name" placeholder="Your Name" value="{{ old('client_name') }}">
            @error('client_name') <span class="text-danger">{{ $message }}</span> @enderror

            <!-- Client Company Name -->
            <input type="text" class="form-control" name="client_company_name" placeholder="Your Company Name" value="{{ old('client_company_name') }}">
            @error('client_company_name') <span class="text-danger">{{ $message }}</span> @enderror

            <!-- City Name -->
            <input type="text" class="form-control" name="city_name" placeholder="Your City Name" value="{{ old('city_name') }}">
            @error('city_name') <span class="text-danger">{{ $message }}</span> @enderror

            <!-- Contact Number -->
            <input type="text" class="form-control" name="contact_number" placeholder="Contact Number" value="{{ old('contact_number') }}">
            @error('contact_number') <span class="text-danger">{{ $message }}</span> @enderror

            <!-- Requirements -->
            <textarea class="form-control" name="requirements" placeholder="Your Requirements .." cols="30" rows="5">{{ old('requirements') }}</textarea>
            @error('requirements') <span class="text-danger">{{ $message }}</span> @enderror

            <!-- Submit Button -->
            <button type="submit" class="primary-btn bg-dark text-uppercase">Submit Request</button>
        </form>
    </div>
</section>