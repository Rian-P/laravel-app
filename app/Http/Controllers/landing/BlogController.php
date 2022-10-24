<?php

namespace App\Http\Controllers\landing;

use App\Models\blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class BlogController extends Controller
{
     
    public function index()
    {
      
        // $client = new Client(['base_uri' => 'https://jsonplaceholder.typicode.com/posts']);
        // $response = $client->request('GET','posts');
        // $body = $response->getbody();
        // $data['blog'] = json_decode($body);
        // return $data['articles'];
        // return view('landing.blog', $data);
       
        $result   = blog::all();
       
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
                'image'                 => 'required',
                'jobs'                  => 'required',
                'title'                 => 'required',
                'description'           => 'required',
                'reading'               => 'required'   
            ]);
        
            //jika validasi gagal maka kirim pesan error
            if($result->fails()){
                //mengembalikan pesan error dengan menggunakan json
                return response()->json( $result->errors() );
            }else{
                
                //melakukan insert data 
                $dataCompany = [
                    'image'              => $request->image,
                    'jobs'               => $request->jobs,
                    'title'              => $request->title,
                    'description'        =>$request->description ,
                    'reading'            => $request->reading,
                    'date'               => Carbon::now()
                    
                
                ];
                
                $saveData = blog::create($dataCompany);
            
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
            'image'                 => 'required',
                'jobs'                  => 'required',
                'title'                 => 'required',
                'description'           => 'required',
                'reading'               => 'required',    
        ]);

        //jika validasi gagal maka kirim pesan error
        if($result->fails()){
            //mengembalikan pesan error dengan menggunakan json
            return response()->json( $result->errors() );
        }else{
            //melakukan update data berdasarkan $id
            $dataCompany           = blog::find($id);
            $dataCompany->image    = $request->image;
           
            $dataCompany->jobs  = $request->jobs;
            $dataCompany->title  = $request->title;
            $dataCompany->description  = $request->description;
            $dataCompany->reading  = $request->reading;
            
        
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
         $dataCompany = blog::findOrFail($id);
        
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
