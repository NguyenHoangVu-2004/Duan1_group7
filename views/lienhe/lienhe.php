<?php
include "./views/layout/header.php";
include "./views/layout/menu.php";
?>



<!-- MAIN CHÍNH (CẦN SỬA) -->
<div class="container-fluid">
    <h1>Danh sách liên hệ</h1>
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
            <th>ID liên hệ</th>
            <th>Người gửi</th>
            <th>Sđt</th>
            <th>Email</th>
            <th>Tiêu đề</th>
            <th>Nội dung </th>
            <th>Ngày gửi </th>
            <th>Trạng thái </th>
        </tr>
        <?php
        // var_dump($danhgia);
        foreach ($lienhe as $item) : ?>
            <tr>
                <td><?php echo $item['id_lien_he']; ?></td>
                <td><?php echo $item['ten_nguoi_gui']; ?></td>
                <td><?= $item['sdt']  ?></td>
                <td><?= $item['email']  ?></td>
                <td><?= $item['tieu_de'] ?></td>
                <td><?php echo $item['noi_dung']; ?></td>
                <td><?php echo $item['ngay_gui']; ?></td>
                <td><?php echo $item['trang_thai']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
</div>
<?php
include "./views/layout/footer.php";
?>