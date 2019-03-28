@extends('layouts.backend')

@section('content')
    <div class="pcoded-content">
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="feather icon-list bg-c-blue"></i>
                        <div class="d-inline">
                            <h5>Daily Schedules</h5>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class=" breadcrumb breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="{{ route('daily_schedules.daily_schedule.create') }}" class="btn btn-success" title="Create New Daily Schedule">
                                    <span class="feather icon-plus" aria-hidden="true"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-12 col-xl-12">
                                        <div id="wizard">
                                            <section>

                        <div class="row">

                            @if(Session::has('success_message'))
                                <div class="col-md-12">
                                    <div class="alert alert-success">
                                        <span class="glyphicon glyphicon-ok"></span>
                                        {!! session('success_message') !!}

                                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                    </div>
                                </div>
                            @endif

                            <div class="col-md-12">
                                @if(count($dailySchedules) == 0)
                                    <div class="panel-body text-center">
                                        <h4>No Daily Schedules Available!</h4>
                                    </div>
                                @else
                                    <div class="panel-body panel-body-with-table">
                                        <div class="table-responsive">

                                            <table class="table table-striped" id="datatable">
                                                <thead>
                                                <tr>
                                                                                <th>M R N</th>
                            <th>Patient Name</th>
                            <th>Patient</th>
                            <th>Chief Complient</th>
                            <th>Appointment Time</th>
                            <th>Time Check In</th>
                            <th>Time Check Out</th>
                            <th>No Show</th>

                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($dailySchedules as $dailySchedule)
                                                    <tr>
                                                                                    <td>{{ $dailySchedule->m_r_n }}</td>
                            <td>{{ $dailySchedule->patient_name }}</td>
                            <td>{{ optional($dailySchedule->patient)->id }}</td>
                            <td>{{ $dailySchedule->chief_complient }}</td>
                            <td>{{ $dailySchedule->appointment_time }}</td>
                            <td>{{ $dailySchedule->time_check_in }}</td>
                            <td>{{ $dailySchedule->time_check_out }}</td>
                            <td>{{ $dailySchedule->no_show }}</td>

                                                        <td>

                                                            <form method="POST" action="{!! route('daily_schedules.daily_schedule.destroy', $dailySchedule->id) !!}" accept-charset="UTF-8">
                                                                <input name="_method" value="DELETE" type="hidden">
                                                                {{ csrf_field() }}

                                                                <div class="btn-group btn-group-xs pull-right" role="group">
                                                                    <a href="{{ route('daily_schedules.daily_schedule.show', $dailySchedule->id ) }}" class="btn btn-sm btn-info" title="Show Daily Schedule">
                                                                        <span class="feather icon-eye" aria-hidden="true"></span>
                                                                    </a>
                                                                    <a href="{{ route('daily_schedules.daily_schedule.edit', $dailySchedule->id ) }}" class="btn btn-sm btn-primary" title="Edit Daily Schedule">
                                                                        <span class="feather icon-edit" aria-hidden="true"></span>
                                                                    </a>

                                                                    <button type="submit" class="btn btn-sm btn-danger" title="Delete Daily Schedule" onclick="return confirm(&quot;Delete Daily Schedule?&quot;)">
                                                                        <span class="feather icon-trash" aria-hidden="true"></span>
                                                                    </button>
                                                                </div>

                                                            </form>

                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>

                                    <div class="panel-footer">
                                        {!! $dailySchedules->render() !!}
                                    </div>

                                @endif
                            </div>
                        </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection