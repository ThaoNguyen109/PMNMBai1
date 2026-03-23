@extends('layout.admin')

@section('content')
<h1>Danh sách danh mục</h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Tên danh mục</th>
            <th>Mô tả</th>
            <th>Danh mục cha</th>
            <th>Hình ảnh</th>
            <th>Hoạt động</th>
            <th>Xóa</th>
            <th width="120">Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>

                <td>
                    {{ $category->parent_id }}
                </td>

                <td>
                    @if ($category->image)
                        <img src="{{ asset('storage/' . $category->image) }}"
                             alt="{{ $category->name }}" width="50">
                    @else
                        No Image
                    @endif
                </td>

                <td>
                    {{ $category->is_active ? 'Active' : 'Inactive' }}
                </td>
                <td> {{ $category->is_delete ? 'Đã xóa' : 'Chưa xóa' }} </td>

                <td>
                    <a href="/admin/categories/{{$category->id}}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="/admin/categories/{{$category->id}}/delete" 
                        method="POST" 
                        style="display:inline;">
                        @csrf
                        <button type="submit" 
                                class="btn btn-sm btn-danger"
                                onclick="return confirm('Xóa danh mục này?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
