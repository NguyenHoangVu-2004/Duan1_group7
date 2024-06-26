<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->

<!-- Nav Item - Pages Collapse Menu -->


<!-- Nav Item - Utilities Collapse Menu -->



<!-- Nav Item - Pages Collapse Menu -->

<li class="nav-item">
    <a class="nav-link" href="?act=/">
        <span style="font-weight: 500; font-size: 20px; ">Trang chủ</span></a>
</li>
<hr class="sidebar-divider">
<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="<?= BASE_URL . '?act=dangnhap' ?>">
        <span>Đăng nhập</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?= BASE_URL . '?act=nguoidung' ?>">
        <span>Người dùng</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?= BASE_URL . '?act=chucvu' ?>">
        <span>Chức vụ</span></a>
</li>
<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="<?= BASE_URL . '?act=danhmuc' ?>">
        <span>Danh mục</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?= BASE_URL . '?act=sanpham' ?>">
        <span>Sản phẩm</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?= BASE_URL . '?act=khuyenmai' ?>">
        <span>Khuyến mãi</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?= BASE_URL . '?act=baiviet' ?>">
        <span>Bài viết</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?= BASE_URL . '?act=binhluan' ?>">
        <span>Bình luận</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?= BASE_URL . '?act=danhgia' ?>">
        <span>Đánh giá</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?= BASE_URL . '?act=danhsachnoidung' ?>">
        <span>Nội dung website</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?= BASE_URL . '?act=lienhe' ?>">
        <span>Liên hệ</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

<!-- Sidebar Message -->
</ul>
<!-- End of Sidebar -->
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Tìm kiếm..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
            <a class="btn btn-danger" href="<?= BASE_URL . '?act=logout' ?>">Đăng xuất</a>
        </nav>