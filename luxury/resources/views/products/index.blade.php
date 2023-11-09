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
    <div> {{ $products->links() }} </div>
</ul>
@endsection
{{-- <x-home>
    <div class="container">
        <div class="row" style="display: flex;">
            @foreach($products as $product)
            <div class="col-md-3 card" style="border: 1px solid white; margin:30px;padding: 10px;">
            <div class="sale" style="font-weight: 400; color: orange"><b>Bess selling</b></div>
            <div class="image" style="display: block; text-align: center"> <img src="{{ URL::asset('image')}}/{{$product->image}}" style="cursor: pointer;width: 120px;height:120px"></div>
                <h5><a href="{{ route('products.show', $product->id) }}" style="color: black; text-decoration: none;font-weight:100">{{ $product->name }}</a></h5>
                <!-- <div class="name">Tên: {{ $product->name }}</div> -->
                <div class="price" style="text-align: center;">Giá: {{ $product->price }}</div>
                <!-- <div class="description">Mô tả sản phẩm:{{$product->description}}</div>
                <div class="material">Vật liệu: {{ $product->material }}</div>
                <div class="size">Kích thước: {{ $product->size }}</div> -->
            </div>
            @endforeach
        </div>
    </div>
   <div> {{ $products->links() }} </div>
</x-home> --}}
