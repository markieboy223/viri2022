<?php

namespace App\Http\Controllers;

use App\Models\Forms;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Forms::latest()->paginate(5);

        return view('forms.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'sector' => 'required',
        ]);

        Forms::create($request->all());

        return redirect()->route('forms.index')
            ->with('success','Form created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Forms  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Forms $form)
    {
        return view('forms.show',compact('form'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Forms  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Forms $form)
    {
        return view('forms.edit',compact('form'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Forms  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forms $form)
    {
        $request->validate([
            'name' => 'required',
            'sector' => 'required',
        ]);

        $form->update($request->all());

        return redirect()->route('forms.index')
            ->with('success','Form updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Forms  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forms $form)
    {
        $form->delete();

        return redirect()->route('forms.index')
            ->with('success','Form deleted successfully');
    }
}
