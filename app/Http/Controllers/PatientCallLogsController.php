<?php

namespace App\Http\Controllers;

use jeremykenedy\LaravelRoles\Models\Role;
use App\User;
use Illuminate\Http\Request;
use App\Models\PatientCallLog;
use App\Http\Controllers\Controller;
use Exception;

class PatientCallLogsController extends Controller
{

    /**
     * Display a listing of the patient call logs.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {

        $patientCallLogs = PatientCallLog::with('patient')->paginate(100);

        return view('patient_call_logs.index', compact('patientCallLogs'));
    }

    /**
     * Show the form for creating a new patient call log.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $patients = Role::where('name', 'patient')->first()->users()->get();

        return view('patient_call_logs.create', compact('patients'));
    }

    /**
     * Store a new patient call log in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $data = $this->getData($request);

        PatientCallLog::create($data);

        return redirect()->route('patient_call_logs.patient_call_log.index')
            ->with('success_message', 'Patient Call Log was successfully added!');
//        try {
//
//            $data = $this->getData($request);
//
//            PatientCallLog::create($data);
//
//            return redirect()->route('patient_call_logs.patient_call_log.index')
//                             ->with('success_message', 'Patient Call Log was successfully added!');
//
//        } catch (Exception $exception) {
//
//            return back()->withInput()
//                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
//        }
    }

    /**
     * Display the specified patient call log.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $patientCallLog = PatientCallLog::with('patient')->findOrFail($id);

        return view('patient_call_logs.show', compact('patientCallLog'));
    }

    /**
     * Show the form for editing the specified patient call log.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $patientCallLog = PatientCallLog::findOrFail($id);

$patients = Role::where('name', 'patient')->first()->users()->get();

        return view('patient_call_logs.edit', compact('patientCallLog','patients'));
    }

    /**
     * Update the specified patient call log in the storage.
     *
     * @param  int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $patientCallLog = PatientCallLog::findOrFail($id);
            $patientCallLog->update($data);

            return redirect()->route('patient_call_logs.patient_call_log.index')
                             ->with('success_message', 'Patient Call Log was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified patient call log from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $patientCallLog = PatientCallLog::findOrFail($id);
            $patientCallLog->delete();

            return redirect()->route('patient_call_logs.patient_call_log.index')
                             ->with('success_message', 'Patient Call Log was successfully deleted!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
            'staff_id' => 'nullable',
            'patient_id' => 'nullable',
            'time' => 'string|min:1|nullable',
            'description' => 'string|min:1|max:1000|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
