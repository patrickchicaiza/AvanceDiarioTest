@extends('layouts.app')


@section('content')
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Projects</h2>

            </div>

            <div class="pull-right">

                @can('project-create')
                    <a class="btn btn-success" href="{{ route('projects.create') }}"> Create New Project</a>
                @endcan

            </div>

        </div>

    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>
    @endif


    <table class="table table-bordered">

        <tr>

            <th>No</th>

            <th>Project</th>

            <th>Client</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($projects as $project)
            <tr>

                <td>{{ $project->id }}</td>

                <td>{{ $project->project_name }}</td>


                <td> {{ $project->nombre_client }}</td>


                <td>

                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('projects.show', $project->id) }}">Show</a>

                        @can('project-edit')
                            <a class="btn btn-primary" href="{{ route('projects.edit', $project->id) }}">Edit</a>
                        @endcan


                        @csrf

                        @method('DELETE')

                        @can('project-delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        @endcan

                    </form>

                </td>

            </tr>
        @endforeach

    </table>


    {!! $projects->links() !!}


    <p class="text-center text-primary"><small>MirandaSoft</small></p>
@endsection
