<x-layout>
    <x-slot:title>{{ $product->name }}</x-slot>
    <x-slot:header>{{ $product->name }}</x-slot>

    <div class="product-details">
        <div class="product-card product-card-detailed">
            <div class="product-info">
                <h3 class="product-name">{{ $product->name }}</h3>
                <div class="product-meta">
                    <span class="product-quantity">Quantity: {{ $product->quantity }}</span>
                </div>
                <div class="product-description">
                    <p>{{ $product->description }}</p>
                </div>
            </div>
            
            <div class="actions">
                <a href="{{ route('products.edit', $product) }}" class="btn btn-primary">Edit Product</a>
                <a href="{{ route('products.index') }}" class="btn">Back to List</a>
            </div>
        </div>
    </div>
</x-layout>
