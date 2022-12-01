@extends('layouts.app')


@section('content')
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Platforms</h2>

            </div>

            <div class="pull-right">

                @can('platform-create')
                    <a class="btn btn-success" href="{{ route('platforms.create') }}"> Create New Platform</a>
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

            <th>Name</th>   

            <th width="280px">Action</th>

        </tr>

        @foreach ($platforms as $platform)
            <tr>

                <td>{{ ++$i }}</td>

                <td>{{ $platform->name }}</td>               

                <td>

                    <form action="{{ route('platforms.destroy', $platform->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('platforms.show', $platform->id) }}">Show</a>

                        @can('platform-edit')
                            <a class="btn btn-primary" href="{{ route('platforms.edit', $platform->id) }}">Edit</a>
                        @endcan


                        @csrf

                        @method('DELETE')

                        @can('platform-delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        @endcan

                    </form>

                </td>

            </tr>
        @endforeach

    </table>


    {!! $platforms->links() !!}


    <p class="text-center text-primary"><small>MirandaSoft</small></p>
@endsection
