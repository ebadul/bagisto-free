@extends('admin::layouts.content')

@section('page_title')
    {{ __('feedback_lang::app.feedback.title') }}
@stop

@section('content')

    <div class="content full-page dashboard">
        <div class="page-header">
            <div class="page-title">
                <h1>{{ __('feedback_lang::app.feedback.title') }}</h1>
            </div>
        </div>

        <div class="page-content">
            <h2>hello world from feedback module index page</h2>
        </div>
    </div>


@stop

