<?php
require_once "models/connectdb.php";
if (isset($_GET['id_sp'])) {
    $id_sp = $_GET['id_sp'];
    $sql_getSanPham = "SELECT * FROM sanpham where id_sp=$id_sp LIMIT 1";
    $query_getSanPham = mysqli_query($conn, $sql_getSanPham);
    $row = mysqli_fetch_array($query_getSanPham);
}
if (isset($_POST['submit'])) {
    $tensp = $_POST['tensp'];
    $mota = $_POST['mota'];
    $giasp = $_POST['giasp'];
    if ($tensp == "") {
        echo "Vui lòng nhập đủ tên!<br />";
    }
    if ($mota == "") {
        echo "Vui lòng nhập đủ Mô Tả!<br />";
    }
    if ($giasp == "") {
        echo "Vui lòng nhập giá bán!<br />";
    }
    if ($tensp != "" && $mota != "" && $giasp != "") {
        $sql_fix = "UPDATE `sanpham` SET `tensp` = '$tensp', `giasp` = '$giasp', `mota` = '$mota' WHERE `sanpham`.`id_sp` = '$id_sp';";
        mysqli_query($conn, $sql_fix);
        header('location:/Websitebangiay/MVC/admin.php?mod=admin&act=adminPro');
    }
}
?>

<?php include 'v_page_adminHeader.php'; ?>


<div class="container">




    <h1>SỬA SẢN PHẨM</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="tensp" class="form-label">Tên sản phẩm: </label>
            <input type="text" class="form-control" id="tensp" name="tensp" value="<?php echo $row['tensp'] ?>">
        </div>
        <div class="mb-3">
            <label for="tensp" class="form-label">Giá sản phẩm: </label>
            <input type="text" class="form-control" id="tensp" name="giasp" value="<?php echo $row['giasp'] ?>">
        </div>
        <div class="mb-3">
            <label for="tensp" class="form-label">Mô tả: </label>
            <input type="text" class="form-control" id="tensp" name="mota" value="<?php echo $row['mota'] ?>">
        </div>
        <div class="mb-3">
            <label for="tensp" class="form-label">Ảnh sản phẩm: </label>
            <img src="views/images/<?php echo $row['anhsp'] ?>" alt="" width="150px" height="150px">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Cập Nhật</button>
        <br>
        <br>
    </form>
</div>





<?php include 'v_page_adminFooter.php'; ?>