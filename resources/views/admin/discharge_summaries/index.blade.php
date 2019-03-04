@extends('layouts.backend')

@section('content')
    <div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-list bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Discharge Summaries</h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('discharge_summaries.discharge_summary.create') }}" class="btn btn-success" title="Create New Discharge Summary">
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
        @if(count($dischargeSummaries) == 0)
            <div class="panel-body text-center">
                <h4>No Discharge Summaries Available!</h4>
            </div>
        @else
            <div class="panel-body panel-body-with-table">
                <div class="table-responsive">

                    <table class="table table-striped" id="datatable">
                        <thead>
                        <tr>
                                                        {{--<th>Patient</th>--}}
                            <th>Surname</th>
                            <th>Forname</th>
                            <th>Date Of Birth</th>
                            <th>N H S</th>
                            <th>Address</th>
                            <th>Phone</th>
                            {{--<th>Discharging Consultant</th>--}}
                            {{--<th>Discharging Specialty</th>--}}
                            {{--<th>Method Of Admission</th>--}}
                            {{--<th>Date Of Discharge</th>--}}
                            {{--<th>G P Details</th>--}}
                            {{--<th>Diagnosis At Discharge</th>--}}
                            {{--<th>Relevant Investigation And Result</th>--}}
                            {{--<th>Discharge Destination</th>--}}
                            {{--<th>Relevant Legal Information</th>--}}
                            {{--<th>Information Given To Patient</th>--}}
                            {{--<th>G P Actions (Pls Specify Date)</th>--}}
                            {{--<th>Strategies For Potential Problems</th>--}}
                            {{--<th>Discharging Doctor Name</th>--}}
                            {{--<th>Bleep No</th>--}}

                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dischargeSummaries as $dischargeSummary)
                            <tr>
{{--                                                            <td>{{ optional($dischargeSummary->patient)->id }}</td>--}}
                            <td>{{ $dischargeSummary->surname }}</td>
                            <td>{{ $dischargeSummary->forname }}</td>
                            <td>{{ $dischargeSummary->date_of_birth }}</td>
                            <td>{{ $dischargeSummary->NHS }}</td>
                            <td>{{ $dischargeSummary->address }}</td>
                            <td>{{ $dischargeSummary->phone }}</td>
                            {{--<td>{!!  $dischargeSummary->discharging_consultant !!} </td>--}}
                            {{--<td>{{ $dischargeSummary->discharging_specialty }} </td>--}}
                            {{--<td>{{ $dischargeSummary->method_of_admission }}</td>--}}
                            {{--<td>{{ $dischargeSummary->date_of_discharge }}</td>--}}
                            {{--<td>{!! $dischargeSummary->GP_details !!}</td>--}}
                            {{--<td>{!! $dischargeSummary->diagnosis_at_discharge !!} </td>--}}
                            {{--<td>{!! $dischargeSummary->relevant_investigation_and_result !!} </td>--}}
                            {{--<td>{!! $dischargeSummary->discharge_destination !!}</td>--}}
                            {{--<td>{!! $dischargeSummary->relevant_legal_information !!}</td>--}}
                            {{--<td>{!! $dischargeSummary->information_given_to_patient !!} </td>--}}
                            {{--<td>{!! $dischargeSummary->GP_actions !!}</td>--}}
                            {{--<td>{!! $dischargeSummary->strategies_for_potential_problems !!} </td>--}}
                            {{--<td>{{ $dischargeSummary->discharging_doctor_name }}</td>--}}
                            {{--<td>{{ $dischargeSummary->bleep_no }}</td>--}}

                                <td>

                                    <form method="POST" action="{!! route('discharge_summaries.discharge_summary.destroy', $dischargeSummary->id) !!}" accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                            <a href="{{ route('discharge_summaries.discharge_summary.show', $dischargeSummary->id ) }}" class="btn btn-sm btn-info" title="Show Discharge Summary">
                                                <span class="feather icon-eye" aria-hidden="true"></span>
                                            </a>
                                            <a href="{{ route('discharge_summaries.discharge_summary.edit', $dischargeSummary->id ) }}" class="btn btn-sm btn-primary" title="Edit Discharge Summary">
                                                <span class="feather icon-edit" aria-hidden="true"></span>
                                            </a>

                                            <button type="submit" class="btn btn-sm btn-danger" title="Delete Discharge Summary" onclick="return confirm(&quot;Delete Discharge Summary?&quot;)">
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
                {!! $dischargeSummaries->render() !!}
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