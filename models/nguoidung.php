<?php 
if (!function_exists('getUserClientByEmailAndPassword')) {
    function getUserClientByEmailAndPassword($email, $mat_khau)
    {
        try {
            $sql = "SELECT * FROM `tb_nguoi_dung` WHERE email = :email AND mat_khau = :mat_khau ";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":mat_khau", $mat_khau);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
?>