@extends('layouts.backend')

@section('content')
    <div class="pcoded-content">
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="feather icon-list bg-c-blue"></i>
                        <div class="d-inline">
                            <h5>Nursing Visits</h5>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class=" breadcrumb breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="{{ route('nursing_visits.nursing_visit.create') }}" class="btn btn-success" title="Create New Nursing Visit">
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
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-12 col-xl-12">
                                        <div id="wizard">
                                            <section>

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
                                @if(count($nursingVisits) == 0)
                                    <div class="panel-body text-center">
                                        <h4>No Nursing Visits Available!</h4>
                                    </div>
                                @else
                                    <div class="panel-body panel-body-with-table">
                                        <div class="table-responsive">

                                            <table class="table table-striped" id="datatable">
                                                <thead>
                                                <tr>
                                                                                {{-- <th>Patient</th> --}}
                            <th>Patient Name</th>
                            {{-- <th>Patient Case</th>
                            <th>Nurse Report</th> --}}
                            <th>Time In</th>
                            <th>Time Out</th>
                            <th>Patient Status</th>

                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($nursingVisits as $nursingVisit)
                                                    <tr>
                                                                                    {{-- <td>{{ optional($nursingVisit->patient)->id }}</td> --}}
                            <td>{{ $nursingVisit->patient_name }}</td>
                            {{-- <td>{{ $nursingVisit->patient_case }}</td>
                            <td>{{ $nursingVisit->nurse_report }}</td> --}}
                            <td>{{ $nursingVisit->time_in }}</td>
                            <td>{{ $nursingVisit->time_out }}</td>
                            <td>{{ $nursingVisit->patient_status }}</td>

                                                        <td>

                                                            <form method="POST" action="{!! route('nursing_visits.nursing_visit.destroy', $nursingVisit->id) !!}" accept-charset="UTF-8">
                                                                <input name="_method" value="DELETE" type="hidden">
                                                                {{ csrf_field() }}

                                                                <div class="btn-group btn-group-xs pull-right" role="group">
                                                                    <a href="{{ route('nursing_visits.nursing_visit.show', $nursingVisit->id ) }}" class="btn btn-sm btn-info" title="Show Nursing Visit">
                                                                        <span class="feather icon-eye" aria-hidden="true"></span>
                                                                    </a>
                                                                    <a href="{{ route('nursing_visits.nursing_visit.edit', $nursingVisit->id ) }}" class="btn btn-sm btn-primary" title="Edit Nursing Visit">
                                                                        <span class="feather icon-edit" aria-hidden="true"></span>
                                                                    </a>

                                                                    <button type="submit" class="btn btn-sm btn-danger" title="Delete Nursing Visit" onclick="return confirm(&quot;Delete Nursing Visit?&quot;)">
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
                                        {!! $nursingVisits->render() !!}
                                    </div>

                                @endif
                            </div>
                        </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection