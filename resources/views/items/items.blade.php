@extends('layouts.app')

@section('content')
<h1>Items</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
        <tr>
            <td>{{ $item['code'] }}</td>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['category'] }}</td>
            <td>{{ number_format($item['price'], 0, ',', '.') }}</td>
            <td>{{ $item['stock'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
