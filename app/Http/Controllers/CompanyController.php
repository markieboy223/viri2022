<?php

namespace App\Http\Controllers;

use App\Models\Companys;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Companys::latest()->paginate(5);

        return view('companys.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companys.create');
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
            'description' => 'required',
        ]);

        Companys::create($request->all());

        return redirect()->route('companys.index')
            ->with('success','Company created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Companys  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Companys $company)
    {
        return view('companys.show',compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Companys  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Companys $company)
    {
        return view('companys.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Companys  $companys
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Companys $companys)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $companys->update($request->all());

        return redirect()->route('companys.index')
            ->with('success','Company updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Companys  $companys
     * @return \Illuminate\Http\Response
     */
    public function destroy(Companys $companys)
    {
        $companys->delete();

        return redirect()->route('company.index')
            ->with('success','Company deleted successfully');
    }
}
