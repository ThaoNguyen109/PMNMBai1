@extends('layout.admin')

@section('content')
<div class="container-fluid">

    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Sửa sản phẩm</h3>
        </div>

        <form action="/admin/products/{{ $product->id }}/update" method="POST">
            @csrf

            <div class="card-body">

                <!-- Name -->
                <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <input type="text" name="name" class="form-control"
                        placeholder="Nhập tên sản phẩm"
                        value="{{ old('name', $product->name) }}">
                </div>
                @error('name')
                    <div style="color:red">{{ $message }}</div>
                @enderror

                <!-- Price -->
                <div class="form-group">
                    <label>Giá</label>
                    <input type="number" name="price" class="form-control"
                        placeholder="Nhập giá"
                        value="{{ old('price', $product->price) }}">
                </div>
                @error('price')
                    <div style="color:red">{{ $message }}</div>
                @enderror


                <!-- Sale Price -->
                <div class="form-group">
                    <label>Giá khuyến mãi</label>
                    <input type="number" name="sale_price" class="form-control"
                        placeholder="Nhập giá khuyến mãi"
                        value="{{ old('sale_price', $product->sale_price) }}">
                </div>
                @error('sale_price')
                    <div style="color:red">{{ $message }}</div>
                @enderror

                <!-- Stock -->
                <div class="form-group">
                    <label>Số lượng</label>
                    <input type="number" name="stock" class="form-control"
                        placeholder="Nhập số lượng"
                        value="{{ old('stock', $product->stock) }}">
                </div>
                @error('stock')
                    <div style="color:red">{{ $message }}</div>
                @enderror

                <!-- Image -->
                <div class="form-group">
                    <label>Hình ảnh (URL)</label>
                    <input type="text" name="image" class="form-control"
                        placeholder="Nhập link ảnh"
                        value="{{ old('image', $product->image) }}">
                </div>

                <!-- Description -->
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea name="description" class="form-control" rows="3"
                        placeholder="Nhập mô tả">{{ old('description', $product->description) }}</textarea>
                </div>

                <!-- Category -->
                <div class="form-group">
                    <label>Danh mục</label>
                    <select name="category_id" class="form-control">
                        <option value="">-- Chọn danh mục --</option>

                        @foreach($categories as $cate)
                            <option value="{{ $cate->id }}"
                                {{ old('category_id', $product->category_id) == $cate->id ? 'selected' : '' }}>
                                {{ $cate->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- is_active -->
                <div class="form-group">
                    <div class="form-check">
                        <input type="hidden" name="is_active" value="0">
                        <input class="form-check-input" type="checkbox" name="is_active" value="1"
                            {{ old('is_active', $product->is_active) ? 'checked' : '' }}>
                        <label class="form-check-label">
                            Hoạt động
                        </label>
                    </div>
                </div>

            </div>

            <!-- Footer -->
            <div class="card-footer d-flex justify-content-between">
                <a href="/admin/products" class="btn btn-secondary">
                    Quay lại
                </a>

                <button type="submit" class="btn btn-warning">
                    <i class="fas fa-edit"></i> Cập nhật
                </button>
            </div>

        </form>
    </div>

</div>
@endsection
