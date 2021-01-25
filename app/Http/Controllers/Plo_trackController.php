<?php

namespace App\Http\Controllers;

use App\Models\Plo_track;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Plo_trackController extends Controller
{
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function index()
//    {
//        //
//    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function barchart(Request $request)
    {

        if (empty($request->get('student_lookup'))) {
            return redirect()->back()->with('message', 'Please enter student ID');
        } else {
            //return $request;
            $lookUp = $request->get('student_lookup');

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
            return view('PloViewbarchart', compact('plo1Percent', 'plo2Percent', 'plo3Percent', 'plo4Percent', 'plo5Percent', 'plo6Percent', 'plo7Percent', 'plo8Percent', 'plo9Percent', 'plo10Percent', 'plo11Percent', 'plo12Percent', 'plo13Percent'));


        }



    }

}
