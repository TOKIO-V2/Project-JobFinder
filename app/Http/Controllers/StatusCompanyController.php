<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\StatusCompany;
use Illuminate\Http\Request;

class StatusCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $status = StatusCompany::all();
        foreach($status as $status){
            $entry = substr($status->entry, 0, 80);
            $status->entry = $entry;
        }
        return view('home', compact('status'));
    }

    /**
     * Show the form for creating a new resource.
     */
  /*   public function create()
    {
        //
    } */

    /**
     * Store a newly created resource in storage.
     */
    /* public function store(Request $request)
    {
        //
    } */

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $status = StatusCompany::find($id);
        return view('show', compact('status'));
    }


    /**
     * Show the form for editing the specified resource.
     */
   /*  public function edit(string $id)
    {
        //
    } */

    /**
     * Update the specified resource in storage.
     */
   /*  public function update(Request $request, string $id)
    {
        //
    } */

    /**
     * Remove the specified resource from storage.
     */
  /*   public function destroy(string $id)
    {
        //
    } */
}
