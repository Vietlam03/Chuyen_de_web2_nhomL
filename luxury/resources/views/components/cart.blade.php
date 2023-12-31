<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<div class="content">
    <div class="container">
        <div class="row">
            {{-- Cart detail --}}
            <div class="col-md-7 border border-2 border-start-0 border-top-0 border-bottom-0">
                {{ $slot }}
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
                            <span class="sub-total-pay">0</span> ₫
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
                            <span class="sub-total-pay">0</span> ₫
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