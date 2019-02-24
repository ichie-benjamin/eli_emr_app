@extends('layouts.backend')

@section('content')

    <div class="pcoded-content">

        {{--<div class="page-header card">--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-8 col-xs-8">--}}
                    {{--<div class="page-header-title pull-left">--}}
                        {{--<i class="feather icon-plus bg-c-blue"></i>--}}
                        {{--<div class="d-inline">--}}
                            {{--<h4 class="mt-5 mb-5">Create New Treatment Record</h4>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 col-xs-4">--}}
                    {{--<div class="page-header-breadcrumb">--}}
                        {{--<ul class=" breadcrumb breadcrumb-title">--}}
                            {{--<li class="breadcrumb-item">--}}
                                {{--<a href="{{ route('treatment_records.treatment_record.index') }}" class="btn btn-primary" title="Show All Treatment Record">--}}
                                    {{--<span class="feather icon-list" aria-hidden="true"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}

        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="col-md-12">
                    <div class="row col">
                        <div class="col-md-3">
                            <a href="" class="btn btn-success btn-sm"> << Patient Identification</a>
                        </div>
                        <div class="col-md-3">
                            <a href="" class="btn btn-success btn-sm"><< Initial Assessment by Clinician</a>
                        </div>
                        <div class="col-md-2">
                            <a href="" class="btn btn-success btn-sm"><< ART Treatment </a>
                        </div>
                        <div class="col-md-2">
                            <a href="" class="btn btn-success btn-sm "><< Treatment Interruptions</a>
                        </div>
                        <div class="col-md-2">
                            <a href="" class="btn btn-warning btn-sm">Treatment Record</a>
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

            <form method="POST" action="{{ route('treatment_records.treatment_record.store') }}" accept-charset="UTF-8" id="create_treatment_record_form" name="create_treatment_record_form" class="form-horizontal">
                {{ csrf_field() }}
                @include ('treatment_records.form', [
                                            'treatmentRecord' => null,
                                          ])

                <div class="row">
                    <div class=" col-md-6">
                        <a href="" class="btn btn-success"><< Back</a>
                    </div>
                    <div class=" col-md-5">
                        <input class="btn btn-primary pull-right" type="submit" value="Save Record">
                    </div>
                </div>

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


