<?php

namespace App\Http\Controllers;
use App\Models\Risk;
use App\Models\Category;
use App\Models\Department;
use App\Models\UpdatesRisk;
use Illuminate\Http\Request;

class RiskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['departments'] = Department::get()->all();
        $data['risks'] = Risk::get()->all();
        return view('users.risk.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['cats'] = Category::get()->all();

        $data['risks'] = Risk::get()->all();
        return view('users.risk.create')->with($data);
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
            'rank' =>'required',
            'name' =>'required|string|max:100',
            'category' => 'required|string|max:100',
            'description' => 'required|string|max:255',
            'impact' => 'required|string|max:255',
            'probability' =>'required',
            'status' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',

            'mitigation_title' => 'required|string|max:100',
            'mitigation_desc' => 'required|string|max:255',
            'mitigation_responsible' => 'required|string|max:255',
            'mitigation_start_date' => 'required',
            'mitigation_deadline' => 'required',
            'mitigation_status' => 'required',
        ]);


        Risk::create([
        'rank' => $request->rank,
        'user_id' => auth()->user()->id,
        'name' => $request->name,
        'category' => $request->category,
        'description' => $request->description,
        'impact' => $request->impact,
        'probability' => $request->probability,
        'status' => $request->status,
        'start_date' => $request->start_date,
        'end_date' => $request->end_date,

        'mitigation_title' => $request->mitigation_title,
        'mitigation_desc' => $request->mitigation_desc,
        'mitigation_responsible' => $request->mitigation_responsible,
        'mitigation_start_date' => $request->mitigation_start_date,
        'mitigation_deadline' => $request->mitigation_deadline,
        'mitigation_status' => $request->mitigation_status,
        ]);
        // dd($request->all());
        return redirect()->route('risk.index')->with('msg', 'Added successfully');
        // return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['cats'] = Category::get()->all();
        $data['risks'] = Risk::get()->all();
        $risk  = Risk::findOrFail($id);
        return view('users.risk.edit',compact('risk'))->with($data);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Risk $risk)
    {

        $request->validate([

            'rank' =>'required',
            'name' =>'required|string|max:100',
            'category' => 'required|string|max:100',
            'description' => 'required|string|max:255',
            'impact' => 'required|string|max:255',
            'probability' =>'required',
            'status' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',

            'mitigation_title' => 'required|string|max:100',
            'mitigation_desc' => 'required|string|max:255',
            'mitigation_responsible' => 'required|string|max:255',
            'mitigation_start_date' => 'required',
            'mitigation_deadline' => 'required',
            'mitigation_status' => 'required',
            ]);
        $risk->update($request->all());

        return redirect()->route('risk.index')->with('msg', 'Edit successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $risk=Risk::findOrFail($id);
        $risk->delete();
        return redirect()->route('risk.index')->with('msg', 'Deleted successfully');;
    }

    public function report($id)
    {
        $data['cats'] = Category::get()->all();
        $data['updates'] = UpdatesRisk::get()->all();
        $risks  = Risk::findOrFail($id);
        return view('users.risk.update',compact('risks'))->with($data);
    }
    public function reportUpdate(Request $request){
        $request->validate([
            // 'risk_id' =>'required',
            'risk_update_report' =>'required|string|max:50',
            'risk_update_date' =>'required|date',
        ]);

        UpdatesRisk::create([
            'risk_id'       =>       $request->risk_id,
            'risk_update_report' =>  $request->risk_update_report,
            'risk_update_date' =>    $request->risk_update_date,
        ]);

        return redirect()->back()->with('msg', 'Added successfully');

    }
}