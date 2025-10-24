<nav class="mt-2">
    <!--begin::Sidebar Menu-->
    <ul
        class="nav sidebar-menu flex-column"
        data-lte-toggle="treeview"
        role="navigation"
        aria-label="Main navigation"
        data-accordion="false"
        id="navigation"
    >
        <li class="nav-header">ADMIN PANEL</li>
        <li class="nav-item">
            <a href="./docs/introduction.html" class="nav-link">
                <span class="nav-badge badge text-bg-secondary me-3">{{ $posts->total() }}</span>
                <i class="nav-icon bi bi-download"></i> <i class=""></i>
                <p>Posts</p>
            </a>
        </li>
    </ul>
    <!--end::Sidebar Menu-->
</nav>
