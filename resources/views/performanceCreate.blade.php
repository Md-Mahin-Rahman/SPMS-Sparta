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
{{--                        <div class="form-group">
                            <label for="exampleInputEmail1">Department Code</label>
                            <input name="dept_code" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Course Code</label>
                            <input name="course_code" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">CO ID</label>
                            <input name="co_id" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">PLO ID</label>
                            <input name="plo_id" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">PLO number</label>
                            <input name="plo_number" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <br>
                        <br>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
