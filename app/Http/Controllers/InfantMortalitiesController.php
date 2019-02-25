<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\Ethnicity;
use Illuminate\Http\Request;
use App\Models\InfantMortality;
use App\Http\Controllers\Controller;
use Exception;

class InfantMortalitiesController extends Controller
{

    /**
     * Display a listing of the infant mortalities.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $infantMortalities = InfantMortality::with('facility','ethnicity')->paginate(25);

        return view('infant_mortalities.index', compact('infantMortalities'));
    }

    /**
     * Show the form for creating a new infant mortality.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $facilities = Facility::pluck('name','id')->all();
$ethnicities = Ethnicity::pluck('name','id')->all();
        
        return view('infant_mortalities.create', compact('facilities','ethnicities'));
    }

    /**
     * Store a new infant mortality in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
//        try {
            
            $data = $this->getData($request);
            
            InfantMortality::create($data);

            return redirect()->route('infant_mortalities.infant_mortality.index')
                             ->with('success_message', 'Infant Mortality was successfully added!');

//        } catch (Exception $exception) {
//
//            return back()->withInput()
//                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
//        }
    }

    /**
     * Display the specified infant mortality.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $infantMortality = InfantMortality::with('facility','ethnicity')->findOrFail($id);

        return view('infant_mortalities.show', compact('infantMortality'));
    }

    /**
     * Show the form for editing the specified infant mortality.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $infantMortality = InfantMortality::findOrFail($id);
        $facilities = Facility::pluck('name','id')->all();
        $ethnicities = Ethnicity::pluck('name','id')->all();

        return view('infant_mortalities.edit', compact('infantMortality','facilities','ethnicities'));
    }

    /**
     * Update the specified infant mortality in the storage.
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
            
            $infantMortality = InfantMortality::findOrFail($id);
            $infantMortality->update($data);

            return redirect()->route('infant_mortalities.infant_mortality.index')
                             ->with('success_message', 'Infant Mortality was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified infant mortality from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $infantMortality = InfantMortality::findOrFail($id);
            $infantMortality->delete();

            return redirect()->route('infant_mortalities.infant_mortality.index')
                             ->with('success_message', 'Infant Mortality was successfully deleted!');

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
            'year_of_death' => 'string|min:1|nullable',
            'first_name' => 'string|min:1|nullable',
            'last_name' => 'string|min:1|nullable',
            'sex' => 'nullable',
            'age' => 'nullable',
            'facility_id' => 'nullable',
            'ethnicity_id' => 'nullable',
            'causes_of_death' => 'array|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
