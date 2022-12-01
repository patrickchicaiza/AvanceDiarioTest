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
        $forms = Form::latest()->paginate(5);

        return view('forms.index', compact('forms'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.create');
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

            'user' => 'required',
            'date' => 'required',
            'entryTime' => 'required',
            'departureTime' => 'required',

        ]);

        Form::create($request->all());

        return redirect()->route('forms.index')

            ->with('Formulario creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form, User $user)
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
    public function update(Request $request, Form $form, User $user)
    {
        request()->validate([

            'user' => 'required',
            'date' => 'required',
            'entryTime' => 'required',
            'departureTime' => 'required',

        ]);

        $form->update($request->all());

        return redirect()->route('forms.index')

            ->with('Formulario actualizado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form, User $user)
    {
        $form->delete();

        return redirect()->route('forms.index')

            ->with('Formulario borrado correctamente');
    }
}
