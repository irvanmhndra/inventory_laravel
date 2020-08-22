<?php

namespace App\Http\Controllers;

use App\Sale;
use App\Customer;
use App\Discount;
use App\Payment;
use App\Product;
use App\SaleDetail;
use App\SaleHistory;
use App\SaleProduct;
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
        $products = Product::all();
        $discounts = Discount::all();
        return \view('sales.create', ['customers' => $customers, 'products' => $products, 'discounts' => $discounts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // \dd($request->all());
        $temp_total = 0;
        $temp_discount = 0;
        $request->validate([
            'product_ids' => 'required',
            'customer_id' => 'required',
            'amounts' => 'required',
            'packaging' => 'required',
            'due_date' => 'required',
            'type' => 'required',
            'status' => 'required',
            'amount_due' => 'required',
            'discount_ids' => 'required',
        ]);

        $sale = Sale::create($request->all());

        // save detail
        foreach ($request->product_ids as $key => $product_id) {
            $product = Product::find($product_id);
            $sub_total = $request->amounts[$key] * $product->price;
            $temp_total += $sub_total;
            SaleDetail::create([
                'sale_id' => $sale->id,
                'product_id' => $product_id,
                'amount' => $request->amounts[$key],
                'total' => $sub_total,
            ]);
        }

        // save discount
        $sale->discounts()->sync($request->discount_ids);

        // save total transaction
        foreach ($request->discount_ids as $discount_id) {
            $discount = Discount::find($discount_id);
            $temp_discount += $discount->amount;
        }
        $disc_price = $temp_total * $temp_discount/100;
        $sale->total = $temp_total - $disc_price;
        $sale->save();

        // save payment record
        Payment::create([
            'sale_id' => $sale->id,
            'amount' => $request->amount_due,
        ]);

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
}
