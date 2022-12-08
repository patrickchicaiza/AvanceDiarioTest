@extends('layouts.app')


@section('content')
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Form</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('forms.index') }}"> Back</a>

            </div>

        </div>

    </div>


    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>User Id:</strong>

                {{ $form->user_id }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Date:</strong>

                {{ $form->date }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Entry Time:</strong>

                {{ $form->entryTime }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Departure TIme:</strong>

                {{ $form->departureTime }}

            </div>

        </div>

    </div>
@endsection

<p class="text-center text-primary"><small>MirandaSoft</small></p>
