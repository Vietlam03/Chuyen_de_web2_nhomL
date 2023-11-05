<x-test>
    <div class="container">
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-3 card">
                <h1><a href="{{ route('products.show', $product->id) }}" style="color: orange; text-decoration: none;">{{ $product->name }}</a></h1>
                <div class="price">Giá: {{ $product->price }}</div>
                <div class="quantity">Số lượng: {{ $product->quantity }}</div>

            <span class="badge bg-primary">Danh mục:
            @foreach ($product->categories as $category)
                <a href="#" style="color: white; text-decoration: none;">{{$category->name}}</a>
                <a href="#" style="color: white; text-decoration: none;">{{$category->test}}</a>
            @endforeach
            </span>
            </div>
            @endforeach
        </div>
    </div>
</x-test>