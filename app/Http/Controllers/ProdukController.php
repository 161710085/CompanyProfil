<?php

namespace App\Http\Controllers;

use App\produk;
use Illuminate\Http\Request;
use Session;
use App\bahan;
use App\jenis;
use App\kategori;
use File;
class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $produk = produk::with('bahan')->get();
        return view('produk.index',compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           $bahan = bahan::all();
        $kategori = kategori::all();
        $jenis = jenis::all();
        return view('produk.create',compact('bahan','kategori','jenis'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|',
            'ukuran' => 'required|',
            'warna' =>'required|',
            'harga'=>'required|',
            'bahan_id' => 'required|',
            'kategori_id' => 'required',
             'jenis_id' => 'required'
        ]);
        $produk = new produk;
        $produk->nama = $request->nama;
        $produk->ukuran = $request->ukuran;
         $produk->warna = $request->warna;
          $produk->harga = $request->harga;
        $produk->bahan_id = $request->bahan_id;
$produk->kategori_id = $request->kategori_id;
$produk->jenis_id = $request->jenis_id;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/assets/img/produk/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $produk->foto = $filename;
     }
        $produk->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$produk->nama</b>"
        ]);
        return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
         $produk = produk::findOrFail($id);
        return view('produk.show',compact('produk'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        
        $produk = produk::findOrFail($id);
        $bahan = bahan::all();
        $selectedbahan = produk::findOrFail($id)->bahan_id;
        $jenis = jenis::all();
        $selectedjenis = produk::findOrFail($id)->jenis_id;
        $selectedkategori = $produk->kategori->pluck('id')->toArray();
        $kategori = kategori::all();
        // dd($selected);
        return view('produk.edit',compact('produk','bahan','selectedbahan','selectedkategori','kategori','jenis','selectedjenis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'nama' => 'required|',
            'ukuran' => 'required|',
            'warna' => 'required|',
            'harga' => 'required|',
            'bahan_id' => 'required|',
            'kategori_id' => 'required',
            'jenis_id' => 'required'
        ]);
        $produk = produk::findOrFail($id);
        $produk->nama = $request->nama;
        $produk->ukuran = $request->ukuran;
              $produk->warna = $request->warna;
                    $produk->harga = $request->harga;
        $produk->bahan_id = $request->bahan_id;
        $produk->jenis_id = $request->jenis_id;
        $produk->kategori_id = $request->kategori_id;
 if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/assets/img/produk/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
    
        // hapus foto lama, jika ada
        if ($produk->foto) {
        $old_foto = $produk->foto;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/produk'
        . DIRECTORY_SEPARATOR . $produk->foto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
        $produk->foto = $filename;
}

        $produk->save();
       Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$produk->nama</b>"
        ]);
        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        $produk = produk::findOrFail($produk->id);
        if ($produk->foto) {
            $old_foto = $produk->foto;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'assets/img/produk/'
            . DIRECTORY_SEPARATOR . $produk->foto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
            }
            }
        $produk->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('produk.index');
    }
}
