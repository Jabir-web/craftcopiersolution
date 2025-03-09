<li class="menu-has-children"><a href="#">Services</a>
    <ul>
        @foreach($services as $service)
            <li><a wire:navigate href="{{ route('services', ['service_id' => $service->id]) }}">{{ $service->name }}</a></li>
        @endforeach
    </ul>
</li>