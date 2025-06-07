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

    @if (session()->has('rent'))
        <div class="alert alert-success" role="alert">
            {{ session('rent') }}
        </div>
    @endif

    <form action="{{ route('client-rentals.store') }}" method="POST" class="form-wrap" aria-label="Copier Rental Request Form">
        @csrf

        <!-- Client Name -->
        <div class="form-group mb-3">
            <label for="client_name" class="form-label">Full Name <span class="text-danger">*</span></label>
            <input type="text" id="client_name" class="form-control" name="client_name" placeholder="Enter your full name" value="{{ old('client_name') }}" required autocomplete="name">
            @error('client_name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <!-- Client Company Name -->
        <div class="form-group mb-3">
            <label for="client_company_name" class="form-label">Company Name <span class="text-danger">*</span></label>
            <input type="text" id="client_company_name" class="form-control" name="client_company_name" placeholder="Enter your company name" value="{{ old('client_company_name') }}" required autocomplete="organization">
            @error('client_company_name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <!-- City Name -->
        <div class="form-group mb-3">
            <label for="city_name" class="form-label">City <span class="text-danger">*</span></label>
            <input type="text" id="city_name" class="form-control" name="city_name" placeholder="Enter your city" value="{{ old('city_name') }}" required autocomplete="address-level2">
            @error('city_name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <!-- Contact Number -->
        <div class="form-group mb-3">
            <label for="contact_number" class="form-label">Contact Number <span class="text-danger">*</span></label>
            <input type="tel" id="contact_number" class="form-control" name="contact_number" placeholder="e.g. +1 234 567 8900" value="{{ old('contact_number') }}" required pattern="[\d\s\+\-()]{7,}" autocomplete="tel">
            @error('contact_number') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <!-- Requirements -->
        <div class="form-group mb-4">
            <label for="requirements" class="form-label">Your Requirements <span class="text-danger">*</span></label>
            <textarea id="requirements" class="form-control" name="requirements" placeholder="Describe your copier rental needs..." cols="30" rows="5" required autocomplete="off">{{ old('requirements') }}</textarea>
            @error('requirements') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="primary-btn bg-dark text-uppercase w-100 py-2">Request Quote</button>
    </form>
</section>