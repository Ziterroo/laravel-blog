<ul class="navbar-nav mr-auto">
    @foreach($categories as $category)
        <li class="nav-item">
            <a class="nav-link" href="{{ route('category.show', ['slug' => $category->slug]) }}">{{ $category->title }}</a>
        </li>
    @endforeach
</ul>
