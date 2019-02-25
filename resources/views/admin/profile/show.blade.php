@extends('layouts.backend')

@section('content')

    <div class="pcoded-content">

        <br>

<div class="row col-md-12">
    {{--{{ $user }}--}}

    <div class="col-md-3">
        <!-- Stats -->
        <div class="box box-success">
            <div class="box-body box-profile">
                <div class="text-center">
                    <img height="230" width="230"  src="{{ asset(Auth::user()->avatar) }}">

                </div>

            </div>
            <!-- /.box-body -->
        </div>

        <!-- Profile -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Account Information</h3>
            </div>
            <div class="box-body box-profile">
                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item" style="border-top: 0;">
                        <b>Username</b> <a class="pull-right">{{ optional($user)->username }}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Email</b> <a class="pull-right">{{ $user->email }}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Phone</b> <a class="pull-right">{{ optional($user)->phone }}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Tel</b> <a class="pull-right"> {{ optional($user)->tel }}</a>
                    </li>
                    {{--<li class="list-group-item">--}}
                        {{--<b>Account Number</b> <a class="pull-right"> {{ optional($account)->account_number }}</a>--}}
                    {{--</li>--}}
                </ul>
            </div>
            <!-- /.box-body -->
        </div>

        <!-- Address Box -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Address</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <p class="text-muted">
                    {{ optional($user->profile)->address }}
                </p>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <!-- Edit -->
        <div>
            <a href="{{ route('profiles.profile.edit_my_profile') }}" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
            <!-- /.box-body -->
        </div>
    </div>
    <!-- /.col -->

    <div class="col-md-9">
        <div class="row">
            <div class="col-md-4 col-sm-8 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="feather icon-type"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Account Type</span>
                        <span class="info-box-number">{{ $user->role() }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-4 col-sm-8 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="feather icon-star-on"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Account Status</span>
                        <span class="info-box-number">{{ $user->status }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-4 col-sm-8 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="feather icon-message-square"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Notifications</span><br>
                        <span class="info-box-number">0</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="nav-tabs-custom">
                    <div class="tab-content">
                        <div class="tab-pane tab-margin active" id="profile">
                            <div class="box-body box-profile">
                                <ul class="list-group list-group-unbordered">
                                    <li class="list-group-item" style="border-top: 0;">
                                        <b>First Name</b> <a class="pull-right">{{ optional($user->profile)->first_name }}</a>
                                    </li>
                                    <li class="list-group-item" >
                                        <b>Last Name</b> <a class="pull-right">{{ optional($user->profile)->last_name }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Nationality</b> <a class="pull-right">{{ optional($user->profile)->nationality }}</a>
                                    </li>
                                    {{--<li class="list-group-item">--}}
                                    {{--<b>State Of Origin</b> <a class="pull-right">{{ optional($account->user->profile)->state_of_origin }}</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="list-group-item">--}}
                                    {{--<b>Local Govt. Of Origin</b> <a class="pull-right"> {{ optional($account->user->profile)->lga_of_origin }}</a>--}}
                                    {{--</li>--}}
                                    <li class="list-group-item">
                                        <b>Country Of Residence</b> <a class="pull-right"> {{ optional($user->profile)->country  }}</a>
                                    </li>

                                    <li class="list-group-item">
                                        <b>State Of Origin</b> <a class="pull-right"> {{ optional($user->profile)->state  }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Residing Town/City</b> <a class="pull-right"> {{ optional($user->profile)->city  }}</a>
                                    </li>

                                    {{--<li class="list-group-item">--}}
                                        {{--<b>Means Of Identification</b> <a class="pull-right"> {{ optional($user->profile)->identification()  }}</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="list-group-item">--}}
                                        {{--<b>Identification Number</b> <a class="pull-right"> {{ optional($user->profile)->identification_number  }}</a>--}}
                                    {{--</li>--}}
                                </ul>
                            </div>

                        </div>

                        <div class="tab-pane tab-margin" id="invoices">
                            <div class="table table-responsive">
                                <table class="table table-striped table-hover" id="tbl-invoices">
                                    <thead>
                                    <tr>
                                        <th class="col-md-2">Number</th>
                                        <th class="col-md-2 text-right amount-space">Amount</th>
                                        <th class="col-md-2">Invoice Date</th>
                                        <th class="col-md-2">Due Date</th>
                                        <th class="col-md-2">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>

                            <div class="pull-left">
                                <small>No records.</small>
                            </div>

                        </div>

                        <div class="tab-pane tab-margin" id="revenues">
                            <div class="table table-responsive">
                                <table class="table table-striped table-hover" id="tbl-revenues">
                                    <thead>
                                    <tr>
                                        <th class="col-md-3">Date</th>
                                        <th class="col-md-3 text-right amount-space">Amount</th>
                                        <th class="col-md-3 hidden-xs">Category</th>
                                        <th class="col-md-3 hidden-xs">Account</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>

                            <div class="pull-left">
                                <small>No records.</small>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box -->
    </div>
</div>
    </div>
    @endsection
