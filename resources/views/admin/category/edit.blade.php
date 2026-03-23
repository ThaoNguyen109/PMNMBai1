<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/admin/categories/{{ $category->id }}/update" method="post">
    @csrf

    <input type="text" name="name"
           placeholder="Category Name"
           value="{{ $category->name }}">

    <input type="text" name="description"
           placeholder="Category Description"
           value="{{ $category->description }}">

    <input type="text" name="image"
           placeholder="Category Image"
           value="{{ $category->image }}">

    <input type="number" name="parent_id"
           placeholder="Parent Category ID"
           value="{{ $category->parent_id }}">

    <button type="submit">Update Category</button>
</form>

</body>
</html>