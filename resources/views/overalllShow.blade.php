@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Overall Show</div>

                    <div class="card-body">

                        {{ __('# of Courses:') }} {{ $noOfCourses }}
                        <br>
                        {{ __('Avg PLO Map: ') }} {{ $avgPloMap/$avgPloMap1 }}
                        <br>
                        {{ __('----------------------------------') }}
                        <br>
                        {{ __('# of Students: ') }} {{$noOfStudents}}
                        <br>
                        {{ __('Avg achieved PLO: ') }} {{$avgPloAchieve1/$avgPloAchieve2}}
                        <br>
                        {{ __('----------------------------------') }}
                        <br>
                        {{ __('# of Faculty: ') }} {{$noOfFaculty}}
                        <br>
                        {{ __('Practicing Semesters: ') }} {{$pracSem1/$pracSem2}}
                        <br>
                        {{ __('----------------------------------') }}
                        <br>
                        {{ __('# of PLO: ') }} {{$noOfPlo}}
                        <br>
                        {{ __('Achieved so far: ') }} {{$achievedSoFar}}
                        <br><br>{{ __('----------------------------------') }}<br>
{{--                        {{ __('PLO1: ') }}--}}
{{--                        --}}{{--                        {{$plo1Tot}}--}}

{{--                        --}}{{--                        {{$cos->pluck('co_id')->implode(',')}}--}}
{{--                        <br>--}}
{{--                        {{ __('PLO2: ') }}--}}
{{--                        --}}{{--                        {{$plo1Obt}}--}}
{{--                        --}}{{--                        {{$plo1Percent}}--}}
{{--                        <br>--}}
{{--                        {{ __('PLO3: ') }} {{$plo1Percent}} <br> {{$plo2Percent}} <br> {{$plo3Percent}} <br> {{$plo4Percent}} <br> {{$plo5Percent}} <br> {{$plo6Percent}} <br> {{$plo7Percent}} <br> {{$plo8Percent}}<br>{{$plo9Percent}}<br> {{$plo10Percent}}<br> {{$plo11Percent}}<br> {{$plo12Percent}}<br> {{$plo13Percent}}--}}
{{--    --}}{{----}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
