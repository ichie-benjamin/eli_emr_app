<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Models\DischargeSummary;
use App\Http\Controllers\Controller;
use Exception;

class DischargeSummariesController extends Controller
{

    /**
     * Display a listing of the discharge summaries.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $dischargeSummaries = DischargeSummary::with('patient')->paginate(25);

        return view('admin.discharge_summaries.index', compact('dischargeSummaries'));
    }

    /**
     * Show the form for creating a new discharge summary.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $patients = User::pluck('id','id')->all();
        
        return view('admin.discharge_summaries.create', compact('patients'));
    }

    /**
     * Store a new discharge summary in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            DischargeSummary::create($data);

            return redirect()->route('discharge_summaries.discharge_summary.index')
                             ->with('success_message', 'Discharge Summary was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified discharge summary.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $dischargeSummary = DischargeSummary::with('patient')->findOrFail($id);

        return view('admin.discharge_summaries.show', compact('dischargeSummary'));
    }

    /**
     * Show the form for editing the specified discharge summary.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $dischargeSummary = DischargeSummary::findOrFail($id);
        $patients = User::pluck('id','id')->all();

        return view('admin.discharge_summaries.edit', compact('dischargeSummary','patients'));
    }

    /**
     * Update the specified discharge summary in the storage.
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
            
            $dischargeSummary = DischargeSummary::findOrFail($id);
            $dischargeSummary->update($data);

            return redirect()->route('discharge_summaries.discharge_summary.index')
                             ->with('success_message', 'Discharge Summary was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified discharge summary from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $dischargeSummary = DischargeSummary::findOrFail($id);
            $dischargeSummary->delete();

            return redirect()->route('discharge_summaries.discharge_summary.index')
                             ->with('success_message', 'Discharge Summary was successfully deleted!');

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
            'surname' => 'string|min:1|nullable',
            'forname' => 'string|min:1|nullable',
            'date_of_birth' => 'date_format:j/n/Y|nullable',
            'NHS' => 'string|min:1|nullable',
            'address' => 'string|min:1|nullable',
            'phone' => 'string|min:1|nullable',
            'discharging_consultant' => 'string|min:1|nullable',
            'discharging_specialty' => 'string|min:1|nullable',
            'method_of_admission' => 'string|min:1|nullable',
            'date_of_discharge' => 'nullable|date_format:j/n/Y',
            'GP_details' => 'string|min:1|nullable',
            'diagnosis_at_discharge' => 'string|min:1|nullable',
            'operation_and_procedures' => 'string|min:1|nullable',
            'reasons_for_admission_and_presenting_complaint' => 'string|min:1|nullable',
            'clinical_narrative' => 'string|min:1|nullable',
            'relevant_investigation_and_result' => 'string|min:1|nullable',
            'discharge_destination' => 'string|min:1|nullable',
            'relevant_legal_information' => 'string|min:1|nullable',
            'information_given_to_patient' => 'string|min:1|nullable',
            'GP_actions' => 'string|min:1|nullable',
            'strategies_for_potential_problems' => 'string|min:1|nullable',
            'medication_stopped' => 'nullable',
            'discharging_doctor_name' => 'string|min:1|nullable',
            'bleep_no' => 'string|min:1|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
