<?php
include "views/layout/header.php";
include "views/layout/menu.php";
?>
   
<!-- MAIN CHÍNH (CẦN SỬA) -->
<div class="container-fluid">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Đăng Nhập</h1>
                                </div>
                                <div class="container mt-5">
                                    <div class="row justify-content-center">
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    Đăng nhập
                                                </div>
                                                <div class="card-body">
                                                    <form action="" method="POST" class="user">
                                                        <div class="form-group">
                                                            <label for="username">Email:</label>
                                                            <input type="text" class="form-control" name="email" placeholder="Email đăng nhập">
                                                            <?php if(isset($_SESSION['error'])) : ?>
                                                                <div class="alert alert-danger">
                                                                    <?php echo $_SESSION['error'] ?>
                                                                </div>
                                                                <?php unset($_SESSION['error']); ?>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="password">Mật khẩu:</label>
                                                            <input type="password" class="form-control" name="mat_khau" placeholder="Mật khẩu">
                                                            <?php if(isset($_SESSION['error1'])) : ?>
                                                                <div class="alert alert-danger">
                                                                    <?php echo $_SESSION['error1'] ?>
                                                                </div>
                                                                <?php unset($_SESSION['error1']); ?>
                                                            <?php endif; ?>
                                                        </div>
                                                        <button type="submit" name="submit" class="btn btn-primary">Đăng nhập</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">quên mật khẩu ?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="register.html">Tạo tài khoản mới!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "views/layout/footer.php";
?>