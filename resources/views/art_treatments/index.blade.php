@extends('layouts.backend')

@section('content')
    <div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-list bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Art Treatments</h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('art_treatments.art_treatment.create') }}" class="btn btn-success" title="Create New Art Treatment">
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
        @if(count($artTreatments) == 0)
            <div class="panel-body text-center">
                <h4>No Art Treatments Available!</h4>
            </div>
        @else
            <div class="panel-body panel-body-with-table">
                <div class="table-responsive">

                    <table class="table table-striped" id="datatable">
                        <thead>
                        <tr>
                                                        <th>Hiv Patient</th>
                            <th>Date Started</th>
                            <th>Initial Regimen</th>
                            <th>First Line First Substitution</th>
                            <th>First Line First Substitute Reason</th>
                            <th>First Line First Substitute Date</th>
                            <th>Second Line Regimen</th>
                            <th>Second Line Reason</th>
                            <th>Second Line Date</th>
                            <th>Second Line Second Substituted</th>
                            <th>Second Line Second Substitude Reason</th>
                            <th>Second Line Second Substitute Date</th>

                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($artTreatments as $artTreatment)
                            <tr>
                                                            <td>{{ optional($artTreatment->hivPatient)->patient_name }}</td>
                            <td>{{ $artTreatment->date_started }}</td>
                            <td>{{ $artTreatment->initial_regimen }}</td>
                            <td>{{ $artTreatment->first_line_first_substitution }}</td>
                            <td>{{ $artTreatment->first_line_first_substitute_reason }}</td>
                            <td>{{ $artTreatment->first_line_first_substitute_date }}</td>
                            <td>{{ $artTreatment->second_line_regimen }}</td>
                            <td>{{ $artTreatment->second_line_reason }}</td>
                            <td>{{ $artTreatment->second_line_date }}</td>
                            <td>{{ $artTreatment->second_line_second_substituted }}</td>
                            <td>{{ $artTreatment->second_line_second_substitude_reason }}</td>
                            <td>{{ $artTreatment->second_line_second_substitute_date }}</td>

                                <td>

                                    <form method="POST" action="{!! route('art_treatments.art_treatment.destroy', $artTreatment->id) !!}" accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                            <a href="{{ route('art_treatments.art_treatment.show', $artTreatment->id ) }}" class="btn btn-sm btn-info" title="Show Art Treatment">
                                                <span class="feather icon-eye" aria-hidden="true"></span>
                                            </a>
                                            <a href="{{ route('art_treatments.art_treatment.edit', $artTreatment->id ) }}" class="btn btn-sm btn-primary" title="Edit Art Treatment">
                                                <span class="feather icon-edit" aria-hidden="true"></span>
                                            </a>

                                            <button type="submit" class="btn btn-sm btn-danger" title="Delete Art Treatment" onclick="return confirm(&quot;Delete Art Treatment?&quot;)">
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
                {!! $artTreatments->render() !!}
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