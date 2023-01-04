<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        $data['departments'] = Department::orderBy('id', 'ASC')->get() ;
        return view('admin.department')->with($data);
    }


    public function create(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:50',
        ]);
        Department::create([
            'name' => $request->name,
        ]);


        $request->session()->flash('msg', 'Department added successfully');
        return back();
    }


    public function edit(Request $request ,Department $department)
    {
        Department::findOrFail($request->id)->update([
            'name' => $request->name,
        ]);
        // $request->session()->flash('msg', 'Department Updated Successfully');
        // return back();
        return redirect()->back()->with('msg','Department updated successfully');

    }

    public function delete(Department $department, Request $request)
    {
        try {
            $department->delete();
            $msg = "Department deleted successfully";
        } catch (Exception $e) {
            $msg = "can't delete this Department";
        }
        $request->session()->flash('msg', $msg);
        return back();
    }

}