<div>
    @if (session()->has('rent'))
        <div class="alert alert-success">
            {{ session('rent') }}
        </div>
    @endif


    <form action="{{ route('client-rentals.store') }}" method="POST" class="form-wrap client-rental-form">
        @csrf
        <!-- Client Name -->
        <input type="text" class="form-control client-input" name="client_name" placeholder="Your Name"
            value="{{ old('client_name') }}">
        @error('client_name') <span class="text-danger">{{ $message }}</span> @enderror

        <!-- Client Company Name -->
        <input type="text" class="form-control client-input" name="client_company_name" placeholder="Your Company Name"
            value="{{ old('client_company_name') }}">
        @error('client_company_name') <span class="text-danger">{{ $message }}</span> @enderror

        <!-- City Name -->
        <input type="text" class="form-control client-input" name="city_name" placeholder="Your City Name"
            value="{{ old('city_name') }}">
        @error('city_name') <span class="text-danger">{{ $message }}</span> @enderror

        <!-- Contact Number -->
        <input type="text" class="form-control client-input" name="contact_number" placeholder="Contact Number"
            value="{{ old('contact_number') }}">
        @error('contact_number') <span class="text-danger">{{ $message }}</span> @enderror

        <!-- Requirements -->
        <textarea class="form-control client-req" name="requirements" placeholder="Your Requirements .." cols="30"
            rows="5">{{ old('requirements') }}</textarea>
        @error('requirements') <span class="text-danger">{{ $message }}</span> @enderror

        <!-- Submit Button -->
        <button type="submit" class="primary-btn bg-dark text-uppercase">Submit Request</button>
    </form>
</div>