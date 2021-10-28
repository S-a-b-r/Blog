<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('blog.main')}}" class="brand-link">
        <i class="fas fa-list-alt  ml-4"></i>
        <span class="brand-text font-weight-light">To Blog</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('admin.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>
                            Main menu
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.user.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.post.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-clipboard"></i>
                        <p>
                            Posts
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.category.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-th-list"></i>
                        <p>
                            Categories
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.tag.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>
                            Tags
                        </p>
                    </a>
                </li><li class="nav-item">
                    <a href="{{route('admin.contact.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                            Contacts
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
