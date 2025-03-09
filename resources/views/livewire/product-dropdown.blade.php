<li class="menu-has-children"><a href="#">Products</a>
    <ul>
        @foreach($products as $product)
        <li><a wire:navigate href="{{ route('machines', ['product_id' => $product->id]) }}">{{ $product->name }}</a></li>
        @endforeach
    </ul>
</li>