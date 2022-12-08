@extends('layouts.app')


@section('content')
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Forms</h2>

            </div>

            <div class="pull-right">

                @can('form-create')
                    <a class="btn btn-success" href="{{ route('forms.create') }}"> Create New Form</a>
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

            <th>User</th>

            <th>Date</th>

            <th>Entry Time</th>

            <th>Departure Time</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($forms as $form)
            <tr>

                <td>{{ $form->id }}</td>

                <td>{{ $form->userName }}</td>

                <td> {{ $form->date }}</td>

                <td> {{ $form->entryTime }}</td>

                <td> {{ $form->departureTime }}</td>


                <td>

                    <form action="{{ route('forms.destroy', $form->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('forms.show', $form->id) }}">Show</a>

                        @can('form-edit')
                            <a class="btn btn-primary" href="{{ route('forms.edit', $form->id) }}">Edit</a>
                        @endcan


                        @csrf

                        @method('DELETE')

                        @can('form-delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        @endcan

                    </form>

                </td>

            </tr>
        @endforeach

    </table>


    {!! $forms->links() !!}


    <p class="text-center text-primary"><small>MirandaSoft</small></p>
@endsection
