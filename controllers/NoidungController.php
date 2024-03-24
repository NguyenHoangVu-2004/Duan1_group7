<?php
//danh sách
function danhsachnoidung()
{
    $noidung = showAll_noidung();
    require_once PATH_VIEW . 'noidungwebsite/noidungwebsite.php';
}

//thêm nội dung
function themnoidung()
{
    require_once PATH_VIEW . 'noidungwebsite/themnoidung.php';
}

function create_noidung()
{
    if (isset($_POST['them'])) {
        $ten_trang_web = $_POST['ten_trang_web'];
        $anh = $_FILES['anh']['name']; // Lấy tên tệp ảnh
        $noi_dung = $_POST['noi_dung'];
        $link_lien_ket = $_POST['link_lien_ket'];

        // Di chuyển tệp ảnh vào thư mục đích
        if (empty($ten_trang_web) || empty($ten_trang_web) || empty($ten_trang_web) || empty($ten_trang_web)) {
            echo "<script>alert('Hãy nhập đủ thông tin!')</script>";
            echo "<script>window.location.href = 'index.php?act=themnoidung';</script>";;
        } else {
            move_uploaded_file($_FILES['anh']['tmp_name'], 'uploads/noidung/' . $anh);

            // Tạo mảng dữ liệu mới
            $new_noidung = [
                'ten_trang_web' => $ten_trang_web,
                'anh' => $anh,
                'noi_dung' => $noi_dung,
                'link_lien_ket' => $link_lien_ket
            ];

            // Thêm dữ liệu vào cơ sở dữ liệu
            insert('tb_noi_dung', $new_noidung);

            // Lấy danh sách nội dung sau khi thêm
            // $list_noidung = listAll('tb_noi_dung');
            // debug($list_noidung);
            // Hiển thị thông báo thành công

            echo "<script>alert('Thêm nội dung thành công!')</script>";

            // Chuyển hướng sau khi thêm thành công
            echo "<script>window.location.href = 'index.php?act=danhsachnoidung';</script>";
        }
    }
}



//sửa nội dung
function suanoidung()
{
    require_once PATH_VIEW . 'noidungwebsite/suanoidung.php';
}


//xoá
function xoanoidung()
{
    if (isset($_GET['act']) && $_GET['act'] == 'xoanoidung') {
        $id_noi_dung = $_GET['id'];
        delete_noidung($id_noi_dung);
        
        echo "<script>window.location.href = 'index.php?act=danhsachnoidung';</script>";
    }
}
