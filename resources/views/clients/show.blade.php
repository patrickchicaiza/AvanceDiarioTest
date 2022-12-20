@extends('layouts.app')


@section('content')
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Client</h2>

            </div>

    <div class="pull-right">

        <a class="btn btn-primary" href="{{ route('clients.index') }}"> Back</a>

    </div>

</div>

</div>


<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Name:</strong>

            {{ $client->client_name }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Ruc:</strong>

            {{ $client->ruc }}

        </div>

    </div>

</div>
@endsection