<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Redirect;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function login(Request $request)
    {         
        try{

            $validator = Validator::make($request->all(), [
               'email' => ['required', 'string', 'email', 'max:255'],
                'password' => ['required', 'string', 'min:6'],
           ]);
           if ($validator->fails()) {
               $messages = $validator->messages()->all();
               return back()->with("error", $messages[0])->withInput();
           }
         //   return $request;
         $admin=Admin::where('email',$request->email)->first();
         if(!$admin)
         {
           return back()->with('error','email is not found')->withInput();   
         }
         elseif (!Hash::check($request->password, $admin->password))
         {
            return back()->with('error','Password not matched')->withInput();   
         }
         else{
            $request->session()->put("email", $request->email);
            $request->session()->save();
            return Redirect("/index");
         }
        } 
        catch(\Throwable $th)
        { 
          return back()->with('error','Something bad happend')->withInput();
         
        }  
  
        }
      public function logout()
      {
        session()->flush();
        return Redirect("/login");
      }
}
