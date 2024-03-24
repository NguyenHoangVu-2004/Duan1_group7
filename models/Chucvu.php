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