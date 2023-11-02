<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<div class="content">
    <div class="container">
        <div class="row">
            {{-- Cart detail --}}
            <div class="col-md-7 border border-2 border-start-0 border-top-0 border-bottom-0">
                <div class="loader d-none">Loadding...</div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Tạm tính</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="product-id">
                            <th id="product-name">
                                <button id="remove-product-id" class="remove">x</button>
                                <img src="{{ URL('image/nhan-kim-cuong-nam-18k-vnm2022072751-768x768.jpg') }}" alt="image san pham" class="cart-img">
                                <a href="#" class="text-decoration-none cart-detail-name">ten sp</a>
                            </th>
                            <th id="product-price" style="line-height: 96px; ">
                                <span class="price">49.617.000</span> ₫
                            </th>
                            <th id="product-quality">
                                <div class="quality">
                                    <div class="wrapper">
                                        <span class="minus">-</span>
                                        <span class="num">1</span>
                                        <span class="plus">+</span>
                                    </div>
                                </div>
                            </th>
                            <th id="product-subtotal" style="line-height: 96px; ">
                                <span class="sub-total">49.617.000</span> ₫
                            </th>
                        </tr>
                    </tbody>
                </table>
                <div class="border-bottom-0 border-white">
                    <a class="btn btn-view">← TIẾP TỤC XEM SẢN PHẨM</a>
                    <a class="btn btn-update">CẬP NHẬT GIỎ HÀNG</a>
                </div>
            </div>
            {{-- Payment --}}
            <div class="col-md-5">
                <div class="loader d-none">Loadding...</div>
                <div class="border border-2 payment-title">
                    Cộng giỏ hàng
                </div>
                <table class="table">
                    <tr>
                        <td>Tạm tính</td>
                        <th class="text-end">
                            <span class="sub-total">49.617.000</span> ₫
                        </th>
                    </tr>
                    <tr>
                        <td>Giao hàng</td>
                        <td class="text-end">
                            <p>Nhập địa chỉ của bạn để xem các tùy chọn vận chuyển</p>
                            <a href="#" style="color: #D3B57A" class="text-decoration-none">Tính phí giao hàng</a>
                        </td>
                    </tr>
                    <tr class="border-3 border-start-0 border-end-0 border-top-0">
                        <td>Tổng</td>
                        <th class="text-end">
                            <span class="sub-total">49.617.000</span> ₫
                        </th>
                    </tr>
                    <tr class="border-3 border-start-0 border-end-0 border-top-0">
                        <td colspan="2">
                            <a href="#" class="btn btn-pay" style="width: 100%; margin-top: 5px">Tiến hành thanh toán</a>
                            <div style="padding-top: 12px">
                                <img src="{{ URL('image/eddee41ecee719b940f6.jpg') }}" alt="" style="width: 25px; height: 25px;">
                                <span>Phiếu ưu đãi</span>
                            </div>
                        </td>
                    </tr>
                </table>
                <input type="text" class="form-control border-3" placeholder="Mã ưu đãi" maxlength="6">
                <button type="submit" class="btn text-center btn-promotion">Áp dụng</button>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
{{-- <script src="{{ asset('js/ajax.js') }}"></script> --}}