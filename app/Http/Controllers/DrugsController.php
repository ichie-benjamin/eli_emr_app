<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class DrugsController extends Controller
{

    /**
     * Display a listing of the drugs.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
//        $drugs = Drug::paginate(25);
        $drugs = Drug::all();

        return view('admin.drugs.index', compact('drugs'));
    }

    /**
     * Show the form for creating a new drug.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('admin.drugs.create');
    }

    /**
     * Store a new drug in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            Drug::create($data);

            return redirect()->route('drugs.drug.index')
                             ->with('success_message', 'Drug was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified drug.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $drug = Drug::findOrFail($id);

        return view('admin.drugs.show', compact('drug'));
    }

    /**
     * Show the form for editing the specified drug.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $drug = Drug::findOrFail($id);
        

        return view('admin.drugs.edit', compact('drug'));
    }

    /**
     * Update the specified drug in the storage.
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
            
            $drug = Drug::findOrFail($id);
            $drug->update($data);

            return redirect()->route('drugs.drug.index')
                             ->with('success_message', 'Drug was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified drug from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $drug = Drug::findOrFail($id);
            $drug->delete();

            return redirect()->route('drugs.drug.index')
                             ->with('success_message', 'Drug was successfully deleted!');

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
            'quantity' => 'required',
            'manufactured_date' => 'required',
            'expiry_date' => 'required',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
