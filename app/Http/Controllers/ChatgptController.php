<?php

namespace App\Http\Controllers;

use App\Models\Chatgp;
use Illuminate\Http\Request;

class ChatgptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.index');
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
    public function show(Chatgp $chatgp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chatgp $chatgp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chatgp $chatgp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chatgp $chatgp)
    {
        //
    }
}
