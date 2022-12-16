<?php

namespace App\Http\Controllers;

use App\Models\feed_table;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return response()->json([
            'response' => feed_table::all(),
        ], 200);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        feed_table::create($request->all());

        return response()->json([
            'response' => "created",
            'records' => feed_table::all()
        ], 200);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\feed_table  $feed_table
     * @return \Illuminate\Http\Response
     */
    public function show(feed_table $feed_table)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\feed_table  $feed_table
     * @return \Illuminate\Http\Response
     */
    public function edit(feed_table $feed_table)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\feed_table  $feed_table
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, feed_table $feed_table)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\feed_table  $feed_table
     * @return \Illuminate\Http\Response
     */
    public function destroy(feed_table $feed_table)
    {
        //
    }
}
