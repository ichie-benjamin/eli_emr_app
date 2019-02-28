@extends('layouts.backend')

@section('content')


        <div class="pcoded-content">
            <div class="page-header card">
                <div class="row">
                    <div class="col-lg-8 col-xs-8">
                        <div class="page-header-title pull-left">
                            <i class="feather icon-eye bg-c-blue"></i>
                            <div class="d-inline">
                                <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Maternal Mortality' }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-4">
                        <div class="page-header-breadcrumb">
                            <ul class=" breadcrumb breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('maternal_mortalities.maternal_mortality.edit', $maternalMortality->id ) }}" class="btn btn-primary" title="Edit Maternal Mortality">

                                    <span class="feather icon-edit" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('maternal_mortalities.maternal_mortality.index') }}" class="btn btn-primary" title="Show All Maternal Mortality">
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
                            <dt>Date Time</dt>
            <dd>{{ $maternalMortality->date_time }}</dd>
            <dt>First Name</dt>
            <dd>{{ $maternalMortality->first_name }}</dd>
            <dt>Last Name</dt>
            <dd>{{ $maternalMortality->last_name }}</dd>
            <dt>Sex</dt>
            <dd>{{ $maternalMortality->sex }}</dd>
            <dt>Date of Birth</dt>
            <dd>{{ $maternalMortality->date_of_birth }}</dd>
            <dt>Facility</dt>
            <dd>{{ optional($maternalMortality->facility)->name }}</dd>
            <dt>Ethnicity</dt>
            <dd>{{ optional($maternalMortality->ethnicity)->name }}</dd>
            <dt>Causes Of Death</dt>
            <dd>{{ implode('; ', $maternalMortality->causes_of_death) }}</dd>

            </dl>
                                    <form method="POST" action="{!! route('maternal_mortalities.maternal_mortality.destroy', $maternalMortality->id) !!}" accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}
                                        <div class="btn-group btn-group-sm" role="group">

                                            <a href="{{ route('maternal_mortalities.maternal_mortality.create') }}" class="btn btn-success" title="Create New Maternal Mortality">
                                                <span class="feather icon-plus" aria-hidden="true"></span>
                                            </a>
                                            <button type="submit" class="btn btn-danger" title="Delete Maternal Mortality" onclick="return confirm(&quot;Delete Maternal Mortality??&quot;)">
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