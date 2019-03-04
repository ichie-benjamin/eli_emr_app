<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DrugReference;
use App\Http\Controllers\Controller;
use Exception;

class DrugReferencesController extends Controller
{

    /**
     * Display a listing of the drug references.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $drugReferences = DrugReference::paginate(25);

        return view('drug_references.index', compact('drugReferences'));
    }

    /**
     * Show the form for creating a new drug reference.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('drug_references.create');
    }

    /**
     * Store a new drug reference in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
//        try {
            
            $data = $this->getData($request);
            
            DrugReference::create($data);

            return redirect()->route('drug_references.drug_reference.index')
                             ->with('success_message', 'Drug Reference was successfully added!');

//        } catch (Exception $exception) {
//
//            return back()->withInput()
//                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
//        }
    }

    /**
     * Display the specified drug reference.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $drugReference = DrugReference::findOrFail($id);

        return view('drug_references.show', compact('drugReference'));
    }

    /**
     * Show the form for editing the specified drug reference.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $drugReference = DrugReference::findOrFail($id);
        

        return view('drug_references.edit', compact('drugReference'));
    }

    /**
     * Update the specified drug reference in the storage.
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
            
            $drugReference = DrugReference::findOrFail($id);
            $drugReference->update($data);

            return redirect()->route('drug_references.drug_reference.index')
                             ->with('success_message', 'Drug Reference was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified drug reference from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $drugReference = DrugReference::findOrFail($id);
            $drugReference->delete();

            return redirect()->route('drug_references.drug_reference.index')
                             ->with('success_message', 'Drug Reference was successfully deleted!');

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
            'name' => 'required|string|max:255',
            'unit' => 'required|string',
            'quantity' => 'string|min:1|nullable',
            'description' => 'string|min:1|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
