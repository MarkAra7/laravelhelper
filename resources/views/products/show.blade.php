<x-layout>
  <x-slot:title>

       {{$product->name}}

    </x-slot>
     <x-slot:header>
   See more OF "{{$product->name}}"
     </x-slot>

<h1>{{ $product->name }}</h1>
<h4>Quantity: {{ $product->quantity }}</h4>
<p>{{ $product->description }}</p>

<a href="{{ route('products.index') }}">Back to all product list</a>

</x-layout>