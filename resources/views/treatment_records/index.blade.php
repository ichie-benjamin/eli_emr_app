@extends('layouts.backend')

@section('content')
    <div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-list bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Treatment Records</h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('treatment_records.treatment_record.create') }}" class="btn btn-success" title="Create New Treatment Record">
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
        @if(count($treatmentRecords) == 0)
            <div class="panel-body text-center">
                <h4>No Treatment Records Available!</h4>
            </div>
        @else
            <div class="panel-body panel-body-with-table">
                <div class="table-responsive">

                    <table class="table table-striped" id="datatable">
                        <thead>
                        <tr>
                                                        <th>Hiv Patient</th>
                            <th>Date</th>
                            <th>Scheduled</th>
                            <th>Clinician</th>
                            <th>Reason For Visit</th>
                            <th>Observed Symptoms</th>
                            <th>Adherence</th>
                            <th>Height</th>
                            <th>Weight</th>
                            <th>L M B</th>
                            <th>T B Status</th>
                            <th>Aids Associated Conditions</th>
                            <th>Functional Status</th>
                            <th>W H O Stage</th>
                            <th>C D Count</th>
                            <th>A L T</th>
                            <th>H B</th>
                            <th>Creatinine</th>
                            <th>C T X Dose</th>
                            <th>A R T  Regimen</th>
                            <th>Date Of Next Visit</th>
                            <th>Comments</th>

                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($treatmentRecords as $treatmentRecord)
                            <tr>
                                                            <td>{{ optional($treatmentRecord->hivPatient)->patient_name }}</td>
                            <td>{{ $treatmentRecord->date }}</td>
                            <td>{{ $treatmentRecord->scheduled }}</td>
                            <td>{{ $treatmentRecord->clinician }}</td>
                            <td>{{ $treatmentRecord->reason_for_visit }}</td>
                            <td>{{ $treatmentRecord->observed_symptoms }}</td>
                            <td>{{ $treatmentRecord->adherence }}</td>
                            <td>{{ $treatmentRecord->height }}</td>
                            <td>{{ $treatmentRecord->weight }}</td>
                            <td>{{ $treatmentRecord->LMB }}</td>
                            <td>{{ $treatmentRecord->TB_status }}</td>
                            <td>{{ $treatmentRecord->aids_associated_conditions }}</td>
                            <td>{{ $treatmentRecord->functional_status }}</td>
                            <td>{{ $treatmentRecord->WHO_stage }}</td>
                            <td>{{ $treatmentRecord->CD_count }}</td>
                            <td>{{ $treatmentRecord->ALT }}</td>
                            <td>{{ $treatmentRecord->HB }}</td>
                            <td>{{ $treatmentRecord->creatinine }}</td>
                            <td>{{ $treatmentRecord->CTX_dose }}</td>
                            <td>{{ $treatmentRecord->ART_Regimen }}</td>
                            <td>{{ $treatmentRecord->date_of_next_visit }}</td>
                            <td>{{ $treatmentRecord->comments }}</td>

                                <td>

                                    <form method="POST" action="{!! route('treatment_records.treatment_record.destroy', $treatmentRecord->id) !!}" accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                            <a href="{{ route('treatment_records.treatment_record.show', $treatmentRecord->id ) }}" class="btn btn-sm btn-info" title="Show Treatment Record">
                                                <span class="feather icon-eye" aria-hidden="true"></span>
                                            </a>
                                            <a href="{{ route('treatment_records.treatment_record.edit', $treatmentRecord->id ) }}" class="btn btn-sm btn-primary" title="Edit Treatment Record">
                                                <span class="feather icon-edit" aria-hidden="true"></span>
                                            </a>

                                            <button type="submit" class="btn btn-sm btn-danger" title="Delete Treatment Record" onclick="return confirm(&quot;Delete Treatment Record?&quot;)">
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
                {!! $treatmentRecords->render() !!}
            </div>

        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection