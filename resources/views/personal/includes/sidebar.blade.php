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
                    <a href="{{route('personal.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Main
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('personal.comment.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-comment-alt"></i>
                        <p>
                            Comments
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('personal.liked.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-heart"></i>
                        <p>
                            Likes
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
