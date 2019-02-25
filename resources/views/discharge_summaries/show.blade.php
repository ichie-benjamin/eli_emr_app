@extends('layouts.backend')

@section('content')


        <div class="pcoded-content">
            <div class="page-header card">
                <div class="row">
                    <div class="col-lg-8 col-xs-8">
                        <div class="page-header-title pull-left">
                            <i class="feather icon-eye bg-c-blue"></i>
                            <div class="d-inline">
                                <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Discharge Summary' }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-4">
                        <div class="page-header-breadcrumb">
                            <ul class=" breadcrumb breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('discharge_summaries.discharge_summary.edit', $dischargeSummary->id ) }}" class="btn btn-primary" title="Edit Discharge Summary">

                                    <span class="feather icon-edit" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('discharge_summaries.discharge_summary.index') }}" class="btn btn-primary" title="Show All Discharge Summary">
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
                            <dt>Patient</dt>
            <dd>{{ optional($dischargeSummary->patient)->id }}</dd>
            <dt>Surname</dt>
            <dd>{{ $dischargeSummary->surname }}</dd>
            <dt>Forname</dt>
            <dd>{{ $dischargeSummary->forname }}</dd>
            <dt>Date Of Birth</dt>
            <dd>{{ $dischargeSummary->date_of_birth }}</dd>
            <dt>N H S</dt>
            <dd>{{ $dischargeSummary->NHS }}</dd>
            <dt>Address</dt>
            <dd>{{ $dischargeSummary->address }}</dd>
            <dt>Phone</dt>
            <dd>{{ $dischargeSummary->phone }}</dd>
            <dt>Discharging Consultant</dt>
            <dd>{{ $dischargeSummary->discharging_consultant }}</dd>
            <dt>Discharging Specialty</dt>
            <dd>{{ $dischargeSummary->discharging_specialty }}</dd>
            <dt>Method Of Admission</dt>
            <dd>{{ $dischargeSummary->method_of_admission }}</dd>
            <dt>Date Of Discharge</dt>
            <dd>{{ $dischargeSummary->date_of_discharge }}</dd>
            <dt>G P Details</dt>
            <dd>{{ $dischargeSummary->GP_details }}</dd>
            <dt>Diagnosis At Discharge</dt>
            <dd>{{ $dischargeSummary->diagnosis_at_discharge }}</dd>
            <dt>Operation And Procedures</dt>
            <dd>{{ $dischargeSummary->operation_and_procedures }}</dd>
            <dt>Reasons For Admission And Presenting Complaint</dt>
            <dd>{{ $dischargeSummary->reasons_for_admission_and_presenting_complaint }}</dd>
            <dt>Clinical Narrative</dt>
            <dd>{{ $dischargeSummary->clinical_narrative }}</dd>
            <dt>Relevant Investigation And Result</dt>
            <dd>{{ $dischargeSummary->relevant_investigation_and_result }}</dd>
            <dt>Discharge Destination</dt>
            <dd>{{ $dischargeSummary->discharge_destination }}</dd>
            <dt>Relevant Legal Information</dt>
            <dd>{{ $dischargeSummary->relevant_legal_information }}</dd>
            <dt>Information Given To Patient</dt>
            <dd>{{ $dischargeSummary->information_given_to_patient }}</dd>
            <dt>G P Actions (Pls Specify Date)</dt>
            <dd>{{ $dischargeSummary->GP_actions }}</dd>
            <dt>Strategies For Potential Problems</dt>
            <dd>{{ $dischargeSummary->strategies_for_potential_problems }}</dd>
            <dt>Medication Stopped</dt>
            <dd>{{ $dischargeSummary->medication_stopped }}</dd>
            <dt>Discharging Doctor Name</dt>
            <dd>{{ $dischargeSummary->discharging_doctor_name }}</dd>
            <dt>Bleep No</dt>
            <dd>{{ $dischargeSummary->bleep_no }}</dd>

            </dl>
                                    <form method="POST" action="{!! route('discharge_summaries.discharge_summary.destroy', $dischargeSummary->id) !!}" accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}
                                        <div class="btn-group btn-group-sm" role="group">

                                            <a href="{{ route('discharge_summaries.discharge_summary.create') }}" class="btn btn-success" title="Create New Discharge Summary">
                                                <span class="feather icon-plus" aria-hidden="true"></span>
                                            </a>
                                            <button type="submit" class="btn btn-danger" title="Delete Discharge Summary" onclick="return confirm(&quot;Delete Discharge Summary??&quot;)">
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