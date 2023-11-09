<?php 
session_start(); 
$id = '';
if(!empty($_SESSION['id'])) {
    $id = $_SESSION['id'];
}
?>
<x-home>
    <x-cart>
        <?php $orderDetails = DB::table('order_product')->get() ?>
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
                @foreach ($orders as $order)
                    @if ($order->customer_id == $id)
                        @if ($order->order_status == 0)
                            @foreach ($order->products as $product)
                            <tr class="products" id="{{ $product->id }}">
                                <th id="product-name">
                                    <form action="{{ url('/order/'.$order->id)}}" method="POST" class="d-inline-block">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" value="{{ $product->id }}" id="product_id" name="product_id">
                                        <button onclick="return confirm('Bạn có muốn xóa hay không?')" type="submit" id="remove-product-id" class="remove">x</button>
                                    </form>
                                    <img src="{{ URL('image/nhan-kim-cuong-nam-18k-vnm2022072751-768x768.jpg') }}" alt="image san pham" class="cart-img">
                                    <a href="{{ route('products.show', $product->id) }}" class="text-decoration-none cart-detail-name">{{ $product->product_name }}</a>
                                </th>
                                <th id="product-price" style="line-height: 96px; ">
                                    <span class="price">{{ $product->product_price }}</span> ₫
                                </th>
                                <th id="product-quality">
                                    <div class="quality">
                                        <div class="wrapper">
                                            <span class="minus">-</span>
                                            @foreach ($orderDetails as $orderdetail)
                                                @if ($orderdetail->product_id == $product->id && $orderdetail->order_id == $order->id)
                                                    <span class="num">{{ $orderdetail->quality }}</span>
                                                @endif
                                            @endforeach
                                            <span class="plus">+</span>
                                        </div>
                                    </div>
                                </th>
                                <th id="product-subtotal" style="line-height: 96px; ">
                                    @foreach ($orderDetails as $orderdetail)
                                        @if ($orderdetail->product_id == $product->id && $orderdetail->order_id == $order->id)
                                            <?php
                                                $subtotal = $orderdetail->quality * $product->product_price
                                            ?>
                                            <span class="sub-total">{{ $subtotal }}</span> ₫
                                        @endif
                                    @endforeach
                                </th>
                            </tr>
                            @endforeach
                        @endif 
                    @endif     
                @endforeach
            </tbody>
        </table>
        <div class="border-bottom-0 border-white">
            <a href="{{ url('trangchu') }}" class="btn btn-view">← TIẾP TỤC XEM SẢN PHẨM</a>
            <a href="#" class="btn btn-update">CẬP NHẬT GIỎ HÀNG</a>
        </div>
        
    </x-cart>
</x-home>