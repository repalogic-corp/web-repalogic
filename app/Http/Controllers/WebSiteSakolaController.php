<?php

namespace App\Http\Controllers;

use App\Models\WebSiteSakola;
use App\Http\Requests\StoreWebSiteSakolaRequest;
use App\Http\Requests\UpdateWebSiteSakolaRequest;

class WebSiteSakolaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('website.dashboard.index');
    }
    public function web_sejarah()
    {
        return view('website.dashboard.sejarah');
    }
    public function visimisi()
    {
        return view('website.dashboard.visimisi');
    }
    public function prodi()
    {
        return view('website.dashboard.prodi');
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
    public function store(StoreWebSiteSakolaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WebSiteSakola $webSiteSakola)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WebSiteSakola $webSiteSakola)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWebSiteSakolaRequest $request, WebSiteSakola $webSiteSakola)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WebSiteSakola $webSiteSakola)
    {
        //
    }
}
