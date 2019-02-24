@extends('layouts.backend')

@section('content')

    <div class="pcoded-content">

        <div class="page-header card">
            <div class="row">
                <div class="col-lg-8 col-xs-8">
                    <div class="page-header-title pull-left">
                        <i class="feather icon-plus bg-c-blue"></i>
                        <div class="d-inline">
                            <h4 class="mt-5 mb-5">Hiv Patient</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-4">
                    <div class="page-header-breadcrumb">
                        <ul class=" breadcrumb breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="{{ route('hiv_patients.hiv_patient.index') }}" class="btn btn-primary" title="Show All Hiv Patient">
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
                <div class="col-md-12">
                    <div class="row col">
                        <div class="col-md-3">
                            <button class="btn btn-warning btn-sm">  Patient Identification</button>
                        </div>
                        <div class="col-md-3">
                            <button disabled class="btn btn-default btn-sm"> Initial Assessment by Clinician >></button>
                        </div>
                        <div class="col-md-2">
                            <button disabled class="btn btn-default btn-sm">ART Treatment >> </button>
                        </div>
                        <div class="col-md-2">
                            <button disabled class="btn btn-default btn-sm disabled"> Treatment Interruptions >></button>
                        </div>
                        <div class="col-md-2">
                            <button disabled class="btn btn-default btn-sm">Treatment Record >></button>
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

            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('hiv_patients.hiv_patient.store_step_one') }}" accept-charset="UTF-8" name="create_hiv_patient_form">
                {{ csrf_field() }}
                <h3> Account Details </h3>
                <fieldset>
                @include ('hiv_patients.form', [
                                            'hivPatient' => $hivPatient,
                                          ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Next">
                    </div>
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


