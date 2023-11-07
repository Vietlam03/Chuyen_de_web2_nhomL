<header>
    <div class="header1" style="background-color: #dadada;">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <ul class="menu1" style="padding-top:10px">
                        <li>
                            <a href="">
                                <img src="image/map.png" style="cursor: pointer;width: 24px;">
                            </a>
                        </li>
                        <li>
                            <a href="" style="padding-left:4px">
                                <img src="image/zalo.png" style="width: 24px; height: 24px; ">
                            </a>
                        </li>
                        <li>
                            <a href="" style="text-decoration: none; color:black;padding-left:4px">
                                <img src="image/phone.png" style="cursor: pointer;width: 24px; ">
                                <span style="padding-left: 10px;margin-top:20px">1900 232 354 </span>
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="col-6">
                    <ul class="menu2" style="text-align: right;padding-right:50px">
                        <li style="padding-top:10px">
                            <a class="about-us" style="text-decoration: none; color:black;padding-right:4px ; ">
                                <span>About Us</span>
                            </a>
                        </li>
                        <li>
                            <a href="" style="padding-right: 4px;">
                                <img src="image/account.png" style="cursor: pointer;width: 24px;">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="image/GioHang.png" style="cursor: pointer;width: 24px;">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header2">
        <div class="container">
            <div class="row-12">
                <div class="col-12">
                    <ul>
                        <li>
                            <a href="" style="text-decoration: none; color:black">
                                <img src="image/logo.png" style="cursor: pointer;width: 70px;height:70px">
                            </a>
                        </li>
                        <li>
                            <a href="" style="text-decoration: none; color:black; margin-left: 100px">
                                <span>Trang chủ</span>
                            </a>
                        </li>
                        <li>
                            <a href="" style="text-decoration: none; color:black; margin-left: 125px">
                                <span>Nhẫn cưới </span>
                            </a>
                        </li>
                        <li>
                            <a href="" style="text-decoration: none; color:black; margin-left: 125px">
                                <span>Nhẫn cầu hôn</span>
                            </a>
                        </li>
                        <li>
                            <a href="" style="margin-left: 120px;display:flex; padding-top:30px">
                                <img src="image/search.png" style="cursor: pointer;">
                                <input class="form-control me-2" type="search" placeholder="" aria-label="Search" name="keyword" style="margin-top: 20px; height: 20px;">
                            </a>

                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

{{ $slot }}

<footer>
    <div class="footer1" style=" background:#feeeee">
        <div class="tieuDe" style="text-align: center; padding:20px 0px;">
            <span style="border-top: 2px solid black; border-bottom: 2px solid black; display: inline-block; width: 950px; padding: 10px 0px;">Trang
                chu</span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="logo-footer" style="padding-left: 30px;">
                        <img src=" image/logo-footer.png" style="width: 100px;height:100px">
                    </div>
                </div>
                <div class="col-3">
                    <p>Về chúng tôi</p>
                    <span>Câu chuyện luxury</span> <br>
                    <span>Tuyển dụng</span>
                </div>
                <div class="col-3">
                    <p>Liên hệ</p>
                    <li>
                        <a href="" style="text-decoration: none; color:black;padding-left:4px">
                            <img src="image/phone.png" style="cursor: pointer;width: 19px; ">
                            <span style="padding-left: 10px;margin-top:20px">1900 232 354 </span>
                        </a>
                    </li>
                    <li>
                        <a href="" style="text-decoration: none; color:black;padding-left:4px">
                            <img src="image/phone.png" style="cursor: pointer;width: 19px; ">
                            <span style="padding-left: 10px;margin-top:20px">1900 232 354 </span>
                        </a>
                    </li>
                </div>
                <div class="col-3">
                    <p>Hổ trợ</p>
                    <span>Phương thúc thanh toán</span> <br>
                    <span>Bảo mật thông tin</span>
                </div>
                <div class="f4" style="padding-left: 297px;padding-top:20px">
                    <span style="padding-top:20px">KẾT NỐI VỚI LUXURY</span>
                    <li>
                        <a href="" style="text-decoration:none; padding-left: 90px">
                            <img src="image/facebook.png" alt="" style="padding-bottom: 10px;">
                        </a>
                        <a href="" style="text-decoration:none; ">
                            <img src="image/youtube.png" alt="" style="padding-left: 10px;padding-bottom:15px;">
                        </a>
                        <a href="" style="text-decoration:none;">
                            <img src="{{asset('images/instagram.png')}}" alt="" style="padding-left: 10px;padding-bottom:15px;">
                        </a>
                    </li>
                </div>
                <div class="f5">
                    <p style="margin-bottom: 0px;text-align: center;">Công ty Cổ phần Luxury - MST: XXXXXXXXXX - Do
                        Sở kế hoạch và đầu tư TPHCM cấp ngày XX/XX/XXXX</p>
                    <p style="padding-left: 190px;">Trụ sở chính: XX Top Walk, Quận XXX, TPHCM</p>
                </div>
            </div>



        </div>
    </div>
    <div class="footer2" style="padding-top: 40px; background:#eee1bcc7;">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <h3 style="color:#ffc1078f; ">HỖ TRỢ TƯ VẤN</h3>
                </div>
                <div class="col-3">
                    <ul>
                        <li>
                            <form>
                                <input type="text" id="Ten" name="Ten" value="Tên" style="background: #f0e5c452; border: 1px; border-bottom: solid 1px">
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="col-3">
                    <ul>
                        <li>
                        <form>
                                <input type="text" id="Ten" name="Ten" value="Số điện thoại" style="background: #f0e5c452; border: 1px; border-bottom: solid 1px">
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="col-3">
                    <ul>
                        <li>
                            <a class="TuVan" style="padding: 3px 20px;text-decoration: none;color: white;border: 1px solid #c98d93;background: #c98d93;">Tư
                                vấn ngay</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>