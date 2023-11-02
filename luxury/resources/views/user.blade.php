<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                <!-- Logo -->
                <div class="col-3">
                    <div class="titleLogo"><a href="">
                            <img src="images/Logo.png" alt="" style="width: 150px; height: 170px;">
                        </a>
                    </div>
                <!-- Menu User -->
                    <div class="menuUser">
                        <p><br></p>
                        <p><a href=""> Thông tin tài khoản </a></p>
                        <p><a href=""> Mã giảm giá </a></p>
                        <p><a href=""> Lịch sử mua hàng </a></p>
                        <p><img src="images/logout.png" alt=""><a href="" style="color:red"> Đăng xuất </a></p>
                    </div>
                </div>
                <!-- Indexing -->
                <div class="col-9" style="padding-top: 50px;">
                    <div class="title"><a href="">Trang Chủ </a> <span class="px-3"> > <span class="px-3 fs-3"> Thông tin tài khoản</span></span></div>
                <!-- infoUser basic -->
                    <div class="infoUser">
                        <h3 class="pt-4"><img src="images/user.png" alt=""> <span class="ps-4"> Nguyễn Văn A <span style="padding-left:80px">Mã khách hàng: 123456789</span></span></h3>

                        <!-- form info detail -->
                        <form action="" method="post">
                            <div class="row ps-3 pt-4">
                                <div class="col info">
                                    <label for="username">Username</label> <br>
                                    <input type="text" name="username" size="30" maxlength="50" required style="background-image: url(/images/user.png);  background-size:35px 25px;background-position: left center 5px; background-repeat: no-repeat;padding-left:40px" class="border border-dark rounded-pill" value="nguyenvana03"> <br> <br>
                                    <label for="fullname">Họ tên</label> <br>
                                  
                                    <input type="fullname" name="fullname" size="30" maxlength="50" required style="background-image: url(/images/user.png);  background-size:35px 25px;background-position: left center 5px; background-repeat: no-repeat;padding-left:40px" class="border border-dark rounded-pill" value="NGUYỄN VĂN A"><br> <br>
                                    <label for="phone">Số điện thoại</label> <br>
                                    <input type="tel" name="phone" size="30" pattern="\d{10}" required style="background-image: url(/images/phone.png); background-size:45px 25px; background-position: left center 3px; background-repeat: no-repeat;padding-left:40px" class="border border-dark rounded-pill" value="0919191919"> <br> <br>
                                    <label for="address">Địa chỉ</label> <br>
                                    <input type="text" name="address" size="30" style="background-image: url(/images/address.png); background-size:35px 20px; background-position: left 5px; background-repeat: no-repeat;padding-left:40px" class="border border-dark rounded-pill" value="12/5 Đường Top , Thành phố Thủ Đức">
                                </div>

                                <div class="col info">
                                    <label for="password">Password</label> <br>
                                    <input  type="password" name="password" size="30" maxlength="20" required style="background-image: url(/images/pass.png); background-size:25px 25px; background-position: left center 5px; background-repeat: no-repeat;padding-left:40px" class="border border-dark rounded-pill" value="avangnuyen03">  <br> <br>
                                    <label for="email">Email</label> <br>
                                    <input type="email" name="email" size="30" maxlength="50" required style="background-image: url(/images/email.png); background-size:20px 25px; background-position: left center 5px; background-repeat: no-repeat;padding-left:40px" class="border border-dark rounded-pill" value="nguyenvana303@gmail.com"> <br> <br>
                                    <label for="DOB">Ngày sinh</label> <br>
                                    <input type="date" name="DOB" style="width: 317px; height:28px"  class="border border-dark rounded-pill"> <br> <br>
                                    <label for="gender">Giới tính</label> <br>
                                    <select name="gender" style="width: 317px; height:28px"  class="border border-dark rounded-pill" value="nguyenvana03">
                                        <option value="male" >Male</option>
                                        <option value="female">Female</option>
                                        <option value="female">Other</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <input type="submit" name="submit" value="Sửa" style="margin-left: 334px; border-radius:20px;width:100px;border:solid gray 1px">
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>