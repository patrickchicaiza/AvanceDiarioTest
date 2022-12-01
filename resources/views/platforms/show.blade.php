@extends('layouts.app')


@section('content')
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Platform</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('platforms.index') }}"> Back</a>

            </div>

        </div>

    </div>


    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Name:</strong>

                {{ $platform->name }}

            </div>

        </div>       

    </div>
@endsection

<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
