<?php
if (!function_exists('showAll_lienhe')) {
    function showAll_lienhe()
    {
        try {
            $sql = "SELECT * FROM `tb_lien_he` ORDER BY id_lien_he DESC";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
?>