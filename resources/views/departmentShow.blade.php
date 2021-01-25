@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Student Show</div>

                <div class="card-body">
{{--                    {{ $abc }}--}}
{{--                                        uporer line ta kaaj kortese compact er ekta variable er value--}}
{{--                                        dekhanor jonno--}}
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
{{--                            <th scope="col">#</th>--}}
{{--                            <th scope="col">User Id</th>--}}
{{--                            <th scope="col">Course ID</th>--}}
{{--                            <th scope="col">Section</th>--}}
{{--                            <th scope="col">Semester</th>--}}
{{--                            <th scope="col">Mid CO1 Q1</th>--}}
{{--                            <th scope="col">#</th>--}}
{{--                            <th scope="col">Student ID</th>--}}
{{--                            <th scope="col">Dept Code</th>--}}
{{--                            <th scope="col">Name</th>--}}
{{--                            <th scope="col">Cgpa</th>--}}



{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        @foreach($student as $index => $var)--}}
{{--                            <tr>--}}
{{--                            <th scope="row">{{$index+1}}</th>--}}
{{--                            <td>{{$var->student_id}}</td>--}}
{{--                                <td>{{$var->dept_code}}</td>--}}
{{--                                <td>{{$var->name}}</td>--}}
{{--                                <td>{{$var->semester}}</td>--}}
{{--                                <td>{{$var->cgpa}}</td>--}}
{{--                                <td>{{$var->m_co1_q1}}</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <th scope="col">#</th>--}}
{{--                            <th scope="col">student id</th>--}}
{{--                            <th scope="col">Exam Type</th>--}}
{{--                            <th scope="col">question number</th>--}}
{{--                            <th scope="col">marks</th>--}}
{{--                            <th scope="col">marks obtained</th>--}}



{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        @foreach($question_bank as $index => $var)--}}
{{--                            <tr>--}}
{{--                                <th scope="row">{{$index+1}}</th>--}}
{{--                                <td>{{$var->student_id}}</td>--}}
{{--                                <td>{{$var->exam_type}}</td>--}}
{{--                                <td>{{$var->question_number}}</td>--}}
{{--                                <td>{{$var->marks}}</td>--}}
{{--                                <td>{{$var->marks_obtained}}</td>--}}

{{--                            </tr>--}}
{{--                        @endforeach--}}

{{--                        <tr>--}}
{{--                            <th scope="col">#</th>--}}
{{--                            <th scope="col">student id</th>--}}
{{--                            <th scope="col">course code</th>--}}
{{--                            <th scope="col">plo number</th>--}}
{{--                            <th scope="col">isAchieved</th>--}}



{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        @foreach($plo as $index => $var)--}}
{{--                            <tr>--}}
{{--                                <th scope="row">{{$index+1}}</th>--}}
{{--                                <td>{{$var->student_id}}</td>--}}
{{--                                <td>{{$var->course_code}}</td>--}}
{{--                                <td>{{$var->plo_number}}</td>--}}
{{--                                <td>{{$var->isAchieved}}</td>--}}

{{--                            </tr>--}}
{{--                        @endforeach--}}

                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">student id</th>
                            <th scope="col">course code</th>
                            <th scope="col">plo number</th>
                            <th scope="col">isAchieved</th>
                            <th scope="col">total mark</th>
                            <th scope="col">marks obtained</th>



                        </tr>
                        </thead>
                        <tbody>
                        @foreach($duo as $index => $var)
                            <tr>
                                <th scope="row">{{$index+1}}</th>
                                <td>{{$var->student_id}}</td>
                                <td>{{$var->course_code}}</td>
                                <td>{{$var->plo_number}}</td>
                                <td>{{$var->isAchieved}}</td>

                                <td>{{$abc}}</td>
                                <td>{{$var->marks_obtained}}</td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
