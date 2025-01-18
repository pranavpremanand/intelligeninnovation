<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $contactForms = Form::where('type','contact_us')->count();
        $appForms = Form::where('type','app_dev')->count();
        $webForms = Form::where('type','web_dev')->count();
        
        return view('index',[
            'contactForms' => $contactForms,
            'appForms' => $appForms,
            'webForms' => $webForms,
        ]);
       
    }
    public function contact_forms()
    {
        $contactForms = Form::where('type','contact_us')->get();
        return view('contactus',[
            'forms' => $contactForms,
        ]);
    }
    public function app_development_forms()
    {
        $contactForms = Form::where('type','app_dev')->get();
        return view('applanding',[
            'forms' => $contactForms,
        ]);
    }
    public function web_development_forms()
    {
        $contactForms = Form::where('type','web_dev')->get();
        return view('websitelanding',[
            'forms' => $contactForms,
        ]);
    }
}
