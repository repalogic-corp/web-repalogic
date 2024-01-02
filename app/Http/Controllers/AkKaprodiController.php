<?php

namespace App\Http\Controllers;

use App\Models\AkKaprodi;
use App\Http\Requests\StoreAkKaprodiRequest;
use App\Http\Requests\UpdateAkKaprodiRequest;

class AkKaprodiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('akademik.kaprodi.index');
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
    public function store(StoreAkKaprodiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AkKaprodi $akKaprodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AkKaprodi $akKaprodi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAkKaprodiRequest $request, AkKaprodi $akKaprodi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AkKaprodi $akKaprodi)
    {
        //
    }
}
