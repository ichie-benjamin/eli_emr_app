<?php

namespace App\Http\Controllers;

use App\Models\hivPatient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class HivPatientsController extends Controller
{

    /**
     * Display a listing of the hiv patients.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $hivPatients = hivPatient::paginate(25);



        return view('hiv_patients.index', compact('hivPatients'));
    }

    /**
     * Show the form for creating a new hiv patient.
     *
     * @return Illuminate\View\View
     */
    public function create(Request $request)
    {
//        return $request->session()->get('hiv_patients')->id;
        $hivPatient = $request->session()->get('hiv_patients');
        return view('hiv_patients.create',compact('hivPatient'));
    }
    public function createStepTwo()
    {

        return view('hiv_patients.step_two_blade');
    }

    /**
     * Store a new hiv patient in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function storeStepOne(Request $request)
    {
        $validatedData = $request->validate([
//            'patient_name' => 'required|string|unique:hiv_patients,id,'. $request->session()->has('hiv_patients') ? $request->session()->get('hiv_patients')->id : '',
            'patient_name' => 'required|string',
            'facility_client_name' => 'string|nullable',
            'unique_code' => 'string|nullable',
            'date_of_birth' => 'date_format:j/n/Y|nullable',
            'sex' => 'required',
            'address' => 'required',
            'family_members' => 'string|min:1|nullable',
            'contact' => 'nullable',
            'date_confirmed_hiv' => 'required',
            'hiv_type' => 'required',
        ]);

        if(empty($request->session()->get('hiv_patients'))){
            $patients = hivPatient::create($validatedData);
            $request->session()->put('hiv_patients', $patients);
        }else{
            $patients = $request->session()->get('hiv_patients');
//            $hivPatient = hivPatient::findOrFail($patients->id);
            $patients->fill($validatedData);
            $request->session()->put('hiv_patients', $patients);
        }

        return redirect()->route('clinician_assessments.clinician_assessment.create')
            ->with('success_message', 'Patient Identification successfully Entered, Pls enter Initial Clinician Assessment');

//        try {
//
//            $data = $this->getData($request);
//
//            hivPatient::create($data);
//
//            return redirect()->route('hiv_patients.hiv_patient.index')
//                             ->with('success_message', 'Hiv Patient was successfully added!');
//
//        } catch (Exception $exception) {
//
//            return back()->withInput()
//                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
//        }
    }

    /**
     * Display the specified hiv patient.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $hivPatient = hivPatient::findOrFail($id);

        return view('hiv_patients.show', compact('hivPatient'));
    }

    /**
     * Show the form for editing the specified hiv patient.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $hivPatient = hivPatient::findOrFail($id);
        

        return view('hiv_patients.edit', compact('hivPatient'));
    }

    /**
     * Update the specified hiv patient in the storage.
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
            
            $hivPatient = hivPatient::findOrFail($id);
            $hivPatient->update($data);

            return redirect()->route('hiv_patients.hiv_patient.index')
                             ->with('success_message', 'Hiv Patient was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified hiv patient from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $hivPatient = hivPatient::findOrFail($id);
            $hivPatient->delete();

            return redirect()->route('hiv_patients.hiv_patient.index')
                             ->with('success_message', 'Hiv Patient was successfully deleted!');

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
            'patient_name' => 'string|min:1|nullable|unique:hiv_patients,id,'. $request->session()->get('hiv_patients')->id,
            'facility_client_name' => 'string|min:1|nullable',
            'unique_code' => 'string|min:1|nullable',
            'date_of_birth' => 'date_format:j/n/Y|nullable',
            'sex' => 'nullable',
            'address' => 'string|min:1|nullable',
            'family_members' => 'string|min:1|nullable',
            'contact' => 'string|min:1|nullable',
            'date_confirmed_hiv' => 'date_format:j/n/Y|nullable',
            'hiv_type' => 'nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
