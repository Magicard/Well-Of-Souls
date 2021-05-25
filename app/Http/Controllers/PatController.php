<?php

namespace App\Http\Controllers;

use App\Models\Pat;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  Request  $request
     * @return Pat
     */
    public function store(Request $request)
    {
        $pat = new Pat();
        $pat->target_type = $request->get('target_type') === 'post' ? Post::class : User::class;
        $pat->target_id = $request->get('target_id');
        $pat->user_id = auth()->user()->getKey();
        $pat->save();

        return $pat;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pat  $pat
     * @return \Illuminate\Http\Response
     */
    public function show(Pat $pat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pat  $pat
     * @return \Illuminate\Http\Response
     */
    public function edit(Pat $pat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pat  $pat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pat $pat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pat  $pat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pat $pat)
    {
        //
    }
}
