<x-layout>
    <div class="flex justify-center items-start gap-8 flex-wrap mx-4 my-4">
        @foreach ($products as $product)
        <section class="m-8 flex flex-col gap-[3rem] w-[220px] h-auto">

            <div
                class="w-[300px] h-[300px] flex justify-center items-center rounded-md shadow-md hover:scale-110 overflow-hidden">
                <img class="object-contain w-[200px]" src="/{{ $product->image_url }}" />
            </div>
            <div class="flex flex-col items-start gap-4">
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
                    <p>Product Description: {{ $product->description }}
                    </p>
                    <p>Price: {{ $product->unit_price }} MMK
                    </p>
                    <p class="font-semibold text-lg">Suitable Vehicle</p>
                    <a class=" hover:text-blue-700" href="/vehicles/{{ $product->vehicle->slug }}">
                        {{ $product->Vehicle->name }}
                    </a>
                </div>
                <a href="/products/{{ $product->slug }}">
                    <h3 class="font-semibold text-xl p-2 rounded-md bg-blue-600 text-white">
                        Learn More
                    </h3>
                </a>
            </div>
        </section>
        @endforeach
    </div>
</x-layout>