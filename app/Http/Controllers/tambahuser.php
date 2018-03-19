<?php

namespace App\Http\Controllers;

use App\tiket;
use Illuminate\Http\Request;
use Sentinel;
class tambahuser extends Controller
{
    public function __construct()
    {

        $this->middleware('sentinel');
   
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Halamantambahuser');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $nama=Sentinel::getUser()->first_name;	
        return view('Halamantambahuser')->with('nama',$nama);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        
        $this->validate($request,
        [
                  'nama_pemesan'=>'required|max:255|min:1',
                  'jenis_kelamin'=>'required',
                  'no_ktp'=>'required|numeric',
                  'alamat'=>'required|max:255|min:1',
                  'jumlah'=>'required|integer|min:1',
                  'pembayaran'=>'required|integer',
                  
                   
                
        ]);

        $jumlah=$request->jumlah;
        $subtotal=$jumlah*60000;
        $hargabayar=$request->pembayaran;
        if($subtotal>$hargabayar)
        {
            return redirect()->back()->withErrors(['Harga bayar lebih kecil dari harga pesan']);
        }
        else
        {
         $nomorkursi=tiket::count();
         if($nomorkursi==0){
         $nomorkursi=$nomorkursi+1;
         }
         $penanda=tiket::all();

         if($jumlah==1)
         { 
          foreach($penanda as $check)
          {
            if($check->nomorkursi==$nomorkursi)
            {
                $nomorkursi=$nomorkursi+1;
            }
          }
          $tiket=new tiket;
          $tiket->nama_pemesan=$request->nama_pemesan;
          $tiket->nomorkursi=$nomorkursi;
          $tiket->jenis_kelamin=$request->jenis_kelamin;
          $tiket->no_ktp=$request->no_ktp;
          $tiket->alamat=$request->alamat;
          $tiket->jumlahtiket=$jumlah;
          $tiket->pembayaran=$hargabayar;
          $tiket->save();
          return redirect()->route("Viewuser.index");
         }
         else
         {  
             $valid=0;
             $berulang=$jumlah+1;
             $tiket=new tiket;
             $tiket->nama_pemesan=$request->nama_pemesan;
             $tiket->no_ktp=$request->no_ktp;
             $tiket->alamat=$request->alamat;
             $tiket->jumlahtiket=$jumlah;
              $tiket->pembayaran=$hargabayar;
              for($x=1;$x<$berulang;$x++)
              {
                  $valid=1;
                foreach($penanda as $check)
                {
                  if($check->nomorkursi==$x)
                  {
                      $valid=0;
                      $berulang=$berulang+1;
                  }
                }
                if($valid==1)
                {
                    $tiket=new tiket;
                    $tiket->nama_pemesan=$request->nama_pemesan;
                    $tiket->nomorkursi=$x;
                    $tiket->jenis_kelamin=$request->jenis_kelamin;
                    $tiket->no_ktp=$request->no_ktp;
                    $tiket->alamat=$request->alamat;
                    $tiket->jumlahtiket=$jumlah;
                    $tiket->pembayaran=$hargabayar;
                    $tiket->save();
          
                }
                else
                {

                }
                return redirect()->route("Viewuser.index");
              }
         }
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
