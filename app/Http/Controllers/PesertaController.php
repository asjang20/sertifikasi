<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Skema;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peserta = Peserta::all();
        return view('master.peserta.index',compact('peserta'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $skema = Skema::all();
        return view('master.peserta.create',compact('skema'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $peserta = new Peserta();
        $peserta->nm_peserta = $request->nm_peserta;
        $peserta->kd_skema = $request->kd_skema;
        $peserta->jekel = $request->jekel;
        $peserta->alamat = $request->alamat;
        $peserta->no_hp = $request->no_hp;
        $peserta->nik = $request->nik;
        $peserta->save();
        return redirect()->route('peserta.index')->with(['success' => 'Berhasil Menambahkan Peserta']);;
    }

    /**
     * Display the specified resource.
     */
    public function show(Peserta $peserta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peserta $peserta)
    {
        $skema = Skema::all();
        return view('master.peserta.edit',compact('skema','peserta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peserta $peserta)
    {
        $peserta->fill($request->all());
        $peserta->save();
        return redirect()->route('peserta.index')->with(['success' => 'Berhasil Mengedit Peserta']);;
    }
    
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peserta $peserta)
    {
        $peserta->delete();
        return redirect()->route('peserta.index');
    }
}
