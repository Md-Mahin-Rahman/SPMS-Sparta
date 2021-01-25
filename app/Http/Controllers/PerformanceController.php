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
    public function store( Request  $request)
    {
        //return $request;
//        $performance = new Performance([
//            'user_id' => $request->get('student_id'),
//            'course_id' => $request->get('course_id'),
//            'section' => $request->get('section'),
//            'semester' => $request->get('semester'),
//            'm_co1_q1' => $request->get('m_co1_q1'),
//            'm_co1_q2' => $request->get('m_co1_q2'),
//            'm_co1_q3' => $request->get('m_co1_q3'),
//            'm_co2_q4' => $request->get('m_co2_q4'),
//            'm_co1_q5' => $request->get('m_co1_q5'),
//            'm_co1_q6' => $request->get('m_co1_q6'),
//            'semester_id' => $request->get('semester_id'),
//            'session' => $request->get('session'),
//        $name = $request->input('dept_code');
//        $name2 = $request->input('dept_name');
        $name3 = $request->input('plo_id');
        $name4 = $request->input('student_id');
        $name5 = $request->input('plo_number');
        $name6 = $request->input('name');
        $name7 = $request->input('question_id');
        $name8 = $request->input('section_id');
        $name9 = $request->input('co_id');
        $name10 = $request->input('exam_type');
        $name11 = $request->input('question_number');
        $name12 = $request->input('marks');
        $name13 = $request->input('answer_id');
        $name14 = $request->input('marks_obtained');
        $name15 = $request->input('isAchieved');
//        $name16 = $request->input('course_code');


//        DB::table('department')->insert([
//            'dept_code' => $name, 'dept_name' => $name2
//        ]);
        DB::table('plo')->insert([
            'plo_id' => $name3, 'plo_number' => $name5,
//            'dept_code' => $name,
            'name' => $name6
//            ->where('dept_code', $name)
        ]);
        DB::table('question_bank')->insert([
            'question_id' => $name7,

            'co_id' => $name9,
//            'exam_type' => $name10,
            'question_number' => $name11, 'marks' => $name12
        ]);
        DB::table('answer')->insert([
            'answer_id' => $name13, 'marks_obtained' => $name14
        ]);
        DB::table('plo_track')->insert([
            'student_id' => $name4,
//            'course_code' => $name16,
            'co_id' => $name9, 'plo_id' => $name3
        ]);
        DB::table('section')->insert([
            'section_id' => $name8
        ]);
//        ]);
//        $performance->save();
        return redirect()->back()->with('message', 'Data in submitted');
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
