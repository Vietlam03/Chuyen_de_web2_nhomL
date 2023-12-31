<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="option col-md-12">
                    <p>
                    <div>
                        <a id="toggler" class="visible-xs" href="#toggle">
                            <img src="img/LogoAdmin.png" alt="">
                        </a>
                    </div>
                    <div class="logo"><a href="/">Luxury Administrator</a></div>
                    <div class="welcome">
                        <li class="WAdmin">Chào mừng <strong>admin</strong></li>
                        <li><a href=""><span>Thay đổi mật khẩu</span></a></li>
                        <li><a href=""><img class="img-fluid" src="img/Thoat.png" alt=""><span>Thoát</span></a></li>
                    </div>
                    </p>

                </div>
            </div>
        </div>


    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div id="menu">
                    <ul id="sidebar">
                        <li> <a href=""> <span> Thống kê </span> </a> </li>
                        <li> <a href=""> <span> Thêm mã giảm giá </span> </a> </li>
                        <li> <a href=""> <span> Lịch sử hàng hóa </span> </a> </li>
                        <li> <a href=""> <span> Sản phẩm </span> </a> </li>
                        <li> <a href=""> <span> Khách hàng </span> </a> </li>
                        <li> <a href=""> <span> Danh mục sản phẩm </span> </a> </li>
                    </ul>
                    <div id="sidebar-collapse"><i class="icon-double-angle-left"></i></div>
                </div>
            </div>
            <div class="col-md-9">
                <div id="body">
                    <div id="content">
                      <div class="status">
                         <div class="panelWeb">
                          Thông tin Website
                         </div>
                         <div class="panel-body">
                          <dl class="horizontal">
                              <p><b>Người dùng :</b> admin</p> 
                              <p><span><b>Trạng thái :</b> Đang hoạt động</span></p>
                          </dl>
                         </div>
                      </div>
                       <div class="row">
                        <div class="col-md-6">
                          <div class="panel">
                            <div class="panelTK">
                              Thống kê thông tin
                            </div>
                            
                              <li class="list-item">
                                Tổng số bài viết
                                <span>123</span>
                              </li>
                              <li class="list-item">
                                Tổng số danh mục
                                <span>123</span>
                              </li>
                              <li class="list-item">
                                Tổng số menu
                                <span>123</span>
                              </li>
                              <li class="list-item">
                                  -
                                <span>-</span>
                              </li>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="panel ">
                            <div class="panelTK">
                              Thống kê người dùng
                            </div>
                            
                              <li class="list-item">
                                Tổng số quản trị viên
                                <span>123</span>
                              </li>
                              <li class="list-item">
                                Tổng số nhân viên 
                                <span>123</span>
                              </li>
                              <li class="list-item">
                                Tổng số thành viên
                                <span>123</span>
                              </li>
                              <li class="list-item">
                                Tổng số khách hàng
                                <span>123</span>
                              </li>
                           
                          </div>
                        </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer>
    </footer>
</body>

</html>