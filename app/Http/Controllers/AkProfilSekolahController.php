<?php

namespace App\Http\Controllers;

use App\Models\AkProfilSekolah;
use App\Http\Requests\StoreAkProfilSekolahRequest;
use App\Http\Requests\UpdateAkProfilSekolahRequest;

class AkProfilSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('akademik.profil_sekolah.index');
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
    public function store(StoreAkProfilSekolahRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AkProfilSekolah $akProfilSekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AkProfilSekolah $akProfilSekolah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAkProfilSekolahRequest $request, AkProfilSekolah $akProfilSekolah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AkProfilSekolah $akProfilSekolah)
    {
        //
    }
}
