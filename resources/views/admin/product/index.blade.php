@extends('layout.admin')
@section('content')

    <table border="1" class="table table-bordered">
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
@endsection