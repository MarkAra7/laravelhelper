<x-layout>
  <x-slot:title>

       Product List

    </x-slot>
     <x-slot:header>
    All Of Your Products
     </x-slot>
<ul>
    @foreach ($products as $product)
        <li>
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->description }}</p>
            <a href="{{route('products.show', [$product] )}}">Show</a>
            <a href="{{route('products.edit', [$product] )}}">Edit</a>
            <form action="{{route('products.destroy', [$product] )}}" method="post">
                @csrf
                @method('DELETE')

                <input type="submit" value="Delete">
            </form>
        </li>
    @endforeach
</ul>

<a href="{{ route('products.create') }}">Create new product</a>


</x-layout>