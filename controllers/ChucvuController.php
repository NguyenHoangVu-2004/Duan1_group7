<?php
function chucvu()
{
    $chucvu = showAll_chucvu();
    require_once PATH_VIEW . 'chucvu/chucvu.php';
}
function themchucvu()
{
    require_once PATH_VIEW . 'chucvu/themchucvu.php';
}
function create_chucvu()
{
    if (isset($_POST['them'])) {
        $ten_chuc_vu = $_POST['ten_chuc_vu'];
        $mo_ta = $_POST['mo_ta'];

        // Di chuyển tệp ảnh vào thư mục đích
        if (empty($ten_chuc_vu) || empty($mo_ta)) {
            echo "<script>alert('Hãy nhập đủ thông tin!')</script>";
            echo "<script>window.location.href = 'index.php?act=themchucvu';</script>";
        } else {
            $new_chucvu = [
                'ten_chuc_vu' => $ten_chuc_vu,
                'mo_ta' => $mo_ta,
            ];

            // Thêm dữ liệu vào cơ sở dữ liệu
            insert('tb_chuc_vu', $new_chucvu);

            echo "<script>alert('Thêm chức vụ thành công!')</script>";

            // Chuyển hướng sau khi thêm thành công
            echo "<script>window.location.href = 'index.php?act=chucvu';</script>";
        }
    }
}
function xoachucvu()
{
    if (isset($_GET['act']) && $_GET['act'] == 'xoachucvu') {
        $id_chuc_vu = $_GET['id'];
        delete_chucvu($id_chuc_vu);

        echo "<script>window.location.href = 'index.php?act=chucvu';</script>";
    }
}
function xoaAllchucvu()
{
    if (isset($_GET['act']) && $_GET['act'] == 'xoaAllchucvu') {
        deleteAll_chucvu();
        echo "<script>window.location.href = 'index.php?act=chucvu';</script>";
    }
}
?>