<?php include 'v_page_adminHeader.php';?>

<?php
require_once "models/connectdb.php";
$sql = "SELECT * FROM sanpham order by tensp,giasp,anhsp,mota";
$query = mysqli_query($conn,$sql);

?>
<h1>QUẢN LÝ SẢN PHẨM</h1>
<a href="?mod=admin&act=adminAddPro"><button class="btn-button btn btn-primary">Thêm Sản Phẩm</button></a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên Sản Phẩm</th>
            <th>Giá</th>
            <th>Ảnh sản phẩm</th>
            <th>Mô Tả</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
    <?php

    while ($row = mysqli_fetch_assoc($query)) { ?>   
       
        <tr>
            <td><?php echo $row['id_sp'] ?></td>
            <td><p><?php echo $row['tensp'] ?></p></td>
            <td><?php echo $row['giasp'] ?></td>
            <td><img src="views/images/<?php echo $row['anhsp'] ?>" alt="" width="60px" height="50px"></td>
            <td><p><?php echo $row['mota'] ?></p></td>
            <td><a href="?mod=admin&act=adminEditPro&id_sp=<?php echo $row['id_sp']; ?>">Sửa</a> | <a href="?mod=admin&act=adminDeletePro&id_sp=<?php echo $row['id_sp']; ?>">Xoá</a></td>


        </tr>
        
          
       
       
       <?php } ?>
       

    </tbody>

</table>

<?php include 'v_page_adminFooter.php'; ?>