<style>
    .fa-pen,
    .fa-video {
        color: rgb(7, 85, 231);
    }
</style>

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
                <a href="" class="nav-link"><i class="text-danger fas fa-fire"></i><span>Dashboard</span></a>

            </li>
            <li class="menu-header">Starter</li>

            <li class="dropdown">
                <a href="{{ route('video.index') }}" class="nav-link"><i class="fa-solid fa-video"></i>
                    <span>Manage Videos</span></a>

            </li>

            <li class="dropdown">
                <a href="{{ route('article.index') }}" class="nav-link"><i class="fa-solid fa-pen"></i>
                    <span>Manage Article</span></a>

            </li>

        </ul>

    </aside>
</div>
