{{-- @extends('layouts.app') --}}
@extends('layouts.appTable')

@section('content')
    <!-- BEGIN : Main Content-->
    <div class="main-content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="row">

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
                                <h4 class="card-title">Clients</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">

                                    <div class="table-responsive">

                                        @if ($message = Session::get('success'))
                                            <div class="alert alert-success">

                                                <p>{{ $message }}</p>

                                            </div>
                                        @endif
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

                                                        <td>

                                                            <form action="{{ route('clients.destroy', $client->id) }}"
                                                                method="POST">

                                                                <a class="btn btn-info"
                                                                    href="{{ route('clients.show', $client->id) }}">Show</a>

                                                                @can('client-edit')
                                                                    <a class="btn btn-primary"
                                                                        href="{{ route('clients.edit', $client->id) }}">Edit</a>
                                                                @endcan


                                                                @csrf

                                                                @method('DELETE')

                                                                @can('client-delete')
                                                                    <button type="submit"
                                                                        class="btn btn-danger">Delete</button>
                                                                @endcan

                                                            </form>

                                                        </td>

                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Name</th>
                                                    <th>Ruc</th>
                                                    <th width="280px">Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        {!! $clients->links() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!--/ Zero configuration table -->
@endsection
