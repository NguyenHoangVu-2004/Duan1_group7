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
    <h1>Thêm danh mục</h1>
    <form action="<?= BASE_URL . '?act=create_danhmuc' ?>" method="post" enctype="multipart/form-data">
        <p>Tên danh mục</p>
        <input type="text" name="ten_danh_muc" >

        <br>
        <input class="bt" type="reset" value="Nhập lại">
        <input class="bt" type="submit" value="Thêm" name="them">
    </form>
    <a href="index.php?act=danhmuc"><input type="button" value="Danh sách"></a>
</div>

</div>
<?php
include "./views/layout/footer.php";
?>