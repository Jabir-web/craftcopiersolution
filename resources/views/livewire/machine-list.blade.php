<div>
    {{-- <div class="form-group">
        <label for="product">Select Product:</label>
        <select wire:model="selectedProduct" class="form-control" id="product">
            <option value="">Select a product</option>
            @foreach($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select>
    </div> --}}

    <div class="row mt-4">
        @if($machines)
            @foreach($machines as $machine)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('storage/uploads/' . $machine->image) }}"  alt="{{ $machine->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $machine->name }}</h5>
                            <p class="card-text">{{ $machine->short_description }}</p>
                            <a href="{{ $machine->brochure_link }}" class="btn btn-primary">Brochure</a>
                            <a href="{{ $machine->driver_link }}" class="btn btn-secondary">Driver</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>No machines found.</p>
        @endif
    </div>
</div>