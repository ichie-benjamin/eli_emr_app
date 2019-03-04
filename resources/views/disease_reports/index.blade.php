@extends('layouts.backend')

@section('content')
    <div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-list bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Disease Reports</h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('disease_reports.disease_report.create') }}" class="btn btn-success" title="Create New Disease Report">
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
        @if(count($diseaseReports) == 0)
            <div class="panel-body text-center">
                <h4>No Disease Reports Available!</h4>
            </div>
        @else
            <div class="panel-body panel-body-with-table">
                <div class="table-responsive">

                    <table class="table table-striped" id="datatable">
                        <thead>
                        <tr>
                                                        <th>Name Of Disease</th>
                            <th>Date</th>
                            <th>Country</th>
                            {{--<th>Patients</th>--}}
                            <th>Patient First Name</th>
                            <th>Patient Last Name</th>
                            <th>Date Of Birth</th>
                            {{--<th>Gender</th>--}}
                            <th>Ethic Origin</th>
                            {{--<th>Area Code</th>--}}
                            {{--<th>Phone</th>--}}
                            {{--<th>Time</th>--}}
                            {{--<th>Address</th>--}}
                            {{--<th>City</th>--}}
                            {{--<th>State/Province</th>--}}
                            {{--<th>Zip Code</th>--}}
                            {{--<th>Was patient hospitalized for this disease?</th>--}}
                            {{--<th>Did patient die from this disease?</th>--}}
                            {{--<th>Is Patient Pregnant</th>--}}
                            {{--<th>Patient Associated With</th>--}}
                            {{--<th>Under which district did the exposure occur?</th>--}}
                            {{--<th>Country Of Exposure</th>--}}
                            {{--<th>Show Symbol</th>--}}
                            {{--<th>Sympton Date</th>--}}
                            {{--<th>Is Sexually Transmitted</th>--}}
                            {{--<th>Name Of Facility</th>--}}
                            {{--<th>Findings Summary</th>--}}
                            {{--<th>First Name Of Principal Investigator</th>--}}
                            {{--<th>Last Name Of Principal Investigator</th>--}}
                            {{--<th>Area Code Of Investigator</th>--}}
                            {{--<th>Phone Of Investigator</th>--}}

                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($diseaseReports as $diseaseReport)
                            <tr>
                                                            <td>{{ $diseaseReport->name_of_disease }}</td>
                            <td>{{ $diseaseReport->date }}</td>
                            <td>{{ $diseaseReport->country }}</td>
{{--                            <td>{{ optional($diseaseReport->patient)->id }}</td>--}}
                            <td>{{ $diseaseReport->patient_first_name }}</td>
                            <td>{{ $diseaseReport->patient_last_name }}</td>
                            <td>{{ $diseaseReport->date_of_birth }}</td>
{{--                            <td>{{ $diseaseReport->gender }}</td>--}}
                            <td>{{ $diseaseReport->ethic_origin }}</td>
                            {{--<td>{{ $diseaseReport->area_code }}</td>--}}
                            {{--<td>{{ $diseaseReport->phone }}</td>--}}
                            {{--<td>{{ $diseaseReport->time }}</td>--}}
                            {{--<td>{{ $diseaseReport->address }}</td>--}}
                            {{--<td>{{ $diseaseReport->city }}</td>--}}
                            {{--<td>{{ $diseaseReport->state }}</td>--}}
                            {{--<td>{{ $diseaseReport->zip_code }}</td>--}}
                            {{--<td>{{ $diseaseReport->was_hospitalized }}</td>--}}
                            {{--<td>{{ $diseaseReport->did_patients_die }}</td>--}}
                            {{--<td>{{ ($diseaseReport->is_patient_pregnant) ? 'Yes' : 'No' }}</td>--}}
                            {{--<td>{{ implode('; ', $diseaseReport->patient_associated_with) }}</td>--}}
                            {{--<td>{{ implode('; ', $diseaseReport->exposure_occurance_district) }}</td>--}}
                            {{--<td>{{ implode('; ', $diseaseReport->country_of_exposure) }}</td>--}}
                            {{--<td>{{ $diseaseReport->show_symbol }}</td>--}}
                            {{--<td>{{ $diseaseReport->sympton_date }}</td>--}}
                            {{--<td>{{ ($diseaseReport->is_sexually_transmitted) ? 'Yes' : 'No' }}</td>--}}
                            {{--<td>{{ $diseaseReport->name_of_facility }}</td>--}}
                            {{--<td>{{ $diseaseReport->findings_summary }}</td>--}}
                            {{--<td>{{ $diseaseReport->first_name_of_principal_investigator }}</td>--}}
                            {{--<td>{{ $diseaseReport->last_name_of_principal_investigator }}</td>--}}
                            {{--<td>{{ $diseaseReport->area_code_of_investigator }}</td>--}}
                            {{--<td>{{ $diseaseReport->phone_of_investigator }}</td>--}}

                                <td>

                                    <form method="POST" action="{!! route('disease_reports.disease_report.destroy', $diseaseReport->id) !!}" accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                            <a href="{{ route('disease_reports.disease_report.show', $diseaseReport->id ) }}" class="btn btn-sm btn-info" title="Show Disease Report">
                                                <span class="feather icon-eye" aria-hidden="true"></span>
                                            </a>
                                            <a href="{{ route('disease_reports.disease_report.edit', $diseaseReport->id ) }}" class="btn btn-sm btn-primary" title="Edit Disease Report">
                                                <span class="feather icon-edit" aria-hidden="true"></span>
                                            </a>

                                            {{--<button type="submit" class="btn btn-sm btn-danger" title="Delete Disease Report" onclick="return confirm(&quot;Delete Disease Report?&quot;)">--}}
                                                {{--<span class="feather icon-trash" aria-hidden="true"></span>--}}
                                            {{--</button>--}}
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
                {!! $diseaseReports->render() !!}
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