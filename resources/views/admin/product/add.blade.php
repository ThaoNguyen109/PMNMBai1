@extends('layout.admin')

@section('content')
<div class="container-fluid">

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm sản phẩm</h3>
        </div>

        <form action="/admin/products/store" method="POST">
            @csrf

            <div class="card-body">

                <!-- Name -->
                <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <input type="text" name="name" class="form-control"
                        placeholder="Nhập tên sản phẩm"
                        value="{{ old('name') }}">

                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Price -->
                <div class="form-group">
                    <label>Giá</label>
                    <input type="number" name="price" class="form-control"
                        placeholder="Nhập giá"
                        value="{{ old('price') }}">
                </div>
                @error('price')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

                <!-- Sale Price -->
                <div class="form-group">
                    <label>Giá khuyến mãi</label>
                    <input type="number" name="sale_price" class="form-control"
                        placeholder="Nhập giá khuyến mãi"
                        value="{{ old('sale_price') }}">
                </div>
                @error('sale_price')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

                <!-- Stock -->
                <div class="form-group">
                    <label>Số lượng</label>
                    <input type="number" name="stock" class="form-control"
                        placeholder="Nhập số lượng"
                        value="{{ old('stock') }}">
                </div>
                @error('stock')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

                <!-- Image -->
                <div class="form-group">
                    <label>Hình ảnh (URL)</label>
                    <input type="text" name="image" class="form-control"
                        placeholder="Nhập link ảnh"
                        value="{{ old('image') }}">
                </div>

                <!-- Description -->
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea name="description" class="form-control" rows="3"
                        placeholder="Nhập mô tả">{{ old('description') }}</textarea>
                </div>

                <!-- Category -->
                <div class="form-group">
                    <label>Danh mục</label>
                    <select name="category_id" class="form-control">
                        <option value="">-- Chọn danh mục --</option>

                        @foreach($categories as $cate)
                            <option value="{{ $cate->id }}"
                                {{ old('category_id') == $cate->id ? 'selected' : '' }}>
                                {{ $cate->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- is_active -->
                <div class="form-group">
                    <div class="form-check">
                        <input type="hidden" name="is_active" value="0">
                        <input class="form-check-input" type="checkbox" name="is_active" value="1" checked>
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

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Thêm sản phẩm
                </button>
            </div>

        </form>
    </div>

</div>
@endsection