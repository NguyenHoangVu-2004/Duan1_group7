<?php
if (!function_exists('showAll_noidung')) {
    function showAll_noidung()
    {
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
    function delete_noidung($id_noi_dung)
    {
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
if (!function_exists('showOne_noidung')) {
    function showOne_noidung($id_noi_dung)
    {
        try {
            $sql = "SELECT * FROM `tb_noi_dung` WHERE id_noi_dung = :id";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id", $id_noi_dung); 

            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('update_noidung')) {
    function update_noidung($id_noi_dung, $data = [])
    {
        try {
            $new_noidung = get_set_params($data);
            $sql = "UPDATE `tb_noi_dung` SET `ten_trang_web`=:ten_trang_web, `anh`=:anh, `noi_dung`=:noi_dung, `link_lien_ket`=:link_lien_ket WHERE id_noi_dung=:id_noi_dung";

            $stmt = $GLOBALS['conn']->prepare($sql);

            foreach ($data as $fieldName => &$value) {
                $stmt->bindParam(":$fieldName", $value);
            }

            $stmt->bindParam(":id_noi_dung", $id_noi_dung);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
if (!function_exists('deleteAll_noidung')) {
    function deleteAll_noidung() {
        try {
            $sql = "DELETE FROM `tb_noi_dung`";
            
            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
