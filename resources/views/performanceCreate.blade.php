@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Create New Performance</div>

                <div class="card-body">
                    <form method="post" action="{{ route('performance.store') }}">
                        @csrf
{{--                        <div class="form-group">--}}
{{--                            <label for="exampleInputEmail1">deptcode</label>--}}
{{--                            <input name="dept_code" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="exampleInputEmail1">dept naem</label>--}}
{{--                            <input name="dept_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <label for="exampleInputEmail1">Marks Obtained</label>--}}
{{--                            <input name="marks_obtained" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">--}}
{{--                        </div>--}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Question ID</label>
                            <input name="question_id" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">CO ID</label>
                            <input name="co_id" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Exam type</label>
                            <input name="exam_type" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Question Number</label>
                            <input name="question_number" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Marks</label>
                            <input name="marks" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

{{--                        <div class="form-group">--}}
{{--                            <label for="exampleInputEmail1">ploid</label>--}}
{{--                            <input name="plo_id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="exampleInputEmail1">plono</label>--}}
{{--                            <input name="plo_number" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="exampleInputEmail1">plonaem</label>--}}
{{--                            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">--}}
{{--                        </div>--}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">sectionid</label>
                            <input name="section_id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label for="exampleInputEmail1">coursecd</label>--}}
{{--                            <input name="course_code" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">--}}
{{--                        </div>--}}


                        <div class="form-group">
                            <label for="exampleInputEmail1">Answer ID</label>
                            <input name="answer_id" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label for="exampleInputEmail1">Section</label>--}}
{{--                            <input name="section" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="exampleInputEmail1">Semester</label>--}}
{{--                            <input name="semester" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">--}}
{{--                        </div>--}}

{{--                        <fieldset>--}}
{{--                            <legend>Mid Term</legend>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleInputEmail1">Co1 Q1</label>--}}
{{--                                <input name="m_co1_q1" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleInputEmail1">Co1 Q2</label>--}}
{{--                                <input name="m_co1_q2" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleInputEmail1">Co1 Q3</label>--}}
{{--                                <input name="m_co1_q3" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleInputEmail1">Co2 Q4</label>--}}
{{--                                <input name="m_co2_q4" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleInputEmail1">Co1 Q5</label>--}}
{{--                                <input name="m_co1_q5" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleInputEmail1">Co1 Q6</label>--}}
{{--                                <input name="m_co1_q6" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">--}}
{{--                            </div>--}}
{{--                        </fieldset>--}}
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <br>
                        <br>
                        <a class="btn btn-primary " href="{{ route('login') }}" role="button">Enter Plo CO information</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
