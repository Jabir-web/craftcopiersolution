<style>
@media (min-width: 1270px) and (max-width: 1290px) and (min-height: 710px) and (max-height: 730px) {
    .form-wrap {
        max-width: 340px;
        margin: 32px auto;
        padding: 16px 18px 20px 18px;
        font-size: 15px;
    }
    .form-wrap .form-control {
        margin-bottom: 10px;
        padding: 7px 9px;
        font-size: 15px;
    }
    .form-wrap textarea.form-control {
        min-height: 60px;
    }
    .form-wrap .primary-btn {
        width: 100%;
        padding: 9px 0;
        font-size: 15px;
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