@extends('layouts.backend')

@section('content')


        <div class="pcoded-content">
            <div class="page-header card">
                <div class="row">
                    <div class="col-lg-8 col-xs-8">
                        <div class="page-header-title pull-left">
                            <i class="feather icon-eye bg-c-blue"></i>
                            <div class="d-inline">
                                <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Hiv Patient' }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-4">
                        <div class="page-header-breadcrumb">
                            <ul class=" breadcrumb breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('hiv_patients.hiv_patient.edit', $hivPatient->id ) }}" class="btn btn-primary" title="Edit Hiv Patient">

                                    <span class="feather icon-edit" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('hiv_patients.hiv_patient.index') }}" class="btn btn-primary" title="Show All Hiv Patient">
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
                            <dt>Patient Name</dt>
            <dd>{{ $hivPatient->patient_name }}</dd>
            <dt>Facility Client Name</dt>
            <dd>{{ $hivPatient->facility_client_name }}</dd>
            <dt>Unique Code</dt>
            <dd>{{ $hivPatient->unique_code }}</dd>
            <dt>Date Of Birth</dt>
            <dd>{{ $hivPatient->date_of_birth }}</dd>
            <dt>Sex</dt>
            <dd>{{ $hivPatient->sex }}</dd>
            <dt>Address</dt>
            <dd>{{ $hivPatient->address }}</dd>
            <dt>Family Members</dt>
            <dd>{{ $hivPatient->family_members }}</dd>
            <dt>Contact</dt>
            <dd>{{ $hivPatient->contact }}</dd>
            <dt>Date Confirmed Hiv</dt>
            <dd>{{ $hivPatient->date_confirmed_hiv }}</dd>
            <dt>Hiv Type</dt>
            <dd>{{ $hivPatient->hiv_type }}</dd>

            </dl>
                                    <form method="POST" action="{!! route('hiv_patients.hiv_patient.destroy', $hivPatient->id) !!}" accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}
                                        <div class="btn-group btn-group-sm" role="group">

                                            <a href="{{ route('hiv_patients.hiv_patient.create') }}" class="btn btn-success" title="Create New Hiv Patient">
                                                <span class="feather icon-plus" aria-hidden="true"></span>
                                            </a>
                                            <button type="submit" class="btn btn-danger" title="Delete Hiv Patient" onclick="return confirm(&quot;Delete Hiv Patient??&quot;)">
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