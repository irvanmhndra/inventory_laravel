<?php

namespace App\Http\Controllers;

use App\Sizechart;
use Illuminate\Http\Request;

class SizechartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sizecharts = Sizechart::paginate(10);
        return \view('sizecharts.index', ['sizecharts' => $sizecharts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \view('sizecharts.create');
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
            'size' => 'required',
            'desc' => 'required'
        ]);

        Sizechart::create($request->all());

        return \redirect('/sizecharts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sizechart $sizechart
     * @return \Illuminate\Http\Response
     */
    public function show(Sizechart $sizechart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sizechart $sizechart
     * @return \Illuminate\Http\Response
     */
    public function edit(Sizechart $sizechart)
    {
        return \view('sizecharts.edit', ['sizechart' => $sizechart]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sizechart $sizechart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sizechart $sizechart)
    {
        $sizechart->update($request->all());
        return \redirect('/sizecharts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sizechart $sizechart
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sizechart = Sizechart::find($id);
        $sizechart->delete();
        return \redirect('sizecharts');
    }
}
