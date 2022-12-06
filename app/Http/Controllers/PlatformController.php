<?php

namespace App\Http\Controllers;

use App\Models\Platform;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {

        $this->middleware('permission:platform-list|platform-create|platform-edit|platform-delete', ['only' => ['index', 'show']]);

        $this->middleware('permission:platform-create', ['only' => ['create', 'store']]);

        $this->middleware('permission:platform-edit', ['only' => ['edit', 'update']]);

        $this->middleware('permission:platform-delete', ['only' => ['destroy']]);

    }
    public function index()
    {
        $platforms = Platform::latest()->paginate(5);

        return view('platforms.index', compact('platforms'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('platforms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([

            'platform_name' => 'required',

        ]);

        Platform::create($request->all());

        return redirect()->route('platforms.index')

            ->with('Plataforma creada satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Platform $platform)
    {
        return view('platforms.show', compact('platform'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Platform $platform)
    {
        return view('platforms.edit', compact('platform'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Platform $platform)
    {
        request()->validate([

            'platform_name' => 'required',

        ]);

        $platform->update($request->all());

        return redirect()->route('platforms.index')

            ->with('Plataforma actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Platform $platform)
    {
        $platform->delete();

        return redirect()->route('platforms.index')

                        ->with('Plataforma eliminada correctamente');
    }
}
