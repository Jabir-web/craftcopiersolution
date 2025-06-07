<li class="menu-has-children">
    <a href="#" aria-haspopup="true" aria-expanded="false">Products</a>
    <ul>
        @foreach($products as $product)
        <li>
            <a wire:navigate 
               href="{{ route('machines', ['product_id' => $product->id]) }}"
               title="View {{ $product->name }} machines"
               aria-label="View {{ $product->name }} machines">
                {{ $product->name }}
            </a>
        </li>
        @endforeach
    </ul>
</li>