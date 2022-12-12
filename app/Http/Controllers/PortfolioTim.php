<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PortfolioTim extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formPortfolio');
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
        $partner = new Portfolio;
        $partner->keterangan= $request->input('keterangan');
        if($request->hasFile('Portfolio')){
            $file = $request->file('Portfolio');
            $extention = $file->getClientOriginalExtension();
            $filename = $request->nama.'_'.now()->timestamp.'.'.$extention;
            $file->storeAs('image/Portfolio/',$filename);
            $partner->Portfolio = $filename;
        }
        $partner->save();

        return redirect('viewportfolio') -> with('success', "Data berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $portfolio = Portfolio::all();
        return view('viewportfolio', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Portfolio::find($id);
        return view('FormeEditPortfolio', compact('data'));
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
        $data = Portfolio::find($id);
        $data->update($request->all());

        return redirect('/viewportfolio') -> with('success', "Data berhasil ditambahkan!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patner = Portfolio::find($id);
        $path = 'storage/image/Portfolio/'.$patner->Portfolio;
        if(File::exists($path)){
            File::delete($path);
        }
        $patner->delete();
        
        return redirect('/viewportfolio') -> with('success', "Data berhasil ditambahkan!");
    }
}
