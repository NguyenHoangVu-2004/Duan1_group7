<?php
session_start();
// Require file trong commons
require_once './commons/env.php';
require_once './commons/helper.php';
require_once './commons/connect-db.php';
require_once './commons/model.php';

// Require file trong controllers và models
require_file(PATH_CONTROLLER);
require_file(PATH_MODEL);

// Điều hướng
$act = $_GET['act'] ?? '/';

// Biến này cần khai báo được link cần đăng nhập mới vào được
$arrRouteNeedAuth = [
    'cart',
    'addToCart',
    'remoteCartItem',
    'remoteCart',
    'order',
    'addOrder',
    'updateQuantity',
    'createUser',
    'danhsachnoidung',
    'danhmuc',
    'chucvu',
    'lienhe' ,
    'danhgia',
    'binhluan'

    
];

// Kiểm tra xem user đã đăng nhập chưa
middleware_auth_check($act, $arrRouteNeedAuth);

match ($act) {
    '/' => trangchu(),
    'cart' => cartIndex(),
    'addToCart' => addToCart(),
    'remoteCartItem' => remoteCartItem(),
    'remoteCart' => remoteAllCart(),
    'order' => orderIndex(),
    'addOrder' => addOrder(),
    'updateQuantity' => updateQuantity(),

    //user
    'addUser' => addUser(),
    'createUser' => createUser(),

    //noidung
    'danhsachnoidung' => danhsachnoidung(),
    'themnoidung' => themnoidung(),
    'create_noidung' => create_noidung(),
    'suanoidung' => suanoidung(),
    'update_noidung' => update_noidung(),
    'xoanoidung' => xoanoidung(),
    'xoaAllnoidung' => xoaAllnoidung(),
    
    //lienhe
    'lienhe' => lienhe(),

    //binhluan
    'binhluan' => binhluan(),

    //danhgia
    'danhgia' => danhgia(),

    //chucvu
    'chucvu' => chucvu(),
    'themchucvu' => themchucvu(),
    'create_chucvu' => create_chucvu(),
    'xoachucvu' => xoachucvu(),
    'xoaAllchucvu' => xoaAllchucvu(),

    //danhmuc
    'danhmuc' => danhmuc(),
    'themdanhmuc'=> themdanhmuc(),
    'create_danhmuc'=> create_danhmuc(),
    'xoadanhmuc' => xoadanhmuc(),
    'xoaAlldanhmuc' => xoaAlldanhmuc(),



    // dang nhap dnag ki
    'dangnhap' => hienthitrangdangnhap(),
    'dangki' =>dangki(),
    'taotaikhoan' =>process_form_data(),
    'logout' => dangxuat(),
};

require_once './commons/disconnect-db.php';
