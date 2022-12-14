@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Add New Detail</h2>

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


    <form action="{{ route('details.store') }}" method="POST">

        @csrf


        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Form Id:</strong>

                    <select id="form_id" name="form_id" class="form-control" required>
                        <option value="Elegir">--Seleccionar--</option>
                        @foreach ($formTable as $formTables)
                            <option value="{{ $formTables->id }}">{{ $formTables->id }} - {{ $formTables->date }}</option>
                        @endforeach
                    </select>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Project:</strong>

                    <select id="project_id" name="project_id" class="form-control" required>
                        <option value="Elegir">--Seleccionar--</option>
                        @foreach ($projectTable as $projectTables)
                            <option value="{{ $projectTables->id }}">{{ $projectTables->project_name }}</option>
                        @endforeach
                    </select>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Platform:</strong>

                    <select id="platform_id" name="platform_id" class="form-control" required>
                        <option value="Elegir">--Seleccionar--</option>
                        @foreach ($platformTable as $platformTables)
                            <option value="{{ $platformTables->id }}">{{ $platformTables->platform_name }}</option>
                        @endforeach
                    </select>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Epic:</strong>

                    <input type="text" name="epic" class="form-control" placeholder="Epic">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>User Story:</strong>

                    <input type="text" name="userStory" class="form-control" placeholder="User Story">

                </div>

            </div>



            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Estimated Time:</strong>

                    <input type="time" name="estimatedTime" class="form-control" placeholder="Estimated Time">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Start Time:</strong>

                    <input type="time" name="startTime" class="form-control" placeholder="Start Time">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>End Time:</strong>

                    <input type="time" name="endTime" class="form-control" placeholder="End Time">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Progress:</strong>

                    <input type="number" name="progress" class="form-control" placeholder="Progress">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Images:</strong>

                    <input type="file" name="images" class="form-control" placeholder="Images">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Status:</strong>

                    <input type="text" name="status" class="form-control" placeholder="Status">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Comment:</strong>

                    <input type="text" name="comment" class="form-control" placeholder="Comment">

                </div>

            </div>



            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>


    </form>


    <p class="text-center text-primary"><small>MirandaSoft</small></p>

@endsection
