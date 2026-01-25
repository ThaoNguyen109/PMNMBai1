<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <a href="/product/add">Add Product</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>Price</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product['id']}} </td>
                <td>{{ $product['name']}} </td>
                <td>{{ $product['price']}} </td>
            </tr>
        @endforeach
    </table>
        
</body>
</html>