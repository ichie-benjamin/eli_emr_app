@extends('layouts.backend')

@section('content')


        <div class="pcoded-content">
            <div class="page-header card">
                <div class="row">
                    <div class="col-lg-8 col-xs-8">
                        <div class="page-header-title pull-left">
                            <i class="feather icon-eye bg-c-blue"></i>
                            <div class="d-inline">
                                <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Nursing Visit' }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-4">
                        <div class="page-header-breadcrumb">
                            <ul class=" breadcrumb breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('nursing_visits.nursing_visit.edit', $nursingVisit->id ) }}" class="btn btn-primary" title="Edit Nursing Visit">

                                    <span class="feather icon-edit" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('nursing_visits.nursing_visit.index') }}" class="btn btn-primary" title="Show All Nursing Visit">
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
            <dd>{{ optional($nursingVisit->patient)->id }}</dd> --}}
            <dt>Patient Name</dt>
            <dd>{{ $nursingVisit->patient_name }}</dd>
            <dt>Patient Case</dt>
            <dd>{!! $nursingVisit->patient_case !!}</dd>
            <dt>Nurse Report</dt>
            <dd>{!! $nursingVisit->nurse_report !!}</dd>
            <dt>Time In</dt>
            <dd>{{ $nursingVisit->time_in }}</dd>
            <dt>Time Out</dt>
            <dd>{{ $nursingVisit->time_out }}</dd>
            <dt>Patient Status</dt>
            <dd>{{ $nursingVisit->patient_status }}</dd>

            </dl>
                                    <form method="POST" action="{!! route('nursing_visits.nursing_visit.destroy', $nursingVisit->id) !!}" accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}
                                        <div class="btn-group btn-group-sm" role="group">

                                            <a href="{{ route('nursing_visits.nursing_visit.create') }}" class="btn btn-success" title="Create New Nursing Visit">
                                                <span class="feather icon-plus" aria-hidden="true"></span>
                                            </a>
                                            <button type="submit" class="btn btn-danger" title="Delete Nursing Visit" onclick="return confirm(&quot;Delete Nursing Visit??&quot;)">
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