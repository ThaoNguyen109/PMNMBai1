@extends('layout.admin')

@section('content')
<div class="container-fluid">

    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Sửa danh mục</h3>
        </div>

        <form action="/admin/categories/{{ $category->id }}/update" method="POST">
            @csrf

            <div class="card-body">

                <!-- Tên danh mục -->
                <div class="form-group">
                    <label>Tên danh mục</label>
                    <input type="text" name="name" class="form-control"
                           value="{{ old('name', $category->name) }}" required>

                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Mô tả -->
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea name="description" class="form-control" rows="3">
{{ old('description', $category->description) }}</textarea>
                </div>

                <!-- Hình ảnh -->
                <div class="form-group">
                    <label>Hình ảnh (URL)</label>
                    <input type="text" name="image" class="form-control"
                           value="{{ old('image', $category->image) }}">
                </div>

                <!-- Danh mục cha -->
                <div class="form-group">
                    <label>Danh mục cha</label>
                    <select name="parent_id" class="form-control">
                        <option value="">-- Danh mục gốc --</option>
                        @foreach($categories as $parent)
                            <option value="{{ $parent->id }}"
                                {{ old('parent_id', $category->parent_id) == $parent->id ? 'selected' : '' }}>
                                {{ $parent->name }}
                            </option>
                        @endforeach
                    </select>

                    @error('parent_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Trạng thái -->
                <div class="form-group">
                    <div class="form-check">
                        <input type="hidden" name="is_active" value="0">
                        <input class="form-check-input" type="checkbox" name="is_active" value="1"
                            {{ old('is_active', $category->is_active) ? 'checked' : '' }}>
                        <label class="form-check-label">
                            Hoạt động
                        </label>
                    </div>
                </div>

            </div>

            <!-- Footer -->
            <div class="card-footer d-flex justify-content-between">
                <a href="/admin/categories" class="btn btn-secondary">
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