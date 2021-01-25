@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> Performance Show</div>

                <div class="card-body">
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">User Id</th>
                            <th scope="col">Course ID</th>
                            <th scope="col">Section</th>
                            <th scope="col">Semester</th>
                            <th scope="col">Mid CO1 Q1</th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach($performances as $index => $var)
                            <tr>
                            <th scope="row">{{$index+1}}</th>
                            <td>{{$var->user_id}}</td>
                                <td>{{$var->course_id}}</td>
                                <td>{{$var->section}}</td>
                                <td>{{$var->semester}}</td>
                                <td>{{$var->m_co1_q1}}</td>
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
