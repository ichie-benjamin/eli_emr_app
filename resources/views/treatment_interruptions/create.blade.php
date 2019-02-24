@extends('layouts.backend')

@section('content')

    <div class="pcoded-content">

        <div class="page-header card">
            <div class="row">
                <div class="col-lg-8 col-xs-8">
                    <div class="page-header-title pull-left">
                        <i class="feather icon-plus bg-c-blue"></i>
                        <div class="d-inline">
                            <h4 class="mt-5 mb-5">Create New Treatment Interruption</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-4">
                    <div class="page-header-breadcrumb">
                        <ul class=" breadcrumb breadcrumb-title">
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
                <div class="col-md-12">
                    <div class="row col">
                        <div class="col-md-3">
                            <a href="" class="btn btn-success">Treatment Interruptions</a>
                        </div>
                        <div class="col-md-3">
                            <a href="" class="btn btn-success">Treatment Interruptions</a>
                        </div>
                        <div class="col-md-3">
                            <a href="" class="btn btn-success">Treatment Interruptions</a>
                        </div><div class="col-md-3">
                            <a href="" class="btn btn-success">Treatment Interruptions</a>
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

            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif



            <form method="POST" action="{{ route('treatment_interruptions.treatment_interruption.store') }}" accept-charset="UTF-8" id="create_treatment_interruption_form" name="create_treatment_interruption_form" class="form-horizontal">
                {{ csrf_field() }}
                <fieldset>
                    <div class="row">
                @include ('treatment_interruptions.form', [
                                            'treatmentInterruption' => null,
                                          ])
                    </div>

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Add">
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


