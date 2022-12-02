@extends('layouts.app')


@section('content')
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Clients</h2>

            </div>

            <div class="pull-right">

                @can('client-create')
                    <a class="btn btn-success" href="{{ route('clients.create') }}"> Create New Client</a>
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

            <th>Ruc</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($clients as $client)
            <tr>

                <td>{{ ++$i }}</td>

                <td>{{ $client->client_name }}</td>

                <td>{{ $client->ruc }}</td>

                <td>

                    <form action="{{ route('clients.destroy', $client->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('clients.show', $client->id) }}">Show</a>

                        @can('client-edit')
                            <a class="btn btn-primary" href="{{ route('clients.edit', $client->id) }}">Edit</a>
                        @endcan


                        @csrf

                        @method('DELETE')

                        @can('client-delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        @endcan

                    </form>

                </td>

            </tr>
        @endforeach

    </table>


    {!! $clients->links() !!}


    <p class="text-center text-primary"><small>MirandaSoft</small></p>
@endsection
