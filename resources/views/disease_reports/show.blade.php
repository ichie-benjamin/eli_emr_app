@extends('layouts.backend')

@section('content')


        <div class="pcoded-content">
            <div class="page-header card">
                <div class="row">
                    <div class="col-lg-8 col-xs-8">
                        <div class="page-header-title pull-left">
                            <i class="feather icon-eye bg-c-blue"></i>
                            <div class="d-inline">
                                <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Disease Report' }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-4">
                        <div class="page-header-breadcrumb">
                            <ul class=" breadcrumb breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('disease_reports.disease_report.edit', $diseaseReport->id ) }}" class="btn btn-primary" title="Edit Disease Report">

                                    <span class="feather icon-edit" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('disease_reports.disease_report.index') }}" class="btn btn-primary" title="Show All Disease Report">
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
                            <dt>Name Of Disease</dt>
            <dd>{{ $diseaseReport->name_of_disease }}</dd>
            <dt>Date</dt>
            <dd>{{ $diseaseReport->date }}</dd>
            <dt>Country</dt>
            <dd>{{ $diseaseReport->country }}</dd>
            <dt>Patients</dt>
            <dd>{{ optional($diseaseReport->patient)->id }}</dd>
            <dt>Patient First Name</dt>
            <dd>{{ $diseaseReport->patient_first_name }}</dd>
            <dt>Patient Last Name</dt>
            <dd>{{ $diseaseReport->patient_last_name }}</dd>
            <dt>Date Of Birth</dt>
            <dd>{{ $diseaseReport->date_of_birth }}</dd>
            <dt>Gender</dt>
            <dd>{{ $diseaseReport->gender }}</dd>
            <dt>Ethic Origin</dt>
            <dd>{{ $diseaseReport->ethic_origin }}</dd>
            <dt>Area Code</dt>
            <dd>{{ $diseaseReport->area_code }}</dd>
            <dt>Phone</dt>
            <dd>{{ $diseaseReport->phone }}</dd>
            <dt>Time</dt>
            <dd>{{ $diseaseReport->time }}</dd>
            <dt>Address</dt>
            <dd>{{ $diseaseReport->address }}</dd>
            <dt>City</dt>
            <dd>{{ $diseaseReport->city }}</dd>
            <dt>State/Province</dt>
            <dd>{{ $diseaseReport->state }}</dd>
            <dt>Zip Code</dt>
            <dd>{{ $diseaseReport->zip_code }}</dd>
            <dt>Was patient hospitalized for this disease?</dt>
            <dd>{{ $diseaseReport->was_hospitalized }}</dd>
            <dt>Did patient die from this disease?</dt>
            <dd>{{ $diseaseReport->did_patients_die }}</dd>
            <dt>Is Patient Pregnant</dt>
            <dd>{{ ($diseaseReport->is_patient_pregnant) ? 'Yes' : 'No' }}</dd>
            <dt>Patient Associated With</dt>
            <dd>{{ implode('; ', $diseaseReport->patient_associated_with) }}</dd>
            <dt>Under which district did the exposure occur?</dt>
            <dd>{{ implode('; ', $diseaseReport->exposure_occurance_district) }}</dd>
            <dt>Country Of Exposure</dt>
            <dd>{{ implode('; ', $diseaseReport->country_of_exposure) }}</dd>
            <dt>Show Symbol</dt>
            <dd>{{ $diseaseReport->show_symbol }}</dd>
            <dt>Sympton Date</dt>
            <dd>{{ $diseaseReport->sympton_date }}</dd>
            <dt>Is Sexually Transmitted</dt>
            <dd>{{ ($diseaseReport->is_sexually_transmitted) ? 'Yes' : 'No' }}</dd>
            <dt>Name Of Facility</dt>
            <dd>{{ $diseaseReport->name_of_facility }}</dd>
            <dt>Findings Summary</dt>
            <dd>{{ $diseaseReport->findings_summary }}</dd>
            <dt>First Name Of Principal Investigator</dt>
            <dd>{{ $diseaseReport->first_name_of_principal_investigator }}</dd>
            <dt>Last Name Of Principal Investigator</dt>
            <dd>{{ $diseaseReport->last_name_of_principal_investigator }}</dd>
            <dt>Area Code Of Investigator</dt>
            <dd>{{ $diseaseReport->area_code_of_investigator }}</dd>
            <dt>Phone Of Investigator</dt>
            <dd>{{ $diseaseReport->phone_of_investigator }}</dd>

            </dl>
                                    <form method="POST" action="{!! route('disease_reports.disease_report.destroy', $diseaseReport->id) !!}" accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}
                                        <div class="btn-group btn-group-sm" role="group">

                                            <a href="{{ route('disease_reports.disease_report.create') }}" class="btn btn-success" title="Create New Disease Report">
                                                <span class="feather icon-plus" aria-hidden="true"></span>
                                            </a>
                                            <button type="submit" class="btn btn-danger" title="Delete Disease Report" onclick="return confirm(&quot;Delete Disease Report??&quot;)">
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