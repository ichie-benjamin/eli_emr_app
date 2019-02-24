<?php

namespace App\Http\Controllers;

use App\Models\hivPatient;
use Illuminate\Http\Request;
use App\Models\TreatmentRecord;
use App\Http\Controllers\Controller;
use Exception;

class TreatmentRecordsController extends Controller
{

    /**
     * Display a listing of the treatment records.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $treatmentRecords = TreatmentRecord::with('hivpatient')->paginate(25);

        return view('treatment_records.index', compact('treatmentRecords'));
    }

    /**
     * Show the form for creating a new treatment record.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $hivPatients = hivPatient::pluck('patient_name','id')->all();
        
        return view('treatment_records.create', compact('hivPatients'));
    }

    /**
     * Store a new treatment record in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $data = $this->getData($request);

        TreatmentRecord::create($data);

        return redirect()->route('treatment_records.treatment_record.index')
            ->with('success_message', 'Treatment Record was successfully added!');
//        try {
//
//            $data = $this->getData($request);
//
//            TreatmentRecord::create($data);
//
//            return redirect()->route('treatment_records.treatment_record.index')
//                             ->with('success_message', 'Treatment Record was successfully added!');
//
//        } catch (Exception $exception) {
//
//            return back()->withInput()
//                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
//        }
    }

    /**
     * Display the specified treatment record.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $treatmentRecord = TreatmentRecord::with('hivpatient')->findOrFail($id);

        return view('treatment_records.show', compact('treatmentRecord'));
    }

    /**
     * Show the form for editing the specified treatment record.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $treatmentRecord = TreatmentRecord::findOrFail($id);
        $hivPatients = hivPatient::pluck('patient_name','id')->all();

        return view('treatment_records.edit', compact('treatmentRecord','hivPatients'));
    }

    /**
     * Update the specified treatment record in the storage.
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
            
            $treatmentRecord = TreatmentRecord::findOrFail($id);
            $treatmentRecord->update($data);

            return redirect()->route('treatment_records.treatment_record.index')
                             ->with('success_message', 'Treatment Record was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified treatment record from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $treatmentRecord = TreatmentRecord::findOrFail($id);
            $treatmentRecord->delete();

            return redirect()->route('treatment_records.treatment_record.index')
                             ->with('success_message', 'Treatment Record was successfully deleted!');

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
            'date' => 'string|min:1|nullable',
            'scheduled' => 'string|min:1|nullable',
            'clinician' => 'string|min:1|nullable',
            'reason_for_visit' => 'string|min:1|nullable',
            'observed_symptoms' => 'string|min:1|nullable',
            'adherence' => 'string|min:1|nullable',
            'height' => 'string|min:1|nullable',
            'weight' => 'string|min:1|nullable',
            'LMB' => 'string|min:1|nullable',
            'TB_status' => 'string|min:1|nullable',
            'aids_associated_conditions' => 'string|min:1|nullable',
            'functional_status' => 'string|min:1|nullable',
            'WHO_stage' => 'numeric|nullable',
            'CD_count' => 'numeric|nullable',
            'ALT' => 'string|min:1|nullable',
            'HB' => 'string|min:1|nullable',
            'creatinine' => 'string|min:1|nullable',
            'CTX_dose' => 'string|min:1|nullable',
            'ART_Regimen' => 'string|min:1|nullable',
            'date_of_next_visit' => 'nullable',
            'comments' => 'string|min:1|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
