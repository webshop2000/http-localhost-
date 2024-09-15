<?php
$pluem = new classadmin_bypluem;
$history_shop = $pluem->history_shop();
?>
<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ลำดับ</th>
                                <th scope="col">ชื่อผู้ใช้</th>
                                <th scope="col">ชื่อสินค้า</th>
                                <th scope="col">สินค้าที่ได้รับ</th>
                                <th scope="col">ราคา</th>
                                <th scope="col">วันที่-เวลา</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($history_shop as $row){ ?>
                                <tr>
                                    <th scope="row"><?php echo $row['id']; ?></th>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['details']; ?></td>
                                    <td><?php echo $row['price']; ?></td>
                                    <td><?php echo $row['date']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>