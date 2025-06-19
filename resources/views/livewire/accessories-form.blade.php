<div>
    @if (session()->has('accessory'))
        <div class="alert alert-success">
            {{ session('accessory') }}
        </div>
    @endif

    <form action="{{ route('accessory-requests.store') }}" method="POST" class="form-wrap client-accessory-form">
        @csrf
        <!-- Company Name -->
        <input type="text" class="form-control" name="company_name" placeholder="Printer Company Name" value="{{ old('company_name') }}">
        @error('company_name') <span class="text-danger">{{ $message }}</span> @enderror

        <!-- Model Name -->
        <input type="text" class="form-control" name="model_name" placeholder="Printer Model Name" value="{{ old('model_name') }}">
        @error('model_name') <span class="text-danger">{{ $message }}</span> @enderror

        <!-- Accessory Dropdown -->
        <select class="form-control py-2" name="accessory">
            <option selected disabled>Select Accessories</option>
            <option value="Drum" {{ old('accessory') == 'Drum' ? 'selected' : '' }}>Drum</option>
            <option value="Cleaning Blade" {{ old('accessory') == 'Cleaning Blade' ? 'selected' : '' }}>Cleaning Blade</option>
            <option value="Toner Cartridge" {{ old('accessory') == 'Toner Cartridge' ? 'selected' : '' }}>Toner Cartridge</option>
            <option value="Developer" {{ old('accessory') == 'Developer' ? 'selected' : '' }}>Developer</option>
            <option value="Charge Roller" {{ old('accessory') == 'Charge Roller' ? 'selected' : '' }}>Charge Roller</option>
            <option value="Feed Roller" {{ old('accessory') == 'Feed Roller' ? 'selected' : '' }}>Feed Roller</option>
            <option value="Heat Roller" {{ old('accessory') == 'Heat Roller' ? 'selected' : '' }}>Heat Roller</option>
            <option value="Pick Up Roller" {{ old('accessory') == 'Pick Up Roller' ? 'selected' : '' }}>Pick Up Roller</option>
            <option value="Pressure Roller" {{ old('accessory') == 'Pressure Roller' ? 'selected' : '' }}>Pressure Roller</option>
        </select>
        @error('accessory') <span class="text-danger">{{ $message }}</span> @enderror

        <!-- Full Name -->
        <input type="text" class="form-control" name="fullname" placeholder="Fullname" value="{{ old('fullname') }}">
        @error('fullname') <span class="text-danger">{{ $message }}</span> @enderror

        <!-- Contact Number -->
        <input type="text" class="form-control" name="contact_number" placeholder="Contact Number" value="{{ old('contact_number') }}">
        @error('contact_number') <span class="text-danger">{{ $message }}</span> @enderror

        <!-- Submit Button -->
        <button type="submit" class="primary-btn bg-dark text-uppercase">Submit Request</button>
    </form>
</div>