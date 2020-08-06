<?php

namespace App\Http\Controllers;

use App\Sale;
use App\Customer;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sale::paginate(10);

        return \view('sales.index', ['sales' => $sales]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return \view('sales.create', ['customers' => $customers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required',
            'total' => 'required',
            'packaging' => 'required',
            'due_date' => 'required',
            'type' => 'required',
            'status' => 'required'
        ]);

        Sale::create($request->all());
        return \redirect('/sales');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale  $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale  $sale)
    {
        $customers = Customer::all();
        return \view('sales.edit', ['customers' => $customers, 'sale' => $sale]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale  $sale)
    {
        $sale->update($request->all());
        return \redirect('/sales');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sale = Sale::find($id);
        $sale->delete();
        return \redirect('sales');
    }

    public function print($id)
    {
        $sale = Sale::find($id);
        return \view('sales.draft', ['sale' => $sale]);
    }
}
