@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">PLO Achievement Table </div>
                <br>
                <div class="card-header">Student ID: {{$lookUp}}</div>

                <div class="card-body">
{{--                    {{ $sum }}--}}
{{--                                        uporer line ta kaaj kortese compact er ekta variable er value--}}
{{--                                        dekhanor jonno--}}
                    <table class="table">
                        <thead class="thead-light">
                        <tr>


                        <tr>
                            <th scope="col">#</th>
{{--                            <th scope="col">student id</th>--}}
                            <th scope="col">course code</th>
                            <th scope="col">plo1</th>
                            <th scope="col">plo2</th>
                            <th scope="col">plo3</th>
                            <th scope="col">plo4</th>
                            <th scope="col">plo5</th>
                            <th scope="col">plo6</th>
                            <th scope="col">plo7</th>
                            <th scope="col">plo8</th>
                            <th scope="col">plo9</th>
                            <th scope="col">plo10</th>
                            <th scope="col">plo11</th>
                            <th scope="col">plo12</th>
                            <th scope="col">plo13</th>

{{--                            <th scope="col">plo number</th>--}}
{{--                            <th scope="col">isAchieved</th>--}}
{{--                            <th scope="col">total mark</th>--}}
{{--                            <th scope="col">marks obtained</th>--}}



                        </tr>
                        </thead>
                        <tbody>
                        @foreach($duo as $index => $var)
                            <tr>
                                <th scope="row">{{$index+1}}</th>
{{--                                <td>{{$var->student_id}}</td>--}}
                                <td>{{$var->course_code}}</td>
{{--                                <td>{{$var->plo_id}}</td>--}}
{{--                                <td>{{$var->isAchieved}}</td>--}}
{{--                                plo1Percent', 'plo2Percent', 'plo3Percent', 'plo4Percent', 'plo5Percent', 'plo6Percent', 'plo7Percent', 'plo8Percent', 'plo9Percent', 'plo10Percent', 'plo11Percent', 'plo12Percent', 'plo13Percent--}}
                                <td>{{$plo1Percent}}</td>
                                <td>{{$plo2Percent}}</td>
                                <td>{{$plo3Percent}}</td>
                                <td>{{$plo4Percent}}</td>
                                <td>{{$plo5Percent}}</td>
                                <td>{{$plo6Percent}}</td>
                                <td>{{$plo7Percent}}</td>
                                <td>{{$plo8Percent}}</td>
                                <td>{{$plo9Percent}}</td>
                                <td>{{$plo10Percent}}</td>
                                <td>{{$plo11Percent}}</td>
                                <td>{{$plo12Percent}}</td>
                                <td>{{$plo13Percent}}</td>
{{--                                <td>{{$var->marks_obtained}}</td>--}}

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
