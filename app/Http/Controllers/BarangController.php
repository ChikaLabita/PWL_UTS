<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $barangs=Barang::orderBy('id_barang','asc')->paginate(5);
       return view('barangs.index',compact('barangs'))
       ->with('i',(request()->input('page', 1) - 1) * 5);
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
        //Lakukan Validasi data 
        $request-> validate([
            'id_barang'=> 'required',
            'kode_barang'=> 'required',
            'nama_barang'=> 'required',
            'kategori_barang'=> 'required',
            'harga'=> 'required',
            'qty' => 'required'
        ]);

        //fungsi eloquent untuk menambah data
        Barang::create($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('barang.index')
            ->with('success', 'Barang Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Id_Barang)
    {
         $Barang = Barang::find($Id_Barang);
         return view('barangs.detail', compact('Barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_Barang)
    {
        $Barang = Barang::find($Id_Barang);
        return view('barangs.edit', compact('Barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id_Barang)
    {
        //Melakukan validasi data
        $request-> validate([
            'id_barang'=> 'required',
            'kode_barang'=> 'required',
            'nama_barang'=> 'required',
            'kategori_barang'=> 'required',
            'harga'=> 'required',
            'qty' => 'required',
        ]);

        //fungsi eloquent untuk mengupdate data inputan kita
        Barang::find($Id_Barang)->update($request->all());

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('barang.index')
            ->with('success', 'Barang Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id_Barang)
    {
        //fungsi eloquent untuk menghapus data
        Barang::find($Id_Barang)->delete();
        return redirect()->route('barang.index')
            ->with('success', 'Barang Berhasil Dihapus');
    }

    public function search(Request $request){
        $search = $request -> search;

        $barangs = DB::table('barangs')->
        where('id_barang', 'like', "%".$search."%")->
        orwhere('kode_barang', 'like', "%".$search."%")->
        orwhere('nama_barang', 'like', "%".$search."%")->paginate(5);

        return view('barangs.index', ['barangs' => $barangs]);
    }
}
