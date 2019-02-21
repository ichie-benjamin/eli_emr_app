<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <ul class="pcoded-item pcoded-left-item">
                <li class="{{ active('admin.home') }}">
                {{--<li class=" {{ active(['patient', 'users/*', 'posts.*', 'pages.contact']) }} pcoded-trigger">--}}
                    <a href="{{ route('admin.home') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>

                </li>


                <li class="{{ active(['patients.patient.*'], 'pcoded-trigger') }} {{ active(['patients.patient.*']) }} pcoded-hasmenu">
                    <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-user-check"></i></span>
                        <span class="pcoded-mtext">Manage Patients</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ active('patients.patient.create') }}">
                            <a href="{{ route('patients.patient.create') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Register Patients</span>
                            </a>
                        </li>
                        <li class="{{ active('patients.patient.index') }}">
                            <a href="{{ route('patients.patient.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">View Patient</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('coming') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Patient History</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="{{ active(['emer_call_logs.emer_call_log.*'], 'pcoded-trigger') }} {{ active(['emer_call_logs.emer_call_log.*']) }} pcoded-hasmenu">
                    <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-phone-call"></i></span>
                        <span class="pcoded-mtext">Emergency Call Log</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ active('emer_call_logs.emer_call_log.create') }}">
                            <a href="{{ route('emer_call_logs.emer_call_log.create') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Register Call</span>
                            </a>
                        </li>
                        <li class="{{ active('emer_call_logs.emer_call_log.index') }}">
                            <a href="{{ route('emer_call_logs.emer_call_log.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">All Calls</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=" pcoded-hasmenu {{ active(['users.user.*'], 'pcoded-trigger') }} {{ active(['users.user.*']) }}">
                    <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                        <span class="pcoded-mtext">Manage Users</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class=" {{ active(['users.user.create']) }}">
                            <a href="{{ route('users.user.create') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Add User</span>
                            </a>
                        </li>
                        <li class="{{ active(['users.user.index']) }}">
                            <a href="{{ route('users.user.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">View All Users</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="pcoded-hasmenu ">
                    <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                        <span class="pcoded-mtext">Doctors Service</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="active pcoded-hasmenu">
                            <a href="{{ route('coming') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Patient Report</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class="">
                                    <a href="{{ route('coming') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Discharge Note</span>
                                    </a>
                                </li>


                            </ul>
                        </li>



                    </ul>
                </li>
                <ul class="pcoded-item  pcoded-left-item">
                    <li class="pcoded-hasmenu {{ active(['case_notes.case_note.*'], 'pcoded-trigger') }} {{ active(['case_notes.case_note.*']) }} ">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-credit-card"></i>
</span>
                            <span class="pcoded-mtext">Nurses Actions</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class="{{ active('case_notes.case_note') }}">
                                <a href="{{ route('coming') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Nursing Visits Record</span>
                                </a>
                            </li>
                            <li class="{{ active('case_notes.case_note.index') }}">
                                <a href="{{ route('case_notes.case_note.index') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Cases Notes</span>
                                </a>
                            </li>
 <li class="{{ active('case_notes.case_note.create') }}">
                                <a href="{{ route('case_notes.case_note.create') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Add Case Note</span>
                                </a>
                            </li>


                        </ul>
                    </li>


                        <li class="pcoded-hasmenu {{ active(['settings.setting.*','roles.role.*','sliders.slider.*'], 'pcoded-trigger') }} {{ active(['settings.setting.*','roles.role.*','sliders.slider.*']) }}">
                            <a href="#" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="fa fa-cog"></i>
</span>
                                <span class="pcoded-mtext">Settings</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class=" ">
                                    <a href="{{ route('coming') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">All Reports</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="{{ route('coming') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Cases Notes</span>
                                    </a>
                                </li>

                                <li class=" {{ active(['settings.setting.*'], 'pcoded-trigger') }} {{ active(['settings.setting.*']) }}">
                                    <a href="{{ route('settings.setting.index') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">App Config</span>
                                    </a>
                                </li>



                                <li class="pcoded-hasmenu {{ active(['sliders.slider.*'], 'pcoded-trigger') }} {{ active(['sliders.slider.*']) }}">
                                    <a href="#" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Sliders</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="{{ active('sliders.slider.create') }} ">
                                            <a href="{{ route('sliders.slider.create') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Add Slider</span>
                                            </a>
                                        </li>
                                        <li class="{{ active('sliders.slider.index') }} ">
                                            <a href="{{ route('sliders.slider.index') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">All Sliders</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="pcoded-hasmenu {{ active(['roles.role.*'], 'pcoded-trigger') }} {{ active(['roles.role.*']) }}">
                                    <a href="#" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Roles</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="{{ active('roles.role.create') }}">
                                            <a href="{{ route('roles.role.create') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Add Role</span>
                                            </a>
                                        </li>
                                        <li class="{{ active('roles.role.index') }}">
                                            <a href="{{ route('roles.role.index') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">All Roles</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </li>


                </ul>



                <li class="{{ active('admin.media') }}">
                    {{--<li class=" {{ active(['patient', 'users/*', 'posts.*', 'pages.contact']) }} pcoded-trigger">--}}
                    <a href="{{ route('admin.media') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                        <span class="pcoded-mtext">Media</span>
                    </a>

                </li>


                <li class=" pcoded-hasmenu {{ active(['profiles.profile.*'], 'pcoded-trigger') }} {{ active(['profiles.profile.*']) }}">
                    <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-user-x"></i></span>
                        <span class="pcoded-mtext">Profile</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class=" {{ active(['profiles.profile.myprofile']) }}">
                            <a href="{{ route('profiles.profile.myprofile') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">View Profile</span>
                            </a>
                        </li>
                        <li class="{{ active(['profiles.profile.edit_my_profile']) }}">
                            <a href="{{ route('profiles.profile.edit_my_profile') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Edit Profile</span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>


        </div>
    </div>
</nav>