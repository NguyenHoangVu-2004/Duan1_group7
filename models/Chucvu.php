<?php
if (!function_exists('showAll_chucvu')) {
    function showAll_chucvu()
    {
        try {
            $sql = "SELECT * FROM `tb_chuc_vu` ORDER BY id_chuc_vu DESC";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
if (!function_exists('delete_chucvu')) {
    function delete_chucvu($id_chuc_vu)
    {
        try {
            $sql = "DELETE FROM `tb_chuc_vu` WHERE id_chuc_vu = :id_chuc_vu";

            $stmt = $GLOBALS['conn']->prepare($sql);


            $stmt->bindParam(":id_chuc_vu", $id_chuc_vu);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
if (!function_exists('deleteAll_chucvu')) {
    function deleteAll_chucvu() {
        try {
            $sql = "DELETE FROM `tb_chuc_vu`";
            
            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}