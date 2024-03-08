<div class="text-lg font-semibold flex justify-center gap-4 items-center mb-4">
    @foreach ( $this->categories as $category)
    <li class="hover:bg-gray-400 rounded-md hover:text-white p-2">
        <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
    </li>
    @endforeach
</div>