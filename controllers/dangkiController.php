<?php 
function dangki(){

    require_once PATH_VIEW . 'dangki/dangki.php';
    

}

    function validate_form_data($data) {
        // Kiểm tra xem dữ liệu đã được nhập hay chưa
        if (empty($data['email']) || empty($data['password']) || empty($data['full_name']) || empty($data['address']) || empty($data['gender']) || empty($data['dob']) || empty($data['phone'])) {
            return "Vui lòng điền đầy đủ thông tin.";
        } 
    
        // Validate email
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            return "Email không hợp lệ.";
        }
    
        // Thực hiện các kiểm tra khác tùy thuộc vào yêu cầu của bạn
    
        return ""; // Trả về chuỗi rỗng nếu dữ liệu hợp lệ
    }

    function process_form_data() {
        // Kiểm tra xem form đã được gửi chưa
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $full_name = $_POST['full_name'];
            $address = $_POST['address'];
            $gender = $_POST['gender'];
            $dob = $_POST['dob'];
            $phone = $_POST['phone'];
            // Kết nối đến cơ sở dữ liệu
            $sql="INSERT INTO `tb_nguoi_dung`( `ten_nguoi_dung`, `dia_chi`, `email`, `gioi_tinh`, `ngay_sinh`, `mat_khau`, `sdt`, ) 
            VALUES ('$full_name','$address','$email','$gender','$dob','$password','$phone'";
            
     
            // Lấy dữ liệu từ form
            
    
            // Validate dữ liệu
            $error_message = validate_form_data($_POST);
            if ($error_message != "") {
                echo $error_message;
                return;
            }
        }
    }    

?>