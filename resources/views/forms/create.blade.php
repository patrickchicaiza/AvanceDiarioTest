@extends('layouts.appWizard')


@section('content')    

<div class="row">
                        <div class="col-12">
                            <div class="content-header">Form Wizard</div>
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
	
<!-- Wizard Starts -->
<section id="icon-tabs">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="icons-tab-steps" action="{{ route('forms.store') }}" method="POST">
                            @csrf
                            <!-- Step 1 -->
                            <h6>Step 1</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="1-city">Select User</label>
                                            <select class="custom-select form-control" id="1-city" name="user_id">
                                                <option value="" selected disabled>Select User</option>
                                                @foreach ($userTable as $userTables)
                                                <option value="{{ $userTables->id }}">{{ $userTables->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="1-date">Date</label>
                                            <div class='input-group'>
                                            <input type="date" name="date" class="form-control" placeholder="Date">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <span class="fa fa-calendar-o"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="1-email">Entry Time</label>
                                            <input type="time" class="form-control" id="1-email" name="entryTime">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="1-email">Departure Time</label>
                                            <input type="time" class="form-control" id="1-email" name="departureTime">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                                    <button type="submit" class="btn btn-primary">Submit</button>

                                </div>

                            </fieldset>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Wizard Ends -->
@endsection