<?php

namespace App\Http\Controllers;

use App\Models\buah;
use Illuminate\Http\Request;

class BuahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buahs = buah::all();
        return view('buahs.index',compact('buahs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buahs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nama'  => 'required',
            'jenis'  => 'required',
            'berat'  => 'required',
            'harga'  => 'required',
        ]);
        Buah::create($request->all());
        return redirect()->route('buah.index')
                        ->with('success','buah berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Buah $buah)
    {
        return view('buahs.show',compact('buah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Buah $buah)
    {
        return view('buahs.edit',compact('buah'));//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buah $buah)
    {
         request()->validate([
            'nama'  => 'required',
            'jenis'  => 'required',
            'berat'  => 'required',
            'harga'  => 'required',
        ]);
        $buah->update($request->all());
        return redirect()->route('buah.index')
                        ->with('success','Buah berhasil diedit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buah $buah)
    {
        $buah->delete();
        return redirect()->route('buah.index')
        ->with('success','Buah berhasil dihapus');
    }
}
