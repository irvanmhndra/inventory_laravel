<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Purchase;
use App\Sizechart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::select('products.*', DB::raw('SUM(purchases.quantity) as stock'))
            ->leftJoin('purchases', 'purchases.product_id', '=', 'products.id')
            ->paginate(10);
        return \view('products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $sizes = Sizechart::all();
        return \view('products.create', ['categories' => $categories, 'sizes' => $sizes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'size_id' => 'required',
            'stock' => 'required',
            'color' => 'required',
            'price' => 'required',
            'depth' => 'required',
            'lin' => 'required'
        ]);

        Product::create($request->all());
        return \redirect('/products');
    }



    /**
     * Display the specified resource.
     *
     * @param  \app\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $sizes = Sizechart::all();
        return \view('products.edit', ['categories' => $categories, 'sizes' => $sizes, 'product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \app\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return \redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return \redirect('products');
    }
}
