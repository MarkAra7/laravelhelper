<x-layout>
    <x-slot:title>Product List</x-slot>
    <x-slot:header>All Of Your Products</x-slot>
<x-slot:productCount>{{$productCount}}</x-slot>
    <div class="products-container">
        <ul class="product-list">
            @foreach ($products as $product)
                <li class="product-card">
                    <div class="product-info">
                        <h3 class="product-name">{{ $product->name }}</h3>
                        <p class="product-description">{{ $product->description }}</p>
                        <span class="product-quantity">Quantity: {{ $product->quantity }}</span>
                    </div>
                    <div class="actions">
                        <a href="{{ route('products.show', $product) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('products.edit', $product) }}" class="btn">Edit</a>
                        <form action="{{ route('products.destroy', $product) }}" method="post" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>

        <div class="page-actions">
            <a href="{{ route('products.create') }}" class="btn btn-primary">Create New Product</a>
        </div>
    </div>
</x-layout>
