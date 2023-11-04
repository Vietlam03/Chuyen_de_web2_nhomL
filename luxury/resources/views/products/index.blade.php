<div class="container">
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-3 card">
            <h1><a href="{{ route('products.show', $product->product_id) }}" style="color: orange; text-decoration: none;">{{ $product->product_name }}</a></h1>
            <div class="price">Giá: {{ $product->product_price }}</div>
            <div class="quantity">Số lượng: {{ $product->product_quantity }}</div>
        <span class="badge bg-primary">Danh mục:
        @foreach ($product->order_details as $order_detail)
            <a href="{{route('categories.show',$order_detail->produc_id)}}" style="color: white; text-decoration: none;">{{$order_detail->customer_id}}</a>
        @endforeach
        </span>
        </div>
        @endforeach
    </div>
</div>