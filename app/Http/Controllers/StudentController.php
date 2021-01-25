<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function barchart(Request $request)
    {
        $fruit = DB::table('student')->where('dept_code','CSE')->count('student.student_id');
        $veg = DB::table('student')->where('dept_code','EEE')->count('dept_code');//->where('dept_code','CSE')
//        $grains = Student::where('product_type','grains')->get();
        $fruit_count = $fruit;
        $veg_count = $veg;
        //        $fruit_count->tag($fruit_count);
//        $grains_count = count($grains);

        return view('barchart',compact('fruit_count','veg_count'));
//        return view('barchart',compact('fruit_count'));

    }
    public function showAll(Request $request)
    {
//        $totMark = DB::table('plo_track')
//            ->distinct()
//            ->select('marks')
//            ->where('plo_track.section_id','=','2751')
//            ->join('question_bank', 'question_bank.section_id', '=', 'plo_track.section_id')
////            ->where([['plo_track.student_id','=','1830831'],['plo_track.plo_id','=','121']])
//            ->sum('marks');

        $noOfCourses = DB::table('course')
            ->count('course_code');

        $noOfStudents = DB::table('student')
            ->count('student_id');

        $noOfFaculty = DB::table('faculty')
            ->count('faculty_id');

        $noOfPlo = DB::table('plo')
            ->count('plo_id');

        //Avg Plo Map Query///////////////////////////
        $avgPloMap1 = DB::table('course')
            ->distinct()
            ->count('course_code');

        $avgPloMap = DB::table('plo')
            ->distinct()
            ->count('plo_id');

//        $avgPloMap = $avgPloMap2/$avgPloMap1;

        //Avg Plo Map Query////////////////////////////

        //Avg achieved PLO Query//////////////////////

        $avgPloAchieve1 = DB::table('student')
            ->count('student_id');
        $avgPloAchieve2 = DB::table('plo_track')
            ->distinct()
            ->where('isAchieved', '=', '1')
            ->count('plo_id');


        //Avg achieved PLO Query//////////////////////

        //Practicing Semesters Query//////////////////

        $pracSem1 = DB::table('faculty')
            ->count('faculty_id');
        $pracSem2 = DB::table('semester')
            ->count('semester_id');

        //Practicing Semesters Query//////////////////

        //Achieved so far Query///////////////////////

        $achievedSoFar = DB::table('plo_track')
            ->distinct()
            ->where('isAchieved', '=', '1')
            ->count('plo_id');


        //Achieved so far Query///////////////////////

        //PLO achievement views///////////////////////


//        $cos1 = DB::table('plo')
//            ->select('question_bank.co_id')
//            ->distinct()
//            ->join('student', 'student.dept_code', '=', 'plo.dept_code')
//            ->join('co', 'co.plo_id', '=', 'plo.plo_id')
//            ->join('question_bank', 'question_bank.co_id', '=', 'co.co_id')
//            ->where([['student.student_id', '=', '1416455'], ['plo.plo_id', '=', '121']])
//            ->get();
//
//
//        $plo1Tot = DB::table('question_bank')
//            ->whereIn('co_id', $cos1->pluck('co_id')->toArray())
//            ->sum('marks');
//
//        $plo1Q = DB::table('question_bank')
//            ->whereIn('co_id', $cos1->pluck('co_id')->toArray())
//            ->select('question_id')
//        ;
//
//        $plo1Obt = DB::table('answer')
//            ->whereIn('question_id', $plo1Q->pluck('question_id')->toArray())
//            ->sum('marks_obtained');
//
//        if(empty($plo1Tot)) {
//            $plo1Percent = 0;
//        }
//        else{
//            $plo1Percent = ($plo1Obt / $plo1Tot) * 100;
//        }
//
//
//        ////////////////
//        $cos2 = DB::table('plo')
//            ->select('question_bank.co_id')
//            ->distinct()
//            ->join('student', 'student.dept_code', '=', 'plo.dept_code')
//            ->join('co', 'co.plo_id', '=', 'plo.plo_id')
//            ->join('question_bank', 'question_bank.co_id', '=', 'co.co_id')
//            ->where([['student.student_id', '=', '1416455'], ['plo.plo_id', '=', '122']])
//            ->get();
//
//
//        $plo2Tot = DB::table('question_bank')
//            ->whereIn('co_id', $cos1->pluck('co_id')->toArray())
//            ->sum('marks');
//
//        $plo2Q = DB::table('question_bank')
//            ->whereIn('co_id', $cos1->pluck('co_id')->toArray())
//            ->select('question_id')
//        ;
//
//        $plo2Obt = DB::table('answer')
//            ->whereIn('question_id', $plo1Q->pluck('question_id')->toArray())
//            ->sum('marks_obtained');
//
//        if(empty($plo2Tot)) {
//            $plo8Percent = 0;
//        }
//        else{
//            $plo2Percent = ($plo2Obt / $plo2Tot) * 100;
//        }
//
//
//        ////////////////
//        $cos3 = DB::table('plo')
//            ->select('question_bank.co_id')
//            ->distinct()
//            ->join('student', 'student.dept_code', '=', 'plo.dept_code')
//            ->join('co', 'co.plo_id', '=', 'plo.plo_id')
//            ->join('question_bank', 'question_bank.co_id', '=', 'co.co_id')
//            ->where([['student.student_id', '=', '1416455'], ['plo.plo_id', '=', '123']])
//            ->get();
//
//
//        $plo3Tot = DB::table('question_bank')
//            ->whereIn('co_id', $cos3->pluck('co_id')->toArray())
//            ->sum('marks');
//
//        $plo3Q = DB::table('question_bank')
//            ->whereIn('co_id', $cos3->pluck('co_id')->toArray())
//            ->select('question_id')
//        ;
//
//        $plo3Obt = DB::table('answer')
//            ->whereIn('question_id', $plo3Q->pluck('question_id')->toArray())
//            ->sum('marks_obtained');
//
//        if(empty($plo3Tot)) {
//            $plo3Percent = 0;
//        }
//        else{
//            $plo3Percent = ($plo3Obt / $plo3Tot) * 100;
//        }
//
//
//        ////////////////
//        $cos4 = DB::table('plo')
//            ->select('question_bank.co_id')
//            ->distinct()
//            ->join('student', 'student.dept_code', '=', 'plo.dept_code')
//            ->join('co', 'co.plo_id', '=', 'plo.plo_id')
//            ->join('question_bank', 'question_bank.co_id', '=', 'co.co_id')
//            ->where([['student.student_id', '=', '1416455'], ['plo.plo_id', '=', '124']])
//            ->get();
//
//
//        $plo4Tot = DB::table('question_bank')
//            ->whereIn('co_id', $cos4->pluck('co_id')->toArray())
//            ->sum('marks');
//
//        $plo4Q = DB::table('question_bank')
//            ->whereIn('co_id', $cos4->pluck('co_id')->toArray())
//            ->select('question_id')
//        ;
//
//        $plo4Obt = DB::table('answer')
//            ->whereIn('question_id', $plo4Q->pluck('question_id')->toArray())
//            ->sum('marks_obtained');
//
//        if(empty($plo4Tot)) {
//            $plo4Percent = 0;
//        }
//        else{
//            $plo4Percent = ($plo4Obt / $plo4Tot) * 100;
//        }
//
//
//        ////////////////
//        $cos5 = DB::table('plo')
//            ->select('question_bank.co_id')
//            ->distinct()
//            ->join('student', 'student.dept_code', '=', 'plo.dept_code')
//            ->join('co', 'co.plo_id', '=', 'plo.plo_id')
//            ->join('question_bank', 'question_bank.co_id', '=', 'co.co_id')
//            ->where([['student.student_id', '=', '1416455'], ['plo.plo_id', '=', '125']])
//            ->get();
//
//
//        $plo5Tot = DB::table('question_bank')
//            ->whereIn('co_id', $cos5->pluck('co_id')->toArray())
//            ->sum('marks');
//
//        $plo5Q = DB::table('question_bank')
//            ->whereIn('co_id', $cos5->pluck('co_id')->toArray())
//            ->select('question_id')
//        ;
//
//        $plo5Obt = DB::table('answer')
//            ->whereIn('question_id', $plo5Q->pluck('question_id')->toArray())
//            ->sum('marks_obtained');
//
//        if(empty($plo5Tot)) {
//            $plo5Percent = 0;
//        }
//        else{
//            $plo5Percent = ($plo5Obt / $plo5Tot) * 100;
//        }
//
//
//        ////////////////
//        $cos6 = DB::table('plo')
//            ->select('question_bank.co_id')
//            ->distinct()
//            ->join('student', 'student.dept_code', '=', 'plo.dept_code')
//            ->join('co', 'co.plo_id', '=', 'plo.plo_id')
//            ->join('question_bank', 'question_bank.co_id', '=', 'co.co_id')
//            ->where([['student.student_id', '=', '1416455'], ['plo.plo_id', '=', '126']])
//            ->get();
//
//
//        $plo6Tot = DB::table('question_bank')
//            ->whereIn('co_id', $cos6->pluck('co_id')->toArray())
//            ->sum('marks');
//
//        $plo6Q = DB::table('question_bank')
//            ->whereIn('co_id', $cos6->pluck('co_id')->toArray())
//            ->select('question_id')
//        ;
//
//        $plo6Obt = DB::table('answer')
//            ->whereIn('question_id', $plo6Q->pluck('question_id')->toArray())
//            ->sum('marks_obtained');
//
//        if(empty($plo6Tot)) {
//            $plo6Percent = 0;
//        }
//        else{
//            $plo6Percent = ($plo6Obt / $plo6Tot) * 100;
//        }
//
//
//        ////////////////
//        $cos7 = DB::table('plo')
//            ->select('question_bank.co_id')
//            ->distinct()
//            ->join('student', 'student.dept_code', '=', 'plo.dept_code')
//            ->join('co', 'co.plo_id', '=', 'plo.plo_id')
//            ->join('question_bank', 'question_bank.co_id', '=', 'co.co_id')
//            ->where([['student.student_id', '=', '1416455'], ['plo.plo_id', '=', '127']])
//            ->get();
//
//
//        $plo7Tot = DB::table('question_bank')
//            ->whereIn('co_id', $cos7->pluck('co_id')->toArray())
//            ->sum('marks');
//
//        $plo7Q = DB::table('question_bank')
//            ->whereIn('co_id', $cos7->pluck('co_id')->toArray())
//            ->select('question_id')
//        ;
//
//        $plo7Obt = DB::table('answer')
//            ->whereIn('question_id', $plo7Q->pluck('question_id')->toArray())
//            ->sum('marks_obtained');
//
//        if(empty($plo7Tot)) {
//            $plo7Percent = 0;
//        }
//        else{
//            $plo7Percent = ($plo7Obt / $plo7Tot) * 100;
//        }
//
//
//        ////////////////
//        $cos8 = DB::table('plo')
//            ->select('question_bank.co_id')
//            ->distinct()
//            ->join('student', 'student.dept_code', '=', 'plo.dept_code')
//            ->join('co', 'co.plo_id', '=', 'plo.plo_id')
//            ->join('question_bank', 'question_bank.co_id', '=', 'co.co_id')
//            ->where([['student.student_id', '=', '1416455'], ['plo.plo_id', '=', '128']])
//            ->get();
//
//
//        $plo8Tot = DB::table('question_bank')
//            ->whereIn('co_id', $cos8->pluck('co_id')->toArray())
//            ->sum('marks');
//
//        $plo8Q = DB::table('question_bank')
//            ->whereIn('co_id', $cos8->pluck('co_id')->toArray())
//            ->select('question_id');
//
//        $plo8Obt = DB::table('answer')
//            ->whereIn('question_id', $plo8Q->pluck('question_id')->toArray())
//            ->sum('marks_obtained');
//
//        if(empty($plo8Tot)) {
//            $plo8Percent = 0;
//        }
//        else{
//            $plo8Percent = ($plo8Obt / $plo8Tot) * 100;
//        }
//
//
//
//
//
//        //////////////
//        $cos9 = DB::table('plo')
//            ->select('question_bank.co_id')
//            ->distinct()
//            ->join('student', 'student.dept_code', '=', 'plo.dept_code')
//            ->join('co', 'co.plo_id', '=', 'plo.plo_id')
//            ->join('question_bank', 'question_bank.co_id', '=', 'co.co_id')
//            ->where([['student.student_id', '=', '1416455'], ['plo.plo_id', '=', '129']])
//            ->get();
//
//
//        $plo9Tot = DB::table('question_bank')
//            ->whereIn('co_id', $cos9->pluck('co_id')->toArray())
//            ->sum('marks');
//
//        $plo9Q = DB::table('question_bank')
//            ->whereIn('co_id', $cos9->pluck('co_id')->toArray())
//            ->select('question_id')
//        ;
//
//        $plo9Obt = DB::table('answer')
//            ->whereIn('question_id', $plo9Q->pluck('question_id')->toArray())
//            ->sum('marks_obtained');
//
//        if(empty($plo9Tot)) {
//            $plo9Percent = 0;
//        }
//        else{
//            $plo9Percent = ($plo9Obt / $plo9Tot) * 100;
//        }
//
//
//        ////////////////
//        $cos10 = DB::table('plo')
//            ->select('question_bank.co_id')
//            ->distinct()
//            ->join('student', 'student.dept_code', '=', 'plo.dept_code')
//            ->join('co', 'co.plo_id', '=', 'plo.plo_id')
//            ->join('question_bank', 'question_bank.co_id', '=', 'co.co_id')
//            ->where([['student.student_id', '=', '1416455'], ['plo.plo_id', '=', '130']])
//            ->get();
//
//
//        $plo10Tot = DB::table('question_bank')
//            ->whereIn('co_id', $cos10->pluck('co_id')->toArray())
//            ->sum('marks');
//
//        $plo10Q = DB::table('question_bank')
//            ->whereIn('co_id', $cos10->pluck('co_id')->toArray())
//            ->select('question_id')
//        ;
//
//        $plo10Obt = DB::table('answer')
//            ->whereIn('question_id', $plo10Q->pluck('question_id')->toArray())
//            ->sum('marks_obtained');
//
//        if(empty($plo10Tot)) {
//            $plo10Percent = 0;
//        }
//        else{
//            $plo10Percent = ($plo10Obt / $plo10Tot) * 100;
//        }
//
//
//        ////////////////
//        $cos11 = DB::table('plo')
//            ->select('question_bank.co_id')
//            ->distinct()
//            ->join('student', 'student.dept_code', '=', 'plo.dept_code')
//            ->join('co', 'co.plo_id', '=', 'plo.plo_id')
//            ->join('question_bank', 'question_bank.co_id', '=', 'co.co_id')
//            ->where([['student.student_id', '=', '1416455'], ['plo.plo_id', '=', '131']])
//            ->get();
//
//
//        $plo11Tot = DB::table('question_bank')
//            ->whereIn('co_id', $cos11->pluck('co_id')->toArray())
//            ->sum('marks');
//
//        $plo11Q = DB::table('question_bank')
//            ->whereIn('co_id', $cos11->pluck('co_id')->toArray())
//            ->select('question_id')
//        ;
//
//        $plo11Obt = DB::table('answer')
//            ->whereIn('question_id', $plo6Q->pluck('question_id')->toArray())
//            ->sum('marks_obtained');
//
//        if(empty($plo11Tot)) {
//            $plo11Percent = 0;
//        }
//        else{
//            $plo11Percent = ($plo11Obt / $plo11Tot) * 100;
//        }
//
//
//        ////////////////
//        $cos12 = DB::table('plo')
//            ->select('question_bank.co_id')
//            ->distinct()
//            ->join('student', 'student.dept_code', '=', 'plo.dept_code')
//            ->join('co', 'co.plo_id', '=', 'plo.plo_id')
//            ->join('question_bank', 'question_bank.co_id', '=', 'co.co_id')
//            ->where([['student.student_id', '=', '1416455'], ['plo.plo_id', '=', '132']])
//            ->get();
//
//
//        $plo12Tot = DB::table('question_bank')
//            ->whereIn('co_id', $cos12->pluck('co_id')->toArray())
//            ->sum('marks');
//
//        $plo12Q = DB::table('question_bank')
//            ->whereIn('co_id', $cos12->pluck('co_id')->toArray())
//            ->select('question_id')
//        ;
//
//        $plo12Obt = DB::table('answer')
//            ->whereIn('question_id', $plo12Q->pluck('question_id')->toArray())
//            ->sum('marks_obtained');
//
//        if(empty($plo12Tot)) {
//            $plo12Percent = 0;
//        }
//        else{
//            $plo12Percent = ($plo12Obt / $plo12Tot) * 100;
//        }
//
//
//        ////////////////
//        $cos13 = DB::table('plo')
//            ->select('question_bank.co_id')
//            ->distinct()
//            ->join('student', 'student.dept_code', '=', 'plo.dept_code')
//            ->join('co', 'co.plo_id', '=', 'plo.plo_id')
//            ->join('question_bank', 'question_bank.co_id', '=', 'co.co_id')
//            ->where([['student.student_id', '=', '1416455'], ['plo.plo_id', '=', '132']])
//            ->get();
//
//
//        $plo13Tot = DB::table('question_bank')
//            ->whereIn('co_id', $cos13->pluck('co_id')->toArray())
//            ->sum('marks');
//
//        $plo13Q = DB::table('question_bank')
//            ->whereIn('co_id', $cos13->pluck('co_id')->toArray())
//            ->select('question_id')
//        ;
//
//        $plo13Obt = DB::table('answer')
//            ->whereIn('question_id', $plo13Q->pluck('question_id')->toArray())
//            ->sum('marks_obtained');
//
//        if(empty($plo13Tot)) {
//            $plo13Percent = 0;
//        }
//        else{
//            $plo13Percent = ($plo13Obt / $plo13Tot) * 100;
//        }
//
//
//
//        //PLO achievement views///////////////////////

        return view('overalllShow', compact('noOfCourses','noOfStudents','noOfFaculty','noOfPlo','avgPloMap','avgPloMap1','achievedSoFar','avgPloAchieve1','avgPloAchieve2','pracSem1','pracSem2'));
    }
//,'plo1Percent','plo2Percent','plo3Percent','plo4Percent','plo5Percent','plo6Percent','plo7Percent','plo8Percent','plo9Percent','plo10Percent','plo11Percent','plo12Percent','plo13Percent'
    public function show(Request  $request)
    {
        //
        if (empty( $request->get('student_lookup')))
        {
            return redirect()->back()->with('message', 'Please enter student ID');
        }
        else{
            //return $request;
            $lookUp= $request->get('student_lookup');
            $performance = Student::where('student_id',$lookUp)->get();



            $duo = DB::table('plo_track')
//                ->select('plo_track.student_id','plo_track.course_code','plo.plo_number','plo_track.isAchieved','answer.marks_obtained')  //all columns we want to show
                ->join('plo','plo.plo_id','=','plo_track.plo_id')
                ->join('answer','answer.student_id', '=','plo_track.student_id')
                ->where('plo_track.student_id', $lookUp)
//                ->groupBy('plo_track.plo_id')
                ->get();
            $duo = $duo->unique('course_id');

//            $abc = DB::table('answer')
////                ->select('plo_track.student_id','plo_track.course_code','plo.plo_id','plo_track.isAchieved','answer.marks_obtained')  //all columns we want to show
////                ->Join('answer','answer.student_id', '=','plo_track.student_id')
////                ->join('plo_track','plo_track.plo_id','=','plo.plo_id')
//                ->where('answer.student_id', $lookUp)
////                ->groupBy('plo_track.plo_id')
//                ->sum('marks_obtained') //table and conditional value\
//                ->avg('marks_obtained')
                ;
//            $sum=($abc+5)*2;
            $cos1 = DB::table('plo')
                ->select('question_bank.co_id')
                ->distinct()
                ->join('student', 'student.dept_code', '=', 'plo.dept_code')
                ->join('co', 'co.plo_id', '=', 'plo.plo_id')
                ->join('question_bank', 'question_bank.co_id', '=', 'co.co_id')
                ->where([['student.student_id', $lookUp], ['plo.plo_id', '=', '121']])
                ->get();
//                ->where([['student.student_id', '=', '1830841'], ['plo.plo_id', '=', '1234']]) where er try for look up

            $plo1Tot = DB::table('question_bank')
                ->whereIn('co_id', $cos1->pluck('co_id')->toArray())
                ->sum('marks');

            $plo1Q = DB::table('question_bank')
                ->whereIn('co_id', $cos1->pluck('co_id')->toArray())
                ->select('question_id');

            $plo1Obt = DB::table('answer')
                ->whereIn('question_id', $plo1Q->pluck('question_id')->toArray())
                ->sum('marks_obtained');

            if (empty($plo1Tot)) {
                $plo1Percent = 0;
            } else {
                $plo1Percent = ($plo1Obt / $plo1Tot) * 100;
            }


            ////////////////
            $cos2 = DB::table('plo')
                ->select('question_bank.co_id')
                ->distinct()
                ->join('student', 'student.dept_code', '=', 'plo.dept_code')
                ->join('co', 'co.plo_id', '=', 'plo.plo_id')
                ->join('question_bank', 'question_bank.co_id', '=', 'co.co_id')
                ->where([['student.student_id', $lookUp], ['plo.plo_id', '=', '122']])
                ->get();


            $plo2Tot = DB::table('question_bank')
                ->whereIn('co_id', $cos2->pluck('co_id')->toArray())
                ->sum('marks');

            $plo2Q = DB::table('question_bank')
                ->whereIn('co_id', $cos1->pluck('co_id')->toArray())
                ->select('question_id');

            $plo2Obt = DB::table('answer')
                ->whereIn('question_id', $plo2Q->pluck('question_id')->toArray())
                ->sum('marks_obtained');

            if (empty($plo2Tot)) {
                $plo2Percent = 0;
            } else {
                $plo2Percent = ($plo2Obt / $plo2Tot) * 100;
            }


            ////////////////
            $cos3 = DB::table('plo')
                ->select('question_bank.co_id')
                ->distinct()
                ->join('student', 'student.dept_code', '=', 'plo.dept_code')
                ->join('co', 'co.plo_id', '=', 'plo.plo_id')
                ->join('question_bank', 'question_bank.co_id', '=', 'co.co_id')
                ->where([['student.student_id', $lookUp], ['plo.plo_id', '=', '123']])
                ->get();


            $plo3Tot = DB::table('question_bank')
                ->whereIn('co_id', $cos3->pluck('co_id')->toArray())
                ->sum('marks');

            $plo3Q = DB::table('question_bank')
                ->whereIn('co_id', $cos3->pluck('co_id')->toArray())
                ->select('question_id');

            $plo3Obt = DB::table('answer')
                ->whereIn('question_id', $plo3Q->pluck('question_id')->toArray())
                ->sum('marks_obtained');

            if (empty($plo3Tot)) {
                $plo3Percent = 0;
            } else {
                $plo3Percent = ($plo3Obt / $plo3Tot) * 100;
            }


            ////////////////
            $cos4 = DB::table('plo')
                ->select('question_bank.co_id')
                ->distinct()
                ->join('student', 'student.dept_code', '=', 'plo.dept_code')
                ->join('co', 'co.plo_id', '=', 'plo.plo_id')
                ->join('question_bank', 'question_bank.co_id', '=', 'co.co_id')
                ->where([['student.student_id', $lookUp], ['plo.plo_id', '=', '124']])
                ->get();


            $plo4Tot = DB::table('question_bank')
                ->whereIn('co_id', $cos4->pluck('co_id')->toArray())
                ->sum('marks');

            $plo4Q = DB::table('question_bank')
                ->whereIn('co_id', $cos4->pluck('co_id')->toArray())
                ->select('question_id');

            $plo4Obt = DB::table('answer')
                ->whereIn('question_id', $plo4Q->pluck('question_id')->toArray())
                ->sum('marks_obtained');

            if (empty($plo4Tot)) {
                $plo4Percent = 0;
            } else {
                $plo4Percent = ($plo4Obt / $plo4Tot) * 100;
            }


            ////////////////
            $cos5 = DB::table('plo')
                ->select('question_bank.co_id')
                ->distinct()
                ->join('student', 'student.dept_code', '=', 'plo.dept_code')
                ->join('co', 'co.plo_id', '=', 'plo.plo_id')
                ->join('question_bank', 'question_bank.co_id', '=', 'co.co_id')
                ->where([['student.student_id', $lookUp], ['plo.plo_id', '=', '125']])
                ->get();


            $plo5Tot = DB::table('question_bank')
                ->whereIn('co_id', $cos5->pluck('co_id')->toArray())
                ->sum('marks');

            $plo5Q = DB::table('question_bank')
                ->whereIn('co_id', $cos5->pluck('co_id')->toArray())
                ->select('question_id');

            $plo5Obt = DB::table('answer')
                ->whereIn('question_id', $plo5Q->pluck('question_id')->toArray())
                ->sum('marks_obtained');

            if (empty($plo5Tot)) {
                $plo5Percent = 0;
            } else {
                $plo5Percent = ($plo5Obt / $plo5Tot) * 100;
            }


            ////////////////
            $cos6 = DB::table('plo')
                ->select('question_bank.co_id')
                ->distinct()
                ->join('student', 'student.dept_code', '=', 'plo.dept_code')
                ->join('co', 'co.plo_id', '=', 'plo.plo_id')
                ->join('question_bank', 'question_bank.co_id', '=', 'co.co_id')
                ->where([['student.student_id', $lookUp], ['plo.plo_id', '=', '126']])
                ->get();


            $plo6Tot = DB::table('question_bank')
                ->whereIn('co_id', $cos6->pluck('co_id')->toArray())
                ->sum('marks');

            $plo6Q = DB::table('question_bank')
                ->whereIn('co_id', $cos6->pluck('co_id')->toArray())
                ->select('question_id');

            $plo6Obt = DB::table('answer')
                ->whereIn('question_id', $plo6Q->pluck('question_id')->toArray())
                ->sum('marks_obtained');

            if (empty($plo6Tot)) {
                $plo6Percent = 0;
            } else {
                $plo6Percent = ($plo6Obt / $plo6Tot) * 100;
            }


            ////////////////
            $cos7 = DB::table('plo')
                ->select('question_bank.co_id')
                ->distinct()
                ->join('student', 'student.dept_code', '=', 'plo.dept_code')
                ->join('co', 'co.plo_id', '=', 'plo.plo_id')
                ->join('question_bank', 'question_bank.co_id', '=', 'co.co_id')
                ->where([['student.student_id', $lookUp], ['plo.plo_id', '=', '127']])
                ->get();


            $plo7Tot = DB::table('question_bank')
                ->whereIn('co_id', $cos7->pluck('co_id')->toArray())
                ->sum('marks');

            $plo7Q = DB::table('question_bank')
                ->whereIn('co_id', $cos7->pluck('co_id')->toArray())
                ->select('question_id');

            $plo7Obt = DB::table('answer')
                ->whereIn('question_id', $plo7Q->pluck('question_id')->toArray())
                ->sum('marks_obtained');

            if (empty($plo7Tot)) {
                $plo7Percent = 0;
            } else {
                $plo7Percent = ($plo7Obt / $plo7Tot) * 100;
            }


            ////////////////
            $cos8 = DB::table('plo')
                ->select('question_bank.co_id')
                ->distinct()
                ->join('student', 'student.dept_code', '=', 'plo.dept_code')
                ->join('co', 'co.plo_id', '=', 'plo.plo_id')
                ->join('question_bank', 'question_bank.co_id', '=', 'co.co_id')
                ->where([['student.student_id', $lookUp], ['plo.plo_id', '=', '128']])
                ->get();


            $plo8Tot = DB::table('question_bank')
                ->whereIn('co_id', $cos8->pluck('co_id')->toArray())
                ->sum('marks');

            $plo8Q = DB::table('question_bank')
                ->whereIn('co_id', $cos8->pluck('co_id')->toArray())
                ->select('question_id');

            $plo8Obt = DB::table('answer')
                ->whereIn('question_id', $plo8Q->pluck('question_id')->toArray())
                ->sum('marks_obtained');

            if (empty($plo8Tot)) {
                $plo8Percent = 0;
            } else {
                $plo8Percent = ($plo8Obt / $plo8Tot) * 100;
            }


            //////////////
            $cos9 = DB::table('plo')
                ->select('question_bank.co_id')
                ->distinct()
                ->join('student', 'student.dept_code', '=', 'plo.dept_code')
                ->join('co', 'co.plo_id', '=', 'plo.plo_id')
                ->join('question_bank', 'question_bank.co_id', '=', 'co.co_id')
                ->where([['student.student_id', $lookUp], ['plo.plo_id', '=', '129']])
                ->get();


            $plo9Tot = DB::table('question_bank')
                ->whereIn('co_id', $cos9->pluck('co_id')->toArray())
                ->sum('marks');

            $plo9Q = DB::table('question_bank')
                ->whereIn('co_id', $cos9->pluck('co_id')->toArray())
                ->select('question_id');

            $plo9Obt = DB::table('answer')
                ->whereIn('question_id', $plo9Q->pluck('question_id')->toArray())
                ->sum('marks_obtained');

            if (empty($plo9Tot)) {
                $plo9Percent = 0;
            } else {
                $plo9Percent = ($plo9Obt / $plo9Tot) * 100;
            }


            ////////////////
            $cos10 = DB::table('plo')
                ->select('question_bank.co_id')
                ->distinct()
                ->join('student', 'student.dept_code', '=', 'plo.dept_code')
                ->join('co', 'co.plo_id', '=', 'plo.plo_id')
                ->join('question_bank', 'question_bank.co_id', '=', 'co.co_id')
                ->where([['student.student_id', $lookUp], ['plo.plo_id', '=', '130']])
                ->get();


            $plo10Tot = DB::table('question_bank')
                ->whereIn('co_id', $cos10->pluck('co_id')->toArray())
                ->sum('marks');

            $plo10Q = DB::table('question_bank')
                ->whereIn('co_id', $cos10->pluck('co_id')->toArray())
                ->select('question_id');

            $plo10Obt = DB::table('answer')
                ->whereIn('question_id', $plo10Q->pluck('question_id')->toArray())
                ->sum('marks_obtained');

            if (empty($plo10Tot)) {
                $plo10Percent = 0;
            } else {
                $plo10Percent = ($plo10Obt / $plo10Tot) * 100;
            }


            ////////////////
            $cos11 = DB::table('plo')
                ->select('question_bank.co_id')
                ->distinct()
                ->join('student', 'student.dept_code', '=', 'plo.dept_code')
                ->join('co', 'co.plo_id', '=', 'plo.plo_id')
                ->join('question_bank', 'question_bank.co_id', '=', 'co.co_id')
                ->where([['student.student_id', $lookUp], ['plo.plo_id', '=', '131']])
                ->get();


            $plo11Tot = DB::table('question_bank')
                ->whereIn('co_id', $cos11->pluck('co_id')->toArray())
                ->sum('marks');

            $plo11Q = DB::table('question_bank')
                ->whereIn('co_id', $cos11->pluck('co_id')->toArray())
                ->select('question_id');

            $plo11Obt = DB::table('answer')
                ->whereIn('question_id', $plo11Q->pluck('question_id')->toArray())
                ->sum('marks_obtained');

            if (empty($plo11Tot)) {
                $plo11Percent = 0;
            } else {
                $plo11Percent = ($plo11Obt / $plo11Tot) * 100;
            }


            ////////////////
            $cos12 = DB::table('plo')
                ->select('question_bank.co_id')
                ->distinct()
                ->join('student', 'student.dept_code', '=', 'plo.dept_code')
                ->join('co', 'co.plo_id', '=', 'plo.plo_id')
                ->join('question_bank', 'question_bank.co_id', '=', 'co.co_id')
                ->where([['student.student_id', $lookUp], ['plo.plo_id', '=', '132']])
                ->get();


            $plo12Tot = DB::table('question_bank')
                ->whereIn('co_id', $cos12->pluck('co_id')->toArray())
                ->sum('marks');

            $plo12Q = DB::table('question_bank')
                ->whereIn('co_id', $cos12->pluck('co_id')->toArray())
                ->select('question_id');

            $plo12Obt = DB::table('answer')
                ->whereIn('question_id', $plo12Q->pluck('question_id')->toArray())
                ->sum('marks_obtained');

            if (empty($plo12Tot)) {
                $plo12Percent = 0;
            } else {
                $plo12Percent = ($plo12Obt / $plo12Tot) * 100;
            }


            ////////////////
            $cos13 = DB::table('plo')
                ->select('question_bank.co_id')
                ->distinct()
                ->join('student', 'student.dept_code', '=', 'plo.dept_code')
                ->join('co', 'co.plo_id', '=', 'plo.plo_id')
                ->join('question_bank', 'question_bank.co_id', '=', 'co.co_id')
                ->where([['student.student_id', $lookUp], ['plo.plo_id', '=', '132']])
                ->get();


            $plo13Tot = DB::table('question_bank')
                ->whereIn('co_id', $cos13->pluck('co_id')->toArray())
                ->sum('marks');

            $plo13Q = DB::table('question_bank')
                ->whereIn('co_id', $cos13->pluck('co_id')->toArray())
                ->select('question_id');

            $plo13Obt = DB::table('answer')
                ->whereIn('question_id', $plo13Q->pluck('question_id')->toArray())
                ->sum('marks_obtained');

            if (empty($plo13Tot)) {
                $plo13Percent = 0;
            } else {
                $plo13Percent = ($plo13Obt / $plo13Tot) * 100;
            }


            //PLO achievement views///////////////////////


//        return view('PloViewbarchart', compact('plo1Percent'));
            return view('studentShow', compact('duo','plo1Percent', 'plo2Percent', 'plo3Percent', 'plo4Percent', 'plo5Percent', 'plo6Percent', 'plo7Percent', 'plo8Percent', 'plo9Percent', 'plo10Percent', 'plo11Percent', 'plo12Percent', 'plo13Percent','lookUp'));


//            $cos = DB::table('plo')
//                ->select('question_bank.co_id')
//                ->distinct()
//                ->join('student', 'student.dept_code', '=', 'plo.dept_code')
//                ->join('co', 'co.plo_id', '=', 'plo.plo_id')
//                ->join('question_bank', 'question_bank.co_id', '=', 'co.co_id')
//
//                ->where([['student.student_id', '=', '1416455'], ['plo.plo_id', '=', '121']])
//                ->get();
//
//            $plo1Tot = DB::table('question_bank')
//                ->whereIn('co_id', $cos->pluck('co_id')->toArray())
//                ->sum('marks');





//            $abc = DB::table('plo')
//                ->select('plo_track.student_id','plo_track.course_code','plo.plo_number','plo_track.isAchieved')  //all columns we want to show
//                ->join('plo_track','plo_track.plo_id','=','plo.plo_id')
//                ->Join('answer','answer.student_id', '=','plo_track.student_id')
//                ->where('answer.student_id', $lookUp)
//                ->sum('marks_obtained'); //table and conditional value


//            return view('studentShow', ["answer" => $abc]);// ekhane normally variable value ta kon table e ashtese sheta bola hocche
//            return view('studentShow', compact('abc','duo' ));//compact use kore kivabe kora jay shei practice, multiple variable






        }
        // return $request;
    }
    //------------Student show er code
    //            return view("studentShow", ["student" => $performance]);

//            $isAch = DB::table('answer')
//                ->select('plo_track.student_id','plo_track.course_code','plo.plo_number','plo_track.isAchieved')  //all columns we want to show
//                ->join('plo_track','plo_track.plo_id','=','plo.plo_id') //table and conditional value
//                //->where(['something' => 'something', 'otherThing' => 'otherThing'])
//                ->get();

//            $ab = DB::table('question_bank')
//                ->select('answer.student_id','question_bank.question_number','question_bank.exam_type','question_bank.marks','answer.marks_obtained')  //all columns we want to show
//                ->join('answer','answer.question_id','=','question_bank.question_id')
//                ->where('student_id', $lookUp)
//                ->sum('question_bank.marks'); //table and conditional value

//            $abc = DB::table('question_bank')
//                ->select('answer.student_id','question_bank.question_number','question_bank.exam_type','question_bank.marks','answer.marks_obtained')  //all columns we want to show
//                ->join('answer','answer.question_id','=','question_bank.question_id')
//                ->where('student_id', $lookUp)
//                ->get();



//            $abc = DB::table('plo')
//                ->select('plo_track.student_id','plo_track.course_code','plo.plo_number','plo_track.isAchieved')  //all columns we want to show
//                ->join('plo_track','plo_track.plo_id','=','plo.plo_id')
//                ->where('student_id', $lookUp)
//                ->get(); //table and conditional value
//
//            return view('studentShow', ["plo" => $abc]);

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */

}
