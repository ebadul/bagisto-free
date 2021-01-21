@extends('admin::layouts.content')

@section('page_title')
    {{ __('career_lang::app.career.title') }}
@stop

@section('content')

    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h1>{{ __('career_lang::app.career.title') }}</h1>
            </div>
            
            <div class="page-action">
                <a href="{{ route('admin.career.create') }}" class="btn btn-lg btn-primary">
                    {{ __('career_lang::app.career.add_title') }}
                </a>
            </div>
        </div>

        <div class="page-content">
            <h2>hello world</h2>
            @inject('profileGrid','Sellnoir\Profile\DataGrids\ProfileDataGrid')

            {!! $profileGrid->render() !!}
        </div>
    </div>


@stop

