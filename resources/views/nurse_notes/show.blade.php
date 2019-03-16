@extends('layouts.backend')

@section('content')


        <div class="pcoded-content">
            <div class="page-header card">
                <div class="row">
                    <div class="col-lg-8 col-xs-8">
                        <div class="page-header-title pull-left">
                            <i class="feather icon-eye bg-c-blue"></i>
                            <div class="d-inline">
                                <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Nurse Note' }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-4">
                        <div class="page-header-breadcrumb">
                            <ul class=" breadcrumb breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('nurse_notes.nurse_note.edit', $nurseNote->id ) }}" class="btn btn-primary" title="Edit Nurse Note">

                                    <span class="feather icon-edit" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('nurse_notes.nurse_note.index') }}" class="btn btn-primary" title="Show All Nurse Note">
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
                            <div class="card">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-12 col-xl-12">
                                            <div id="wizard">
                                                <section>
                            <div class="row">
                                <div class="col-md-12 col-xl-12">

            <dl class="dl-horizontal">
                            <dt>Patient</dt>
            <dd>{{ optional($nurseNote->patient)->id }}</dd>
            <dt>Surname</dt>
            <dd>{{ $nurseNote->surname }}</dd>
            <dt>Firstname</dt>
            <dd>{{ $nurseNote->firstname }}</dd>
            <dt>Parent Lives</dt>
            <dd>{{ $nurseNote->parent_lives }}</dd>
            <dt>Change In Medication</dt>
            <dd>{{ $nurseNote->change_in_medication }}</dd>
            <dt>Allergies</dt>
            <dd>{{ $nurseNote->allergies }}</dd>
            <dt>Vital Signs</dt>
            <dd>{{ implode('; ', $nurseNote->vital_signs) }}</dd>
            <dt>Respiratory</dt>
            <dd>{{ implode('; ', $nurseNote->respiratory) }}</dd>
            <dt>Skin Assessment</dt>
            <dd>{{ $nurseNote->skin_assessment }}</dd>
            <dt>Cardiovascular Car Assessment</dt>
            <dd>{{ $nurseNote->cardiovascular_car_assessment }}</dd>
            <dt>Musculoskeletal Assessment</dt>
            <dd>{{ $nurseNote->musculoskeletal_assessment }}</dd>
            <dt>Digestive/Nutrition Assessment</dt>
            <dd>{{ $nurseNote->digestive_assessment }}</dd>
            <dt>Pain Assessment</dt>
            <dd>{{ $nurseNote->pain_assessment }}</dd>
            <dt>Pain Assessment scale/1-5 less pain. 6 and above more pain</dt>
            <dd>{{ implode('; ', $nurseNote->pain_assessment_scale) }}</dd>
            <dt>Intervention: reason for visit</dt>
            <dd>{{ $nurseNote->intervention }}</dd>
            <dt>Goal/plan</dt>
            <dd>{{ $nurseNote->goal }}</dd>
            <dt>Supervisor Assessment</dt>
            <dd>{{ $nurseNote->supervisor_assessment }}</dd>

            </dl>
                                    <form method="POST" action="{!! route('nurse_notes.nurse_note.destroy', $nurseNote->id) !!}" accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}
                                        <div class="btn-group btn-group-sm" role="group">

                                            <a href="{{ route('nurse_notes.nurse_note.create') }}" class="btn btn-success" title="Create New Nurse Note">
                                                <span class="feather icon-plus" aria-hidden="true"></span>
                                            </a>
                                            <button type="submit" class="btn btn-danger" title="Delete Nurse Note" onclick="return confirm(&quot;Delete Nurse Note??&quot;)">
                                                <span class="feather icon-trash" aria-hidden="true"></span>
                                            </button>
                                        </div>
                                    </form>

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