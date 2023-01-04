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

        $data['count_risk'] = Risk::all()->count();
        $data['count_risk_mitigated'] = Risk::where('mitigation_status' , '4')->count();
        $data['count_opportunities'] = Opportunity::all()->count();
        $data['count_opportunities_captured'] = Opportunity::where('capture_status' , '4')->count();



        return view('users.index')->with($data);
    }

}