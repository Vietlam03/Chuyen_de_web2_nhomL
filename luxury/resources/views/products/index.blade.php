<div class="container">
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-3 card">
            <h1><a href="{{ route('products.show', $product->id) }}" style="color: orange; text-decoration: none;">{{ $product->product_name }}</a></h1>
            <div class="price">Giá: {{ $product->product_price }}</div>
            <div class="image">Ảnh: {{ $product->product_image }}</div>
            <div class="description">Mô tả: {{ $product->product_description }}</div>
            <div class="material">Chất liệu: {{ $product->product_material }}</div>
            <div class="size">Kích thước: {{ $product->product_size }}</div>
        <span class="badge bg-primary">Order:
        @foreach ($product->orders as $order)
            <a href="#" style="text-decoration: none;">{{$order->order_date}}</a>
        @endforeach
        </span>
        <span class="badge bg-primary">Danh mục:
            @foreach ($product->categories as $category)
                <a href="#" style="text-decoration: none;">{{$category->category_name}}</a>
            @endforeach
        </span>
        </div>
        @endforeach
    </div>
</div>