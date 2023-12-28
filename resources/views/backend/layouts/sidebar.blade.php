<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="">Admin Dashboard</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">DB</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
                <a href="{{ route('dashboard') }}"
                    class="{{ request()->routeIs('dashboard') ? 'text-info' : '' }} nav-link"><i
                        class="text-danger fas fa-fire"></i><span>Dashboard</span></a>

            </li>
            <li class="menu-header">Starter</li>

            <li class="dropdown">
                <a href="{{ route('profile.index') }}"
                    class="{{ request()->routeIs('profile.index') ? 'text-info' : '' }} nav-link"><i
                        class="fa-solid fa-user"></i>
                    <span>Manage About Me</span></a>
            </li>

            <li class="dropdown">
                <a href="{{ route('hero.index') }}"
                    class="{{ request()->routeIs('hero.index') ? 'text-info' : '' }} nav-link"><i
                        class="fa-solid fa-image"></i>
                    <span>Manage Hero Section</span></a>
            </li>


            <li class="dropdown">
                <a href="{{ route('video.index') }}"
                    class="{{ request()->routeIs(['video.index', 'video.edit']) ? 'text-info' : '' }} nav-link"><i
                        class="fa-solid fa-video"></i>
                    <span>Manage Videos</span></a>

            </li>

            <li class="dropdown">
                <a href="{{ route('article.index') }}"
                    class="{{ request()->routeIs(['article.index', 'article.edit']) ? 'text-info' : '' }} nav-link"><i
                        class="fa-solid fa-pen"></i>
                    <span>Manage Article</span></a>

            </li>

            <li class="dropdown">
                <a href="{{ route('image.index') }}"
                    class="{{ request()->routeIs('image.index') ? 'text-info' : '' }} nav-link"><i
                        class="fa-solid fa-image"></i>
                    <span>Manage Images</span></a>
            </li>

        </ul>

    </aside>
</div>
