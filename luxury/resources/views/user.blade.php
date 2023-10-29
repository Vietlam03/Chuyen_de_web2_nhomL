<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/67ff6e11b9.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col1">
                    <i class="fa-solid fa-location-dot fa-xl"></i>
                    <img src="images/zalo.png" alt="zalo" style="width: 18px; height: 18px;">
                    <i class="fa-solid fa-phone-volume fa-xl">1900 111 999</i>
                </div>
                <div class="col2">
                    <i class="fa-solid fa-cart-shopping fa-xl" style="float: right;">
                        <h4">Giỏ hàng</h4>
                    </i>
                </div>
            </div>
        </div>
    </header>
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="titleLogo"><a href="">
                            <img src="images/Logo.png" alt="" style="width: 150px; height: 170px;">
                    </a></div>

                    <div class="menuUser">
                        <p><br></p>
                        <p><a href=""> Thông tin tài khoản </a></p>
                        <p><a href=""> Mã giảm giá </a></p >
                        <p><a href=""> Lịch sử mua hàng </a></p>
                        <p><img src="images/logout.png" alt=""><a href="" style="color:red"> Đăng xuất </a></p>
                    </div>
                </div>
                <div class="col-9" style="padding-top: 50px;">
                    <div class="title"><a href="">Trang Chủ </a> <span class="px-3"> > <span class="px-3 fs-3"> Thông tin tài khoản</span></span></div>

                    <div class="infoUser">
                        <h3 class="pt-4"><img src="images/user.png" alt=""> <span class="ps-4"> Nguyễn Văn A <span style="padding-left:80px">Mã khách hàng: 123456789</span></span></h3>
                        <div class="row ps-3 pt-4">
                        <div class="col info">
                            <label for="">Username</label>
                            <p class="border border-dark rounded-pill"><i class="fa-solid fa-user fa-xl ps-3"></i> <span class="ps-3 pt-2">nguyenvana03 </span></p>
                            <label for="">Họ tên</label>
                            <p class="border border-dark rounded-pill"><i class="fa-solid fa-user fa-xl ps-3"></i> <span class="ps-3 pt-2">NGUYỄN VĂN A </span></p>
                            <label for="">Số điện thoại</label>
                            <p class="border border-dark rounded-pill"><i class="fa-solid fa-phone-volume fa-lg ps-3"></i> <span class="ps-3 pt-2">0919 191 919 </span></p>
                            <label for="">Địa chỉ</label>
                            <p class="border border-dark rounded-pill"><i class="fa-solid fa-location-dot fa-xl ps-3"></i> <span class="ps-3 pt-2">12/5 Đường Top , Thành phố Thủ Đức </span></p>
                        </div>
                        <div class="col info">
                            <label for="">Password</label>
                            <p class="border border-dark rounded-pill"><i class="fa-solid fa-key fa-xl ps-3"></i> <span class="ps-3 pt-2">*********** </span></p>
                            <label for="">Email</label>
                            <p class="border border-dark rounded-pill"><i class="fa-solid fa-envelope fa-xl ps-3"></i> <span class="ps-3 pt-2">nguyenvana303@gmail.com </span></p>
                            <label for="">Ngày sinh</label>
                            <p class="border border-dark rounded-pill"><i class="fa-solid fa-calendar fa-xl ps-3"></i> <span class="ps-3 pt-2">01/01/2003 </span></p>
                            <label for="">Giới tính</label>
                            <p class="border border-dark rounded-pill"><i class="fa-solid fa-mars-and-venus fa-xl ps-3"></i> <span class="ps-3 pt-2">Nam </span></p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>