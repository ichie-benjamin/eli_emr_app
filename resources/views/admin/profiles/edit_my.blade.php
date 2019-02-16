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
                            <h5>Edit Profile</h5>
                            <span>{{ $user->name }} Profile</span>
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
                                                <div id="wizarda">
                                                    <section>
                                                        <form method="POST" class="wizard-form" id="basic-forms" action="{{ route('profiles.profile.update', $user->profile->id) }}">
                                                            {{ csrf_field() }}
                                                            <input name="_method" type="hidden" value="PUT">
                                                            <input name="user_id" type="hidden" value="{{ $user->id }}">

                                                            <h3> Account Details </h3>
                                                            <fieldset>
                                                                <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
                                                                    <div class="col-sm-12">
                                                                        <label for="userName-2" class="block">User name *</label>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <input id="userName" name="name" value="{{ old('name', optional($user)->name) }}" type="text" class=" form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row {{ $errors->has('email') ? 'has-error' : '' }}">
                                                                    <div class="col-sm-12">
                                                                        <label for="email-2" class="block">Email *</label>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <input id="email" disabled value="{{ old('email', optional($user)->email) }}" type="email" class=" form-control">
                                                                        <input name="email"  value="{{ old('email', optional($user)->email) }}" type="hidden" >
                                                                        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-12">
                                                                        <label for="pics" class="block">Profile Picture *</label>
                                                                    </div>

                                                                    <div class="col-sm-12">
                                                                        <img src="{{ asset($user->avatar) }}" style="height: 200px">
                                                                    </div>
                                                                </div>


                                                            </fieldset>
                                                            <h3> Profile information </h3>
                                                            <fieldset>
                                                                <div class="form-group row {{ $errors->has('first_name') ? 'has-error' : '' }}">
                                                                    <div class="col-sm-12">
                                                                        <label for="name-2" class="block">First name *</label>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <input id="first_name" value="{{ old('first_name', optional($user)->profile->first_name) }}" name="first_name" type="text" class="form-control">
                                                                        {!! $errors->first('first_name', '<p class="help-block">:message</p>') !!}
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-12">
                                                                        <label for="last_name" class="block">Last name *</label>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <input id="last_name" value="{{ old('last_name', optional($user)->profile->last_name) }}" name="last_name" type="text" class="form-control">
                                                                        {!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row {{ $errors->has('phone') ? 'has-error' : '' }}">
                                                                    <div class="col-sm-12">
                                                                        <label for="phone-2" class="block">Phone #</label>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <input id="phone" name="phone" value="{{ old('phone', optional($user)->profile->phone ) }}" type="number" class="form-control phone">
                                                                        {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row {{ $errors->has('date_of_birth') ? 'has-error' : '' }}">
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
                                                                            <option value="" style="display: none;" {{ old('country',  optional($user->profile)->country ?: '') == '' ? 'selected' : '' }} disabled selected>Select Country</option>
                                                                            @foreach ($countries as $key => $country)
                                                                                <option value="{{ $key }}" {{ old('country',  optional($user->profile)->country ?: '') == $key ? 'selected' : '' }}>
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
                                                                        <label for="parmenent_address" class="block">Parmenent Address</label>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <input id="parmenent_address" value="{{ old('parmenent_address', optional($user)->profile->parmenent_address) }}" name="parmenent_address" type="text" class="form-control required">
                                                                        {!! $errors->first('parmenent_address', '<p class="help-block">:message</p>') !!}
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-12">
                                                                        <label for="Country-2" class="block">Residential Address</label>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <input value="{{ old('residential_address', optional($user)->profile->residential_address) }}" id="" name="residential_address" type="text" class="form-control required">
                                                                        {!! $errors->first('residential_address', '<p class="help-block">:message</p>') !!}
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-12">
                                                                        <label for="" class="block">State </label>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <input id="" name="state" value="{{ old('state', optional($user)->profile->state) }}" type="text" class="form-control required">
                                                                        {!! $errors->first('state', '<p class="help-block">:message</p>') !!}
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-12">
                                                                        <label for="city" class="block">City</label>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <input id="city" name="city" type="text" value="{{ old('city', optional($user)->profile->city) }}" class="form-control required">
                                                                        {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                            <h3> Other Details </h3>
                                                            <fieldset>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-12">
                                                                        <label for="Company-2" class="block">Gender:</label>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <select class="form-control" id="gender" name="gender">
                                                                            <option value="" style="display: none;"
                                                                                    {{ old('gender', optional($user->profile)->gender) == '' ? 'selected' : '' }} disabled
                                                                                    selected>Select Gender
                                                                            </option>
                                                                            @foreach ([
                                                                            'male' => 'Male',
                                                                            'female' => 'Female',

                                                                                      ]
                                                                                         as $key => $text)
                                                                                <option value="{{ $key }}" {{ old('gender', optional($user->profile)->gender) == $key ? 'selected' : '' }}>
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
                                                                                    {{ old('marital_status', optional($user->profile)->gender) == '' ? 'selected' : '' }} disabled
                                                                                    selected>Select marital status
                                                                            </option>
                                                                            @foreach ([
                                                                            'single' => 'Single',
                                                                            'married' => 'Married',
                                                                            'divorced' => 'Divorced',
                                                                            'widow' => 'Widow',
                                                                                      ]
                                                                                         as $key => $text)
                                                                                <option value="{{ $key }}" {{ old('marital_status', optional($user->profile)->gender) == $key ? 'selected' : '' }}>
                                                                                    {{ $text }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>



                                                                        {!! $errors->first('marital_status', '<p class="help-block">:message</p>') !!}
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <div class="col-md-offset-2 col-md-10">
                                                                        <input class="btn btn-primary" type="submit" value="Update">
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