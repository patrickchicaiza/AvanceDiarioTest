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

                    <strong>User ID:</strong>

                    <input type="text" name="user_id" value="{{ $form->user_id }}" class="form-control"
                        placeholder="Name">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>User ID:</strong>

                    <input type="date" name="date" value="{{ $form->date }}" class="form-control"
                        placeholder="Date" readonly>

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Entry Time:</strong>

                    <input type="time" name="entryTime" value="{{ $form->entryTime }}" class="form-control"
                        placeholder="Entry TIme">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Departure Time:</strong>

                    <input type="time" name="departureTime" value="{{ $form->departureTime }}" class="form-control"
                        placeholder="Departure TIme">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>


    </form>


    <p class="text-center text-primary"><small>MirandaSoft</small></p>

@endsection
