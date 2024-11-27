@extends('layouts.app')

@section('content')
<h1>Reports</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Category</th>
            <th>Date</th>
            <th>Quantity</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($reports as $report)
        <tr>
            <td>{{ $report['code'] }}</td>
            <td>{{ $report['name'] }}</td>
            <td>{{ $report['category'] }}</td>
            <td>{{ $report['date'] }}</td>
            <td>{{ $report['quantity'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
