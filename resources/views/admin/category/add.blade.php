@extends('layout.admin')

@section('content')
<div class="container-fluid">

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm danh mục</h3>
        </div>

        <form action="/admin/categories/store" method="POST">
            @csrf

            <div class="card-body">

                <!-- Tên danh mục -->
                <div class="form-group">
                    <label>Tên danh mục</label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên danh mục" required>
                </div>

                <!-- Mô tả -->
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea name="description" class="form-control" rows="3" placeholder="Nhập mô tả"></textarea>
                </div>

                <!-- Danh mục cha -->
                <div class="form-group">
                    <label>Danh mục cha</label>
                    <select name="parent_id" class="form-control">
                        <option value="">-- Danh mục gốc --</option>
                        @foreach($categories as $parent)
                            <option value="{{ $parent->id }}">
                                {{ $parent->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Trạng thái -->
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
                <a href="/admin/categories" class="btn btn-secondary">
                    Quay lại
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Thêm danh mục
                </button>
            </div>

        </form>
    </div>

</div>
@endsection