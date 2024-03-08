<section>
    <div class="flex gap-8 justify-center items-center p-9 font-medium text-xl border-b-black border">
        <div>
            <a href="/" class="text-3xl text-blue-900 font-bold">
                Ecommerce
            </a>
        </div>
        <x-menu />
        <div>
            <form method="GET" action="#">
                <input type="text" name="search" placeholder="Find Products"
                    class="bg-transparent placeholder-black font-semibold text-sm border border-solid border-black p-2 rounded-md">
            </form>
        </div>
        <div class="flex gap-5 justify-between items-center">
            @auth
            <span class="hover:text-red-800">Welcome, {{ auth()->user()->name }}!</span>
            <form method="POST" action="/logout">
                @csrf
                <button type="submit">
                    Log Out
                </button>
            </form>
            @if (auth()->user()->is_admin)
            <a href="/admin">Dashboard</a>
            @endif
            @else
            <a href="/register">
                Register
            </a>
            <a href="/login">
                Log In
            </a>
            @endauth
        </div>
    </div>
    <ul class="text-xl mt-4 font-semibold flex justify-center items-center gap-8">
        @php
        $categories = App\Models\Category::all();
        @endphp
        @foreach ( $categories as $category)
        <li class="hover:bg-blue-600 rounded-md hover:text-white p-2 flex items-center justify-center gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
            </svg>

            <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
        </li>
        @endforeach
    </ul>
</section>