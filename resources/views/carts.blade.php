<x-layout>
    <section class="m-8 p-8 flex gap-16 flex-col items-center">
        @php
        $cartNumber = 1;
        @endphp
        @if (session()->has('message'))
        <h4 class="text-lg font-semibold p-4">
            {{ session()->get('message') }}
        </h4>
        @endif
        @foreach ($carts as $cart)

        <div class="flex gap-8 items-start justify-center w-3/4 p-8 border
         border-solid border-gray-600 rounded-sm">
            <div class="w-[500px] h-[500px] flex justify-center items-center rounded-md hover:scale-105">
                <img class="w-[400px] h-[400px] object-contain shadow-md" src="/{{ $cart->image }}" />
            </div>
            <div class="flex flex-col items-start gap-2">
                <p>Product Number: {{ $cartNumber }}
                </p>
                <h1 class="font-semibold text-2xl mb-2">
                    Customer Name: {{ $cart->name }}
                </h1>
                <h2 class="font-semibold text-xl mb-2">
                    Customer Email: {{ $cart->email }}
                </h2>

                <div class="flex flex-col gap-4 items-start text-lg">
                    <p>Product Name: {{ $cart->title }}
                    </p>
                    <p>Product Price: {{ $cart->price }} MMK
                    </p>
                    <p>Product Quantity: {{ $cart->quantity }} Orders
                    </p>
                </div>
                <form method="POST" action="/order/{{ $cart->id }}" class="flex flex-col gap-4 justify-start">
                    @csrf
                    <input type="submit" value="Buy Now" class="bg-blue-800 text-white 
                        font-semibold text-xl px-16 py-4 text-center cursor-pointer
                         hover:bg-orange-500 rounded-md" />
                </form>
                <form method="POST" action="/delete/{{ $cart->id }}" class="flex flex-col gap-4 justify-start">
                    @csrf
                    <input type="submit" value="Delete" class=" text-white 
                        font-semibold text-lg px-16 py-4 text-center cursor-pointer
                         bg-pink-600 rounded-md" />
                </form>
            </div>
        </div>
        @php
        $cartNumber += 1;
        @endphp
        @endforeach

    </section>
</x-layout>