<div>
    @if (session()->has('repair'))
        <div class="alert alert-success">
            {{ session('repair') }}
        </div>
    @endif

    <form action="{{ route('client-repairs.store') }}" method="POST" class="form-wrap client-repair-form">
        @csrf
        <!-- Client Name -->
        <input type="text" class="form-control" name="client_name" placeholder="Your Full Name" value="{{ old('client_name') }}">
        @error('client_name') <span class="text-danger">{{ $message }}</span> @enderror

        <!-- Contact Number -->
        <input type="text" class="form-control" name="contact_number" placeholder="Your Contact Number" value="{{ old('contact_number') }}">
        @error('contact_number') <span class="text-danger">{{ $message }}</span> @enderror

        <!-- Company Name -->
        <input type="text" class="form-control" name="company_name" placeholder="Printer Company Name" value="{{ old('company_name') }}">
        @error('company_name') <span class="text-danger">{{ $message }}</span> @enderror

        <!-- Model Name -->
        <input type="text" class="form-control" name="model_name" placeholder="Printer Model Name" value="{{ old('model_name') }}">
        @error('model_name') <span class="text-danger">{{ $message }}</span> @enderror

        <!-- Problem Description -->
        <textarea class="form-control" name="problem_description" placeholder="Tell me your printer problem" cols="30" rows="5">{{ old('problem_description') }}</textarea>
        @error('problem_description') <span class="text-danger">{{ $message }}</span> @enderror

        <!-- Submit Button -->
        <button type="submit" class="primary-btn bg-dark text-uppercase">Submit Request</button>
    </form>
</div>