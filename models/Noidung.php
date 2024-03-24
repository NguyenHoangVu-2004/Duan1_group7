<?php
if (!function_exists('showAll_noidung')) {
    function showAll_noidung() {
        try {
            $sql = "SELECT * FROM `tb_noi_dung` ORDER BY id_noi_dung DESC";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
if (!function_exists('delete_noidung')) {
    function delete_noidung($id_noi_dung) {
        try {
            $sql = "DELETE FROM `tb_noi_dung` WHERE id_noi_dung = :id_noi_dung";
            
            $stmt = $GLOBALS['conn']->prepare($sql);

            
            $stmt->bindParam(":id_noi_dung", $id_noi_dung);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

?>