@extends('category_type_view::layouts.master')

@section('page_title')
    {{ __('category_type_lang::app.category_type.title') }}
@stop

@section('content')
    <div class="content">

        <form method="POST" action="{{ route('category.type.store') }}" @submit.prevent="onSubmit" enctype="multipart/form-data">

            <div class="page-header">
                <div class="page-title">
                    <h1>
                        <i class="icon angle-left-icon back-link" onclick="history.length > 1 ? history.go(-1) : window.location = '{{ url('/type/category/dashboard') }}';"></i>

    					{{ __('category_type_lang::app.category_type.add-title') }}
                    </h1>
                </div>

                <div class="page-action">
                    <button type="submit" class="btn btn-lg btn-primary">
    					{{ __('category_type_lang::app.category_type.save-btn-title') }}
                    </button>
                </div>
            </div>

            <div class="page-content">
                <div class="form-container">
                    @csrf()

                    <!-- <input type="text" hidden name="is_verified" value="1"> -->

                    <accordian :title="'{{ __('category_type_lang::app.category_type.general') }}'" :active="true">
                        <div slot="body">
                            <div class="control-group" :class="[errors.has('code') ? 'has-error' : '']">
                                <label for="code" class="required">{{ __('category_type_lang::app.category_type.code') }}</label>
                                <input type="text" v-validate="'required'" class="control" id="code" name="code" data-vv-as="&quot;{{ __('category_type_lang::app.category_type.code') }}&quot;"/>
                                <span class="control-error" v-if="errors.has('code')">@{{ errors.first('code') }}</span>
                            </div>

                            <div class="control-group" :class="[errors.has('name') ? 'has-error' : '']">
                                <label for="name" class="required">{{ __('category_type_lang::app.category_type.name') }}</label>
                                <input type="text" v-validate="'required'" class="control" id="name" name="name" data-vv-as="&quot;{{ __('category_type_lang::app.category_type.name') }}&quot;"/>
                                <span class="control-error" v-if="errors.has('name')">@{{ errors.first('name') }}</span>
                            </div>

                            <div class="control-group" :class="[errors.has('status') ? 'has-error' : '']">
                                <label for="status" class="required">{{ __('category_type_lang::app.category_type.status') }}</label>
                                <select class="control" v-validate="'required'" id="status" name="status" data-vv-as="&quot;{{ __('category_type_lang::app.category_type.status') }}&quot;">
                                    <option value="1">
                                        {{ __('category_type_lang::app.category_type.status-yes') }}
                                    </option>
                                    <option value="0">
                                        {{ __('category_type_lang::app.category_type.status-no') }}
                                    </option>
                                </select>
                                <span class="control-error" v-if="errors.has('status')">@{{ errors.first('status') }}</span>
                            </div>
                        </div>
                    </accordian>


                </div>
            </div>

        </form>
    </div>
@stop