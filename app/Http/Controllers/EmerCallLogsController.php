<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\EmerCallLog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class EmerCallLogsController extends Controller
{

    /**
     * Display a listing of the emer call logs.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $emerCallLogs = EmerCallLog::with('user')->paginate(25);

        return view('admin/emer_call_logs.index', compact('emerCallLogs'));
    }

    /**
     * Show the form for creating a new emer call log.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $users = User::pluck('name','id')->all();
        
        return view('admin/emer_call_logs.create', compact('users'));
    }

    /**
     * Store a new emer call log in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            EmerCallLog::create($data);

            return redirect()->route('emer_call_logs.emer_call_log.index')
                             ->with('success_message', 'Emer Call Log was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified emer call log.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $emerCallLog = EmerCallLog::with('user')->findOrFail($id);

        return view('admin/emer_call_logs.show', compact('emerCallLog'));
    }

    /**
     * Show the form for editing the specified emer call log.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $emerCallLog = EmerCallLog::findOrFail($id);
        $users = User::pluck('name','id')->all();

        return view('admin/emer_call_logs.edit', compact('emerCallLog','users'));
    }

    /**
     * Update the specified emer call log in the storage.
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
            
            $emerCallLog = EmerCallLog::findOrFail($id);
            $emerCallLog->update($data);

            return redirect()->route('emer_call_logs.emer_call_log.index')
                             ->with('success_message', 'Emer Call Log was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified emer call log from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $emerCallLog = EmerCallLog::findOrFail($id);
            $emerCallLog->delete();

            return redirect()->route('emer_call_logs.emer_call_log.index')
                             ->with('success_message', 'Emer Call Log was successfully deleted!');

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
            'caller_name' => 'string|min:1|nullable',
            'user_id' => 'nullable',
            'caller_phone' => 'string|min:1|nullable',
            'time' => 'string|min:1|nullable',
            'description' => 'string|min:1|max:1000|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
