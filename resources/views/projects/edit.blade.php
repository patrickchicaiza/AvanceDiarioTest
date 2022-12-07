@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit Project</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('projects.index') }}"> Back</a>

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


    <form action="{{ route('projects.update', $project->id) }}" method="POST">

        @csrf

        @method('PUT')


        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Name:</strong>

                    <input type="text" name="project_name" value="{{ $project->project_name }}" class="form-control"
                        placeholder="Name">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Client:</strong>

                    <td>
                        <input type="text" name="client_id" value="{{ $project->client_id }}" class="form-control"
                            placeholder="Name">


                        {{--           <select id="client_id" name="client_id" class="form-control" required>
                            <option value="Elegir">--Seleccionar--</option>
                           
                                <option value="{{ $project->client_id }}">{{ $project->client_id }}</option>
                   
                        </select>

                        <select id="client_id" name="client_id" class="form-control" required>
                            <option value="Elegir">--Seleccionar--</option>
                            @foreach ($project as $projects)
                                <option value="{{ $projects->project_name }}">{{ $projects->client_id }}</option>
                            @endforeach
                        </select>

 --}}
                    </td>

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>


    </form>


    <p class="text-center text-primary"><small>MirandaSoft</small></p>

@endsection
