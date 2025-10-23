<x-layout>
    <x-slot:title>Edit {{ $product->name }}</x-slot>
    <x-slot:header>Edit {{ $product->name }}</x-slot>
    <x-slot:productCount>{{$productCount}}</x-slot>
    <div class="form-container">
        <form action="{{ route('products.update', $product) }}" method="post" class="product-form">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="name">Product Name</label>
                <input id="name" type="text" name="name" value="{{ $product->name }}" required>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input id="quantity" type="number" name="quantity" value="{{ $product->quantity }}" min="0" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="4">{{ $product->description }}</textarea>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Update Product</button>
                <a href="{{ route('products.index') }}" class="btn">Cancel</a>
            </div>
        </form>
    </div>
</x-layout>
