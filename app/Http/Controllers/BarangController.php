<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('nama')) {
            $nama = request('nama');
            $barangs = Barang::where('nama', 'LIKE', '%'.$nama.'%')->paginate(5);
            return view('barangs.index', compact('barangs'));
        } else {
         
            $barangs = Barang::orderBy('Kode_barang', 'asc')->paginate(5);
            return view('barangs.index', compact('barangs'))
            ->with('i', (request()->input('page', 1) - 1) * 4);            
     }

  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barangs.create');
   
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
            'Kode_barang' => 'required',
            'Nama_barang' => 'required',
            'Kategori_barang' => 'required',
            'Harga' => 'required',
            'Qty' => 'required',
        ]);
        Barang::create($request->all());

         return redirect()->route('barangs.index')->with('success', 'Barang Berhasil Ditambahkan');
    }
           
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Kode_barang)
    {
        $Barang = Barang::find($Kode_barang);
        return view('barangs.detail', compact('Barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Kode_barang)
    {
        $Barang = Barang::find($Kode_barang);
        return view('barangs.edit', compact('Barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Kode_barang)
    {
        $request->validate([
            'Kode_barang' => 'required',
            'Nama_barang' => 'required',
            'Kategori_barang' => 'required',
            'Harga' => 'required',
            'Qty' => 'required',
        ]);
        Barang::find($Kode_barang)->update($request->all());
        return redirect()->route('barangs.index')
            ->with('success', 'Barang Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Nama_barang)
    {
        Barang::find($Nama_barang)->delete();
        return redirect()->route('barangs.index') -> with('success', 'Barangs Berhasil Dihapus');
    }
}
