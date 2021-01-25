@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Create CO map</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('co.map.next') }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Number of CO</label>
                                <input name="total_co" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <button type="next" class="btn btn-primary">Next</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
