@extends('layouts.app')


@section('content')
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Detail</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('details.index') }}"> Back</a>

            </div>

        </div>

    </div>


    <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Form:</strong>

                {{ $detail->form_id }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Project:</strong>

                {{ $detail->project_id }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Platform:</strong>

                {{ $detail->platform_id }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Epic:</strong>

                {{ $detail->epic }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>User:</strong>

                {{ $detail->userStory }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Estimated Time:</strong>

                {{ $detail->estimatedTime }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Start Time:</strong>

                {{ $detail->startTime }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>End time:</strong>

                {{ $detail->endTime }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Progress:</strong>

                {{ $detail->progress }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>images:</strong>

                {{ $detail->images }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Status:</strong>

                {{ $detail->status }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

        

            <div class="form-group">

                <strong>Comment:</strong>

                {{ $detail->comment }}

            </div>

        </div>


      

    </div>
@endsection

<p class="text-center text-primary"><small>MirandaSoft</small></p>
