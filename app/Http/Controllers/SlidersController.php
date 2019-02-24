<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class SlidersController extends Controller
{

    /**
     * Display a listing of the sliders.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $sliders = Slider::paginate(25);

        return view('sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new slider.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('sliders.create');
    }

    /**
     * Store a new slider in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            Slider::create($data);

            return redirect()->route('sliders.slider.index')
                             ->with('success_message', 'Slider was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified slider.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $slider = Slider::findOrFail($id);

        return view('sliders.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified slider.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        

        return view('sliders.edit', compact('slider'));
    }

    /**
     * Update the specified slider in the storage.
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
            
            $slider = Slider::findOrFail($id);
            $slider->update($data);

            return redirect()->route('sliders.slider.index')
                             ->with('success_message', 'Slider was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified slider from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $slider = Slider::findOrFail($id);
            $slider->delete();

            return redirect()->route('sliders.slider.index')
                             ->with('success_message', 'Slider was successfully deleted!');

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
            'title' => 'string|min:1|max:255|nullable',
            'description' => 'string|min:1|max:1000|nullable',
            'image' => 'numeric|nullable',
            'is_active' => 'boolean|nullable',
            'sub_title' => 'string|min:1|nullable',
            'first_link' => 'string|min:1|nullable',
            'second_link' => 'string|min:1|nullable',
            'position' => 'nullable',
     
        ];
        
        $data = $request->validate($rules);

        $data['is_active'] = $request->has('is_active');

        return $data;
    }

}
