<x-home>
    <x-cart>
        @foreach ($orders as $order)           
            <tr id="{{ $order->product_id }}">
                <th id="product-name">
                    <button id="remove-product-id" class="remove">x</button>
                    <img src="{{ URL('image/nhan-kim-cuong-nam-18k-vnm2022072751-768x768.jpg') }}" alt="image san pham" class="cart-img">
                    <a href="#" class="text-decoration-none cart-detail-name">ten sp</a>
                </th>
                <th id="product-price" style="line-height: 96px; ">
                    <span class="price">{{ $order->unit_price }}</span> ₫
                </th>
                <th id="product-quality">
                    <div class="quality">
                        <div class="wrapper">
                            <span class="minus">-</span>
                            <span class="num">{{ $order->quality }}</span>
                            <span class="plus">+</span>
                        </div>
                    </div>
                </th>
                <th id="product-subtotal" style="line-height: 96px; ">
                    <span class="sub-total">{{ $order->sub_total }}</span> ₫
                </th>
            </tr>
        @endforeach
    </x-cart>
</x-home>