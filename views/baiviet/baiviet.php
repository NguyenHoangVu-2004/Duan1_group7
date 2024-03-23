<?php
include "views/layout/header.php";
include "views/layout/menu.php";
?>
                <!-- MAIN CHÍNH (CẦN SỬA) -->
                <div class="container-fluid">
                    <h1>Danh sách bài viết</h1>
                    <style>
                        table {
                            text-align: center;
                        }

                        table,
                        th,
                        td {
                            border: 1px solid black;
                        }
                        th,td{
                            width: 250px;
                        }
                        table {
                            border-collapse: collapse;
                        }
                    </style>
                    <table align="center">
                        <tr>
                            <th>ID bài viết</th>
                            <th>Tiêu đề</th>
                            <th>Ảnh bài viết</th>
                            <th>Nội dung</th>
                            <th>Ngày đăng</th>
                            <th>Trạng thái </th>
                        </tr>
                        <?php
                        // var_dump($danhgia);
                        foreach ($baiviet as $item) : ?>
                            <tr>
                                <td><?php echo $item['id_bai_viet']; ?></td>
                                <td><?php echo $item['tieude_baiviet']; ?></td>
                                <td>
                                    <img src="assets/admin/img/<?=$item['anh_bai_viet']?>" alt="">
                                </td>
                                <td><?php echo $item['noi_dung']; ?></td>
                                <td><?php echo $item['ngay_dang_bai']; ?></td>
                                <td><?php echo $item['trang_thai']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
<?php
include "views/layout/footer.php";
?>