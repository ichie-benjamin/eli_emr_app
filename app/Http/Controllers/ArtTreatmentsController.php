<?php

namespace App\Http\Controllers;

use App\Models\hivPatient;
use App\Models\artTreatment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class ArtTreatmentsController extends Controller
{

    /**
     * Display a listing of the art treatments.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $artTreatments = artTreatment::with('hivpatient')->paginate(25);

        return view('art_treatments.index', compact('artTreatments'));
    }

    /**
     * Show the form for creating a new art treatment.
     *
     * @return Illuminate\View\View
     */
    public function create(Request $request)
    {
//        $hivPatients = hivPatient::pluck('patient_name','id')->all();
        $hivPatient = $request->session()->get('hiv_patients');
        $artTreatment = $request->session()->get('artTreatment');
        return view('art_treatments.create', compact('hivPatient','artTreatment'));
    }

    /**
     * Store a new art treatment in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
//        try {

        $validatedData = $this->getData($request);


        if(empty($request->session()->get('artTreatment'))){
            $artTreatment = artTreatment::create($validatedData);
            $request->session()->put('artTreatment', $artTreatment);
        }else{
            $artTreatment = $request->session()->get('artTreatment');
//            $hivPatient = hivPatient::findOrFail($patients->id);
            $artTreatment->fill($validatedData);
            $request->session()->put('artTreatment', $artTreatment);
        }

            return redirect()->route('treatment_interruptions.treatment_interruption.create')
                             ->with('success_message', 'Art Treatment was successfully added! Pls Add Treatment Interruptions');

//        } catch (Exception $exception) {
//
//            return back()->withInput()
//                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
//        }
    }

    /**
     * Display the specified art treatment.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $artTreatment = artTreatment::with('hivpatient')->findOrFail($id);

        return view('art_treatments.show', compact('artTreatment'));
    }

    /**
     * Show the form for editing the specified art treatment.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $artTreatment = artTreatment::findOrFail($id);
        $hivPatients = HivPatient::pluck('patient_name','id')->all();

        return view('art_treatments.edit', compact('artTreatment','hivPatients'));
    }

    /**
     * Update the specified art treatment in the storage.
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
            
            $artTreatment = artTreatment::findOrFail($id);
            $artTreatment->update($data);

            return redirect()->route('art_treatments.art_treatment.index')
                             ->with('success_message', 'Art Treatment was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified art treatment from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $artTreatment = artTreatment::findOrFail($id);
            $artTreatment->delete();

            return redirect()->route('art_treatments.art_treatment.index')
                             ->with('success_message', 'Art Treatment was successfully deleted!');

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
            'date_started' => 'nullable',
            'initial_regimen' => 'string|min:1|nullable',
            'first_line_first_substitution' => 'string|min:1|nullable',
            'first_line_first_substitute_reason' => 'string|min:1|nullable',
            'first_line_first_substitute_date' => 'nullable',
            'second_line_regimen' => 'string|required|nullable',
            'second_line_reason' => 'string|required|nullable',
            'second_line_date' => 'nullable',
            'second_line_second_substituted' => 'string|required|nullable',
            'second_line_second_substitude_reason' => 'string|required|nullable',
            'second_line_second_substitute_date' => 'nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
