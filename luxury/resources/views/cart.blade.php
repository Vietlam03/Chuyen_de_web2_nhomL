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
            <div class="col-md-6">
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
                                <a href="#">ten sp</a>
                            </th>
                            <th style="line-height: 96px;">gia</th>
                            <th style="line-height: 96px;">so luong</th>
                            <th style="line-height: 96px;">tam tinh</th>
                        </tr>
                        <tr>
                            <th>
                                <button>← TIẾP TỤC XEM SẢN PHẨM</button>
                                <button>CẬP NHẬT GIỎ HÀNG</button>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>
</div>