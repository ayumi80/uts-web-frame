@extends('layouts.app')

@section('content')
<h1>Categories</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $category['name'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
