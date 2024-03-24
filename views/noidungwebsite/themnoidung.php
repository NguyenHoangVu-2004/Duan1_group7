<?php
include "./views/layout/header.php";
include "./views/layout/menu.php";
?>



<!-- MAIN CHÍNH (CẦN SỬA) -->
<style>
    h1 {
        margin-bottom: 20px;
    }

    form {
        margin-left: 100px;
    }

    input {
        width: 400px;
        border-radius: 3px;
        margin-top: -20px;
        margin-bottom: 20px;
        padding: 7px;
    }

    p {
        font-size: 20px;
    }

    a>input {
        width: 305px;
        margin-left: 100px;
        background-color: #4066D4;
        border: none;
        color: white;
    }

    .bt {
        margin-top: 50px;
        width: 150px;
        background-color: red;
        border: none;
        color: white;
    }
</style>
<div class="container-fluid">
    <h1>Thêm nội dung website</h1>
    <form action="<?= BASE_URL . '?act=create_noidung' ?>" method="post" enctype="multipart/form-data">
        <p>Tên trang web</p>
        <input type="text" name="ten_trang_web" id="ten_trang_web">

        <p>Ảnh</p>
        <input type="file" name="anh" id="anh">

        <p>Nội dung</p>
        <input type="text" name="noi_dung" id="noi_dung">

        <p>Link liên kết</p>
        <input type="text" name="link_lien_ket" id="link_lien_ket">

        <br>
        <input class="bt" type="reset" value="Nhập lại">
        <input class="bt" type="submit" value="Thêm" name="them">
    </form>
    <a href="index.php?act=danhsachnoidung"><input type="button" value="Danh sách"></a>
</div>

</div>
<?php
include "./views/layout/footer.php";
?>