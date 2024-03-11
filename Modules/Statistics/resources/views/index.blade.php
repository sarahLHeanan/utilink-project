@extends('statistics::layouts.master')

@section('content')
    <h1>Statistics</h1>

    <!-- @todo I wanted to include a partial here but can't see it anywhere in the module docs -->
    <h2>Sales Agent</h2>

    @foreach($salesAgents as $agent)
        @if(!empty($agent))
            <table>
                <tr>
                    <td>Agent:</td>
                    <td>No sales:</td>
                    <td>Total sales:</td>
                </tr>        
                <tr>
                    <td>{{ $agent->name ?? '' }}</td>
                    <td>{{ $agent->sales->count() ?? 0 }}</td>
                    <td>&pound;{{ $agent->totalSales() ?? 0 }}</td>
                </tr>
            </table>
        @else
            <p>There are no agents available</p>
        @endif
    @endforeach

@endsection
