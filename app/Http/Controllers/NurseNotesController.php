<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\NurseNote;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class NurseNotesController extends Controller
{

    /**
     * Display a listing of the nurse notes.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $nurseNotes = NurseNote::with('patient')->paginate(25);

        return view('nurse_notes.index', compact('nurseNotes'));
    }

    /**
     * Show the form for creating a new nurse note.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $patients = User::pluck('id','id')->all();
        
        return view('nurse_notes.create', compact('patients'));
    }

    /**
     * Store a new nurse note in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

            $data = $this->getData($request);
            
            NurseNote::create($data);

            return redirect()->route('nurse_notes.nurse_note.index')
                             ->with('success_message', 'Nurse Note was successfully added!');

    }

    /**
     * Display the specified nurse note.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $nurseNote = NurseNote::with('patient')->findOrFail($id);

        return view('nurse_notes.show', compact('nurseNote'));
    }

    /**
     * Show the form for editing the specified nurse note.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $nurseNote = NurseNote::findOrFail($id);
        $patients = User::pluck('id','id')->all();

        return view('nurse_notes.edit', compact('nurseNote','patients'));
    }

    /**
     * Update the specified nurse note in the storage.
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
            
            $nurseNote = NurseNote::findOrFail($id);
            $nurseNote->update($data);

            return redirect()->route('nurse_notes.nurse_note.index')
                             ->with('success_message', 'Nurse Note was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified nurse note from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $nurseNote = NurseNote::findOrFail($id);
            $nurseNote->delete();

            return redirect()->route('nurse_notes.nurse_note.index')
                             ->with('success_message', 'Nurse Note was successfully deleted!');

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
            'firstname' => 'string|min:1|nullable',
            'parent_lives' => 'nullable',
            'change_in_medication' => 'nullable',
            'allergies' => 'string|min:1|nullable',
            'vital_signs' => 'array|nullable',
            'respiratory' => 'array|nullable',
            'skin_assessment' => 'string|min:1|nullable',
            'cardiovascular_car_assessment' => 'string|min:1|nullable',
            'musculoskeletal_assessment' => 'string|min:1|nullable',
            'digestive_assessment' => 'string|min:1|nullable',
            'pain_assessment' => 'string|min:1|nullable',
            'pain_assessment_scale' => 'array|nullable',
            'intervention' => 'string|min:1|nullable',
            'goal' => 'string|min:1|nullable',
            'supervisor_assessment' => 'string|min:1|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
