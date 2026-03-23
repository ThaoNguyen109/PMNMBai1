<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/product/{{$product->id}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Product Name" value = {{$product->name}}>
        <input type="number" name="price" placeholder="Product Price" value = {{$product->price}}>
        <input type="number" name="stock" placeholder="Product Stock" value = {{$product->stock}}>
        <button type="submit">Update Product</button>
    </form>
</body>
</html>