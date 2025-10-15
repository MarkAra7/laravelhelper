
<x-layout>
  <x-slot:title>

       Create Product

    </x-slot>


 <x-slot:header>
    Create New Product
     </x-slot>
     @if ($errors->any())

    <div class="alert alert-danger">

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif
<form action="{{ route('products.store') }}" method="post">
    @csrf
    <input type="text" name="name" value="{{ old('name') }}">
    <input type="number" name="quantity" value="{{ old('quantity') }}">
    <textarea name="description">{{ old('description') }}</textarea>
    <input type="submit" value="Submit">
</form>

<a href="{{ route('products.index') }}">Back to product list</a>

</x-layout>