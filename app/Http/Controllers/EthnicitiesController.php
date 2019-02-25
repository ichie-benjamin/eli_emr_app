<?php

namespace App\Http\Controllers;

use App\Models\Ethnicity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class EthnicitiesController extends Controller
{

    /**
     * Display a listing of the ethnicities.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $ethnicities = Ethnicity::paginate(25);

        return view('ethnicities.index', compact('ethnicities'));
    }

    /**
     * Show the form for creating a new ethnicity.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('ethnicities.create');
    }

    /**
     * Store a new ethnicity in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            Ethnicity::create($data);

            return redirect()->route('ethnicities.ethnicity.index')
                             ->with('success_message', 'Ethnicity was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified ethnicity.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $ethnicity = Ethnicity::findOrFail($id);

        return view('ethnicities.show', compact('ethnicity'));
    }

    /**
     * Show the form for editing the specified ethnicity.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $ethnicity = Ethnicity::findOrFail($id);
        

        return view('ethnicities.edit', compact('ethnicity'));
    }

    /**
     * Update the specified ethnicity in the storage.
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
            
            $ethnicity = Ethnicity::findOrFail($id);
            $ethnicity->update($data);

            return redirect()->route('ethnicities.ethnicity.index')
                             ->with('success_message', 'Ethnicity was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified ethnicity from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $ethnicity = Ethnicity::findOrFail($id);
            $ethnicity->delete();

            return redirect()->route('ethnicities.ethnicity.index')
                             ->with('success_message', 'Ethnicity was successfully deleted!');

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
            'name' => 'string|min:1|max:255|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
