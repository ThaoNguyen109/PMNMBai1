@extends('layout.admin')
@section('content')

<table border="1" class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Sale Price</th>
        <th>Stock</th>
        <th>Image</th>
        <th>Status</th>
        <th>Xóa</th>
        <th>Action</th>
    </tr>

    @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>

            <td>
                {{ $product->category->name ?? 'Không có' }}
            </td>

            <td>{{ $product->price }}</td>
            <td>{{ $product->sale_price ?? '—' }}</td>
            <td>{{ $product->stock }}</td>

            <td>
                @if ($product->image)
                    <img src="{{ asset('images/'.$product->image) }}" width="80">
                @else
                    Không có
                @endif
            </td>

            <td>
                {{ $product->is_active ? 'Hiển thị' : 'Ẩn' }}
            </td>

            <td>
                {{ $product->is_delete ? 'Đã xóa' : 'Chưa xóa' }}
            </td>

            <td>
                <form action="/admin/products/{{ $product->id }}/delete" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Xóa</button>
                </form>
                <a href="/admin/products/{{ $product->id }}/edit" class="btn btn-primary">Sửa</a>
            </td>
        </tr>
    @endforeach
</table>

@endsection