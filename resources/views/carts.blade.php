<x-layout>
    <section class="m-8 p-8 flex gap-16 flex-col">
        @php
        $cartNumber = 1;
        @endphp
        @foreach ($carts as $cart)

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

                <input type="submit" value="Buy Now"
                    class="bg-blue-800 text-white font-semibold text-xl px-16 py-4 text-center cursor-pointer hover:bg-orange-500 rounded-md" />
            </form>
        </div>
        @php
        $cartNumber += 1;
        @endphp
        @endforeach
        @if (session()->has('message'))
        <h4 class="text-lg font-semibold p-4">
            {{ session()->get('message') }}
        </h4>
        @endif
    </section>
</x-layout>