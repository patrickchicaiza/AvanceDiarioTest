@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit Client</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('clients.index') }}"> Back</a>

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


    <form action="{{ route('clients.update', $client->id) }}" method="POST">

        @csrf

        @method('PUT')


        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Name:</strong>

                    <input type="text" name="name" value="{{ $client->name }}" class="form-control"
                        placeholder="Name">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Ruc:</strong>

{{--                     <input class="form-control" style="height:150px" name="ruc" placeholder="ruc">{{ $client->ruc }}</textarea>
 --}}                    
                    <input type="text" name="ruc" value="{{ $client->ruc }}" class="form-control"
                    placeholder="Ruc">
                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>


    </form>


    <p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>

@endsection
