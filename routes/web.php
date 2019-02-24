<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('bt_admin', 'AdminController@index')->name('admin.home');
Route::get('bt_admin/media', 'AdminController@media')->name('admin.media');
Route::get('bt_admin/profile', 'AdminController@profile')->name('admin.profile');
//['middleware' => ['role:admin']],
Route::group([ 'prefix' => 'bt_admin','middleware' => ['auth', 'level:1']], function () {
    Route::get('/my_profile', 'ProfilesController@myProfile')->name('profiles.profile.myprofile');
    Route::get('/coming-soon', 'AdminController@soon')->name('coming');
    Route::get('/patient/create', 'ProfilesController@patientCreate')->name('patients.patient.create');
    Route::get('/patient/all', 'UsersController@patients')->name('patients.patient.index');
    Route::get('/patient/show/{patient}','UsersController@show')->name('patients.patient.show')->where('id', '[0-9]+');
    Route::get('/edit_profile', 'ProfilesController@editMyProfile')->name('profiles.profile.edit_my_profile');
            Route::group(['prefix' => '/emer_call_logs',], function () {
        Route::get('/', 'EmerCallLogsController@index')
            ->name('emer_call_logs.emer_call_log.index');

        Route::get('/create','EmerCallLogsController@create')
            ->name('emer_call_logs.emer_call_log.create');

        Route::get('/show/{emerCallLog}','EmerCallLogsController@show')
            ->name('emer_call_logs.emer_call_log.show')
            ->where('id', '[0-9]+');

        Route::get('/{emerCallLog}/edit','EmerCallLogsController@edit')
            ->name('emer_call_logs.emer_call_log.edit')
            ->where('id', '[0-9]+');

        Route::post('/', 'EmerCallLogsController@store')
            ->name('emer_call_logs.emer_call_log.store');

        Route::put('emer_call_log/{emerCallLog}', 'EmerCallLogsController@update')
            ->name('emer_call_logs.emer_call_log.update')
            ->where('id', '[0-9]+');

        Route::delete('/emer_call_log/{emerCallLog}','EmerCallLogsController@destroy')
            ->name('emer_call_logs.emer_call_log.destroy')
            ->where('id', '[0-9]+');

    });
    Route::group(['prefix' => 'profiles',], function () {
    Route::get('/', 'ProfilesController@index')->name('profiles.profile.index');
    Route::get('/create','ProfilesController@create')->name('profiles.profile.create');
    Route::get('/show/{profile}','ProfilesController@show')->name('profiles.profile.show')->where('id', '[0-9]+');
    Route::get('/{profile}/edit','ProfilesController@edit')->name('profiles.profile.edit')->where('id', '[0-9]+');
    Route::post('/', 'ProfilesController@store')->name('profiles.profile.store');
    Route::put('profile/{profile}', 'ProfilesController@update')->name('profiles.profile.update')->where('id', '[0-9]+');
    Route::delete('/profile/{profile}','ProfilesController@destroy')->name('profiles.profile.destroy')->where('id', '[0-9]+');

});
});

Route::group(
[
    'prefix' => 'sliders',
], function () {

    Route::get('/', 'SlidersController@index')
         ->name('sliders.slider.index');

    Route::get('/create','SlidersController@create')
         ->name('sliders.slider.create');

    Route::get('/show/{slider}','SlidersController@show')
         ->name('sliders.slider.show')
         ->where('id', '[0-9]+');

    Route::get('/{slider}/edit','SlidersController@edit')
         ->name('sliders.slider.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'SlidersController@store')
         ->name('sliders.slider.store');
               
    Route::put('slider/{slider}', 'SlidersController@update')
         ->name('sliders.slider.update')
         ->where('id', '[0-9]+');

    Route::delete('/slider/{slider}','SlidersController@destroy')
         ->name('sliders.slider.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'settings',
], function () {

    Route::get('/', 'SettingsController@index')
         ->name('settings.setting.index');

    Route::get('/create','SettingsController@create')
         ->name('settings.setting.create');

    Route::get('/show/{setting}','SettingsController@show')
         ->name('settings.setting.show')
         ->where('id', '[0-9]+');

    Route::get('/{setting}/edit','SettingsController@edit')
         ->name('settings.setting.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'SettingsController@store')
         ->name('settings.setting.store');
               
    Route::put('setting/{setting}', 'SettingsController@update')
         ->name('settings.setting.update')
         ->where('id', '[0-9]+');

    Route::delete('/setting/{setting}','SettingsController@destroy')
         ->name('settings.setting.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'roles',
], function () {

    Route::get('/', 'RolesController@index')
         ->name('roles.role.index');

    Route::get('/create','RolesController@create')
         ->name('roles.role.create');

    Route::get('/show/{role}','RolesController@show')
         ->name('roles.role.show')
         ->where('id', '[0-9]+');

    Route::get('/{role}/edit','RolesController@edit')
         ->name('roles.role.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'RolesController@store')
         ->name('roles.role.store');
               
    Route::put('role/{role}', 'RolesController@update')
         ->name('roles.role.update')
         ->where('id', '[0-9]+');

    Route::delete('/role/{role}','RolesController@destroy')
         ->name('roles.role.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'users',
], function () {

    Route::get('/', 'UsersController@index')
         ->name('users.user.index');

    Route::get('/create','UsersController@create')
         ->name('users.user.create');

    Route::get('/show/{user}','UsersController@show')
         ->name('users.user.show')
         ->where('id', '[0-9]+');

    Route::get('/{user}/edit','UsersController@edit')
         ->name('users.user.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'UsersController@store')
         ->name('users.user.store');
               
    Route::put('user/{user}', 'UsersController@update')
         ->name('users.user.update')
         ->where('id', '[0-9]+');

    Route::delete('/user/{user}','UsersController@destroy')
         ->name('users.user.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'case_notes',
], function () {

    Route::get('/', 'CaseNotesController@index')
         ->name('case_notes.case_note.index');

    Route::get('/create','CaseNotesController@create')
         ->name('case_notes.case_note.create');

    Route::get('/show/{caseNote}','CaseNotesController@show')
         ->name('case_notes.case_note.show')
         ->where('id', '[0-9]+');

    Route::get('/{caseNote}/edit','CaseNotesController@edit')
         ->name('case_notes.case_note.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'CaseNotesController@store')
         ->name('case_notes.case_note.store');
               
    Route::put('case_note/{caseNote}', 'CaseNotesController@update')
         ->name('case_notes.case_note.update')
         ->where('id', '[0-9]+');

    Route::delete('/case_note/{caseNote}','CaseNotesController@destroy')
         ->name('case_notes.case_note.destroy')
         ->where('id', '[0-9]+');

});



Route::group(
[
    'prefix' => 'patient_call_logs',
], function () {

    Route::get('/', 'PatientCallLogsController@index')
         ->name('patient_call_logs.patient_call_log.index');

    Route::get('/create','PatientCallLogsController@create')
         ->name('patient_call_logs.patient_call_log.create');

    Route::get('/show/{patientCallLog}','PatientCallLogsController@show')
         ->name('patient_call_logs.patient_call_log.show')
         ->where('id', '[0-9]+');

    Route::get('/{patientCallLog}/edit','PatientCallLogsController@edit')
         ->name('patient_call_logs.patient_call_log.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'PatientCallLogsController@store')
         ->name('patient_call_logs.patient_call_log.store');
               
    Route::put('patient_call_log/{patientCallLog}', 'PatientCallLogsController@update')
         ->name('patient_call_logs.patient_call_log.update')
         ->where('id', '[0-9]+');

    Route::delete('/patient_call_log/{patientCallLog}','PatientCallLogsController@destroy')
         ->name('patient_call_logs.patient_call_log.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'hiv_patients',
], function () {

    Route::get('/', 'HivPatientsController@index')
         ->name('hiv_patients.hiv_patient.index');

    Route::get('/create','HivPatientsController@create')
         ->name('hiv_patients.hiv_patient.create');

//    Route::get('/create','HivPatientsController@createStepTwo')
//         ->name('hiv_patients.hiv_patient.create_step_two');

    Route::get('/show/{hivPatient}','HivPatientsController@show')
         ->name('hiv_patients.hiv_patient.show')
         ->where('id', '[0-9]+');

    Route::get('/{hivPatient}/edit','HivPatientsController@edit')
         ->name('hiv_patients.hiv_patient.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'HivPatientsController@storeStepOne')
         ->name('hiv_patients.hiv_patient.store_step_one');
               
    Route::put('hiv_patient/{hivPatient}', 'HivPatientsController@update')
         ->name('hiv_patients.hiv_patient.update')
         ->where('id', '[0-9]+');

    Route::delete('/hiv_patient/{hivPatient}','HivPatientsController@destroy')
         ->name('hiv_patients.hiv_patient.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'clinician_assessments',
], function () {

    Route::get('/', 'ClinicianAssessmentsController@index')
         ->name('clinician_assessments.clinician_assessment.index');

    Route::get('/create','ClinicianAssessmentsController@create')
         ->name('clinician_assessments.clinician_assessment.create');

    Route::get('/show/{clinicianAssessment}','ClinicianAssessmentsController@show')
         ->name('clinician_assessments.clinician_assessment.show')
         ->where('id', '[0-9]+');

    Route::get('/{clinicianAssessment}/edit','ClinicianAssessmentsController@edit')
         ->name('clinician_assessments.clinician_assessment.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'ClinicianAssessmentsController@store')
         ->name('clinician_assessments.clinician_assessment.store');
               
    Route::put('clinician_assessment/{clinicianAssessment}', 'ClinicianAssessmentsController@update')
         ->name('clinician_assessments.clinician_assessment.update')
         ->where('id', '[0-9]+');

    Route::delete('/clinician_assessment/{clinicianAssessment}','ClinicianAssessmentsController@destroy')
         ->name('clinician_assessments.clinician_assessment.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'art_treatments',
], function () {

    Route::get('/', 'ArtTreatmentsController@index')
         ->name('art_treatments.art_treatment.index');

    Route::get('/create','ArtTreatmentsController@create')
         ->name('art_treatments.art_treatment.create');

    Route::get('/show/{artTreatment}','ArtTreatmentsController@show')
         ->name('art_treatments.art_treatment.show')
         ->where('id', '[0-9]+');

    Route::get('/{artTreatment}/edit','ArtTreatmentsController@edit')
         ->name('art_treatments.art_treatment.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'ArtTreatmentsController@store')
         ->name('art_treatments.art_treatment.store');
               
    Route::put('art_treatment/{artTreatment}', 'ArtTreatmentsController@update')
         ->name('art_treatments.art_treatment.update')
         ->where('id', '[0-9]+');

    Route::delete('/art_treatment/{artTreatment}','ArtTreatmentsController@destroy')
         ->name('art_treatments.art_treatment.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'treatment_interruptions',
], function () {

    Route::get('/', 'TreatmentInterruptionsController@index')
         ->name('treatment_interruptions.treatment_interruption.index');

    Route::get('/create','TreatmentInterruptionsController@create')
         ->name('treatment_interruptions.treatment_interruption.create');

    Route::get('/show/{treatmentInterruption}','TreatmentInterruptionsController@show')
         ->name('treatment_interruptions.treatment_interruption.show')
         ->where('id', '[0-9]+');

    Route::get('/{treatmentInterruption}/edit','TreatmentInterruptionsController@edit')
         ->name('treatment_interruptions.treatment_interruption.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'TreatmentInterruptionsController@store')
         ->name('treatment_interruptions.treatment_interruption.store');
               
    Route::put('treatment_interruption/{treatmentInterruption}', 'TreatmentInterruptionsController@update')
         ->name('treatment_interruptions.treatment_interruption.update')
         ->where('id', '[0-9]+');

    Route::delete('/treatment_interruption/{treatmentInterruption}','TreatmentInterruptionsController@destroy')
         ->name('treatment_interruptions.treatment_interruption.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'treatment_records',
], function () {

    Route::get('/', 'TreatmentRecordsController@index')
         ->name('treatment_records.treatment_record.index');

    Route::get('/create','TreatmentRecordsController@create')
         ->name('treatment_records.treatment_record.create');

    Route::get('/show/{treatmentRecord}','TreatmentRecordsController@show')
         ->name('treatment_records.treatment_record.show')
         ->where('id', '[0-9]+');

    Route::get('/{treatmentRecord}/edit','TreatmentRecordsController@edit')
         ->name('treatment_records.treatment_record.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'TreatmentRecordsController@store')
         ->name('treatment_records.treatment_record.store');
               
    Route::put('treatment_record/{treatmentRecord}', 'TreatmentRecordsController@update')
         ->name('treatment_records.treatment_record.update')
         ->where('id', '[0-9]+');

    Route::delete('/treatment_record/{treatmentRecord}','TreatmentRecordsController@destroy')
         ->name('treatment_records.treatment_record.destroy')
         ->where('id', '[0-9]+');

});
