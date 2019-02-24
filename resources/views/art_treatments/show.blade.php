@extends('layouts.backend')

@section('content')


        <div class="pcoded-content">
            <div class="page-header card">
                <div class="row">
                    <div class="col-lg-8 col-xs-8">
                        <div class="page-header-title pull-left">
                            <i class="feather icon-eye bg-c-blue"></i>
                            <div class="d-inline">
                                <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Art Treatment' }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-4">
                        <div class="page-header-breadcrumb">
                            <ul class=" breadcrumb breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('art_treatments.art_treatment.edit', $artTreatment->id ) }}" class="btn btn-primary" title="Edit Art Treatment">

                                    <span class="feather icon-edit" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('art_treatments.art_treatment.index') }}" class="btn btn-primary" title="Show All Art Treatment">
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
                            <dt>Hiv Patient</dt>
            <dd>{{ optional($artTreatment->hivPatient)->patient_name }}</dd>
            <dt>Date Started</dt>
            <dd>{{ $artTreatment->date_started }}</dd>
            <dt>Initial Regimen</dt>
            <dd>{{ $artTreatment->initial_regimen }}</dd>
            <dt>First Line First Substitution</dt>
            <dd>{{ $artTreatment->first_line_first_substitution }}</dd>
            <dt>First Line First Substitute Reason</dt>
            <dd>{{ $artTreatment->first_line_first_substitute_reason }}</dd>
            <dt>First Line First Substitute Date</dt>
            <dd>{{ $artTreatment->first_line_first_substitute_date }}</dd>
            <dt>Second Line Regimen</dt>
            <dd>{{ $artTreatment->second_line_regimen }}</dd>
            <dt>Second Line Reason</dt>
            <dd>{{ $artTreatment->second_line_reason }}</dd>
            <dt>Second Line Date</dt>
            <dd>{{ $artTreatment->second_line_date }}</dd>
            <dt>Second Line Second Substituted</dt>
            <dd>{{ $artTreatment->second_line_second_substituted }}</dd>
            <dt>Second Line Second Substitude Reason</dt>
            <dd>{{ $artTreatment->second_line_second_substitude_reason }}</dd>
            <dt>Second Line Second Substitute Date</dt>
            <dd>{{ $artTreatment->second_line_second_substitute_date }}</dd>

            </dl>
                                    <form method="POST" action="{!! route('art_treatments.art_treatment.destroy', $artTreatment->id) !!}" accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}
                                        <div class="btn-group btn-group-sm" role="group">

                                            <a href="{{ route('art_treatments.art_treatment.create') }}" class="btn btn-success" title="Create New Art Treatment">
                                                <span class="feather icon-plus" aria-hidden="true"></span>
                                            </a>
                                            <button type="submit" class="btn btn-danger" title="Delete Art Treatment" onclick="return confirm(&quot;Delete Art Treatment??&quot;)">
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