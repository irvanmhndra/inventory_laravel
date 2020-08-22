<?php

function dateFormat($date)
{
    return \Carbon\Carbon::createFromTimestamp($date)->format('d-m-Y');
}

function syncStock($product_id)
{
    $product = App\Product::find($product_id);
    $stock_in = $product->purchases->sum('quantity');
    $stock_out = $product->sales->sum('amount');
    $product->stock = $stock_in - $stock_out;
    $product->save();
}
