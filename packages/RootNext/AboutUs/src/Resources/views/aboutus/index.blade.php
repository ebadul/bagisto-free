@extends('admin::layouts.content')

@section('page_title')
    {{ __('aboutus_lang::app.aboutus.title') }}
@stop

@section('content')

    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h1>{{ __('aboutus_lang::app.aboutus.title') }}</h1>
            </div>
            
            <div class="page-action">
                <a href="{{ route('admin.aboutus.index') }}" class="btn btn-lg btn-primary">
                    {{ __('aboutus_lang::app.aboutus.menu-title') }}
                </a>
            </div>
        </div>

        <div class="page-content">
            <h2>Hello from index page</h2>
        </div>
    </div>


@stop
