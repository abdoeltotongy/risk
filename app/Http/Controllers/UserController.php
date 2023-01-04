<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Department;

class UserController extends Controller
{
    public function index()
    {
        $data['departments'] = Department::orderBy('id', 'ASC')->get()->all();
        $data['users'] = User::orderBy('id', 'ASC')->get()->all();
        return view('admin.user')->with($data);
    }


    public function create(Request $request)
    {
        // $data['departments'] = Department::orderBy('id', 'ASC')->get();

        // $request->validate([
        //     'name' => 'required|string|max:50',
        //     'email' => 'required|string|email',
        //     'password' => 'required',
        //     'phone' => 'nullable|number|max:50',
        //     'department' => 'required|string|max:50'
        //     // 'role' => 'required|string|max:50',
        // ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>\Hash::make($request->password),
            'phone' => $request->phone,
            'department_id' =>$request->department_id,
            'role_id'=> $request->role_id,
        ]);


        $request->session()->flash('msg', 'Account added successfully');
        return back();
    }

    public function edit(Request $request)
    {


        User::findOrFail($request->id)->update([

                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'phone' => $request->phone,
                'department_id' =>$request->department_id,
                'role_id'=> $request->role_id,


        ]);
        // dd($request->all());

        $request->session()->flash('msg', 'Account Updated Successfully');
        return back();
    }
    public function delete(User $user, Request $request)
    {
        try {
            $user->delete();
            $request->session()->flash('msg', 'Account Deleted Successfully');
        } catch (Exception $e) {
            $request->session()->flash('msg', 'can\'t delete this User');
        }
        // $request->session()->flash('msg', 'Account Updated Successfully');
        return back();
    }
}