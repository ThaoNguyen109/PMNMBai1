
<h2>Thêm danh mục</h2>

<form action="/admin/categories/store" method="POST">
    @csrf

    <div>
        <label>Tên danh mục</label>
        <input type="text" name="name" required>
    </div>

    <div>
        <label>Mô tả</label>
        <input type="text" name="description">
    </div>

    <div>
        <label>Danh mục cha</label>
        <select name="parent_id">
            <option value="">-- Không có (Danh mục gốc) --</option>
            @foreach($categories as $parent)
                <option value="{{ $parent->id }}">
                    {{ $parent->name }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit">Thêm danh mục</button>
</form>
