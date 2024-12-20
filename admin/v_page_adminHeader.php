<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- icon boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
</head>

<body>

    <div class="row">
        <div class="col-md-2 bg-light text-black p-4 ">
            <a class="text-decoration-none text-black" href="admin.php"><img src="./views/images/Logo_GS2.png" alt="" width="100%"></a>
            <hr>
            <p><i class="bi bi-tag-fill me-2"></i><a class="text-decoration-none text-black"
                    href="?mod=admin&act=adminCate"> Quản lý
                    danh mục</a></p>
            <p><i class="bi bi-box-seam me-2"></i><a class="text-decoration-none text-black"
                    href="?mod=admin&act=adminPro"> Quản lý
                    sản phẩm</a></p>
            <!-- <p><i class="bi bi-people-fill me-2"></i><a class="text-decoration-none text-black" href=""> Quản lý
                    người dùng</a></p> -->
            <p><i class="bi bi-cart-fill me-2"></i><a class="text-decoration-none text-black" href="?mod=admin&act=adminBill"> Quản lý đơn
                    hàng</a></p>
            <!-- <p><i class="bi bi-chat-left-text-fill me-2"></i><a class="text-decoration-none text-black"
                    href="?mod=admin&act=adminComment"> Quản lý bình luận</a></p> -->
            <hr>
            <div class="text-center">
                <a href="index.php?mod=users&act=login" class="btn btn-primary">Đăng xuất</a>
            </div>
        </div>
        <div class="col-md-10 p-0">
            <div class="shadow bg-primary text-white d-flex justify-content-between align-content-center  p-3 pb-1">
                <p>TRANG QUẢN TRỊ GOOD</p>
                <div><span>Admin</span><img class="rounded m-1 border border-1 border-white" width="50px" height="50px"
                        src="./views/images/adminGS.png"
                        alt=""></div>
            </div>