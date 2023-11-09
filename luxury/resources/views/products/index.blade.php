<<<<<<< HEAD
@extends('layouts.app')

@section('content')
<a style="margin-top: 20px" href="{{ url('/create') }}" class="btn btn-primary">Thêm Sản Phẩm</a>
<ul>
    <table class="table_i">
        <tr>
            <th></th>
            <th>Ảnh sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Danh mục sản phẩm</th>
            <th>Mô tả sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td></td>
            <td><img class="img_i" src="{{ asset('image-product/'. $product->image) }}" alt="{{ $product->name }}"></td>
            <td>{{ $product->name }}</td>
            <td>đang pt</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td><a style="margin-top: 20px" href="{{ route('products.create') }}" class="btn btn-primary">Sửa</a></td>
            <td><a style="margin-top: 20px" href="{{ route('products.create') }}" class="btn btn-primary">Xóa</a></td>
        </tr>
       
    @endforeach

    </table>
    
</ul>
@endsection
=======
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
>>>>>>> huy/cart
