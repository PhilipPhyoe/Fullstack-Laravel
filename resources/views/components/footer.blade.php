<div class="my-4 py-8 bg-gray-200 flex flex-col items-center">
    <h3 class="text-3xl">Future Ecommerce is here!</h3>
    <div class="flex justify-between gap-16 items-start">
        <ul class="py-4 font-semibold flex  flex-col justify-start gap-2">
            <h4 class="text-2xl">Product Categories</h4>
            @php
            $categories = App\Models\Category::all();
            @endphp
            @foreach ( $categories as $category)
            <li class="text-xl text-gray-600">
                <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
            </li>
            @endforeach
        </ul>
        <div class="flex flex-col gap-4 items-start py-4 font-semibold">
            <h4 class="text-2xl">Address</h4>
            <div>
                <p class="text-xl">
                    No. 39, Admin Street, Users Township, This City, This Country.
                </p>
            </div>
            <div>
                <p class="text-xl">
                    We try our best to support our customers.</p>
            </div>
        </div>
        <ul class="py-4 font-semibold flex  flex-col justify-start gap-2">
            <h4 class="text-2xl">Brands</h4>
            @php
            $brands = App\Models\Brand::all();
            @endphp
            @foreach ( $brands as $brand)
            <li class="text-xl text-gray-600">
                <a href="/brands/{{ $brand->name }}">{{ $brand->name }}</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
<div class="my-4 text-center ">
    <p>
        @copyright 2024
    </p>
</div>