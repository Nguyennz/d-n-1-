<?php 
    require_once "models/connectdb.php";
   if (isset($_GET['id_dm'])) {
    $id_dm=$_GET['id_dm'];
    $sql="DELETE FROM  danhmuc WHERE id_dm='$id_dm'";

        mysqli_query($conn,$sql);

        header('location:/Websitebangiay/MVC/admin.php?mod=admin&act=adminCate');
    }
    
?>