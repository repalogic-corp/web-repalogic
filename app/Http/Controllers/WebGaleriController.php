<?php

namespace App\Http\Controllers;

use App\Models\WebGaleri;
use App\Http\Requests\StoreWebGaleriRequest;
use App\Http\Requests\UpdateWebGaleriRequest;

class WebGaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('website.galeri.index');
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
    public function store(StoreWebGaleriRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WebGaleri $webGaleri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WebGaleri $webGaleri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWebGaleriRequest $request, WebGaleri $webGaleri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WebGaleri $webGaleri)
    {
        //
    }
}
