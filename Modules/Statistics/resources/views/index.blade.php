@extends('statistics::layouts.master')

@section('content')
    <h1>Statistics</h1>

    <h2>Sales Agent</h2>

    <table>
        <tr>
            <td>Agent:</td>
            <td>No sales:</td>
            <td>Total sales:</td>
        </tr>        
        <tr>
            <td>{{ $salesAgent->name ?? '' }}</td>
            <td>{{ $noAgentSales ?? 0 }}</td>
            <td>&pound;{{ $totalAgentSales ?? 0 }}</td>
        </tr>
    </table>
@endsection
