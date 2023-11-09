@extends('layouts.app')

@section('content')
<form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-8">
            <div class= "form-group">
                <label for="name">Tên sản phẩm</label>
                <input class ="form-control" name="name" id="name" placeholder="Input name" >
            </div>
            <div class="form-group">
                <label for="description">Mô tả sản phẩm</label>
                <textarea class ="form-control" name="description" id="description" cols="30" rows="10" placeholder="Input description" ></textarea>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="material">Danh Mục</label>
                <select class ="form-control" name="material">
                    <option value="">Chọn danh mục sản phẩm</option>
                     @foreach ($catefories as $category)
                    <option value="{{$category->category_id}}">{{ $category->category_name}}</option>
                     @endforeach
               
                </select>
            </div>
        <div class="form-group">
                <label for="price">Giá sản phẩm</label>
                <input class ="form-control" name="price" id="price" placeholder="Input price" >
            </div>
            <div class="form-group">
                <label for="material">Vật liệu</label>
                <select class ="form-control" name="material">
                    <option value="">Chọn vật liệu sản phẩm</option>
                    <option value="14k">14k</option>
                    <option value="18k">18k</option>
                    <option value="Platinum">Platinum</option>
                </select>
            </div>
            <div class="form-group">
                <label for="size">Kích thước</label>
                <input class ="form-control" name="size" id="size" placeholder="Input size">
            </div>
            <div class="form-group">
                <label for="image">Ảnh sản phẩm</label>
                <input class ="form-control" name="image" type="file" id="image" placeholder="Input price">
            </div>
            
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection