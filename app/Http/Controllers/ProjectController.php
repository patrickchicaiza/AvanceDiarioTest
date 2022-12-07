<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;

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
        $projects = Project::leftJoin('clients as c', 'c.id', 'projects.client_id')
            ->select('projects.*', 'c.client_name as nombre_client')
            ->paginate(5);

        // $cod = Client::select('name')->get();

        // return view('projects.index', compact('projects', 'cod'))

        //     ->with('i', (request()->input('page', 1) - 1) * 5);
        //$client_project = DB::select('select * from clients c, projects p where p.client_name = c.id');
        $data = Project::leftJoin('clients as c', 'c.id', 'projects.client_id')
            ->select('projects.*', 'c.client_name as nombre_client')
            ->get();

        return view('projects.index', compact('projects'));

        //return view('projects.index', compact('data'));
    }

    /**
     * Show the form for creating a new resourprojectsce.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $clientTable = Client::get();

        return view('projects.create', compact('clientTable'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $pj = new Project();
        $pj->project_name = $request->project_name;
        $pj->client_id = $request->client_id;

        $pj->save();

        //Project::create($request->all());

        return redirect()->route('projects.index')

            ->with('Proyecto creado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {

        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        /*  $project = Client::all(); */

        return view('projects.edit', compact('project'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*  public function update(Request $request, Project $project)
    {
    request()->validate([

    'project_name' => 'required',

    ]);

    $project->update($request->all());

    return redirect()->route('projects.index')

    ->with('Proyecto actualizado satisfactoriamente');
    } */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $project = Project::find($id);
        $project->update($input);

        return redirect()->route('projects.index')
            ->with('success', 'Proyecto editado correctamente');
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

    /*   public function innerJoin(Project $client_project, Client $client)
{
$data = Project::leftJoin('clients as c', 'c.id', 'projects.client_name')
->select('projects.*','c.name as nombre_client')
->get();

return view('projects.index', compact('data'));

} */
}
