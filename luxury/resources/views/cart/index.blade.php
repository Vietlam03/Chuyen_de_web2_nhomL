<x-home>
    <x-cart>
        <?php $orderDetails = DB::table('order_product')->get() ?>
        @foreach ($orders as $order)           
            @foreach ($order->products as $product)
            <tr id="{{ $product->id }}">
                <th id="product-name">
                    <button id="remove-product-id" class="remove">x</button>
                    <img src="{{ URL('image/nhan-kim-cuong-nam-18k-vnm2022072751-768x768.jpg') }}" alt="image san pham" class="cart-img">
                    <a href="#" class="text-decoration-none cart-detail-name">{{ $product->product_name }}</a>
                </th>
                <th id="product-price" style="line-height: 96px; ">
                    <span class="price">{{ $product->product_price }}</span> ₫
                </th>
                <th id="product-quality">
                    <div class="quality">
                        <div class="wrapper">
                            <span class="minus">-</span>
                            @foreach ($orderDetails as $orderdetail)
                                @if ($orderdetail->product_id == $product->id)
                                    <span class="num">{{ $orderdetail->quality }}</span>
                                @endif
                            @endforeach
                            <span class="plus">+</span>
                        </div>
                    </div>
                </th>
                <th id="product-subtotal" style="line-height: 96px; ">
                    <span class="sub-total">{{ $order->sub_total }}</span> ₫
                </th>
            </tr>
            @endforeach
        @endforeach
    </x-cart>
</x-home>