<?php

namespace App\Http\Controllers;

use App\Models\FormInput;
use Illuminate\Http\Request;

class FormInputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $text = $request->input('text');

        $formInput = new FormInput();
        $formInput->name = $name;
        $formInput->email = $email;
        $formInput->message = $text;
        $formInput->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormInput  $formInput
     * @return \Illuminate\Http\Response
     */
    public function show(FormInput $formInput)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormInput  $formInput
     * @return \Illuminate\Http\Response
     */
    public function edit(FormInput $formInput)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormInput  $formInput
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormInput $formInput)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormInput  $formInput
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormInput $formInput)
    {
        //
    }
}
