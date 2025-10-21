<x-layout>
    <x-slot:title>Create Product</x-slot:title>
    <x-slot:header>Create New Product</x-slot:header>

    @if ($errors->any())
        <div class="alert alert-danger" role="alert" aria-live="assertive">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-container">
        <form action="{{ route('products.store') }}" method="post" class="product-form">
            @csrf
            
            <div class="form-group">
                <label for="name">Product Name</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input id="quantity" type="number" name="quantity" value="{{ old('quantity') }}" min="0" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="4">{{ old('description') }}</textarea>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Create Product</button>
                <a href="{{ route('products.index') }}" class="btn">Cancel</a>
            </div>
        </form>
    </div>
</x-layout>
