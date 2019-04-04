<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Models\DiseaseReport;
use App\Http\Controllers\Controller;
use Exception;

class DiseaseReportsController extends Controller
{

    /**
     * Display a listing of the disease reports.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $diseaseReports = DiseaseReport::with('patient')->paginate(25);

        return view('disease_reports.index', compact('diseaseReports'));
    }

    /**
     * Show the form for creating a new disease report.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $patients = User::pluck('id','id')->all();
        
        return view('disease_reports.create', compact('patients'));
    }

    /**
     * Store a new disease report in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
//        try {
            
            $data = $this->getData($request);
            
            DiseaseReport::create($data);

            return redirect()->route('disease_reports.disease_report.index')
                             ->with('success_message', 'Disease Report was successfully added!');

//        } catch (Exception $exception) {
//
//            return back()->withInput()
//                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
//        }
    }

    /**
     * Display the specified disease report.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $diseaseReport = DiseaseReport::with('patient')->findOrFail($id);

        return view('disease_reports.show', compact('diseaseReport'));
    }

    /**
     * Show the form for editing the specified disease report.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $diseaseReport = DiseaseReport::findOrFail($id);
        $patients = User::pluck('id','id')->all();

        return view('disease_reports.edit', compact('diseaseReport','patients'));
    }

    /**
     * Update the specified disease report in the storage.
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
            
            $diseaseReport = DiseaseReport::findOrFail($id);
            $diseaseReport->update($data);

            return redirect()->route('disease_reports.disease_report.index')
                             ->with('success_message', 'Disease Report was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified disease report from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $diseaseReport = DiseaseReport::findOrFail($id);
            $diseaseReport->delete();

            return redirect()->route('disease_reports.disease_report.index')
                             ->with('success_message', 'Disease Report was successfully deleted!');

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
            'name_of_disease' => 'string|min:1|nullable',
            'date' => 'string|min:1|nullable',
            'country' => 'string|nullable|min:0',
            'patients_id' => 'nullable',
            'patient_first_name' => 'string|min:1|nullable',
            'patient_last_name' => 'string|min:1|nullable',
            'date_of_birth' => 'required',
            'gender' => 'string|min:1|nullable',
            'ethic_origin' => 'string|min:1|nullable',
            'area_code' => 'string|nullable',
            'phone' => 'string|nullable',
            'time' => 'string|min:1|nullable',
            'address' => 'string|min:1|nullable',
            'city' => 'string|min:1|nullable',
            'state' => 'string|min:1|nullable',
            'zip_code' => 'string|min:1|nullable',
            'was_hospitalized' => 'string|nullable',
            'did_patients_die' => 'nullable',
            'is_patient_pregnant' => 'boolean|nullable',
            'patient_associated_with' => 'array|min:1|nullable',
            'exposure_occurance_district' => 'nullable|array',
            'country_of_exposure' => 'array|nullable',
            'show_symbol' => 'nullable',
            'sympton_date' => 'nullable',
            'is_sexually_transmitted' => 'boolean|nullable',
            'name_of_facility' => 'string|min:1|nullable',
            'findings_summary' => 'string|min:1|nullable',
            'first_name_of_principal_investigator' => 'string|min:1|nullable',
            'last_name_of_principal_investigator' => 'string|min:1|nullable',
            'area_code_of_investigator' => 'string|min:1|nullable',
            'phone_of_investigator' => 'string|min:1|nullable',
     
        ];
        
        $data = $request->validate($rules);

        $data['is_patient_pregnant'] = $request->has('is_patient_pregnant');
        $data['is_sexually_transmitted'] = $request->has('is_sexually_transmitted');

        return $data;
    }

}
