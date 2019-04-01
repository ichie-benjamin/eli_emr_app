@extends('layouts.backend')

@section('content')
    <div class="pcoded-content">

        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="feather icon-home bg-c-blue"></i>
                        <div class="d-inline">
                            <h5>Dashboard</h5>
                            <span>Eli Health Record System for Medical Report </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class=" breadcrumb breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="#"><i class="feather icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="pcoded-inner-content">
            <div class="main-body" id="home">
                <div class="page-wrapper">
                    <div class="page-body">

                        <div class="row text-center" >

                            <div class="col-md-12 col-xl-2">
                                <div class="card comp-card home-card">
                                    <div class="card-header">
                                        <h5>Pharmacy</h5>
                                    </div>
                                    <div class="card-body text-center">
                                        <div class="row align-items-center">

                                            <div class="col-auto align-content-center">
                                                <a href="{{ route('drugs.drug.index') }}"><i class="fas fa-building bg-c-blue"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="card-block">
                                    <div id="sales-analytics" class="chart-shadow" style="height:380px"></div>
                                    </div> -->
                                </div>
                            </div>
                            {{--<div class="col-md-12 col-xl-2">--}}
                                {{--<div class="card comp-card">--}}
                                    {{--<div class="card-header">--}}
                                        {{--<h5>Admission</h5>--}}
                                    {{--</div>--}}
                                    {{--<div class="card-body text-center">--}}
                                        {{--<div class="row align-items-center">--}}
                                            {{--<div class="col">--}}
                                                {{--<h6 class="m-b-25">Impressions</h6>--}}
                                                {{--<h3 class="f-w-700 text-c-blue">15</h3>--}}
                                                {{--<p class="m-b-0">May 23 - June 01 (2017)</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-auto align-content-center">--}}
                                                {{--<i class="fas fa-compass bg-c-blue"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!-- <div class="card-block">--}}
                                    {{--<div id="sales-analytics" class="chart-shadow" style="height:380px"></div>--}}
                                    {{--</div> -->--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="col-md-12 col-xl-2">
                                <div class="card comp-card">
                                    <div class="card-header">
                                        <h5>Patients</h5>
                                    </div>
                                    <div class="card-body text-center">
                                        <div class="row align-items-center">

                                            <div class="col-auto align-content-center">
                                                <a href="{{ route('patients.patient.index') }}"<i class="fas fa-users bg-c-blue"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="card-block">
                                    <div id="sales-analytics" class="chart-shadow" style="height:380px"></div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-2">
                                <div class="card comp-card">
                                    <div class="card-header">
                                        <h5>Mortality</h5>
                                    </div>
                                    <div class="card-body text-center">
                                        <div class="row align-items-center">

                                            <div class="col-auto align-content-center">
                                               <a href="{{ route('infant_mortalities.infant_mortality.index') }}"><i class="fas fa-deaf bg-c-blue"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="card-block">
                                    <div id="sales-analytics" class="chart-shadow" style="height:380px"></div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-2">
                                <div class="card comp-card">
                                    <div class="card-header">
                                        <h5>HIV Patients</h5>
                                    </div>
                                    <div class="card-body text-center">
                                        <div class="row align-items-center">

                                            <div class="col-auto align-content-center">
                                               <a href="{{ route('infant_mortalities.infant_mortality.index') }}"><i class="fas fa-user-secret bg-c-blue"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="card-block">
                                    <div id="sales-analytics" class="chart-shadow" style="height:380px"></div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-2">
                                <div class="card comp-card">
                                    <div class="card-header">
                                        <h5>E Call Log</h5>
                                    </div>
                                    <div class="card-body text-center">
                                        <div class="row align-items-center">

                                            <div class="col-auto align-content-center">
                                               <a href="{{ route('emer_call_logs.emer_call_log.index') }}"><i class="fas fa-phone bg-c-blue"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="card-block">
                                    <div id="sales-analytics" class="chart-shadow" style="height:380px"></div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-2">
                                <div class="card comp-card">
                                    <div class="card-header">
                                        <h5>P Call Log</h5>
                                    </div>
                                    <div class="card-body text-center">
                                        <div class="row align-items-center">

                                            <div class="col-auto align-content-center">
                                               <a href="{{ route('patient_call_logs.patient_call_log.index') }}"><i class="fas fa-mobile bg-c-blue"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="card-block">
                                    <div id="sales-analytics" class="chart-shadow" style="height:380px"></div>
                                    </div> -->
                                </div>
                            </div>



                            {{--<div class="col-md-12 col-xl-2">--}}
                                {{--<div class="card comp-card">--}}
                                    {{--<div class="card-header">--}}
                                        {{--<h5>Logs</h5>--}}
                                    {{--</div>--}}
                                    {{--<div class="card-body text-center">--}}
                                        {{--<div class="row align-items-center">--}}

                                            {{--<div class="col-auto align-content-center">--}}
                                                {{--<a href=""><i class="fas fa-stop bg-c-blue"></i></a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!-- <div class="card-block">--}}
                                    {{--<div id="sales-analytics" class="chart-shadow" style="height:380px"></div>--}}
                                    {{--</div> -->--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-12 col-xl-2">--}}
                                {{--<div class="card comp-card">--}}
                                    {{--<div class="card-header">--}}
                                        {{--<h5>Media</h5>--}}
                                    {{--</div>--}}
                                    {{--<div class="card-body text-center">--}}
                                        {{--<div class="row align-items-center">--}}

                                            {{--<div class="col-auto align-content-center">--}}
                                                {{--<a href="{{ route('admin.media') }}"><i class="fas fa-file bg-c-blue"></i></a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!-- <div class="card-block">--}}
                                    {{--<div id="sales-analytics" class="chart-shadow" style="height:380px"></div>--}}
                                    {{--</div> -->--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-12 col-xl-2">--}}
                                {{--<div class="card comp-card">--}}
                                    {{--<div class="card-header">--}}
                                        {{--<h5>Settings</h5>--}}
                                    {{--</div>--}}
                                    {{--<div class="card-body text-center">--}}
                                        {{--<div class="row align-items-center">--}}

                                            {{--<div class="col-auto align-content-center">--}}
                                                {{--<a href="{{ route('settings.setting.index') }}"><i class="fas fa-cogs bg-c-blue"></i></a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!-- <div class="card-block">--}}
                                    {{--<div id="sales-analytics" class="chart-shadow" style="height:380px"></div>--}}
                                    {{--</div> -->--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-12 col-xl-2">--}}
                                {{--<div class="card comp-card">--}}
                                    {{--<div class="card-header">--}}
                                        {{--<h5>Sliders</h5>--}}
                                    {{--</div>--}}
                                    {{--<div class="card-body text-center">--}}
                                        {{--<div class="row align-items-center">--}}

                                            {{--<div class="col-auto align-content-center">--}}
                                                {{--<a href="{{ route('sliders.slider.index') }}"><i class="fas fa-sliders-h bg-c-blue"></i></a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!-- <div class="card-block">--}}
                                    {{--<div id="sales-analytics" class="chart-shadow" style="height:380px"></div>--}}
                                    {{--</div> -->--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-12 col-xl-2">--}}
                                {{--<div class="card comp-card">--}}
                                    {{--<div class="card-header">--}}
                                        {{--<h5>Roles</h5>--}}
                                    {{--</div>--}}
                                    {{--<div class="card-body text-center">--}}
                                        {{--<div class="row align-items-center">--}}

                                            {{--<div class="col-auto align-content-center">--}}
                                                {{--<a href="{{ route('roles.role.index') }}"><i class="fas fa-user-md bg-c-blue"></i></a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!-- <div class="card-block">--}}
                                    {{--<div id="sales-analytics" class="chart-shadow" style="height:380px"></div>--}}
                                    {{--</div> -->--}}
                                {{--</div>--}}
                            {{--</div>--}}









                        </div>

                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-12 col-xl-12">
                                        <div id="wizard">
                                            <h3 class="text-center">Daily Schedule</h3>
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

                                                                    <table class="table table-striped table-condensed table-bordered" id="datatable">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Calender</th>
                                                                            <th>M R N</th>
                                                                            <th>Patient Name</th>
                                                                            {{--<th>Patient</th>--}}
                                                                            {{--<th>Chief Complient</th>--}}
                                                                            <th>Appointment Time</th>
                                                                            <th>Time Check In</th>
                                                                            <th>Time Check Out</th>
                                                                            <th width="5">No Show</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        @foreach($dailySchedules as $dailySchedule)
                                                                            <tr>
                                                                                <td> <span class="feather icon-calendar" aria-hidden="true"></span> </td>
                                                                                <td>{{ $dailySchedule->m_r_n }}</td>
                                                                                <td>{{ $dailySchedule->patient_name }}</td>
{{--                                                                                <td>{{ optional($dailySchedule->patient)->id }}</td>--}}
{{--                                                                                <td>{{ $dailySchedule->chief_complient }}</td>--}}
                                                                                <td>{{ $dailySchedule->appointment_time }}</td>
                                                                                <td>{{ $dailySchedule->time_check_in }}</td>
                                                                                <td>{{ $dailySchedule->time_check_out }}</td>
                                                                                <td style="background-color: {{ $dailySchedule->no_show ? 'green' : 'red' }}"></td>
{{--                                                                                <td>{{ $dailySchedule->no_show }}</td>--}}
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