<?php
function danhmuc()
{
    $danhmuc = showAll_danhmuc();
    require_once PATH_VIEW . 'danhmuc/danhmuc.php';
}
function themdanhmuc()
{
    require_once PATH_VIEW . 'danhmuc/themdanhmuc.php';
}
function create_danhmuc()
{
    if (isset($_POST['them'])) {
        $ten_danh_muc = $_POST['ten_danh_muc'];

        if (empty($ten_danh_muc)) {
            echo "<script>alert('Hãy nhập đủ thông tin!')</script>";
            echo "<script>window.location.href = 'index.php?act=themdanhmuc';</script>";
        } else {
            $new_danhmuc = [
                'ten_danh_muc' => $ten_danh_muc,
            ];

            // Thêm dữ liệu vào cơ sở dữ liệu
            insert('tb_danh_muc', $new_danhmuc);

            echo "<script>alert('Thêm danh mục thành công!')</script>";

            // Chuyển hướng sau khi thêm thành công
            echo "<script>window.location.href = 'index.php?act=danhmuc';</script>";
        }
    }
}
function xoadanhmuc()
{
    if (isset($_GET['act']) && $_GET['act'] == 'xoadanhmuc') {
        $id_danh_muc = $_GET['id'];
        delete_danhmuc($id_danh_muc);

        echo "<script>window.location.href = 'index.php?act=danhmuc';</script>";
    }
}
function xoaAlldanhmuc()
{
    if (isset($_GET['act']) && $_GET['act'] == 'xoaAlldanhmuc') {
        deleteAll_danhmuc();
        echo "<script>window.location.href = 'index.php?act=danhmuc';</script>";
    }
}
