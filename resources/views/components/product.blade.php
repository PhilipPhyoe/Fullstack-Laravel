<!DOCTYPE html>
<html lang="en">
<title>{{ $product->name }}</title>

<x-layout>
    <section class="m-16 flex justify-center gap-16">
        <div class="w-[500px] h-[500px] flex justify-center items-center rounded-md shadow-md hover:scale-110">
            <img class="w-full object-cover" src="/{{ $product->image_url }}" />
        </div>
        <div class="flex flex-col items-start gap-8">
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
        </div>

    </section>
</x-layout>

</html>