<?php

namespace App\Http\Controllers;

use App\Models\DailySchedule;
use App\User;
use App\Models\Appointments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class AppointmentsController extends Controller
{

    /**
     * Display a listing of the appointments.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $appointmentsObjects = Appointments::with('patient')->paginate(25);

        return view('appointments.index', compact('appointmentsObjects'));
    }

    /**
     * Show the form for creating a new appointments.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $patients = User::pluck('name','id')->all();
        
        return view('appointments.create', compact('patients'));
    }

    /**
     * Store a new appointments in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

            $data = $this->getData($request);
            
            Appointments::create($data);
            DailySchedule::create($data);

            return redirect()->route('appointments.appointments.index')
                             ->with('success_message', 'Appointments was successfully added!');
    }

    /**
     * Display the specified appointments.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $appointments = Appointments::with('patient')->findOrFail($id);

        return view('appointments.show', compact('appointments'));
    }

    /**
     * Show the form for editing the specified appointments.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $appointments = Appointments::findOrFail($id);
        $patients = User::pluck('id','id')->all();

        return view('appointments.edit', compact('appointments','patients'));
    }

    /**
     * Update the specified appointments in the storage.
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
            
            $appointments = Appointments::findOrFail($id);
            $appointments->update($data);

            return redirect()->route('appointments.appointments.index')
                             ->with('success_message', 'Appointments was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified appointments from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $appointments = Appointments::findOrFail($id);
            $appointments->delete();

            return redirect()->route('appointments.appointments.index')
                             ->with('success_message', 'Appointments was successfully deleted!');

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
            'm_r_n' => 'string|min:1|nullable',
            'patient_name' => 'string|min:1|nullable',
            'patient_id' => 'nullable',
            'appointment_time' => 'string|min:1|nullable',
            'appointment_date' => 'nullable',
            'time_check_in' => 'string|min:1|nullable',
            'time_check_out' => 'string|min:1|nullable',
            'no_show' => 'nullable',
            'patient_address' => 'string|min:1|nullable',
            'contact_number' => 'numeric|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
