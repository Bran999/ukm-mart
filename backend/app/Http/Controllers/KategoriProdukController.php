<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Produk = DB::table('tabelkategoriproduk')->get();

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
        DB::table('tabelkategoriproduk')->insert([
            'kategori_id' => $request -> kategori_id,
            'kategori_name' => $request -> kategori_name
        ]);

        return redirect('/kategoriproduk');
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
        $kategoriproduk = DB::table('tabelkategoriproduk')->where('kategori_id', $id)->get();

        return redirect('/kategoriproduk');
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
        DB::table('tabelkategoriproduk')->where('kategori_id', $request->id)->update([
            'kategori_id' => $request -> kategori_id,
            'kategori_name' => $request -> kategori_name
             
        ]);

        return redirect('/kategoriproduk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tabelkategoriproduk')->where('kategori_id', $id);

        return redirect('/kategori');
    }
}
