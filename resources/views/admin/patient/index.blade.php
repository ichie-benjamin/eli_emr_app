@extends('layouts.backend')

@section('content')
    <div class="pcoded-content">
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="feather icon-users bg-c-blue"></i>
                        <div class="d-inline">
                            <h5>All Patients</h5>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class=" breadcrumb breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="{{ route('patients.patient.create') }}" class="btn btn-success" title="Add New User">
                                    <span class="feather icon-plus" aria-hidden="true"></span>
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

                            @if(Session::has('success_message'))
                                <div class="alert alert-success">
                                    <span class="glyphicon glyphicon-ok"></span>
                                    {!! session('success_message') !!}

                                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>

                                </div>
                            @endif

                            <div class="col-md-12">
                                @if(count($users) == 0)
                                    <div class="panel-body text-center">
                                        <h4>No Users Available!</h4>
                                    </div>
                                @else
                                    <div class="panel-body panel-body-with-table">
                                        <div class="table-responsive">

                                            <table class="table table-striped " id="datatable">
                                                <thead>
                                                <tr>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Email</th>
                                                    <th>ID Number</th>
                                                    {{--<th>Country</th>--}}
                                                    {{--<th>State</th>--}}
                                                    <th>Phone</th>

                                                    <td>Status</td>

                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($users as $user)
                                                    <tr>
                                                        <td>{{ optional($user->profile)->first_name }}</td>
                                                        <td>{{ optional($user->profile)->last_name }}</td>
                                                        <td>{{ $user->email }}</td>
                                                        <td>{{ $user->identification_code }}</td>
                                                        {{--<td>{{ optional($user->profile)->country }}</td>--}}
                                                        {{--<td>{{ optional($user->profile)->state }}</td>--}}
                                                        <td>{{ optional($user->profile)->phone }}</td>
                                                        <td>{{ $user->status }}</td>
                                                        <td>

                                                            <form method="POST" action="{!! route('users.user.destroy', $user->id) !!}" accept-charset="UTF-8">
                                                                <input name="_method" value="DELETE" type="hidden">
                                                                {{ csrf_field() }}

                                                                <div class="btn-group btn-group-sm pull-right" role="group">
                                                                    <a href="{{ route('patients.patient.show', $user->id ) }}" class="btn btn-sm btn-info" title="Show User">
                                                                        <span class="feather icon-eye " aria-hidden="true"></span>
                                                                    </a>
                                                                    <a href="{{ route('users.user.edit', $user->id ) }}" class="btn btn-sm btn-primary" title="Edit User">
                                                                        <span class="feather icon-edit" aria-hidden="true"></span>
                                                                    </a>

                                                                    {{--<button type="submit" class="btn btn-danger btn-sm" title="Delete User" onclick="return confirm(&quot;Delete User?&quot;)">--}}
                                                                        {{--<span class="feather icon-trash" aria-hidden="true"></span>--}}
                                                                    {{--</button>--}}
                                                                </div>

                                                            </form>

                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>

                                    <div class="panel-footer">
                                        {!! $users->render() !!}
                                    </div>

                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection