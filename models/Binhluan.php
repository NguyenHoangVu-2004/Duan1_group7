<?php
if (!function_exists('showAll_binhluan')) {
    function showAll_binhluan()
    {
        try {
            $sql = "SELECT * FROM tb_nguoi_dung INNER JOIN tb_binh_luan ON tb_nguoi_dung.id_nguoi_dung=tb_binh_luan.id_nguoi_dung INNER JOIN tb_san_pham ON tb_san_pham.id_san_pham=tb_binh_luan.id_san_pham INNER JOIN tb_anh ON tb_anh.id_san_pham=tb_san_pham.id_san_pham ORDER BY id_binh_luan DESC";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
?>