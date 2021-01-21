@extends('admin::layouts.content')

@section('page_title')
    {{ __('megamenu_lang::app.megamenu.title') }}
@stop

@section('content')

    <div class="content full-page dashboard">
        <div class="page-header">
            <div class="page-title">
                <h1>{{ __('megamenu_lang::app.megamenu.title') }}</h1>
            </div>
        </div>

        <div class="page-content">
            <h2>hello world from megamenu module index page</h2>
        </div>
    </div>

@stop

