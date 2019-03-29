<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Models\PatientHistory;
use App\Http\Controllers\Controller;
use Exception;

class PatientHistoriesController extends Controller
{

    /**
     * Display a listing of the patient histories.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $patientHistories = PatientHistory::with('patient')->paginate(25);

        return view('patient_histories.index', compact('patientHistories'));
    }

    /**
     * Show the form for creating a new patient history.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $patients = User::pluck('name','id')->all();
        
        return view('patient_histories.create', compact('patients'));
    }

    /**
     * Store a new patient history in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            PatientHistory::create($data);

            return redirect()->route('patient_histories.patient_history.index')
                             ->with('success_message', 'Patient History was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified patient history.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $patientHistory = PatientHistory::with('patient')->findOrFail($id);

        return view('patient_histories.show', compact('patientHistory'));
    }

    /**
     * Show the form for editing the specified patient history.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $patientHistory = PatientHistory::findOrFail($id);
        $patients = User::pluck('id','id')->all();

        return view('patient_histories.edit', compact('patientHistory','patients'));
    }

    /**
     * Update the specified patient history in the storage.
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
            
            $patientHistory = PatientHistory::findOrFail($id);
            $patientHistory->update($data);

            return redirect()->route('patient_histories.patient_history.index')
                             ->with('success_message', 'Patient History was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified patient history from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $patientHistory = PatientHistory::findOrFail($id);
            $patientHistory->delete();

            return redirect()->route('patient_histories.patient_history.index')
                             ->with('success_message', 'Patient History was successfully deleted!');

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
            'patient_id' => 'nullable',
            'patient_name' => 'string|min:1|nullable',
            'medical_case' => 'string|min:1|nullable',
            'previous_case' => 'string|min:1|nullable',
            'current_case' => 'string|min:1|nullable',
            'patient_address' => 'string|min:1|nullable',
            'assigned_doctor' => 'string|min:1|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
