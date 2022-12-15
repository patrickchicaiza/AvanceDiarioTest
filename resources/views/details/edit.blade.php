@extends('layouts.app')


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Edit Detail</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('details.index') }}"> Back</a>

        </div>

    </div>

</div>


@if ($errors->any())
<div class="alert alert-danger">

    <strong>Whoops!</strong> There were some problems with your input.<br><br>

    <ul>

        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach

    </ul>

</div>
@endif


<form action="{{ route('details.update', $detail->id) }}" method="POST">

    @csrf

    @method('PUT')


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Form</strong>

                <input type="text" name="form_id" value="{{ $detail->form_id }}" class="form-control"
                    placeholder="Form">

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Project</strong>

                <input type="text" name="project_id" value="{{ $detail->project_id }}" class="form-control"
                    placeholder="Project">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Platform</strong>

                <input type="text" name="platform_id" value="{{ $detail->platform_id }}" class="form-control"
                    placeholder="Platform">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Epic</strong>

                <input type="text" name="epic" value="{{ $detail->epic }}" class="form-control"
                    placeholder="Epic">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>User Story</strong>

                <input type="text" name="userStory" value="{{ $detail->userStory }}" class="form-control"
                    placeholder="User Story">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Estimated Time</strong>

                <input type="time" name="estimatedTime" value="{{ $detail->estimatedTime }}" class="form-control"
                    placeholder="Estimated Time">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Start Time</strong>

                <input type="time" name="startTime" value="{{ $detail->startTime }}" class="form-control"
                    placeholder="Start Time">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>End TIme</strong>

                <input type="time" name="endTime" value="{{ $detail->endTime }}" class="form-control"
                    placeholder="End Time">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Progress</strong>

                <input type="number" name="progress" value="{{ $detail->progress }}" class="form-control"
                    placeholder="Progress">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Images</strong>

                <input type="file" name="images" value="{{ $detail->images }}" class="form-control">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Status</strong>

                <input type="text" name="status" value="{{ $detail->status }}" class="form-control"
                    placeholder="Name">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Comment</strong>

                <input type="text" name="comment" value="{{ $detail->comment }}" class="form-control"
                    placeholder="comment">

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

            <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>


</form>


<p class="text-center text-primary"><small>MirandaSoft</small></p>

@endsection