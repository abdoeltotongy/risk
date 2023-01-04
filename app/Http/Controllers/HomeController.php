<?php

namespace App\Http\Controllers;
use App\Models\Risk;
use App\Models\Opportunity;
use App\Models\Category;
use App\Models\Department;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $data['cats'] = Category::get()->all();
        $data['departments'] = Department::get()->all();
        $data['risks'] = Risk::get()->all();
        $data['opportunities'] = Opportunity::get()->all();


        return view('users.index')->with($data);
    }

}