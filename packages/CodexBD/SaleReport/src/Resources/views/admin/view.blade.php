@extends('admin::layouts.content')

@section('page_title')
    {{ __('salereport_lang::app.salereport.view_title') }}
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
                <h1>{{ __('salereport_lang::app.salereport.view_title') }} of "{{ $salereport->position}}"</h1>

                <i class="icon angle-left-icon back-link" onclick="history.length > 1 ? history.go(-1) : window.location = '{{ url('/admin/dashboard') }}';"></i>

            </div>
        </div>

        <div class="page-content">

                <table class="table">
                    <tbody>
                        <tr>
                            <th>Position</th>
                            <td style="width: 5px">:</td>
                            <td>{{$salereport->position}}</td>
                        </tr>
                     
                        <tr>
                            <th>Responsibility</th>
                            <td>:</td>
                            <td>{!!$salereport->responsibility!!}</td>
                        </tr>

                        <tr>
                            <th>Deadline</th>
                            <td>:</td>
                            <td>{{$salereport->deadline}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>:</td>
                            <td>{{$salereport->email}}</td>
                        </tr>
                        <tr>
                            <th>Job Status</th>
                            <td>:</td>
                            <td>
                                @if ($salereport->job_status == 1)
                                    Published
                                @elseif($salereport->job_status == 0)
                                    Unpublished
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Deadline</th>
                            <td>:</td>
                            <td>{{date("F jS, Y", strtotime($salereport->deadline))}}</td>
                        </tr>
                        <tr>
                            <th>Job Posted</th>
                            <td>:</td>
                            <td>{{date("F jS, Y", strtotime($salereport->created_at))}}</td>
                        </tr>
                    </tbody>
                </table>

        </div>
    </div>


@stop