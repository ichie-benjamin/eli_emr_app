@extends('layouts.backend')

@section('content')
    <div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-list bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Hiv Patients</h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('hiv_patients.hiv_patient.create') }}" class="btn btn-success" title="Create New Hiv Patient">
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
        @if(count($hivPatients) == 0)
            <div class="panel-body text-center">
                <h4>No Hiv Patients Available!</h4>
            </div>
        @else
            <div class="panel-body panel-body-with-table">
                <div class="table-responsive">

                    <table class="table table-striped" id="datatable">
                        <thead>
                        <tr>
                                                        <th>Patient Name</th>
                            <th>Facility Client Name</th>
                            <th>Unique Code</th>
                            <th>Date Of Birth</th>
                            <th>Sex</th>
                            <th>Address</th>
                            <th>Family Members</th>
                            <th>Contact</th>
                            <th>Date Confirmed Hiv</th>
                            <th>Hiv Type</th>

                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($hivPatients as $hivPatient)
                            <tr>
                                                            <td>{{ $hivPatient->patient_name }}</td>
                            <td>{{ $hivPatient->facility_client_name }}</td>
                            <td>{{ $hivPatient->unique_code }}</td>
                            <td>{{ $hivPatient->date_of_birth }}</td>
                            <td>{{ $hivPatient->sex }}</td>
                            <td>{{ $hivPatient->address }}</td>
                            <td>{{ $hivPatient->family_members }}</td>
                            <td>{{ $hivPatient->contact }}</td>
                            <td>{{ $hivPatient->date_confirmed_hiv }}</td>
                            <td>{{ $hivPatient->hiv_type }}</td>

                                <td>

                                    <form method="POST" action="{!! route('hiv_patients.hiv_patient.destroy', $hivPatient->id) !!}" accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                            <a href="{{ route('hiv_patients.hiv_patient.show', $hivPatient->id ) }}" class="btn btn-sm btn-info" title="Show Hiv Patient">
                                                <span class="feather icon-eye" aria-hidden="true"></span>
                                            </a>
                                            <a href="{{ route('hiv_patients.hiv_patient.edit', $hivPatient->id ) }}" class="btn btn-sm btn-primary" title="Edit Hiv Patient">
                                                <span class="feather icon-edit" aria-hidden="true"></span>
                                            </a>

                                            <button type="submit" class="btn btn-sm btn-danger" title="Delete Hiv Patient" onclick="return confirm(&quot;Delete Hiv Patient?&quot;)">
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
                {!! $hivPatients->render() !!}
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