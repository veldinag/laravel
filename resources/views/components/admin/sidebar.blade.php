<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link @if(request()->routeIs('admin.index')) active @endif" aria-current="page" href="{{route('admin.index')}}">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(request()->routeIs('admin.categories.*')) active @endif" href="{{route('admin.categories.index')}}">
                    <span data-feather="folder" class="align-text-bottom"></span>
                    Categories
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link @if(request()->routeIs('admin.sources.*')) active @endif" href="{{route('admin.sources.index')}}">
                    <span data-feather="globe" class="align-text-bottom"></span>
                    Sources
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link @if(request()->routeIs('admin.news.*')) active @endif" href="{{route('admin.news.index')}}">
                    <span data-feather="file" class="align-text-bottom"></span>
                    News
                </a>
            </li>
        </ul>
    </div>
</nav>
