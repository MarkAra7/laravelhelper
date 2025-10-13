<x-layout>
  <x-slot:title>

       {{$product->name}}

    </x-slot>
 <x-slot:header>
    Edit "{{$product->name}}"
     </x-slot>
<form action="{{route('products.update',[$product])}}" method="post">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $product->name }}">
    <input type="number" name="quantity" value="{{ $product->quantity }}">
    <textarea name="description">{{ $product->description }}</textarea>
    <input type="submit" value="Submit">
</form>

<a href="{{ route('products.index') }}">Back to product list</a>

</x-layout>