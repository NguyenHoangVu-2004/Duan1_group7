<?php
include "views/layout/header.php";
include "views/layout/menu.php";
?>





<!-- MAIN CHÍNH (CẦN SỬA) -->
<div class="container-fluid">
    <h1>Danh sách chức vụ</h1>
    <style>
        table {
            text-align: center;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            width: 250px;
        }

        table {
            border-collapse: collapse;
            margin-bottom: 50px;
        }

        td input {
            background-color: red;
            border: none;
            color: white;
            border-radius: 3px;
        }

        .button input {
            background-color: #4066D4;
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 3px;
        }
    </style>
    <table align="center">
        <tr>
            <th>ID danh mục</th>
            <th>Tên danh mục</th>
            <th>Hành động</th>
        </tr>
        <?php
        foreach ($danhmuc as $item) : ?>
            <tr>
                <td><?php echo $item['id_danh_muc']; ?></td>
                <td><?php echo $item['ten_danh_muc']; ?></td>
                <td>
                    <a href="?act=suadanhmuc&id=<?php echo $item['id_danh_muc']; ?>"><input type="submit" value="Sửa" name="sua"></a>
                    <a href="?act=xoadanhmuc&id=<?php echo $item['id_danh_muc']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xoá danh mục này không?')"><input type="submit" value="Xoá" name="xoa"></a>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>
    <div class="button">
        <a href="<?= BASE_URL . '?act=xoaAlldanhmuc' ?>"><input type="submit" value="Xoá tất cả " style="background-color: red;" onclick="return confirm('Bạn có chắc chắn muốn xoá tất cả danh mục không?')" name="xoaAll"></a>
        <a href="<?= BASE_URL . '?act=themdanhmuc' ?>"><input type="submit" value="Thêm danh mục" name="them"></a>
    </div>
</div>
</div>


<?php
include "views/layout/footer.php";
?>