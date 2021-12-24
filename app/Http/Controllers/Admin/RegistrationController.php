<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
        return view('Admin/registration');
    }

    /**
     * Show the form for creating a new resource.
     *
  
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $registration = new Registration;
         $registration->company_name = $request->get('company');
         $registration->email = $request->get('email');
         $registration->mobile = $request->get('mobile');
         $registration->date = $request->get('date');
         $registration->mail_body = $request->get('mailBody');
         $registration->status = $request->get('status');
         $registration->save();

         return redirect('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration)
    {
        $registration = Registration::all();
        return view ('Admin/admin', compact('registration'));
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $registration,$id)
    {
        $edit =Registration::find($id);
        return view('Admin/edit',['edit'=>$edit]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration,$id)
    {
        $dele =Registration::find($id);
        $dele->delete();
        return redirect('admin');
    }
}
