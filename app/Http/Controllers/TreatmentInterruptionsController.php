<?php

namespace App\Http\Controllers;

use App\Models\hivPatient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TreatmentInterruption;
use Exception;

class TreatmentInterruptionsController extends Controller
{

    /**
     * Display a listing of the treatment interruptions.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $treatmentInterruptions = TreatmentInterruption::with('hivpatient')->paginate(25);

        return view('treatment_interruptions.index', compact('treatmentInterruptions'));
    }

    /**
     * Show the form for creating a new treatment interruption.
     *
     * @return Illuminate\View\View
     */
    public function create(Request $request)
    {
        $hivPatient = $request->session()->get('hiv_patients');
        $treatmentInterruption = $request->session()->get('treatmentInterruption');

        return view('treatment_interruptions.create', compact('hivPatient','treatmentInterruption'));
    }

    /**
     * Store a new treatment interruption in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

            
//            $data = $this->getData($request);
            $validatedData = $this->getData($request);


        if(empty($request->session()->get('treatmentInterruption'))){
            $treatmentInterruption = treatmentInterruption::create($validatedData);
            $request->session()->put('treatmentInterruption', $treatmentInterruption);
        }else{
            $treatmentInterruption = $request->session()->get('treatmentInterruption');
//            $hivPatient = hivPatient::findOrFail($patients->id);
            $treatmentInterruption->fill($validatedData);
            $request->session()->put('treatmentInterruption', $treatmentInterruption);
        }
            
//            TreatmentInterruption::create($data);

            return redirect()->route('treatment_records.treatment_record.create')
                             ->with('success_message', 'Treatment Interruption was successfully added! Pls Add Patient Treatment Record');


    }

    /**
     * Display the specified treatment interruption.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $treatmentInterruption = TreatmentInterruption::with('hivpatient')->findOrFail($id);

        return view('treatment_interruptions.show', compact('treatmentInterruption'));
    }

    /**
     * Show the form for editing the specified treatment interruption.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $treatmentInterruption = TreatmentInterruption::findOrFail($id);
        $hivPatients = HivPatient::pluck('patient_name','id')->all();

        return view('treatment_interruptions.edit', compact('treatmentInterruption','hivPatients'));
    }

    /**
     * Update the specified treatment interruption in the storage.
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
            
            $treatmentInterruption = TreatmentInterruption::findOrFail($id);
            $treatmentInterruption->update($data);

            return redirect()->route('treatment_interruptions.treatment_interruption.index')
                             ->with('success_message', 'Treatment Interruption was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified treatment interruption from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $treatmentInterruption = TreatmentInterruption::findOrFail($id);
            $treatmentInterruption->delete();

            return redirect()->route('treatment_interruptions.treatment_interruption.index')
                             ->with('success_message', 'Treatment Interruption was successfully deleted!');

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
            'hiv_patient_id' => 'nullable',
            'first_interruption_reasonfirst_interruption_data' => 'string|min:1|nullable',
            'second_interruption_reason' => 'string|min:1|nullable',
            'second_interruption_data' => 'string|min:1|nullable',
            'departure_from_treatment_reason' => 'string|min:1|nullable',
            'departure_from_treatment_data' => 'string|min:1|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
