<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resourcae.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {

        $this->middleware('permission:project-list|project-create|project-edit|project-delete', ['only' => ['index', 'show']]);

        $this->middleware('permission:project-create', ['only' => ['create', 'store']]);

        $this->middleware('permission:project-edit', ['only' => ['edit', 'update']]);

        $this->middleware('permission:project-delete', ['only' => ['destroy']]);

    }
    public function index()
    {
        $projects = Project::latest()->paginate(5);

        $cod = Client::select('name')->get();
     
        return view('projects.index', compact('projects', 'cod'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resourprojectsce.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
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

            'name' => 'required',

            'client' => 'required',

        ]);

        Project::create($request->all());

        return redirect()->route('projects.index')

            ->with('Proyecto creado satisfactoriamente.');
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project, Client $client)
    {

        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project, Client $client)
    {
        $project = Project::all();

        return view('projects.edit', compact('project'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project, Client $client, $id)
    {
        request()->validate([

              'name' => 'required',

            'client' => 'required',

        ]);

        $project->update($request->all());

        return redirect()->route('projects.index')

            ->with('Proyecto actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project, Client $client)
    {
        $project->delete();

        return redirect()->route('projects.index')

            ->with('Proyecto borrado correctamente');
    }

    public function innerJoin(Project $client_project, Client $client)
    {
        $client_project = DB::select('select projects.name, clients.name
        from clients
        inner join projects on clients.id=projects.id');
     
        return view('projects.index', compact('client_project'));

    }
}
