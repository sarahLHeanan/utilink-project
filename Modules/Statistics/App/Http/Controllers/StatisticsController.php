<?php

namespace Modules\Statistics\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Statistics\App\Models\SalesAgent;
use App\Models\Sales;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StatisticsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get no sales
        $salesAgent = SalesAgent::find(1);
        $noAgentSales = $salesAgent->sales;
        //get total agent sales
        $totalAgentSales = $salesAgent->totalSales();

        return view('statistics::index', [
            'salesAgent' => $salesAgent,
            'noAgentSales' => $noAgentSales->count(),
            'totalAgentSales' => $totalAgentSales,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('statistics::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('statistics::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('statistics::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
