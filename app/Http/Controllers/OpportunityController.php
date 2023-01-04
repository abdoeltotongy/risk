<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Opportunity;
use App\Models\Department;
use App\Models\UpdatesOpportunity;
use Illuminate\Http\Request;

class OpportunityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['departments'] = Department::get()->all();
        $data['opportunities'] = Opportunity::get()->all();
        return  view('users.opportunity.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['cats'] = Category::get()->all();
        // $data['opportunities'] = Opportunity::get()->all();
        return  view('users.opportunity.create')->with($data);
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


            'capture_title' =>'required|string|max:255',
            'capture_desc' => 'required|string|max:255',
            'capture_responsible' => 'required|string|max:255',
            'capture_start_date' => 'required',
            'capture_deadline' => 'required',
            'capture_status' => 'required',
            ]);

        Opportunity::create([
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

            'capture_title' => $request->capture_title,
            'capture_desc' => $request->capture_desc,
            'capture_responsible' => $request->capture_responsible,
            'capture_start_date' => $request->capture_start_date,
            'capture_deadline' => $request->capture_deadline,
            'capture_status' => $request->capture_status,
            ]);
            // dd($request->all());

            return redirect()->route('opportunity.index')->with('msg', 'Added successfully');

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
        $opportunity  = Opportunity::findOrFail($id);
        return view('users.opportunity.edit',compact('opportunity'))->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Opportunity $opportunity)
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


            'capture_title' =>'required|string|max:255',
            'capture_desc' => 'required|string|max:255',
            'capture_responsible' => 'required|string|max:255',
            'capture_start_date' => 'required',
            'capture_deadline' => 'required',
            'capture_status' => 'required',
            ]);

        $opportunity->update($request->all());
        return redirect()->route('opportunity.index')->with('msg', 'Added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $opportunity = Opportunity::findOrFail($id);
        $opportunity->delete();
        return redirect()->route('opportunity.index')->with('msg', 'Deleted successfully');;
    }
    public function report($id)
    {

        $data['cats'] = Category::get()->all();
        $data['updates'] = UpdatesOpportunity::get()->all();
        $opportunity  = Opportunity::findOrFail($id);
        return view('users.opportunity.update',compact('opportunity'))->with($data);
    }
    public function reportUpdate(Request $request){
        $request->validate([
            'opportunity_update_report' =>'required|string|max:50',
            'opportunity_update_date' =>'required|date',
        ]);
        UpdatesOpportunity::create([
            'opportunity_id'=>         $request->opportunity_id,
            'opportunity_update_report' =>  $request->opportunity_update_report,
            'opportunity_update_date' =>    $request->opportunity_update_date,
        ]);
        return redirect()->back()->with('msg', 'Added successfully');

    }
}