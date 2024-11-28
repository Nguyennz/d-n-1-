<?php include 'v_page_adminHeader.php'; ?>
                <!-- trang thêm san phamadmin -->
<?php
$sql_DanhMuc = "SELECT * FROM danhmuc ORDER BY id_dm DESC";
$query_DanhMuc = mysqli_query($conn, $sql_DanhMuc);


if (isset($_POST['submit'])) {
    $tensp = $_POST['tensp'];
    // $anhsp = $_POST['anhsp'];
    $giasp = $_POST['giasp'];
    $mota = $_POST['mota'];
    $anhsp = ''; // Khởi tạo tên ảnh sản phẩm
    if ($_FILES['anhsp']['name']) {
        // Đường dẫn thư mục lưu trữ ảnh
        $target_dir = "views/images/";
        // Tên tệp ảnh sau khi tải lên
        $target_file = $target_dir . basename($_FILES['anhsp']['name']);
        // Di chuyển tệp ảnh vào thư mục lưu trữ
        if (move_uploaded_file($_FILES['anhsp']['tmp_name'], $target_file)) {
            $anhsp = basename($_FILES['anhsp']['name']);
        } else {
            echo "Có lỗi khi tải lên tệp ảnh.";
        }
    }
    $id_dm = $_POST['danhmuc'];

    $sql_add = "INSERT INTO sanpham(tensp,anhsp,giasp,mota,id_dm) VALUES('$tensp','$anhsp','$giasp','$mota','$id_dm')";
    mysqli_query($conn, $sql_add);
    header('location:/Websitebangiay/MVC/admin.php?mod=admin&act=adminPro');
}

?>

<div class="container">
    <h1>THÊM SẢN PHẨM</h1>
    <form action="" method="post" enctype="multipart/form-data">

        <div class="mb-3">
            <label for="tensp" class="form-label">Tên sản phẩm: </label>
            <input type="text" class="form-control" id="tensp" name="tensp">
        </div>

        <div class="mb-3">
            <label for="anhsp" class="form-label">Ảnh sản phẩm: </label>
            <input type="file" class="form-control" id="anhsp" name="anhsp">
        </div>

        <div class="mb-3">
            <label for="giasp" class="form-label">Giá sản phẩm: </label>
            <input type="text" class="form-control" id="giasp" name="giasp">
        </div>

        <div class="mb-3">
            <label for="mota" class="form-label">Mô tả: </label>
            <input type="text" class="form-control" id="mota" name="mota">
        </div>

        <label for="danhmuc" class="form-label">Danh mục: </label>
        <select class="form-select" name="danhmuc" id="danhmuc">
            <option selected>Chọn danh mục</option>
            <?php while ($row = mysqli_fetch_array($query_DanhMuc)) { ?>
                <option value="<?php echo $row['id_dm'] ?>"><?php echo $row['tendm'] ?></option>
            <?php } ?>
        </select>
        <br>
        <button type="submit" name="submit" class="btn btn-primary">Thêm sản phẩm</button>
        <br>
        <br>

       
    </form>
</div>

<?php include 'v_page_adminFooter.php'; ?>