<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Status;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $status = Status::all();
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
        $status = Status::create([
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
        $status = Status::find($id);
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
        $status = Status::find($id);

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
        $status = Status::find($id);
        $status->delete();
    }
}
