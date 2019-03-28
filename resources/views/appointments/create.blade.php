@extends('layouts.backend')

@section('content')

    <div class="pcoded-content">

        <div class="page-header card">
            <div class="row">
                <div class="col-lg-8 col-xs-8">
                    <div class="page-header-title pull-left">
                        <i class="feather icon-plus bg-c-blue"></i>
                        <div class="d-inline">
                            <h4 class="mt-5 mb-5">Create New Appointments</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-4">
                    <div class="page-header-breadcrumb">
                        <ul class=" breadcrumb breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="{{ route('appointments.appointments.index') }}" class="btn btn-primary" title="Show All Appointments">
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

                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif

                                <form method="POST" action="{{ route('appointments.appointments.store') }}" accept-charset="UTF-8" id="create_appointments_form" name="create_appointments_form" class="form-horizontal">
                                    {{ csrf_field() }}
                                    @include ('appointments.form', [
                                                                'appointments' => null,
                                                              ])

                                    <div class="form-group">
                                        <div class="col-md-offset-2 col-md-10">
                                            <input class="btn btn-primary" type="submit" value="Add">
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

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#patient_id').change(function () {
                var patientId = $(this).val();
                if (patientId) {
                    $.ajax({
                    type: "GET",
                    url: "{{url('/bt_admin/api/patient/')}}" + '/' + patientId,
                    success: function (res) {
                    if (res) {
                        $('#patient_name,#m_r_n,#patient_address,#contact_number').val('');
                        var name = $('#patient_name');
                        var mrn = $('#m_r_n');
                        var address = $('#patient_address');
                        var phone = $('#contact_number');
                        name.val(name.val() + res.name);
                        mrn.val(mrn.val() + res.identification_code);
                        phone.val(phone.val() + res.profile.phone);
                        address.val(address.val() + res.profile.parmenent_address);
                   } else {

                    }
                    }
                    });
                }
            });
        })
    </script>
@stop
