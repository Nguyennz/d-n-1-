<?php
require_once "models/connectdb.php";
if (isset($_GET['id_dm'])) {
    $id_dm = $_GET['id_dm'];
    $sql_getSanPham = "SELECT * FROM danhmuc where id_dm=$id_dm LIMIT 1";
    $query_getSanPham = mysqli_query($conn, $sql_getSanPham);
    $row = mysqli_fetch_array($query_getSanPham);
}
if (isset($_POST['submit'])) {
    $tendm = $_POST['tendm'];
    
    if ($tendm == "") {
        echo "Vui lòng nhập đủ tên!<br />";
    }
   
    if ($tendm  != "") {
        $sql_fix = "UPDATE `danhmuc` SET `tendm` = '$tendm' WHERE `danhmuc`.`id_dm` = '$id_dm';";
        mysqli_query($conn, $sql_fix);
        header('location:/Websitebangiay/MVC/admin.php?mod=admin&act=adminCate');
    }
}
?>

<?php include 'v_page_adminHeader.php';?>


<div class="container"> 
    <h1>SỬA DANH MỤC</h1>
    <form action="" method="post" enctype="multipart/form-data">
      Tên danh mục:  <input type="text" id="name" class="form-control" name="tendm" value="<?php echo $row['tendm'] ?>"><br>   
      Ảnh danh mục: <img src="views/images/<?php echo $row['anhdm'] ?>" alt=""> <br> 
      <button type="submit" name="submit" class="btn btn-primary">Cập Nhật</button>

    </form>
</div>





<?php include 'v_page_adminFooter.php'; ?>
