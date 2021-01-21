@extends('admin::layouts.content')

@section('page_title')
    {{ __('salereport_lang::app.salereport.title') }}
@stop

@section('content')

    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h1>{{ __('salereport_lang::app.salereport.title') }}</h1>
            </div>
            
            <div class="page-action">
                <a href="{{ route('admin.salereport.index') }}" class="btn btn-lg btn-primary">
                    {{ __('salereport_lang::app.salereport.menu-title') }}
                </a>
            </div>
        </div>

        <div class="page-content">
            <h2>Hello from index page</h2>
        </div>
    </div>


@stop
