@extends('layouts.backend')

@section('content')

    <div class="pcoded-content">

        <div class="page-header card">
            <div class="row align-items-end">
                @if ($errors->any())
                    <div class="col-md-12">
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>

                @endif
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
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="feather icon-user bg-c-blue"></i>
                        <div class="d-inline">
                            <h5>Add Patient</h5>
                            <span>New Patient Registration</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">

                    </div>
                </div>
            </div>
        </div>

        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">

                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">


                                <div class="card">
                                    <div class="card-header">
                                        <h5>Profile Edit</h5>

                                    </div>
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div id="wizard">
                                                    <section>
                                                        <form method="POST" class="wizard-form" id="example-advanced-form" action="{{ route('profiles.profile.store') }}">
                                                            {{ csrf_field() }}
                                                            <h3> Account Details </h3>
                                                            <fieldset>
                                                                <div class="form-group row">
                                                                    <div class="col-md-6 row">
                                                                        <div class="col-sm-12">
                                                                            <label for="userName-2" class="block">User name *</label>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <input id="userName" required name="name" value="{{ old('name') }}" type="text" class=" form-control {{ $errors->has('name') ? ' is-invalid' : '' }}">
                                                                            @if ($errors->has('name'))
                                                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 row">
                                                                        <div class="col-sm-12">
                                                                            <label for="email" class="block">Email Address *</label>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <input id="email" name="email" required value="{{ old('email') }}" type="email" class=" form-control {{ $errors->has('email') ? ' is-invalid' : '' }}">
                                                                            @if ($errors->has('email'))
                                                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-12">
                                                                        <label for="email" class="block">Email Address *</label>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <input id="email" name="email" required value="{{ old('email') }}" type="email" class=" form-control {{ $errors->has('email') ? ' is-invalid' : '' }}">
                                                                        @if ($errors->has('email'))
                                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                                        @endif
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <div class="col-sm-12">
                                                                        <label for="password" class="block">Password  *</label>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <input id="password" required value="" name="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }} form-control">
                                                                        @if ($errors->has('password'))
                                                                            <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $errors->first('password') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <div class="col-sm-12">
                                                                        <label for="password_confirmation" class="block">Confirm Password *</label>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <input id="password_confirmation" name="password_confirmation" required type="password" class=" form-control">
                                                                    </div>
                                                                </div>


                                                            </fieldset>
                                                            <h3> Profile information </h3>
                                                            <fieldset>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-12">
                                                                        <label for="name-2" class="block">First name *</label>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <input id="first_name" value="{{ old('first_name') }}" name="first_name" type="text" class="form-control">
                                                                        @if ($errors->has('first_name'))
                                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-12">
                                                                        <label for="last_name" class="block">Last name *</label>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <input id="last_name" value="{{ old('last_name') }}" name="last_name" type="text" class="form-control">
                                                                        @if ($errors->has('last_name'))
                                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-12">
                                                                        <label for="phone-2" class="block">Phone #</label>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <input id="phone" name="phone" value="{{ old('phone' ) }}" type="number" class="form-control phone">
                                                                        @if ($errors->has('phone'))
                                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-12">
                                                                        <label for="date" class="block">Date Of Birth</label>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <input id="date" name="Date Of Birth" type="date" class="form-control date-control">
                                                                        @if ($errors->has('date_of_birth'))
                                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('date_of_birth') }}</strong>
                                    </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-12">
                                                                        Select Country</div>
                                                                    <div class="col-sm-12">
                                                                        <select class="form-control" id="country" name="country">
                                                                            <option value="" style="display: none;" {{ old('country') == '' ? 'selected' : '' }} disabled selected>Select Country</option>
                                                                            @foreach ($countries as $key => $country)
                                                                                <option value="{{ $key }}" {{ old('country') == $key ? 'selected' : '' }}>
                                                                                    {{ $country }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>

                                                                        {!! $errors->first('country', '<p class="help-block">:message</p>') !!}

                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                            <h3> Contact & Address </h3>
                                                            <fieldset>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-12">
                                                                        <label for="University-2" class="block">Parmenent Address</label>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <input id="parmenent_address" value="{{ old('parmenent_address') }}" name="parmenent_address" type="text" class="form-control required">
                                                                        {!! $errors->first('parmenent_address', '<p class="help-block">:message</p>') !!}
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-12">
                                                                        <label for="Country-2" class="block">Residential Address</label>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <input value="{{ old('residential_address') }}" id="Country-2a" name="residential_address" type="text" class="form-control required">
                                                                        {!! $errors->first('residential_address', '<p class="help-block">:message</p>') !!}
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-12">
                                                                        <label for="state" class="block">State </label>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <input id="state" name="state" type="text" class="form-control required">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-12">
                                                                        <label for="city" class="block">City</label>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <input id="city" name="city" type="text" class="form-control required">
                                                                        {!! $errors->first('city', '<p class="help-block">:message</p>') !!}

                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                            <h3> Other Details </h3>
                                                            <fieldset>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-12">
                                                                        <label for="gender" class="block">Gender:</label>
                                                                    </div>
                                                                    <div class="col-sm-12">

                                                                        <select class="form-control" id="gender" name="gender">
                                                                            <option value="" style="display: none;"
                                                                                    {{ old('gender') == '' ? 'selected' : '' }} disabled
                                                                                    selected>Select Gender
                                                                            </option>
                                                                            @foreach ([
                                                                            'male' => 'Male',
                                                                            'female' => 'Female',

                                                                                      ]
                                                                                         as $key => $text)
                                                                                <option value="{{ $key }}" {{ old('gender') == $key ? 'selected' : '' }}>
                                                                                    {{ $text }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>


                                                                        {!! $errors->first('gender', '<p class="help-block">:message</p>') !!}

                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-12">
                                                                        <label for="marital_status" class="block">Marital Status</label>
                                                                    </div>
                                                                    <div class="col-sm-12">

                                                                        <select class="form-control" id="marital_status" name="marital_status">
                                                                            <option value="" style="display: none;"
                                                                                    {{ old('marital_status') == '' ? 'selected' : '' }} disabled
                                                                                    selected>Select marital status
                                                                            </option>
                                                                            @foreach ([
                                                                            'single' => 'Single',
                                                                            'married' => 'Married',
                                                                            'divorced' => 'Divorced',
                                                                            'widow' => 'Widow',
                                                                                      ]
                                                                                         as $key => $text)
                                                                                <option value="{{ $key }}" {{ old('marital_status') == $key ? 'selected' : '' }}>
                                                                                    {{ $text }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>



                                                                        {!! $errors->first('marital_status', '<p class="help-block">:message</p>') !!}

                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <div class="col-md-offset-2 col-md-10">
                                                                        <input class="btn btn-primary" type="submit" value="Save Record">
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
        </div>
    </div>

@endsection