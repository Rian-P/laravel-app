<?php

namespace App\Http\Controllers;


use App\Models\EstehTim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class EstehTimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return view('formTeam');
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
        $partner = new EstehTim;
        $partner->nama= $request->input('nama');
        $partner->jabatan= $request->input('jabatan');
        $partner->pendidikan= $request->input('pendidikan');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = $request->nama.'_'.now()->timestamp.'.'.$extention;
            $file->storeAs('image/team/',$filename);
            $partner->image = $filename;
        }
        $partner->save();

        return redirect('/viewTeam') -> with('success', "Data berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EstehTim  $estehTim
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    $data = EstehTim::all();
     return view('viewTeam', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EstehTim  $estehTim
     * @return \Illuminate\Http\Response
     */
    public function edit(EstehTim $estehTim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EstehTim  $estehTim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EstehTim $estehTim)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EstehTim  $estehTim
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patner = EstehTim::find($id);
        $path = 'storage/image/team/'.$patner->image;
        if(File::exists($path)){
            File::delete($path);
        }
        $patner->delete();
        
        return redirect('/viewTeam') -> with('success', "Data berhasil ditambahkan!");
    }
}
