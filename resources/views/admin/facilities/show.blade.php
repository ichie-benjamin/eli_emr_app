@extends('layouts.backend')

@section('content')


        <div class="pcoded-content">
            <div class="page-header card">
                <div class="row">
                    <div class="col-lg-8 col-xs-8">
                        <div class="page-header-title pull-left">
                            <i class="feather icon-eye bg-c-blue"></i>
                            <div class="d-inline">
                                <h4 class="mt-5 mb-5">{{ isset($facility->name) ? $facility->name : 'Facility' }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-4">
                        <div class="page-header-breadcrumb">
                            <ul class=" breadcrumb breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('facilities.facility.edit', $facility->id ) }}" class="btn btn-primary" title="Edit Facility">

                                    <span class="feather icon-edit" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('facilities.facility.index') }}" class="btn btn-primary" title="Show All Facility">
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
                            <dt>Name</dt>
            <dd>{{ $facility->name }}</dd>

            </dl>
                                    <form method="POST" action="{!! route('facilities.facility.destroy', $facility->id) !!}" accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}
                                        <div class="btn-group btn-group-sm" role="group">

                                            <a href="{{ route('facilities.facility.create') }}" class="btn btn-success" title="Create New Facility">
                                                <span class="feather icon-plus" aria-hidden="true"></span>
                                            </a>
                                            <button type="submit" class="btn btn-danger" title="Delete Facility" onclick="return confirm(&quot;Delete Facility??&quot;)">
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