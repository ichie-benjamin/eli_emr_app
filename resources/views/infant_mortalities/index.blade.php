@extends('layouts.backend')

@section('content')
    <div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-list bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Infant Mortalities</h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('infant_mortalities.infant_mortality.create') }}" class="btn btn-success" title="Create New Infant Mortality">
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
        @if(count($infantMortalities) == 0)
            <div class="panel-body text-center">
                <h4>No Infant Mortalities Available!</h4>
            </div>
        @else
            <div class="panel-body panel-body-with-table">
                <div class="table-responsive">

                    <table class="table table-striped" id="datatable">
                        <thead>
                        <tr>
                                                        <th>Year of Death</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Sex</th>
                            <th>Age</th>
                            <th>Facility</th>
                            <th>Ethnicity</th>
                            <th>Causes Of Death</th>

                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($infantMortalities as $infantMortality)
                            <tr>
                                                            <td>{{ $infantMortality->year_of_death }}</td>
                            <td>{{ $infantMortality->first_name }}</td>
                            <td>{{ $infantMortality->last_name }}</td>
                            <td>{{ $infantMortality->sex }}</td>
                            <td>{{ $infantMortality->age }}</td>
                            <td>{{ optional($infantMortality->facility)->name }}</td>
                            <td>{{ optional($infantMortality->ethnicity)->name }}</td>
                            <td>{{ implode('; ', $infantMortality->causes_of_death) }}</td>

                                <td>

                                    <form method="POST" action="{!! route('infant_mortalities.infant_mortality.destroy', $infantMortality->id) !!}" accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                            <a href="{{ route('infant_mortalities.infant_mortality.show', $infantMortality->id ) }}" class="btn btn-sm btn-info" title="Show Infant Mortality">
                                                <span class="feather icon-eye" aria-hidden="true"></span>
                                            </a>
                                            <a href="{{ route('infant_mortalities.infant_mortality.edit', $infantMortality->id ) }}" class="btn btn-sm btn-primary" title="Edit Infant Mortality">
                                                <span class="feather icon-edit" aria-hidden="true"></span>
                                            </a>

                                            <button type="submit" class="btn btn-sm btn-danger" title="Delete Infant Mortality" onclick="return confirm(&quot;Delete Infant Mortality?&quot;)">
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
                {!! $infantMortalities->render() !!}
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