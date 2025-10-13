
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
    <input type="text" name="name">
    <input type="number" name="quantity">
    <textarea name="description"></textarea>
    <input type="submit" value="Submit">
</form>

<a href="{{ route('products.index') }}">Back to product list</a>

</x-layout>