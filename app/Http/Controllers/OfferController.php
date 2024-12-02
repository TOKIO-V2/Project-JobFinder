<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offer;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offer = Offer::all();
        foreach($offer as $offer){
            $entry = substr($offer->entry, 0, 80);
            $offer->entry = $entry;
        }
        return view('home', compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     */
   /*  public function create()
    {
        //
    } */

    /**
     * Store a newly created resource in storage.
     */
   /*  public function store(Request $request)
    {
        //
    } */

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $offer = Offer::find($id);
        return view('show', compact('offer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
   /* public function edit(string $id)
    {
        //
    }*/

    /**
     * Update the specified resource in storage.
     */
   /* public function update(Request $request, string $id)
    {
        //
    }*/

    /**
     * Remove the specified resource from storage.
     */
   /* public function destroy(string $id)
    {
        //
    }*/
}
