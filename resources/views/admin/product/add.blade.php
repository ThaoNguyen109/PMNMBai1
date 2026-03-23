<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/product/store" method="post">
        @csrf
        <input type="text" name="name" placeholder="Product Name">
        <input type="number" name="price" placeholder="Product Price">
        <input type="number" name="stock" placeholder="Product Stock">
        <button type="submit">Add Product</button>
    </form>
</body>
</html>