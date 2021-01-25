@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                            <br> <a href="{{route("overall.showAll")}}">Show overall data</a>


                        <br>
                        <br>

                        <form class="form-inline"  method="post" action="{{ route('student.show') }}">
                            @csrf
                            <div> Tabular view for Student-wise PLO Achievement</div>
                            <div class="form-group mx-sm-3 mb-2">
                                <input type="text" name="student_lookup" class="form-control" id="inputPassword2" placeholder="eg: 123456">
                            </div>
                            <button type="submit" class="btn btn-primary mb-2">Look Up</button>
                        </form>

                            <br>
                            <form class="form-inline"  method="post" action="{{ route('plo_track.barchart') }}">
                                @csrf
                                <div> Enter Student ID for PLO graph</div>
                                <div class="form-group mx-sm-3 mb-2">
                                    <input type="text" name="student_lookup" class="form-control" id="inputPassword2" placeholder="eg: 123456">
                                </div>
                                <button type="submit" class="btn btn-primary mb-2">Look Up</button>
                            </form>
                            <br>
                            <form class="form-inline"  method="post" action="{{ route('course.barchart') }}">
                                @csrf
                                <div> Enter Course ID for PLO graph</div>
                                <div class="form-group mx-sm-3 mb-2">
                                    <input type="text" name="student_lookup" class="form-control" id="inputPassword2" placeholder="eg: 123456">
                                </div>
                                <button type="submit" class="btn btn-primary mb-2">Look Up</button>
                            </form>
                        <br>
                        <br>                        <a class="btn btn-primary " href="{{ route('plo_track.barchart') }}" role="button">PLO Achievement</a>
                        <br>
                        <br>                        <a class="btn btn-primary " href="{{ route('course.barchart') }}" role="button">Course-wise Search</a>

                        <br>
                        <br>
{{--                        <a href="{{route("create.createCO")}}">Create CO map</a>--}}
                        <br>
                        <br>
                        <a href="{{route("performance.allShow")}}">Show all performances</a>
{{--                        <br>                        <a href="{{route("student.barchart")}}">Show Barchart</a>--}}
{{--                        <br>                        <a href="{{route("performance.allShow")}}">Show Graphical representation</a>--}}
{{--                        <br>                        <a href="{{route("performance.allShow")}}">Show Another representation</a>--}}
{{--                        <br>                        <a href="{{route("performance.allShow")}}">Show Another representation</a>--}}
{{--                        <br>                        <a href="{{route("performance.create")}}">Enter here for new Performance</a>--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
