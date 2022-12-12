@extends('layouts.app')


@section('content')
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Details</h2>

            </div>

            <div class="pull-right">

                @can('detail-create')
                    <a class="btn btn-success" href="{{ route('details.create') }}"> Create New Detail</a>
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

            <th>Project</th>

            <th>Platform</th>

            <th>User/Form</th>

            <th>Epic</th>

            <th>User Story</th>

            <th>Estimated Time</th>

            <th>Start Time</th>

            <th>End Time</th>

            <th>Progress</th>

            <th>Images</th>

            <th>Status</th>

            <th>Comment</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($details as $detail)
            <tr>

                <td>{{ $detail->id }}</td>
                <td>{{ $detail->projectName }}</td>
                <td> {{ $detail->platformName }}</td>
                <td> {{ $detail->userId }}</td>
                <td> {{ $detail->epic }}</td>
                <td> {{ $detail->userStory }}</td>
                <td> {{ $detail->estimatedTime }}</td>
                <td> {{ $detail->startTime }}</td>
                <td> {{ $detail->endTime }}</td>
                <td> {{ $detail->progress }}</td>
                <td> {{ $detail->images }}</td>
                <td> {{ $detail->status }}</td>
                <td> {{ $detail->comment }}</td>


                <td>

                    <form action="{{ route('details.destroy', $detail->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('details.show', $detail->id) }}">Show</a>

                        @can('detail-edit')
                            <a class="btn btn-primary" href="{{ route('details.edit', $detail->id) }}">Edit</a>
                        @endcan


                        @csrf

                        @method('DELETE')

                        @can('detail-delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        @endcan

                    </form>

                </td>

            </tr>
        @endforeach

    </table>

    {!! $details->links() !!}


    <p class="text-center text-primary"><small>MirandaSoft</small></p>
@endsection
