@extends('layouts.backend')

@section('content')


        <div class="pcoded-content">
            <div class="page-header card">
                <div class="row">
                    <div class="col-lg-8 col-xs-8">
                        <div class="page-header-title pull-left">
                            <i class="feather icon-eye bg-c-blue"></i>
                            <div class="d-inline">
                                <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Emer Call Log' }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-4">
                        <div class="page-header-breadcrumb">
                            <ul class=" breadcrumb breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('emer_call_logs.emer_call_log.edit', $emerCallLog->id ) }}" class="btn btn-primary" title="Edit Emer Call Log">

                                    <span class="feather icon-edit" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('emer_call_logs.emer_call_log.index') }}" class="btn btn-primary" title="Show All Emer Call Log">
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
                            <dt>Caller Name</dt>
            <dd>{{ $emerCallLog->caller_name }}</dd>
            <dt>User</dt>
            <dd>{{ optional($emerCallLog->user)->name }}</dd>
            <dt>Caller Phone</dt>
            <dd>{{ $emerCallLog->caller_phone }}</dd>
            <dt>Time</dt>
            <dd>{{ $emerCallLog->time }}</dd>
            <dt>Description</dt>
            <dd>{{ $emerCallLog->description }}</dd>

            </dl>
                                    <form method="POST" action="{!! route('emer_call_logs.emer_call_log.destroy', $emerCallLog->id) !!}" accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}
                                        <div class="btn-group btn-group-sm" role="group">

                                            <a href="{{ route('emer_call_logs.emer_call_log.create') }}" class="btn btn-success" title="Create New Emer Call Log">
                                                <span class="feather icon-plus" aria-hidden="true"></span>
                                            </a>
                                            <button type="submit" class="btn btn-danger" title="Delete Emer Call Log" onclick="return confirm(&quot;Delete Emer Call Log??&quot;)">
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