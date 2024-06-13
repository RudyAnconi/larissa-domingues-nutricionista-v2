<?php

namespace App\Http\Controllers;

use App\Models\ExamesLab;
use Illuminate\Http\Request;

class ExamesLabController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Get all exames_labs
        $exames_labs = ExamesLab::all();
        //Return a collection of $exames_labs to the view
        return view('exames_labs.index', ['data'=>json_encode($exames_labs)]);
        
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ExamesLab $examesLab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExamesLab $examesLab)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ExamesLab $examesLab)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExamesLab $examesLab)
    {
        //
    }
}
