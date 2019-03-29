@extends('layouts.backend')

@section('content')


        <div class="pcoded-content">
            <div class="page-header card">
                <div class="row">
                    <div class="col-lg-8 col-xs-8">
                        <div class="page-header-title pull-left">
                            <i class="feather icon-eye bg-c-blue"></i>
                            <div class="d-inline">
                                <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Patient History' }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-4">
                        <div class="page-header-breadcrumb">
                            <ul class=" breadcrumb breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('patient_histories.patient_history.edit', $patientHistory->id ) }}" class="btn btn-primary" title="Edit Patient History">

                                    <span class="feather icon-edit" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('patient_histories.patient_history.index') }}" class="btn btn-primary" title="Show All Patient History">
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
                            {{-- <dt>Patient</dt>
            <dd>{{ optional($patientHistory->patient)->id }}</dd> --}}
            <dt>Patient Name</dt>
            <dd>{{ $patientHistory->patient_name }}</dd>
            <dt>Patient Medical Case</dt>
            <dd>{!! $patientHistory->medical_case !!}</dd>
            <dt>Previous Case</dt>
            <dd>{!! $patientHistory->previous_case !!}</dd>
            <dt>Current Case</dt>
            <dd>{!! $patientHistory->current_case !!}</dd>
            <dt>Patient Address</dt>
            <dd>{{ $patientHistory->patient_address }}</dd>
            <dt>Assigned Doctor</dt>
            <dd>{{ $patientHistory->assigned_doctor }}</dd>

            </dl>
                                    <form method="POST" action="{!! route('patient_histories.patient_history.destroy', $patientHistory->id) !!}" accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}
                                        <div class="btn-group btn-group-sm" role="group">

                                            <a href="{{ route('patient_histories.patient_history.create') }}" class="btn btn-success" title="Create New Patient History">
                                                <span class="feather icon-plus" aria-hidden="true"></span>
                                            </a>
                                            <button type="submit" class="btn btn-danger" title="Delete Patient History" onclick="return confirm(&quot;Delete Patient History??&quot;)">
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