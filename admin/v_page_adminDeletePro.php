<?php 
    require_once "models/connectdb.php";
   if (isset($_GET['id_sp'])) {
    $id_sp=$_GET['id_sp'];
    $sql="DELETE FROM  sanpham WHERE id_sp='$id_sp'";

        mysqli_query($conn,$sql);

        header('location:/Websitebangiay/MVC/admin.php?mod=admin&act=adminPro');
    }
    
?>