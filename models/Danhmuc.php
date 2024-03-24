<?php
if (!function_exists('showAll_danhmuc')) {
    function showAll_danhmuc()
    {
        try {
            $sql = "SELECT * FROM `tb_danh_muc` ORDER BY id_danh_muc DESC";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
if (!function_exists('delete_danh_muc')) {
    function delete_danhmuc($id_danh_muc)
    {
        try {
            $sql = "DELETE FROM `tb_danh_muc` WHERE id_danh_muc = :id_danh_muc";

            $stmt = $GLOBALS['conn']->prepare($sql);


            $stmt->bindParam(":id_danh_muc", $id_danh_muc);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
?>