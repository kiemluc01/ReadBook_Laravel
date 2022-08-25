@extends('.template.main-layout')
@section('menu-login')
<nav class="navbar navbar-expand-md fixed-top bg-info">
    <div class="container-fluid">
        <a class="navbar-brand" href=".">
            <img src="admin/Public\images\logo_light.png" alt="Logo Owl" width="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item px-3">
                    <a class="nav-link text-light" href="<?php echo 'index.php'; ?>">Trang chủ</a>
                </li>
                <li class="nav-item dropdown px-3">
                    <a class="nav-link dropdown-toggle text-light" role="button" data-bs-toggle="dropdown" href="#">
                        Thể loại
                    </a>
                    <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="">Tên danh mục</a>
                            </li>
                    </ul>
                </li>
                <li class="nav-item dropdown px-3">
                    <a class="nav-link dropdown-toggle text-light" role="button" data-bs-toggle="dropdown" href="#">
                        Ngôn ngữ
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">Tiếng Việt</a></li>
                        <li><a class="dropdown-item" href="">Tiếng Anh</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav me-5 mb-2 mb-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" role="button" data-bs-toggle="dropdown" href="#">
                        <img height="35" class="ms-5 rounded-3" src="<?php echo $IMG; ?>" alt="<?php echo $username; ?>">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="index.php?option=member"><i class="fas fa-user-cog me-3"></i> <?php echo $username; ?></a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="fas fa-book me-3"></i> Thư viện</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="fas fa-bell me-3"></i> Thông báo</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="fas fa-key me-3"></i> Đổi mật khẩu</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="index.php?option=login" onclick="destroy()"><i class="fas fa-sign-out-alt me-3"></i> Đăng xuất</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

</nav>
@endsection