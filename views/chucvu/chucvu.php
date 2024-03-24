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
            <th>ID chức vụ</th>
            <th>Tên chức vụ</th>
            <th>Hành động</th>
        </tr>
        <?php
        foreach ($chucvu as $item) : ?>
            <tr>
                <td><?php echo $item['id_chuc_vu']; ?></td>
                <td><?php echo $item['ten_chuc_vu']; ?></td>
                <td>
                    <a href="?act=suachucvu&id=<?php echo $item['id_chuc_vu']; ?>"><input type="submit"  value="Sửa" name="sua"></a>
                    <a href="?act=xoachucvu&id=<?php echo $item['id_chuc_vu']; ?>" onclick="return confirm('Bạn có chắc chăn muốn xoá chức vụ này không?')"><input type="submit" value="Xoá" name="xoa"></a>
                </td>
            </tr>
        <?php endforeach; ?>
        
    </table>
    <div class="button">
        <a href="<?= BASE_URL . '?act=themchucvu' ?>"><input type="submit" value="Thêm chức vụ" name="them"></a>
    </div>
</div>
</div>


<?php
include "views/layout/footer.php";
?>