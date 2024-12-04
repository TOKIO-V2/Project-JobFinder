<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StatusCompany;

class StatusCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $status = StatusCompany::all();
        return response()->json($status, 200);
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
    public function store(Request $request)
    {
        $status = StatusCompany::create([
            'entry' => $request->entry,
            'status' => $request->status
        ]);
        $status->save();
        return response()->json($status, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $status = StatusCompany::find($id);
        return response()->json($status, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
  /*   public function edit(string $id)
    {
        //
    } */

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $status = StatusCompany::find($id);

        $status->update([
            'entry' => $request->entry,
            'status' => $request->status
        ]);
        $status->save();
        return response()->json($status, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $status = StatusCompany::find($id);
        $status->delete();
    }
}
