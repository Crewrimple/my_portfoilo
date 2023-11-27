<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormSubmissionRequest;
use App\Models\FormSubmission;
use Illuminate\Support\Facades\View;

class FormController extends Controller
{
  
    
    public function processForm(FormSubmissionRequest $request)
    {                                           
        FormSubmission::query()->create($request->validated());  
        session()->flash('success', );

        return redirect()->back();  
    } 
}
     