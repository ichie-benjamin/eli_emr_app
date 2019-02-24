@extends('layouts.backend')

@section('content')


        <div class="pcoded-content">
            <div class="page-header card">
                <div class="row">
                    <div class="col-lg-8 col-xs-8">
                        <div class="page-header-title pull-left">
                            <i class="feather icon-eye bg-c-blue"></i>
                            <div class="d-inline">
                                <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Treatment Record' }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-4">
                        <div class="page-header-breadcrumb">
                            <ul class=" breadcrumb breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('treatment_records.treatment_record.edit', $treatmentRecord->id ) }}" class="btn btn-primary" title="Edit Treatment Record">

                                    <span class="feather icon-edit" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('treatment_records.treatment_record.index') }}" class="btn btn-primary" title="Show All Treatment Record">
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
            <dd>{{ optional($treatmentRecord->hivPatient)->patient_name }}</dd>
            <dt>Date</dt>
            <dd>{{ $treatmentRecord->date }}</dd>
            <dt>Scheduled</dt>
            <dd>{{ $treatmentRecord->scheduled }}</dd>
            <dt>Clinician</dt>
            <dd>{{ $treatmentRecord->clinician }}</dd>
            <dt>Reason For Visit</dt>
            <dd>{{ $treatmentRecord->reason_for_visit }}</dd>
            <dt>Observed Symptoms</dt>
            <dd>{{ $treatmentRecord->observed_symptoms }}</dd>
            <dt>Adherence</dt>
            <dd>{{ $treatmentRecord->adherence }}</dd>
            <dt>Height</dt>
            <dd>{{ $treatmentRecord->height }}</dd>
            <dt>Weight</dt>
            <dd>{{ $treatmentRecord->weight }}</dd>
            <dt>L M B</dt>
            <dd>{{ $treatmentRecord->LMB }}</dd>
            <dt>T B Status</dt>
            <dd>{{ $treatmentRecord->TB_status }}</dd>
            <dt>Aids Associated Conditions</dt>
            <dd>{{ $treatmentRecord->aids_associated_conditions }}</dd>
            <dt>Functional Status</dt>
            <dd>{{ $treatmentRecord->functional_status }}</dd>
            <dt>W H O Stage</dt>
            <dd>{{ $treatmentRecord->WHO_stage }}</dd>
            <dt>C D Count</dt>
            <dd>{{ $treatmentRecord->CD_count }}</dd>
            <dt>A L T</dt>
            <dd>{{ $treatmentRecord->ALT }}</dd>
            <dt>H B</dt>
            <dd>{{ $treatmentRecord->HB }}</dd>
            <dt>Creatinine</dt>
            <dd>{{ $treatmentRecord->creatinine }}</dd>
            <dt>C T X Dose</dt>
            <dd>{{ $treatmentRecord->CTX_dose }}</dd>
            <dt>A R T  Regimen</dt>
            <dd>{{ $treatmentRecord->ART_Regimen }}</dd>
            <dt>Date Of Next Visit</dt>
            <dd>{{ $treatmentRecord->date_of_next_visit }}</dd>
            <dt>Comments</dt>
            <dd>{{ $treatmentRecord->comments }}</dd>

            </dl>
                                    <form method="POST" action="{!! route('treatment_records.treatment_record.destroy', $treatmentRecord->id) !!}" accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}
                                        <div class="btn-group btn-group-sm" role="group">

                                            <a href="{{ route('treatment_records.treatment_record.create') }}" class="btn btn-success" title="Create New Treatment Record">
                                                <span class="feather icon-plus" aria-hidden="true"></span>
                                            </a>
                                            <button type="submit" class="btn btn-danger" title="Delete Treatment Record" onclick="return confirm(&quot;Delete Treatment Record??&quot;)">
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