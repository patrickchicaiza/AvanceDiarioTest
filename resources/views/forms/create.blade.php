@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Add New Form</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('forms.index') }}"> Back</a>

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


    <form action="{{ route('forms.store') }}" method="POST">

        @csrf


        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>User:</strong>

                    <select id="user_id" name="user_id" class="form-control" required>
                        <option value="Elegir">--Seleccionar--</option>
                        @foreach ($userTable as $userTables)
                            <option value="{{ $userTables->id }}">{{ $userTables->name }}</option>
                        @endforeach
                    </select>

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Date:</strong>

                    <input type="date" name="date" class="form-control" placeholder="Date">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Entry TIme:</strong>

                    <input type="time" name="entryTime" class="form-control" placeholder="Entry Time">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Departure Time:</strong>

                    <input type="time" name="departureTime" class="form-control" placeholder="Departure Time">

                </div>

            </div>



            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>


    </form>


    <p class="text-center text-primary"><small>MirandaSoft</small></p>

@endsection
