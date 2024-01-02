<?php

namespace App\Http\Controllers;

use App\Models\AkKelas;
use App\Http\Requests\StoreAkKelasRequest;
use App\Http\Requests\UpdateAkKelasRequest;

class AkKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('akademik.kelas.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAkKelasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AkKelas $akKelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AkKelas $akKelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAkKelasRequest $request, AkKelas $akKelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AkKelas $akKelas)
    {
        //
    }
}
