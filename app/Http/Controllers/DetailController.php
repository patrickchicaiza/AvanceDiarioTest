<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\Form;
use App\Models\Platform;
use App\Models\Project;
use App\Models\Client;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {

        $this->middleware('permission:detail-list|detail-create|detail-edit|detail-delete', ['only' => ['index', 'show']]);

        $this->middleware('permission:detail-create', ['only' => ['create', 'store']]);

        $this->middleware('permission:detail-edit', ['only' => ['edit', 'update']]);

        $this->middleware('permission:detail-delete', ['only' => ['destroy']]);

    }
    public function index()
    {
        /*     $details = Detail::latest()->paginate(5);

        return view('details.index', compact('details'))

        ->with('i', (request()->input('page', 1) - 1) * 5); */

/*         $details = Detail::leftJoin('projects as pr', 'platforms as pl', 'forms as fr', 'pr.id', 'pl.id', 'fr.id', 'details.project_id', 'details.platform_id', 'details.form_id') */
         $details = Detail::leftJoin('projects as pr', 'platforms as pl', 'forms as fr', 'pr.id', 'pl.id', 'fr.id', 'details.project_id', 'details.platform_id', 'details.form_id', 'clients as cl', 'cl.id')
            ->select('details.*', 'pr.project_id as projectId', 'pl.platform_name as platformtName', 'fr.user_id as userId', 'cl.client_name as clientName')
            ->paginate(5);
            dd($details); 
       /*  $prue = Project::all();

            dd($prue); */
        return view('details.index', compact('details'));


        $tare = Evento::leftjoin('users as us', 'us.id', 'eventos.id_user')
        ->leftjoin('pacientes as pac', 'pac.id_user', 'us.id')
        ->leftjoin('antecedentes as ant', 'ant.id_paci', 'pac.id')
        ->get(['eventos.*', 'us.name as NamePac', 'us.email as Mail', 'us.id as user_id', 'pac.id as idpac'])
        ->find($id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('details.create');
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

            'form' => 'required',
            'project' => 'required',
            'platform' => 'required',
            'epic' => 'required',
            'userStory' => 'required',
            'estimatedTime' => 'required',
            'startTime' => 'required',
            'endTime' => 'required',
            'progress' => 'required',
            'images' => 'required',
            'comment' => 'required',
            'status' => 'required',

        ]);

        Detail::create($request->all());

        return redirect()->route('details.index')

            ->with('Detalle creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Detail $detail, Form $form, Project $project, Platform $platform)
    {
        return view('details.show', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Detail $detail, Form $form, Project $project, Platform $platform)
    {
        return view('details.edit', compact('detail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detail $detail, Form $form, Project $project, Platform $platform)
    {
        request()->validate([

            'form' => 'required',
            'project' => 'required',
            'platform' => 'required',
            'epic' => 'required',
            'userStory' => 'required',
            'estimatedTime' => 'required',
            'startTime' => 'required',
            'endTime' => 'required',
            'progress' => 'required',
            'images' => 'required',
            'comment' => 'required',
            'status' => 'required',

        ]);

        $detail->update($request->all());

        return redirect()->route('details.index')

            ->with('Detalle actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail $detail, Form $form, Project $project, Platform $platform)
    {
        $detail->delete();

        return redirect()->route('details.index')

            ->with('Detalle borrado correctamente');
    }
}
