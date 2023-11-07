<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/67ff6e11b9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/detailProduct.css') }}">
</head>

<body>
    <div class="container pt-5">
        <div class="row">
            <div class="col-3 imagesProduct">
                <img src="/../images/img1.png" alt="">
                <img src="/../images/img2.png" alt="">
                <img src="/../images/img3.png" alt="">
            </div>
            <div class="col-5 imagesProductZoom">
                <img src="/../images/img1.png" style="width:100%;height:auto" alt="">
            </div>
            <div class="col-4 detail">
                <h4>Cặp nhẫn cưới Eternity NCC0001 </h4>
                <h4 style="color:#BD8A70;padding-top:10px">777</h4>
                <div class="row">
                    <div class="col col_left text-start">
                        <p>Mã Sản Phẩm</p>
                        <p>Kiểu Dáng</p>
                        <p>Chất liệu</p>
                        <p>Màu Kim Loại</p>
                        <p>Đá Tấm</p>
                        <p class="pt-3">Ni Tay Nam</p>
                        <p>Ni Tay Nữ</p>
                        <a href="">Tư Vấn Ngay</a> <span><img src="/../images/like.png" alt="" class="ps-3 pb-1"></span>
                    </div>
                    <div class="col col_right text-end">
                        <p>ncc</p>
                        <p>eter</p>
                    </div>
                </div>

            </div>
            <div class="description px-5 py-5">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima fuga assumenda nostrum
                voluptatibus culpa, nesciunt in eum accusamus impedit id ex earum numquam vel minus? Numquam dignissimos
                quisquam perspiciatis?
            </div>
        </div>
        <div class="row border-top border-2 pb-4">
            <p style="width:auto;background:#E5BB61;text-align: center;" class="py-1">Đánh Giá (0)</p>
        </div>
        <div class="row border border-2 border-dark pb-4">
            <h5 class="pb-5 pt-3 ps-4">Nhận Xét Sản Phẩm : Cặp nhẫn cưới Eternity NCC0001 ở đậy.</h5>
            <div class="row px-5">
                <div class="col text-start">
                    <p style="background:#D9D9D9;height:50px;width: 200px;padding-top:11px"
                        class="border border-dark bottom-2 text-center">
                        <b>Nhận Xét</b>
                    </p>
                </div>
                <div class="col text-end" style="padding-right:13px">
                    <p style="width:290px;padding:12px;float:right" class="border border-dark bottom-2 text-start">
                        <b class="px-3"> Đánh Giá : </b>
                        <i class="fa-regular fa-star fa-lg"></i>
                        <i class="fa-regular fa-star fa-lg"></i>
                        <i class="fa-regular fa-star fa-lg"></i>
                        <i class="fa-regular fa-star fa-lg"></i>
                        <i class="fa-regular fa-star fa-lg"></i>
                    </p>
                </div>
                <form action="" style="margin-top:-17px">
                    <textarea name="" id="" cols="135" rows="5"></textarea> <br> <br>
                    <button class="btn btn-warning" style="width:200px;padding:10px" type="submit">Gửi</button>

                </form>
            </div>
        </div>
    </div>
</body>

</html>