<style>
/* Compact and responsive form styles */
.form-wrap {
    max-width: 350px;
    margin: 24px auto;
    padding: 18px 20px 22px 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.07);
}
.form-wrap .form-control {
    margin-bottom: 12px;
    padding: 8px 10px;
    font-size: 15px;
    border-radius: 4px;
}
.form-wrap textarea.form-control {
    min-height: 70px;
    resize: vertical;
}
.form-wrap .primary-btn {
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    border-radius: 4px;
}
@media (max-width: 600px) {
    .form-wrap {
        max-width: 98vw;
        padding: 10px 5px;
    }
}
</style>
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