@extends('admin::layouts.content')

@section('page_title')
    {{ __('feedback_lang::app.feedback.title') }}
@stop

@section('content')

    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h1>{{ __('feedback_lang::app.feedback.title') }}</h1>
            </div>
            
            <div class="page-action">
                <a href="{{ route('admin.feedback.view') }}" class="btn btn-lg btn-primary">
                    {{ __('feedback_lang::app.feedback.add_title') }}
                </a>
            </div>
        </div>

        <div class="page-content">
            
            <h2>Hello world from feedback view page</h2>
            
        </div>
    </div>


@stop

