<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.post.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-file"></i>
                        <p>
                            Посты
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.category.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th-list"></i>
                        <p>
                            Категории
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.tag.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>
                            Теги
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.user.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Пользователи
                        </p>
                    </a>
                </li>
            </ul>
    </div>
    <!-- /.sidebar -->
</aside>
