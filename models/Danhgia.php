<?php
if (!function_exists('showAll_danhgia')) {
    function showAll_danhgia()
    {
        try {
            $sql = "SELECT tb_danh_gia.*,tb_nguoi_dung.ten_nguoi_dung,tb_san_pham.ten_san_pham,tb_anh.anh,tb_san_pham.ten_san_pham FROM `tb_nguoi_dung`INNER JOIN tb_danh_gia ON tb_nguoi_dung.id_nguoi_dung=tb_danh_gia.id_nguoi_dung INNER JOIN tb_san_pham ON tb_danh_gia.id_san_pham=tb_san_pham.id_san_pham INNER JOIN tb_anh ON tb_anh.id_san_pham=tb_san_pham.id_san_pham ORDER BY id_danh_gia DESC";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
?>