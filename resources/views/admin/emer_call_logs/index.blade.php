@extends('layouts.backend')

@section('content')
    <div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-list bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Emer Call Logs</h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('emer_call_logs.emer_call_log.create') }}" class="btn btn-success" title="Create New Emer Call Log">
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
        @if(count($emerCallLogs) == 0)
            <div class="panel-body text-center">
                <h4>No Emer Call Logs Available!</h4>
            </div>
        @else
            <div class="panel-body panel-body-with-table">
                <div class="table-responsive">

                    <table class="table table-striped table-bordered table-condensed" id="datatable">
                        <thead>
                        <tr>
                                                        <th>Caller Name</th>
                            <th>User</th>
                            <th>Caller Phone</th>
                            <th>Time</th>

                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($emerCallLogs as $emerCallLog)
                            <tr>
                                                            <td>{{ $emerCallLog->caller_name }}</td>
                            <td>{{ optional($emerCallLog->user)->name }}</td>
                            <td>{{ $emerCallLog->caller_phone }}</td>
                            <td>{{ $emerCallLog->time }}</td>

                                <td>

                                    <form method="POST" action="{!! route('emer_call_logs.emer_call_log.destroy', $emerCallLog->id) !!}" accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                            <a href="{{ route('emer_call_logs.emer_call_log.show', $emerCallLog->id ) }}" class="btn btn-sm btn-info" title="Show Emer Call Log">
                                                <span class="feather icon-eye" aria-hidden="true"></span>view
                                            </a>
                                            <a href="{{ route('emer_call_logs.emer_call_log.edit', $emerCallLog->id ) }}" class="btn btn-sm btn-primary" title="Edit Emer Call Log">
                                                <span class="feather icon-edit" aria-hidden="true"></span>edit
                                            </a>

                                            <button type="submit" class="btn btn-sm btn-danger" title="Delete Emer Call Log" onclick="return confirm(&quot;Delete Emer Call Log?&quot;)">
                                                <span class="feather icon-trash" aria-hidden="true"></span>delete
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
                {!! $emerCallLogs->render() !!}
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