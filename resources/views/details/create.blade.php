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


   


        <!-- Horizontal Form Layout starts -->
        <section id="horizontal-form-layout">
                        <div class="row match-height">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <!-- <h4 class="card-title">Horizontal Form</h4> -->
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            
                                        <form action="{{ route('forms.store') }}" method="POST">

@csrf
                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label" for="horizontal-form-1">User</label>
                                                            <div class="col-md-9">
                                                            <select id="form_id" name="form_id" class="form-control" required>
                        <option value="Elegir">--Seleccionar--</option>
                        @foreach ($formTable as $formTables)
                            <option value="{{ $formTables->id }}">{{ $formTables->id }} - {{ $formTables->date }}</option>
                        @endforeach
                    </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label" for="horizontal-form-2">Project</label>
                                                            <div class="col-md-9">
                                                            <select id="project_id" name="project_id" class="form-control" required>
                        <option value="Elegir">--Seleccionar--</option>
                        @foreach ($projectTable as $projectTables)
                            <option value="{{ $projectTables->id }}">{{ $projectTables->project_name }}</option>
                        @endforeach
                    </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-md-3">
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label" for="horizontal-form-3">Platform</label>
                                                            <div class="col-md-9">
                                                            <select id="platform_id" name="platform_id" class="form-control" required>
                        <option value="Elegir">--Seleccionar--</option>
                        @foreach ($platformTable as $platformTables)
                            <option value="{{ $platformTables->id }}">{{ $platformTables->platform_name }}</option>
                        @endforeach
                    </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label" for="horizontal-form-4">Epic</label>
                                                            <div class="col-md-9">
                                                            <input type="text" name="epic" class="form-control">                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label" for="horizontal-form-5">Estimated Time</label>
                                                            <div class="col-md-9">
                                                            <input type="time" name="estimatedTime" placeholder="Estimated Time">
                                                                
                                                            </div>

                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label" for="horizontal-form-6">Start Time</label>
                                                            <div class="col-md-9">
                                                            <input type="time" name="startTime">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label" for="horizontal-form-7">End Time</label>
                                                            <div class="col-md-9">
                                                              <input type="time" name="endTime" placeholder="End Time">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label" for="horizontal-form-8">Progress</label>
                                                            <div class="col-md-9">
                                                            <input type="number" name="progress" placeholder="Progress">
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label" for="horizontal-form-10">User Story</label>
                                                            <div class="col-md-9">
                                                                <textarea id="horizontal-form-9" rows="6" class="form-control square" name="userStory"></textarea>
                                                               

                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label" for="horizontal-form-9">Images</label>
                                                            <div class="col-md-9">
                                                            <input type="file" name="images" class="form-control" placeholder="Images">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-primary mr-2"><i class="ft-check-square mr-1"></i>Save</button>
                                                <button type="button" class="btn btn-secondary"><i class="ft-x mr-1" href="{{ route('details.index') }}"></i>Cancel</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Horizontal Form Layout ends -->






    <p class="text-center text-primary"><small>MirandaSoft</small></p>

@endsection
