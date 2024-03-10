<x-layout>
    <section class="m-8 p-8 flex gap-16 flex-col items-center">
        @php
        $orderNumber = 1;
        @endphp

        @foreach ($orders as $order)

        <div class="flex gap-8 items-start justify-center w-3/4 p-8 border
         border-solid border-gray-600 shadow-md rounded-sm">

            <div class="flex flex-col items-start gap-2">
                <p>Order Number: {{ $orderNumber }}
                </p>
                <h1 class="font-semibold text-2xl mb-2">
                    Customer Name: {{ $order->customer_name }}
                </h1>
                <h2 class="font-semibold text-xl mb-2">
                    Customer Email: {{ $order->customer_email }}
                </h2>

                <div class="flex flex-col gap-4 items-start text-lg">
                    <p>Product Name: {{ $order->product_name }}
                    </p>
                    <p>Product Price: {{ $order->product_price }} MMK
                    </p>
                    <p>Product Quantity: {{ $order->product_quantity }} Orders
                    </p>
                </div>

            </div>
        </div>
        @php
        $orderNumber += 1;
        @endphp
        @endforeach

    </section>
</x-layout>