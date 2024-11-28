<?php include 'v_page_adminHeader.php'; ?>
<?php
require_once "models/connectdb.php";
$sql = "SELECT * FROM danhmuc order by id_dm,tendm,anhdm";
$query = mysqli_query($conn,$sql);

?>



<h1>QUẢN LÝ DANH MỤC</h1>
<a href="?mod=admin&act=adminAddCate"><button class="btn-button btn btn-primary">Thêm Danh Mục</button></a>
<table class="table">
<thead>
   <tr>
            <th>ID</th>
            <th>Tên Danh Mục</th>
            <th>Ảnh</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>


    <?php

    while ($row = mysqli_fetch_assoc($query)) { ?>   
       
        <tr>
        <tr>
            <td><?php echo $row['id_dm'] ?></td>
            <td><p><?php echo $row['tendm'] ?></p></td>
            <td><img src="views/images/<?php echo $row['anhdm'] ?>" alt="" width="60px" height="50px"></td>
            <td><a href="?mod=admin&act=adminEditCate&id_dm=<?php echo $row['id_dm'];?>">Sửa</a> | <a href="?mod=admin&act=adminDeleteCate&id_dm=<?php echo $row['id_dm'];?>">Xoá</a></td>
        </tr>   
       
       <?php } ?>
        
        

    </tbody>


</table>

<?php include 'v_page_adminFooter.php'; ?>