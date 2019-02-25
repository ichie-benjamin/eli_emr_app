<?php

namespace App\Http\Controllers;

use App\Models\DeathCause;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class DeathCausesController extends Controller
{

    /**
     * Display a listing of the death causes.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $deathCauses = DeathCause::all();

        return view('admin.death_causes.index', compact('deathCauses'));
    }

    /**
     * Show the form for creating a new death cause.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('admin.death_causes.create');
    }

    /**
     * Store a new death cause in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            DeathCause::create($data);

            return redirect()->route('death_causes.death_cause.index')
                             ->with('success_message', 'Death Cause was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified death cause.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $deathCause = DeathCause::findOrFail($id);

        return view('admin.death_causes.show', compact('deathCause'));
    }

    /**
     * Show the form for editing the specified death cause.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $deathCause = DeathCause::findOrFail($id);
        

        return view('admin.death_causes.edit', compact('deathCause'));
    }

    /**
     * Update the specified death cause in the storage.
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
            
            $deathCause = DeathCause::findOrFail($id);
            $deathCause->update($data);

            return redirect()->route('death_causes.death_cause.index')
                             ->with('success_message', 'Death Cause was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified death cause from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $deathCause = DeathCause::findOrFail($id);
            $deathCause->delete();

            return redirect()->route('death_causes.death_cause.index')
                             ->with('success_message', 'Death Cause was successfully deleted!');

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
            'name' => 'required|string|min:1|max:255',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
