<?php 

function hienthitrangdangnhap() {
    if (!empty($_POST)) {
        dangnhap();
    }

    require_once PATH_VIEW . 'dangnhap/dangnhap.php';
}

function dangnhap() {
    $user = getUserClientByEmailAndPassword($_POST['email'], $_POST['mat_khau']);

    if(isset($user)) {
        
        if(empty($user['email'])) {
            $_SESSION['error'] = "Vui lòng nhập địa chỉ email!";

        } elseif(empty($user['mat_khau'])) {
            $_SESSION['error1'] = "Vui lòng nhập mật khẩu!";

        } else {

            $_SESSION['user'] = $user;
            header('Location: ' . BASE_URL);
            exit();
        }
    }

   
}
function dangxuat() {
    if (!empty($_SESSION['user'])) {
        session_destroy();
    }

    header('Location: '. BASE_URL.'?act=dangnhap');
    exit();
}
?>