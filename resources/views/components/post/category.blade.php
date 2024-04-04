<ul class="categories">
    @foreach ($categories as $category)
        <li>
            <a href="#">{{ $category->name }} <span>({{ $category->total }})</span></a>
        </li>
    @endforeach()
</ul>
