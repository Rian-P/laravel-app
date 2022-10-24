<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\homestread;
use Illuminate\Http\Request;

class AdminController extends Controller
{
     
    public function index()
    {
      
       
        $result   = homestread::all();
        
        $response = [
            'error'   => false,
            'message' => 'Daftar perusahaan',
            'data'    => !empty($result) ? $result : (object)[],
        ];

        return response()->json($response, 200);  
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
        try {
            // membuat validasi semua field wajib diisi
            $result = validator::make($request->all(), [
                'nama'             => 'required',
                'password'       => 'required',
                 
            ]);
        
            //jika validasi gagal maka kirim pesan error
            if($result->fails()){
                //mengembalikan pesan error dengan menggunakan json
                return response()->json( $result->errors() );
            }else{
                
                //melakukan insert data 
                $dataCompany = [
                    'nama'          => $request->nama,
                    'password'    => $request->password,
                   
                ];
                
                $saveData = homestread::create($dataCompany);
            
                //jika berhasil maka simpan data dengan savedata
                
                $response = [
                    'error'   => false,
                    'message' => 'Daftar perusahaan',
                    'data'    => !empty($saveData) ? $saveData : (object)[],
                ];
        
                return response()->json($response, 200);
            
            }       
        } catch (\Throwable $th) {
            return response()->json($th);   
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
        try {
            // membuat validasi semua field wajib diisi
        $result = validator::make($request->all(), [
            'nama'             => 'required',
            'password'       => 'required',
            
        ]);

        //jika validasi gagal maka kirim pesan error
        if($result->fails()){
            //mengembalikan pesan error dengan menggunakan json
            return response()->json( $result->errors() );
        }else{
            //melakukan update data berdasarkan $id
            $dataCompany           = homestread::find($id);
            $dataCompany->nama    = $request->nama;
            $dataCompany->password      = $request->password;
            
            
        
            //jika berhasil maka simpan data dengan methode $post->save()
            if($dataCompany->save()){
                return response()->json( 'Post Berhasil Diupdate');
            }else{
                return response()->json('Post Gagal Diupdate');
            }
        }
    } catch (\Throwable $th) {
        return response()->json($th);   
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         //mencari data sesuai $id
         $dataCompany = homestread::findOrFail($id);
        
         // jika data berhasil didelete maka tampilkan pesan json 
         if($dataCompany->delete()){
             return response([
                 'Berhasil Menghapus Data'
             ]);
         }else{
             return response([
                 'Tidak Berhasil Menghapus Data'
             ]);
         }
    }
}
