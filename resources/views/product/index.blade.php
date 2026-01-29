<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/product/add">Add Product</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>Price</th>
            <th>stock</th>
            <th>edit</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product['id']}} </td>
                <td>{{ $product['name']}} </td>
                <td>{{ $product['price']}} </td>
                <td>{{ $product['stock']}} </td>
                <td></td>
            </tr>
        @endforeach
    </table>
        
</body>
</html>