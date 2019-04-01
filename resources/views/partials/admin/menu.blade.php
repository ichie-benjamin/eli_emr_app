<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <ul class="pcoded-item pcoded-left-item">
                <li class="{{ active('admin.home') }}">
                    <a href="{{ route('admin.home') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>

                <li class="{{ active('patients.patient.create') }}">
                    <a href="{{ route('patients.patient.create') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-compass"></i></span>
                        <span class="pcoded-mtext">Admission</span>
                    </a>

                </li>
                <li class="{{ active('appointments.appointments.create') }}">
                    <a href="{{ route('appointments.appointments.create') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-calendar"></i></span>
                        <span class="pcoded-mtext">New Appointments</span>
                    </a>

                </li>


                <li class="{{ active(['patients.patient.*','patient_histories.patient_history.*'], 'pcoded-trigger') }} {{ active(['patients.patient.*','patient_histories.patient_history.*']) }} pcoded-hasmenu">
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
                    <li class="{{ active('patient_histories.patient_history.*') }}">
                            <a href="{{ route('patient_histories.patient_history.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Patient History</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="{{ active(['infant_mortalities.infant_mortality.*'], 'pcoded-trigger') }} {{ active(['infant_mortalities.infant_mortality.*']) }} pcoded-hasmenu">
                    <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-delete"></i></span>
                        <span class="pcoded-mtext">Mortality Rate</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ active('maternal_mortalities.maternal_mortality.*') }}">
                            <a href="{{ route('maternal_mortalities.maternal_mortality.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Maternal Mortality</span>
                            </a>
                        </li>
                        <li class="{{ active('infant_mortalities.infant_mortality.*') }}">
                            <a href="{{ route('infant_mortalities.infant_mortality.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Infant Mortality</span>
                            </a>
                        </li>
                        {{--<li class="">--}}
                            {{--<a href="{{ route('coming') }}" class="waves-effect waves-dark">--}}
                                {{--<span class="pcoded-mtext">General mortality </span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    </ul>
                </li>


                <li class="{{ active(['hiv_patients.hiv_patient.*'], 'pcoded-trigger') }} {{ active(['hiv_patients.hiv_patient.*']) }} pcoded-hasmenu">
                    <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-user-check"></i></span>
                        <span class="pcoded-mtext">Hiv Patients</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ active('hiv_patients.hiv_patient.create') }}">
                            <a href="{{ route('hiv_patients.hiv_patient.create') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Add Patient</span>
                            </a>
                        </li>
                        <li class="{{ active('hiv_patients.hiv_patient.index') }}">
                            <a href="{{ route('hiv_patients.hiv_patient.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">View Patients</span>
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

                <li class="{{ active(['patient_call_logs.patient_call_log.*'], 'pcoded-trigger') }} {{ active(['patient_call_logs.patient_call_log.*']) }} pcoded-hasmenu">
                    <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-phone-forwarded"></i></span>
                        <span class="pcoded-mtext">Patient Call Log</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ active('patient_call_logs.patient_call_log.create') }}">
                            <a href="{{ route('patient_call_logs.patient_call_log.create') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Register Call</span>
                            </a>
                        </li>
                        <li class="{{ active('patient_call_logs.patient_call_log.index') }}">
                            <a href="{{ route('patient_call_logs.patient_call_log.index') }}" class="waves-effect waves-dark">
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

                <li class="{{ active(['drugs.drug.*','drug_references.drug_reference.*'], 'pcoded-trigger') }} {{ active(['drugs.drug.*','drug_references.drug_reference.*']) }} pcoded-hasmenu">
                    <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-arrow-down"></i></span>
                        <span class="pcoded-mtext">Pharmacy</span>
                    </a>
                    <ul class="pcoded-submenu">
                        {{--<li class=" {{ active(['drugs.drug.create']) }}">--}}
                            {{--<a href="{{ route('drugs.drug.create') }}" class="waves-effect waves-dark">--}}
                                {{--<span class="pcoded-mtext">Add Drug </span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        <li class=" {{ active(['drug_references.drug_reference.*']) }}">
                            <a href="{{ route('drug_references.drug_reference.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Drug References</span>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="">
                    {{--<li class=" {{ active(['patient', 'users/*', 'posts.*', 'pages.contact']) }} pcoded-trigger">--}}
                    <a href="{{ route('coming') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Number of Visits Log</span>
                    </a>

                </li>

                <li class="">
                    {{--<li class=" {{ active(['discharge_summaries.discharge_summary.*']) }} pcoded-trigger">--}}
                    <a href="{{ route('discharge_summaries.discharge_summary.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Discharge Log</span>
                    </a>

                </li>


                <li class="pcoded-hasmenu {{ active(['disease_reports.disease_report.*','discharge_summaries.discharge_summary.*'])}} {{ active(['disease_reports.disease_report.*','discharge_summaries.discharge_summary.*'], 'pcoded-trigger') }} pcoded-trigger">
                    <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                        <span class="pcoded-mtext">Doctors Service</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ active(['disease_reports.disease_report.*','discharge_summaries.discharge_summary.*'])}} pcoded-hasmenu">
                            <a href="#" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Patient Report</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class="">
                                    <a href="{{ route('discharge_summaries.discharge_summary.index') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Discharge Note</span>
                                    </a>
                                </li>


                            </ul>
                        </li>

                        <li class="{{ active('disease_reports.disease_report.*') }}">
                            {{--<li class=" {{ active(['patient', 'users/*', 'posts.*', 'pages.contact']) }} pcoded-trigger">--}}
                            <a href="{{ route('disease_reports.disease_report.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                <span class="pcoded-mtext">Disease Reports</span>
                            </a>

                        </li>



                    </ul>
                </li>
                <ul class="pcoded-item  pcoded-left-item">
                    <li class="pcoded-hasmenu {{ active(['case_notes.case_note.*','nursing_visits.nursing_visit.*','drugs.drug.*','nurse_notes.nurse_note.*'], 'pcoded-trigger') }} {{ active(['nursing_visits.nursing_visit.*','case_notes.case_note.*','drugs.drug.*','nurse_notes.nurse_note.*']) }} ">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-credit-card"></i>
</span>
                            <span class="pcoded-mtext">Nurses Actions</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class=" {{ active(['drugs.drug.*']) }}">
                                <a href="{{ route('drugs.drug.index') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Manage Drugs </span>
                                </a>
                            </li>
                            <li class="{{ active('nursing_visits.nursing_visit.*') }}">
                                <a href="{{ route('nursing_visits.nursing_visit.index') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Nursing Visits Record</span>
                                </a>
                            </li>
                            {{--  <li class="{{ active('case_notes.case_note.index') }}">
                                <a href="{{ route('case_notes.case_note.index') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Cases Notes</span>
                                </a>
                            </li>  --}}
                            <li class="{{ active('nurse_notes.nurse_note.*') }}">
                                <a href="{{ route('nurse_notes.nurse_note.index') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Nurse Notes</span>
                                </a>
                            </li>
 {{--  <li class="{{ active('case_notes.case_note.create') }}">
                                <a href="{{ route('case_notes.case_note.create') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Add Case Note</span>
                                </a>
                            </li>  --}}


                        </ul>
                    </li>

                    <li class="pcoded-hasmenu ">
                        <a href="#" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="feather icon-activity"></i></span>
                            <span class="pcoded-mtext">Accounts</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class="active pcoded-hasmenu">
                                <a href="{{ route('coming') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Make Payments</span>
                                </a>
                            </li>
                                    <li class="">
                                        <a href="{{ route('coming') }}" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Manage Payments</span>
                                        </a>
                                    </li>


                        </ul>

                    </li>


                        <li class="pcoded-hasmenu {{ active(['facilities.facility.*','ethnicities.ethnicity.*','settings.setting.*','death_causes.death_cause.*','roles.role.*','sliders.slider.*'], 'pcoded-trigger') }} {{ active(['settings.setting.*','death_causes.death_cause.*','roles.role.*','sliders.slider.*','facilities.facility.*','ethnicities.ethnicity.*']) }}">
                            <a href="#" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="fa fa-cog"></i>
</span>
                                <span class="pcoded-mtext">Settings</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class="">
                                    <a href="{{ route('coming') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">All Reports</span>
                                    </a>
                                </li>
                                <li class=" {{ active('death_causes.death_cause.*') }} ">
                                    <a href="{{ route('death_causes.death_cause.index') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Death Causes</span>
                                    </a>
                                </li>
                                <li class=" {{ active('facilities.facility.*') }} ">
                                    <a href="{{ route('facilities.facility.index') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Facilities</span>
                                    </a>
                                </li>
                                <li class=" {{ active('ethnicities.ethnicity.*') }} ">
                                    <a href="{{ route('ethnicities.ethnicity.index') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Ethnicities</span>
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