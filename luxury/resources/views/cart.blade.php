{{-- <x-test>
    <div class="">123</div>
</x-test>

@extends('layout.test'); --}}

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-7 border border-2 border-start-0 border-top-0 border-bottom-0">
                {{-- Cart detail --}}
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
                        <tr>
                            <th>
                                <button class="remove">x</button>
                                <img src="{{ URL('image/nhan-kim-cuong-nam-18k-vnm2022072751-768x768.jpg') }}" alt="image san pham" class="cart-img">
                                <a href="#" class="text-decoration-none cart-detail-name">ten sp</a>
                            </th>
                            <th style="line-height: 96px;">49.617.000 ₫</th>
                            <th>
                                <div class="quality">
                                    <div class="wrapper">
                                        <span class="minus">-</span>
                                        <span class="num">1</span>
                                        <span class="plus">+</span>
                                    </div>
                                </div>
                            </th>
                            <th style="line-height: 96px;">49.617.000 ₫</th>
                        </tr>
                        <tr class="border-bottom-0 border-white">
                            <th>
                                <a class="btn btn-view">← TIẾP TỤC XEM SẢN PHẨM</a>
                                <a class="btn btn-update">CẬP NHẬT GIỎ HÀNG</a>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-5">
                <div class="border border-2 payment-title">
                    Cộng giỏ hàng
                </div>
                <table class="table">
                    <tr>
                        <td>tạm tính</td>
                        <td class="text-end fw-bold">49.617.000 ₫</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
