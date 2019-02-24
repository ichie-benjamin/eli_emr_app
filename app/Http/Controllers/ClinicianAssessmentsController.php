<?php

namespace App\Http\Controllers;

use App\Models\hivPatient;
use Illuminate\Http\Request;
use App\Models\ClinicianAssessment;
use App\Http\Controllers\Controller;
use Exception;

class ClinicianAssessmentsController extends Controller
{
    public function index()
    {
        $clinicianAssessments = ClinicianAssessment::with('hivpatient')->paginate(25);

        return view('clinician_assessments.index', compact('clinicianAssessments'));
    }


    public function create(Request $request)
    {
        $hivPatients = $request->session()->get('hiv_patients');
        $clinicianAssessment = $request->session()->get('clinicianAssessment');
        
        return view('clinician_assessments.create', compact('hivPatients','clinicianAssessment'));
    }

    public function store(Request $request)
    {

            $validatedData = $this->getData($request);


        if(empty($request->session()->get('clinicianAssessment'))){
            $clinicianAssessment = clinicianAssessment::create($validatedData);
            $request->session()->put('clinicianAssessment', $clinicianAssessment);
        }else{
            $clinicianAssessment = $request->session()->get('clinicianAssessment');
//            $hivPatient = hivPatient::findOrFail($patients->id);
            $clinicianAssessment->fill($validatedData);
            $request->session()->put('clinicianAssessment', $clinicianAssessment);
        }

        return redirect()->route('art_treatments.art_treatment.create')
            ->with('success_message', 'Initial Clinician Assessment successfully entered, Pls enter ART Treatment');

    }

    public function show($id)
    {
        $clinicianAssessment = ClinicianAssessment::with('hivpatient')->findOrFail($id);

        return view('clinician_assessments.show', compact('clinicianAssessment'));
    }

    /**
     * Show the form for editing the specified clinician assessment.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $clinicianAssessment = ClinicianAssessment::findOrFail($id);
        $hivPatients = HivPatient::pluck('patient_name','id')->all();

        return view('clinician_assessments.edit', compact('clinicianAssessment','hivPatients'));
    }

    /**
     * Update the specified clinician assessment in the storage.
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
            
            $clinicianAssessment = ClinicianAssessment::findOrFail($id);
            $clinicianAssessment->update($data);

            return redirect()->route('clinician_assessments.clinician_assessment.index')
                             ->with('success_message', 'Clinician Assessment was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified clinician assessment from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $clinicianAssessment = ClinicianAssessment::findOrFail($id);
            $clinicianAssessment->delete();

            return redirect()->route('clinician_assessments.clinician_assessment.index')
                             ->with('success_message', 'Clinician Assessment was successfully deleted!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    protected function getData(Request $request)
    {
        $rules = [
            'hiv_patient_id' => 'required',
            'height' => 'required|integer',
            'weight' => 'required|integer',
            'body_mass_index' => 'integer|required',
            'date' => 'required',
     
        ];
        
        $data = $request->validate($rules);

        return $data;
    }

}
