@extends('statistics::layouts.master')

@section('content')
    <h1>Statistics</h1>

    <h2>Sales Agent</h2>

    <table>
        <tr>
            <td>No sales:</td>
            <td>Total sales:</td>
        </tr>        
        <tr>
            <td>{{ $noSales ?? 0 }}</td>
            <td>{{ $totalSales ?? 0 }}</td>
        </tr>
    </table>
@endsection
