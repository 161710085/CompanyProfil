<?php

namespace App\Http\Controllers;

use App\bahan;
use Illuminate\Http\Request;
use Session;
class BahanController extends Controller
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
         $bahan = bahan::all();
        return view('bahan.index',compact('bahan'));
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function create()
    {
                return view('bahan.create');

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
                 'harga' => 'required|'
            ]);
        $bahan = new bahan;
        $bahan->nama = $request->nama;
        $bahan->harga=$request->harga;
          $bahan->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$bahan->bahan</b>"
        ]);
        return redirect()->route('bahan.index');

    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\bahan  $bahan
     * @return \Illuminate\Http\Response
     */
    public function show(bahan $bahan,$id)
    {
                $bahan = bahan::findOrFail($id);
        return view('bahan.show',compact('bahan'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bahan  $bahan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
              $bahan = bahan::findOrFail($id);

        return view('bahan.edit',compact('bahan'));
  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bahan  $bahan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
          $this->validate($request,[
            'nama' => 'required|',
            'harga'=>'required'
             ]);
        $bahan = bahan::findOrFail($id);
        $bahan->nama = $request->nama;
        $bahan->harga = $request->harga;
        $bahan->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$bahan->bahan</b>"
        ]);
        return redirect()->route('bahan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bahan  $bahan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = bahan::findOrFail($id);
        $a->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('bahan.index');
    }
}
