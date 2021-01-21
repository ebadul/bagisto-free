@extends('admin::layouts.content')

@section('page_title')
    {{ __('career_lang::app.career.view_title') }}
@stop

<style>
    table{
        margin-top: 20px;
        width:100%;
        border-collapse:collapse;
        border:1px solid #00F;
        font-size:13px;
    }

    table tr{
        padding: 10px;

    }

    table tr th{
        padding: 10px;
        border: 1px solid #e9e9e9;
        text-align: left;
        width: 15%; 
    }

    table tr td{
        padding: 10px;
        border: 1px solid #e9e9e9;
    }
</style>

@section('content')

    <div class="content">
        <div class="page-header" style="border-bottom: 1px solid #e9e9e9">
            <div class="page-title">
                <h1>{{ __('career_lang::app.career.view_title') }} of "{{ $career->position}}"</h1>

                <i class="icon angle-left-icon back-link" onclick="history.length > 1 ? history.go(-1) : window.location = '{{ url('/admin/dashboard') }}';"></i>

            </div>
        </div>

        <div class="page-content">

                <table class="table">
                    <tbody>
                        <tr>
                            <th>Position</th>
                            <td style="width: 5px">:</td>
                            <td>{{$career->position}}</td>
                        </tr>
                        <tr>
                            <th>Vacancy</th>
                            <td>:</td>
                            <td>{{$career->vacancy}}</td>
                        </tr>
                        <tr>
                            <th>Responsibility</th>
                            <td>:</td>
                            <td>{!!$career->responsibility!!}</td>
                        </tr>


                        <tr>
                            <th>Employment Status</th>
                            <td>:</td>
                            <td>{{$career->employment_status}}</td>
                        </tr>
                        <tr>
                            <th>Skill Type</th>
                            <td>:</td>
                            <td>{{$career->skill_type}}</td>
                        </tr>
                        <tr>
                            <th>Educational Requirement</th>
                            <td>:</td>
                            <td>{!!$career->educational_requirement!!}</td>
                        </tr>
                        <tr>
                            <th>Aditional Requirement</th>
                            <td>:</td>
                            <td>{!!$career->aditional_requirement!!}</td>
                        </tr>
                        <tr>
                            <th>Job Location</th>
                            <td>:</td>
                            <td>{{$career->job_location}}</td>
                        </tr>
                        <tr>
                            <th>Salary</th>
                            <td>:</td>
                            <td>{{$career->salary}}</td>
                        </tr>
                        <tr>
                            <th>Compensation</th>
                            <td>:</td>
                            <td>{!! $career->compensation !!}</td>
                        </tr>
                        <tr>
                            <th>Deadline</th>
                            <td>:</td>
                            <td>{{$career->deadline}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>:</td>
                            <td>{{$career->email}}</td>
                        </tr>
                        <tr>
                            <th>Job Status</th>
                            <td>:</td>
                            <td>
                                @if ($career->job_status == 1)
                                    Published
                                @elseif($career->job_status == 0)
                                    Unpublished
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Deadline</th>
                            <td>:</td>
                            <td>{{date("F jS, Y", strtotime($career->deadline))}}</td>
                        </tr>
                        <tr>
                            <th>Job Posted</th>
                            <td>:</td>
                            <td>{{date("F jS, Y", strtotime($career->created_at))}}</td>
                        </tr>
                    </tbody>
                </table>

        </div>
    </div>


@stop