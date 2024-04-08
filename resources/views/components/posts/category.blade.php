<ul class="categories">
    <h3 class="heading">Categories</h3>
    @foreach ($categories as $category)
        <li>
            <a href="{{ route('category', $category->name) }}">{{ $category->name }}
                <span>({{ $category->total }})</span></a>
        </li>
    @endforeach()
</ul>
