@extends('layouts.backend')

@section('content')


        <div class="pcoded-content">
            <div class="page-header card">
                <div class="row">
                    <div class="col-lg-8 col-xs-8">
                        <div class="page-header-title pull-left">
                            <i class="feather icon-eye bg-c-blue"></i>
                            <div class="d-inline">
                                <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Appointments' }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-4">
                        <div class="page-header-breadcrumb">
                            <ul class=" breadcrumb breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('appointments.appointments.edit', $appointments->id ) }}" class="btn btn-primary" title="Edit Appointments">

                                    <span class="feather icon-edit" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('appointments.appointments.index') }}" class="btn btn-primary" title="Show All Appointments">
                                        <span class="feather icon-list" aria-hidden="true"></span>
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

                            <div class="row">
                                <div class="col-md-12 col-xl-12">

            <dl class="dl-horizontal">
                            <dt>MRN</dt>
            <dd>{{ $appointments->m_r_n }}</dd>
            <dt>Patient Name</dt>
            <dd>{{ $appointments->patient_name }}</dd>
            <dt>Patient</dt>
            <dd>{{ optional($appointments->patient)->id }}</dd>
            <dt>Appointment Time</dt>
            <dd>{{ $appointments->appointment_time }}</dd>
            <dt>Appointment Date</dt>
            <dd>{{ $appointments->appointment_date }}</dd>
            <dt>Time Check In</dt>
            <dd>{{ $appointments->time_check_in }}</dd>
            <dt>Time Check Out</dt>
            <dd>{{ $appointments->time_check_out }}</dd>
            <dt>No Show</dt>
            <dd>{{ $appointments->no_show }}</dd>
            <dt>Patient Address</dt>
            <dd>{{ $appointments->patient_address }}</dd>
            <dt>Contact Number</dt>
            <dd>{{ $appointments->contact_number }}</dd>

            </dl>
                                    <form method="POST" action="{!! route('appointments.appointments.destroy', $appointments->id) !!}" accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}
                                        <div class="btn-group btn-group-sm" role="group">

                                            <a href="{{ route('appointments.appointments.create') }}" class="btn btn-success" title="Create New Appointments">
                                                <span class="feather icon-plus" aria-hidden="true"></span>
                                            </a>
                                            <button type="submit" class="btn btn-danger" title="Delete Appointments" onclick="return confirm(&quot;Delete Appointments??&quot;)">
                                                <span class="feather icon-trash" aria-hidden="true"></span>
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection