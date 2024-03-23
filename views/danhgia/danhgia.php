<?php
include "views/layout/header.php";
include "views/layout/menu.php";
?>


<!-- MAIN CHÍNH (CẦN SỬA) -->
<div class="container-fluid">
    <h1>Danh sách đánh giá</h1>
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
        }
    </style>
    <table align="center">
        <tr>
            <th>ID đánh giá</th>
            <th>Ngày đăng</th>
            <th>Người đánh giá</th>
            <th>Ảnh sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Số sao đánh giá</th>
            <th>Nội dung đánh giá</th>
        </tr>
        <?php
        // var_dump($danhgia);
        foreach ($danhgia as $item) : ?>
            <tr>
                <td><?php echo $item['id_danh_gia']; ?></td>
                <td><?php echo $item['ngay_dang']; ?></td>
                <td><?= $item['ten_nguoi_dung']  ?></td>
                <td><img src="assets/admin/img/<?php echo $item['anh'] ?>" alt="" width="200px" height="200px"></td>
                <td><?= $item['ten_san_pham'] ?></td>
                <td><?php echo $item['sao_danh_gia']; ?></td>
                <td><?php echo $item['noidung_danhgia']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
</div>
<?php
include "views/layout/footer.php";
?>