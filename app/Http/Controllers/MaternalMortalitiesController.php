<?php

namespace App\Http\Controllers;

use App\Models\DeathCause;
use App\Models\Facility;
use App\Models\Ethnicity;
use Illuminate\Http\Request;
use App\Models\MaternalMortality;
use App\Http\Controllers\Controller;
use Exception;

class MaternalMortalitiesController extends Controller
{

    /**
     * Display a listing of the maternal mortalities.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $maternalMortalities = MaternalMortality::with('facility','ethnicity')->paginate(25);

        return view('maternal_mortalities.index', compact('maternalMortalities'));
    }

    /**
     * Show the form for creating a new maternal mortality.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $facilities = Facility::pluck('name','id')->all();
        $deathCauses = DeathCause::pluck('name','id')->all();
$ethnicities = Ethnicity::pluck('name','id')->all();
        
        return view('maternal_mortalities.create', compact('facilities','ethnicities','deathCauses'));
    }

    /**
     * Store a new maternal mortality in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
//        try {
//        return $request->all();
            
            $data = $this->getData($request);
            
            MaternalMortality::create($data);

            return redirect()->route('maternal_mortalities.maternal_mortality.index')
                             ->with('success_message', 'Maternal Mortality was successfully added!');

//        } catch (Exception $exception) {
//
//            return back()->withInput()
//                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
//        }
    }

    /**
     * Display the specified maternal mortality.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $maternalMortality = MaternalMortality::with('facility','ethnicity')->findOrFail($id);

        return view('maternal_mortalities.show', compact('maternalMortality'));
    }

    /**
     * Show the form for editing the specified maternal mortality.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $maternalMortality = MaternalMortality::findOrFail($id);
        $facilities = Facility::pluck('name','id')->all();
        $deathCauses = DeathCause::pluck('name','id')->all();
$ethnicities = Ethnicity::pluck('name','id')->all();

        return view('maternal_mortalities.edit', compact('maternalMortality','facilities','ethnicities','deathCauses'));
    }

    /**
     * Update the specified maternal mortality in the storage.
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
            
            $maternalMortality = MaternalMortality::findOrFail($id);
            $maternalMortality->update($data);

            return redirect()->route('maternal_mortalities.maternal_mortality.index')
                             ->with('success_message', 'Maternal Mortality was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified maternal mortality from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $maternalMortality = MaternalMortality::findOrFail($id);
            $maternalMortality->delete();

            return redirect()->route('maternal_mortalities.maternal_mortality.index')
                             ->with('success_message', 'Maternal Mortality was successfully deleted!');

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
            'date_time' => 'string|min:1',
            'first_name' => 'string|required',
            'last_name' => 'string|required',
            'sex' => 'required',
            'date_of_birth' => 'string|nullable',
            'facility_id' => 'nullable',
            'ethnicity_id' => 'nullable',
            'causes_of_death' => 'array|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
