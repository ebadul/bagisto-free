@extends('category_type_view::layouts.master')

@section('page_title')
    {{ __('category_type_lang::app.category_type.title') }}
@stop


@section('content')
    <div class="content" style="height: 100%;">
        <div class="page-header">
            <div class="page-title">
                <h1><i class="icon angle-left-icon back-link" onclick="history.length > 1 ? history.go(-1) : window.location = '{{ url('/category/dashboard') }}';"></i>
                {{ __('category_type_lang::app.category_type.title') }}</h1>
            </div>

            <div class="page-action">
                <a href="{{ route('category.type.create') }}" class="btn btn-lg btn-primary">
                    {{ __('category_type_lang::app.category_type.add-type-btn-title') }}
                </a>
            </div>
        </div>

        {!! view_render_event('bagisto.category_type.category.list.before') !!}

        <div class="page-content">
            @inject('category_type', 'Itec\CategoryType\DataGrids\CategoryTypeDataGrid')
            {!! $category_type->render() !!}
        </div>

        {!! view_render_event('bagisto.category_type.category.list.after') !!}

    </div>
@stop