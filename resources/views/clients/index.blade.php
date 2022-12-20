@extends('layouts.appTable')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="content-header">Clients</div>
</div>
<div class="pull-right">

@can('client-create')
<a class="btn btn-success" href="{{ route('clients.create') }}"> Create New Client</a>
@endcan

</div>
</div>
<!-- Zero configuration table -->
<section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-content">
    <div class="card-body">

                        <div class="table-responsive">
        <table class="table table-striped table-bordered zero-configuration">
                                <thead>


                                    <tr>

            <th>No</th>

                                        <th>Name</th>

                                        <th>Ruc</th>

            <th width="280px">Action</th>

                                    </tr>


            </thead>
            <tbody>
                @foreach ($clients as $client)
                <tr>

                    <td>{{ ++$i }}</td>

                <td>{{ $client->client_name }}</td>

                    <td>{{ $client->ruc }}</td>

<!--                     <td>

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

                </td> -->
                <td class="text-truncate">
                    <form action="{{ route('clients.destroy', $client->id) }}" method="POST">

                        <a href="{{ route('clients.show', $client->id) }}" class="info p-0">
                            <i class="ft-user font-medium-3 mr-2"></i>
                        </a>
                        @can('client-edit')
                        <a href="{{ route('clients.edit', $client->id) }}" class="success p-0">
                            <i class="ft-edit-2 font-medium-3 mr-2"></i>
                        </a>
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

            </tbody>

        </table>

        {!! $clients->links() !!}
    </div>
</div>
</div>
</div>
</div>
</div>
</section>
<!--/ Zero configuration table -->


@endsection