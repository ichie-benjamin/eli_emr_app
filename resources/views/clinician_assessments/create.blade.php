@extends('layouts.backend')

@section('content')

    <div class="pcoded-content">


        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="col-md-12">
                    <div class="row col">
                        <div class="col-md-3">
                            <a href="{{ route('hiv_patients.hiv_patient.create') }}" class="btn btn-success btn-sm"> << Patient Identification</a>
                        </div>
                        <div class="col-md-3">
                            <button disabled type="button" class="btn btn-warning btn-sm">Initial Assessment by Clinician</button>
                        </div>
                        <div class="col-md-2">
                            <button disabled type="button" class="btn btn-default btn-sm">ART Treatment >></button>
                        </div>
                        <div class="col-md-2">
                            <button disabled type="button" class="btn btn-default btn-sm ">Treatment Interruptions >></button>
                        </div>
                        <div class="col-md-2">
                            <button disabled type="button" class="btn btn-default btn-sm">Treatment Record >></button>
                        </div>
                    </div>
                </div>
                <div class="page-wrapper">
                    <div class="page-body">
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-12 col-xl-12">
                                        <div id="wizard">
                                            <section>

                                                @if(Session::has('success_message'))
                                                    <div class="row">
                                                        <div class="alert alert-success">
                                                            <span class="glyphicon glyphicon-ok"></span>
                                                            {!! session('success_message') !!}

                                                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>

                                                        </div>
                                                    </div>
                                                @endif

            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('clinician_assessments.clinician_assessment.store') }}" accept-charset="UTF-8" id="create_clinician_assessment_form" name="create_clinician_assessment_form" class="form-horizontal">
                {{ csrf_field() }}
                <fieldset>
                    <div class="row">
                        @include ('clinician_assessments.form', [
                                           'clinicianAssessment' => [$clinicianAssessment,$hivPatient],
                                         ])
                    </div>


                <div class=" row">
                    {{--<div class="col">--}}
                        <div class=" col-md-6">
                            <a href="{{ route('hiv_patients.hiv_patient.create') }}" class="btn btn-success"><< Back</a>

                        </div>

                        <div class=" col-md-6">
                            <input class="btn btn-primary pull-right" type="submit" value="Next">
                        </div>
                    {{--</div>--}}

                </div>
                </fieldset>

            </form>
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


