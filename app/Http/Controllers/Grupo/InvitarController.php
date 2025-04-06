<?php

namespace App\Http\Controllers\Grupo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Groups\InviteRequest;

class InvitarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('pages.group.invite.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        //return view('pages.group.invite._invite');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InviteRequest $request)
    {
        //
        dd($request->all());


        // Aquí podrías guardar en base de datos o realizar otra acción
        // Usuario::create($validated);

        return response()->json(['success' => true, 'data' => $validated]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
