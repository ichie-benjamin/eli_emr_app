<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Models\DailySchedule;
use App\Http\Controllers\Controller;
use Exception;

class DailySchedulesController extends Controller
{

    /**
     * Display a listing of the daily schedules.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $dailySchedules = DailySchedule::with('patient')->paginate(25);

        return view('daily_schedules.index', compact('dailySchedules'));
    }

    /**
     * Show the form for creating a new daily schedule.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $patients = User::pluck('id','id')->all();
        
        return view('daily_schedules.create', compact('patients'));
    }

    /**
     * Store a new daily schedule in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            DailySchedule::create($data);

            return redirect()->route('daily_schedules.daily_schedule.index')
                             ->with('success_message', 'Daily Schedule was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified daily schedule.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $dailySchedule = DailySchedule::with('patient')->findOrFail($id);

        return view('daily_schedules.show', compact('dailySchedule'));
    }

    /**
     * Show the form for editing the specified daily schedule.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $dailySchedule = DailySchedule::findOrFail($id);
        $patients = User::pluck('id','id')->all();

        return view('daily_schedules.edit', compact('dailySchedule','patients'));
    }

    /**
     * Update the specified daily schedule in the storage.
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
            
            $dailySchedule = DailySchedule::findOrFail($id);
            $dailySchedule->update($data);

            return redirect()->route('daily_schedules.daily_schedule.index')
                             ->with('success_message', 'Daily Schedule was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified daily schedule from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $dailySchedule = DailySchedule::findOrFail($id);
            $dailySchedule->delete();

            return redirect()->route('daily_schedules.daily_schedule.index')
                             ->with('success_message', 'Daily Schedule was successfully deleted!');

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
            'chief_complient' => 'string|min:1|nullable',
            'appointment_time' => 'string|min:1|nullable',
            'time_check_in' => 'string|min:1|nullable',
            'time_check_out' => 'string|min:1|nullable',
            'no_show' => 'string|min:1|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
