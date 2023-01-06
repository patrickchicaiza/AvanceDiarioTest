<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\User;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {

        $this->middleware('permission:form-list|form-create|form-edit|form-delete', ['only' => ['index', 'show']]);

        $this->middleware('permission:form-create', ['only' => ['create', 'store']]);

        $this->middleware('permission:form-edit', ['only' => ['edit', 'update']]);

        $this->middleware('permission:form-delete', ['only' => ['destroy']]);

    }
    public function index()
    {
        /*  $forms = Form::latest()->paginate(5);

        return view('forms.index', compact('forms'))

        ->with('i', (request()->input('page', 1) - 1) * 5); */

        $forms = Form::leftJoin('users as u', 'u.id', 'forms.user_id')
            ->select('forms.*', 'u.name as userName')
            ->paginate(5);

        return view('forms.index', compact('forms'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userTable = User::get();

        return view('forms.create', compact('userTable'));
    

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pj = new Form();
        $pj->user_id = $request->user_id;
        $pj->date = $request->date;
        $pj->entryTime = $request->entryTime;
        $pj->departureTime = $request->departureTime;

        $pj->save();

        //Form::create($request->all());

        return redirect()->route('details.create')

            ->with('Formulario creado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        
        return view('forms.show', compact('form'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form, User $user)
    {
        return view('forms.edit', compact('form'));
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
        $form = Form::find($id);
        $form->update($input);

        return redirect()->route('forms.index')
            ->with('success', 'Formulario editado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        $form->delete();

        return redirect()->route('forms.index')

            ->with('Formulario borrado correctamente');
    }
}
