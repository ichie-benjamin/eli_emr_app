<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DocumentationAndPhysicalExam;
use Exception;

class DocumentationAndPhysicalExamsController extends Controller
{

    /**
     * Display a listing of the documentation and physical exams.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $documentationAndPhysicalExams = DocumentationAndPhysicalExam::paginate(25);

        return view('documentation_and_physical_exams.index', compact('documentationAndPhysicalExams'));
    }

    /**
     * Show the form for creating a new documentation and physical exam.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('documentation_and_physical_exams.create');
    }

    /**
     * Store a new documentation and physical exam in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            DocumentationAndPhysicalExam::create($data);

            return redirect()->route('documentation_and_physical_exams.documentation_and_physical_exam.index')
                             ->with('success_message', 'Documentation And Physical Exam was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified documentation and physical exam.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $documentationAndPhysicalExam = DocumentationAndPhysicalExam::findOrFail($id);

        return view('documentation_and_physical_exams.show', compact('documentationAndPhysicalExam'));
    }

    /**
     * Show the form for editing the specified documentation and physical exam.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $documentationAndPhysicalExam = DocumentationAndPhysicalExam::findOrFail($id);
        

        return view('documentation_and_physical_exams.edit', compact('documentationAndPhysicalExam'));
    }

    /**
     * Update the specified documentation and physical exam in the storage.
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
            
            $documentationAndPhysicalExam = DocumentationAndPhysicalExam::findOrFail($id);
            $documentationAndPhysicalExam->update($data);

            return redirect()->route('documentation_and_physical_exams.documentation_and_physical_exam.index')
                             ->with('success_message', 'Documentation And Physical Exam was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified documentation and physical exam from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $documentationAndPhysicalExam = DocumentationAndPhysicalExam::findOrFail($id);
            $documentationAndPhysicalExam->delete();

            return redirect()->route('documentation_and_physical_exams.documentation_and_physical_exam.index')
                             ->with('success_message', 'Documentation And Physical Exam was successfully deleted!');

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
            'patient_name' => 'string|min:1|nullable',
            'date_examined' => 'nullable|date_format:j/n/Y',
            'preceptor_name' => 'string|min:1|nullable',
            'chief_complaint' => 'string|nullable|min:0',
            'history_of_illnes' => 'string|min:1|nullable',
            'past_medical_history' => 'string|min:1|nullable',
            'immunization' => 'string|min:1|nullable',
            'phemonia' => 'string|min:1|nullable',
            't_dap' => 'string|min:1|nullable',
            'zoster' => 'string|min:1|nullable',
            'family_history' => 'string|min:1|nullable',
            'social_history' => 'string|min:1|nullable',
            'h_t' => 'string|min:1|nullable',
            'w_t' => 'string|min:1|nullable',
            'b_m_i' => 'string|min:1|nullable',
            'temp' => 'string|min:1|nullable',
            'pulse' => 'string|min:1|nullable',
            'b_p' => 'string|min:1|nullable',
            'r_r' => 'string|min:1|nullable',
            'pain' => 'string|min:1|nullable',
            'head' => 'string|min:1|max:255|nullable',
            'eyes' => 'string|min:1|nullable',
            'ears_nose_throat' => 'string|min:1|nullable',
            'mouth' => 'string|min:1|nullable',
            'neck' => 'string|min:1|nullable',
            'respiratory' => 'string|min:1|nullable',
            'cadio_vascular' => 'string|min:1|nullable',
            'gastrointestinal' => 'string|min:1|nullable',
            'lymphatic' => 'string|min:1|nullable',
            'skin_and_subcutaneus_tissue' => 'string|min:1|nullable',
            'back_musculoskeletal' => 'string|min:1|nullable',
            'neurological' => 'string|min:1|nullable',
            'psychiatric' => 'string|min:1|nullable',
            'observations' => 'string|min:1|nullable',
            'sign' => 'string|min:1|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
