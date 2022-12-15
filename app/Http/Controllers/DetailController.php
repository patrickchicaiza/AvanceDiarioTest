<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\Form;
use App\Models\Platform;
use App\Models\Project;
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

        $details = Detail::leftjoin('projects as pr', 'pr.id', 'details.project_id')
            ->leftjoin('platforms as pl', 'pl.id', 'details.platform_id')
            ->leftjoin('forms as fr', 'fr.id', 'details.form_id')
            ->select('details.*', 'pr.project_name as projectName', 'pl.platform_name as platformName', 'fr.user_id as userId')
            ->paginate(5);

        return view('details.index', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projectTable = Project::get();

        $platformTable = Platform::get();

        $formTable = Form::get();

        return view('details.create', compact('projectTable', 'platformTable', 'formTable'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pj = new Detail();
        $pj->project_id = $request->project_id;
        $pj->platform_id = $request->platform_id;
        $pj->form_id = $request->form_id;
        $pj->epic = $request->epic;
        $pj->userStory = $request->userStory;
        $pj->estimatedTime = $request->estimatedTime;
        $pj->startTime = $request->startTime;
        $pj->endTime = $request->endTime;
        $pj->progress = $request->progress;
        $pj->images = $request->images;
        $pj->status = $request->status;
        $pj->comment = $request->comment;

        $pj->save();

        //Form::create($request->all());

        return redirect()->route('details.index')

            ->with('Detalle creado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Detail $detail)
    {
        return view('details.show', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Detail $detail)
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
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $detail = Detail::find($id);
        $detail->update($input);

        return redirect()->route('details.index')
            ->with('success', 'Detalle editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail $detail)
    {
        $detail->delete();

        return redirect()->route('details.index')

            ->with('Detalle borrado correctamente');
    }
}
