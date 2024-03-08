<x-layout>
    <div class="flex justify-start items-start gap-8 flex-wrap ml-4 mt-4 mb-4">
        @php
        $products = App\Models\Product::get();
        @endphp
        @foreach ($products as $product)
        <section class="ml-4 mt-8 flex items-start flex-col">
            <h1 class="font-semibold text-2xl mb-4">
                <a href="/products/{{ $product->slug }}">
                    {{ $product->name }}
                </a>
            </h1>
            <div class="flex gap-8 text-lg">
                <a class=" hover:text-blue-700" href="/brands/{{ $product->brand->name }}">
                    {{ $product->brand->name }}
                </a>

                <a class=" hover:text-blue-700" href="/categories/{{ $product->category->slug }}">
                    {{ $product->category->name }}
                </a>
            </div>
            <div class="flex flex-col gap-4 items-start text-lg mt-4">
                <p>Product Description:
                    {{ $product->description }}
                </p>
                <p>Price:
                    {{ $product->unit_price }}
                </p>

                <a class=" hover:text-blue-700" href="/vehicles/{{ $product->vehicle->slug }}">
                    {{ $product->Vehicle->name }}
                </a>
            </div>
        </section>
        @endforeach
    </div>
</x-layout>