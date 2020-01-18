<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Produk = DB::table('tabelproduk')->get();

        return view('index', ['produk' => $produk]);
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
        DB::table('tabelproduk')->insert([
            'product_id' => $request -> product_id,
            'kategori_product' => $request -> kategori_product,
            'product_name' => $request -> product_name,
            'product_price' => $request -> product_price 
        ]);

        return redirect ('/produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = DB::table('tabelproduk')->where('product_id', $id)->get();

        return redirect('/produk');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('tabelproduk')->where('product_id', $request->id)->update([
            'product_id' => $request -> product_id,
            'kategori_product' => $request -> kategori_product,
            'product_name' => $request -> product_name,
            'product_price' => $request -> product_price 
        ]);

        return redirect('/produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tabelproduk')->where('produk_id', $id);

        return redirect('/produk');
    }
}
