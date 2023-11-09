@extends('layouts.app')

@section('content')
<a style="margin-top: 20px" href="{{ url('admin/create') }}" class="btn btn-primary">Thêm Sản Phẩm</a>
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