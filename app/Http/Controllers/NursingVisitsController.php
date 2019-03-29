<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\NursingVisit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class NursingVisitsController extends Controller
{

    /**
     * Display a listing of the nursing visits.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $nursingVisits = NursingVisit::with('patient')->paginate(25);

        return view('nursing_visits.index', compact('nursingVisits'));
    }

    /**
     * Show the form for creating a new nursing visit.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $patients = User::pluck('name','id')->all();
        
        return view('nursing_visits.create', compact('patients'));
    }

    /**
     * Store a new nursing visit in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            NursingVisit::create($data);

            return redirect()->route('nursing_visits.nursing_visit.index')
                             ->with('success_message', 'Nursing Visit was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified nursing visit.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $nursingVisit = NursingVisit::with('patient')->findOrFail($id);

        return view('nursing_visits.show', compact('nursingVisit'));
    }

    /**
     * Show the form for editing the specified nursing visit.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $nursingVisit = NursingVisit::findOrFail($id);
        $patients = User::pluck('id','id')->all();

        return view('nursing_visits.edit', compact('nursingVisit','patients'));
    }

    /**
     * Update the specified nursing visit in the storage.
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
            
            $nursingVisit = NursingVisit::findOrFail($id);
            $nursingVisit->update($data);

            return redirect()->route('nursing_visits.nursing_visit.index')
                             ->with('success_message', 'Nursing Visit was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified nursing visit from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $nursingVisit = NursingVisit::findOrFail($id);
            $nursingVisit->delete();

            return redirect()->route('nursing_visits.nursing_visit.index')
                             ->with('success_message', 'Nursing Visit was successfully deleted!');

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
            'patient_case' => 'string|min:1|nullable',
            'nurse_report' => 'string|min:1|nullable',
            'time_in' => 'string|min:1|nullable',
            'time_out' => 'string|min:1|nullable',
            'patient_status' => 'string|min:1|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
