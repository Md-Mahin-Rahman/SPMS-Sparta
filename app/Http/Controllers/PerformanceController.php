<?php

namespace App\Http\Controllers;

use App\Models\Performance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerformanceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('performanceCreate');
    }
    
    public function bcreate()
    {
        return view('ploStore');
    }
    
    public function store( Request  $request)
    {
        $name1 = $request->input('dept_code');
        $name2 = $request->input('course_code');
        $name3 = $request->input('co_id');
        $name4 = $request->input('plo_id');
        $name5= $request->input('plo_number');


        DB::table('co')->insert([
            'co_id' => $name3, 'course_code' => $name2, 'plo_id' => $name4
        ]);
        return redirect()->back()->with('message', 'Data in submitted');
    }
    
    public function ploStore( Request  $request)
    {
        $name1 = $request->input('dept_code');

        $name2 = $request->input('name');
        $name3 = $request->input('plo_id');
        $name4 = $request->input('plo_number');


        DB::table('plo')->insert([
            'dept_code' => $name1, 'name' => $name2, 'plo_id' => $name3, 'plo_number' => $name4
        ]);

        return redirect()->back()->with('message', 'Data is submitted');
    }

    public function show( Request  $request)
    {
        if (empty($request->get('performance_lookup')))
        {
            return redirect()->back()->with('message', 'Please enter student ID');
        }
        else{
            //return $request;
            $lookUp=$request->get('performance_lookup');
            $performance = Performance::where('user_id',$lookUp)->get();

            return view("performanceShow", ["performances" => $performance]);



        }
       // return $request;
    }

    public function allShow( )
    {
        $performancesAll=Performance::all();
        return view("performanceAllShow", ["performances"=>$performancesAll]);



        // return $request;
    }

}
