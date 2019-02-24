@extends('layouts.backend')

@section('content')


        <div class="pcoded-content">
            <div class="page-header card">
                <div class="row">
                    <div class="col-lg-8 col-xs-8">
                        <div class="page-header-title pull-left">
                            <i class="feather icon-eye bg-c-blue"></i>
                            <div class="d-inline">
                                <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Treatment Interruption' }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-4">
                        <div class="page-header-breadcrumb">
                            <ul class=" breadcrumb breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('treatment_interruptions.treatment_interruption.edit', $treatmentInterruption->id ) }}" class="btn btn-primary" title="Edit Treatment Interruption">

                                    <span class="feather icon-edit" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('treatment_interruptions.treatment_interruption.index') }}" class="btn btn-primary" title="Show All Treatment Interruption">
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
                            <dt>Hiv Patient</dt>
            <dd>{{ optional($treatmentInterruption->hivPatient)->patient_name }}</dd>
            <dt>First Interruption Reasonfirst Interruption Data</dt>
            <dd>{{ $treatmentInterruption->first_interruption_reasonfirst_interruption_data }}</dd>
            <dt>Second Interruption Reason</dt>
            <dd>{{ $treatmentInterruption->second_interruption_reason }}</dd>
            <dt>Second Interruption Data</dt>
            <dd>{{ $treatmentInterruption->second_interruption_data }}</dd>
            <dt>Departure From Treatment Reason</dt>
            <dd>{{ $treatmentInterruption->departure_from_treatment_reason }}</dd>
            <dt>Departure From Treatment Data</dt>
            <dd>{{ $treatmentInterruption->departure_from_treatment_data }}</dd>

            </dl>
                                    <form method="POST" action="{!! route('treatment_interruptions.treatment_interruption.destroy', $treatmentInterruption->id) !!}" accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}
                                        <div class="btn-group btn-group-sm" role="group">

                                            <a href="{{ route('treatment_interruptions.treatment_interruption.create') }}" class="btn btn-success" title="Create New Treatment Interruption">
                                                <span class="feather icon-plus" aria-hidden="true"></span>
                                            </a>
                                            <button type="submit" class="btn btn-danger" title="Delete Treatment Interruption" onclick="return confirm(&quot;Delete Treatment Interruption??&quot;)">
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