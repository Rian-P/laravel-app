<?php

namespace App\Http\Controllers\landing;

use App\Models\blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UpdateBlogController extends Controller
{
    
    public function index()
    {
    	// mengambil data dari table pegawai
    	$blog = DB::table('blog')->get();
 
    	// mengirim data pegawai ke view index
    	return view('landing.updateblog',['blog' => $blog]);
 
    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {
 
	// memanggil view tambah
	return view('landing.tambahblog');
 
  }
  public function store(Request $request)
{
	// insert data ke table blog
	DB::table('blog')->insert([
		'image' => $request->image,
		'jobs' => $request->jobs,
		
		'title' => $request->title,
        'description' => $request->description,
        'reading' => $request->reading,
        'date' =>  Carbon::now()
	]);
	// alihkan halaman ke halaman pegawai
	// return redirect('/updateblog');
 
}
// method untuk edit data pegawai
public function edit($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$blog = DB::table('blog')->where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('landing.editblog',['blog' => $blog]);
}
// update data pegawai
public function update(Request $request)
{
	// update data pegawai
	DB::table('blog')->where('id',$request->id)->update([
		'image' => $request->image,
		'jobs' => $request->jobs,
		'title' => $request->title,
        'description' => $request->description,
        'reading' => $request->reading,
        'date' =>  Carbon::now()
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/updateblog');
}
// method untuk hapus data pegawai
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('blog')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
    return redirect('/updateblog');
}
}
