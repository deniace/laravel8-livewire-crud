<?php

namespace App\Http\Controllers;

use App\Models\barang_model;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $barang = barang_model::all();
        // dd($barang);
        // return view('layout.main');
        // return view('barang.index', ["data" => $barang]);
        return view('barang.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barang_model  $barang_model
     * @return \Illuminate\Http\Response
     */
    public function show(barang_model $barang_model)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barang_model  $barang_model
     * @return \Illuminate\Http\Response
     */
    public function edit(barang_model $barang_model)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\barang_model  $barang_model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, barang_model $barang_model)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barang_model  $barang_model
     * @return \Illuminate\Http\Response
     */
    public function destroy(barang_model $barang_model)
    {
        //
    }
}
