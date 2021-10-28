    <nav class="main-header navbar navbar-expand navbar-light navbar-light">
        <!-- Left navbar links -->

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link" data-toggle="modal" data-target="#modal-link">Link</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <?php if (logged_in()) : ?>
                    <a href="/logout" class="nav-link text-info">Logout</a>
                <?php endif  ?>
            </li>
        </ul>


        <!-- Menu Input -->
        <ul class="navbar-nav ml-auto">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/menu-input" class="nav-link">Input Data</a>
                </li>
                <!-- fulscrenn bos -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
    </nav>