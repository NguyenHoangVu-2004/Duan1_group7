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
            echo "<script>window.location.href = 'index.php?act=themnoidung';</script>";
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
    $id = $_GET['id']; // Lấy ID từ URL

    // Truy vấn cơ sở dữ liệu để lấy dữ liệu của bản ghi dựa trên ID
    $noidung = showOne_noidung($id);

    require_once PATH_VIEW . 'noidungwebsite/suanoidung.php';
}

function update_noidung()
{
    if (isset($_POST['sua'])) {
        $id = $_POST['id_noi_dung']; // Lấy ID từ form
        $ten_trang_web = $_POST['ten_trang_web'];
        $anh = $_FILES['anh']['name'];
        $noi_dung = $_POST['noi_dung'];
        $link_lien_ket = $_POST['link_lien_ket'];

        // Kiểm tra xem ảnh mới có được tải lên không
        if (!empty($anh)) {
            // Nếu có, di chuyển ảnh mới vào thư mục và cập nhật tên ảnh
            move_uploaded_file($_FILES['anh']['tmp_name'], 'uploads/noidung/' . $anh);
            $new_noidung = [
                'ten_trang_web' => $ten_trang_web,
                'anh' => $anh,
                'noi_dung' => $noi_dung,
                'link_lien_ket' => $link_lien_ket
            ];
        } else {
            // Nếu không, sử dụng tên ảnh cũ
            $old_noidung = showOne_noidung($id);
            $new_noidung = [
                'ten_trang_web' => $ten_trang_web,
                'anh' => $old_noidung['anh'], // Sử dụng tên ảnh cũ
                'noi_dung' => $noi_dung,
                'link_lien_ket' => $link_lien_ket
            ];
        }

        // Thực hiện cập nhật dữ liệu
        update_noidung($id, $new_noidung);
        echo "<script>alert('Sửa nội dung thành công!')</script>";

        // Chuyển hướng sau khi sửa thành công
        echo "<script>window.location.href = 'index.php?act=danhsachnoidung';</script>";
        exit(); // Thêm dòng này để dừng việc thực thi của mã PHP
    }
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

function xoaAllnoidung()
{
    if (isset($_GET['act']) && $_GET['act'] == 'xoaAllnoidung') {
        deleteAll_noidung();
        echo "<script>window.location.href = 'index.php?act=danhsachnoidung';</script>";
    }
}

